import pandas as pd
import numpy as np
import MySQLdb
from sklearn.model_selection import train_test_split
from sklearn.tree import DecisionTreeClassifier
from sklearn.linear_model import LogisticRegression
from sklearn.ensemble import RandomForestClassifier
from sklearn.neighbors import KNeighborsClassifier
from sklearn.metrics import accuracy_score
import sys
mysql_cn= MySQLdb.connect(host='localhost', port=3306,user='demo', passwd='123',db='healthanalysis')
df = pd.read_sql('select * from heattrain', con=mysql_cn)    
sys.argv[1]=10
dar = pd.read_sql('select * from heattrain where PatientID=%s' %(sys.argv[1]), con=mysql_cn)  
da = dar.drop('Outcome',axis=1)  
X_train, X_test, y_train, y_test = train_test_split(df.drop('Outcome',axis=1),df['Outcome'], test_size=0.30, random_state=101) 
#Logestic Regration
logmodel = LogisticRegression()
logmodel.fit(X_train,y_train)
t1 = logmodel.predict(da)
if t1==1: 
     t1 = 1
else:
     t1=2 
print (t1)
t = logmodel.predict(X_test)
print("--------------confusion matrix--------------------------")
print(classification_report(y_test,t))

acc=accuracy_score(y_test,t)
print("accuracy  of logistic regration is")
print(acc)

#RandomForestClassifier
rfc = RandomForestClassifier(n_estimators=100)
rfc.fit(X_train, y_train)
t2= rfc.predict(da)
if t2==1: 
     t2 = 1
else:
     t2=2
print (t2)
t = rfc.predict(X_test)
print("--------------confusion matrix--------------------------")
print(classification_report(y_test,t))

acc=accuracy_score(y_test,t)
print( 'accuracy of random forest  is')
print(acc)
#KNeighborsClassifier
knn = KNeighborsClassifier(n_neighbors=1)
knn.fit(X_train,y_train)
t3 = knn.predict(da)
if t3==1: 
     t3 = 1
else:
     t3=2
print (t3)
t= knn.predict(X_test)
print("--------------confusion matrix--------------------------")
print(classification_report(y_test,t))

acc=accuracy_score(y_test,t)
print( 'accuracy of KNN is')
print(acc)
#naive bayes
gnb = GaussianNB()
gnb.fit(Xtr,Ytr)
t4 = gnb.predict(da)
if t4==1: 
     t4 = 1
else:
     t4=2 
print (t4)
print( 'accuracy of naive bayes is')
t = gnb.predict(X_test)
print("--------------confusion matrix--------------------------")
print(classification_report(y_test,t))
acc=accuracy_score(y_test,t)
print (acc)
#calculating result
ma=[t1,t2,t3,t4]
tre=pd.Series(data=ma).mean()
print(tre)
val = {'ta':t1,'tb':t2,'tc':t3,'td':t4,'tr':tre}
mycursor = mysql_cn.cursor()
sql = "INSERT INTO predi (t1,t2,t3,t4,result) VALUES (%(ta)s, %(tb)s, %(tc)s,%(td)s,%(tr)s)"
mycursor.execute(sql, val)
mysql_cn.commit()
mysql_cn.close()
print("------------------Result---------------------------")
print(val)
#print('Actual result is')
#print (dar)
#print (d3)