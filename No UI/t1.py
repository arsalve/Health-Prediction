
import pandas as pd
import numpy as np
import MySQLdb
from sklearn.model_selection import train_test_split
from sklearn.tree import DecisionTreeClassifier
from sklearn.linear_model import LogisticRegression
from sklearn.ensemble import RandomForestClassifier
from sklearn.neighbors import KNeighborsClassifier
from sklearn.naive_bayes import GaussianNB, BernoulliNB, MultinomialNB
from sklearn.metrics import accuracy_score
import sys
mysql_cn= MySQLdb.connect(host='localhost', port=3306,user='demo', passwd='123',db='healthanalysis')
df = pd.read_sql('select * from heattrain', con=mysql_cn)    
dar = pd.read_sql('select * from priid where PatientID=%s' %(sys.argv[1]), con=mysql_cn)  
id =(sys.argv[1])
#da = dar.drop('sr',axis=1)  
da = dar.drop('PatientID',axis=1)  
X = df.drop('Outcome',axis=1)
X = X.drop('PatientID',axis=1)
y = df['Outcome']
X_train, X_test, y_train, y_test = train_test_split(X, y, test_size=0.30)
#Logestic Regration
logmodel = LogisticRegression()
logmodel.fit(X,y)
t1 = logmodel.predict(da)
if t1==1: 
     t1 = 1
else:
     t1=2 
#print (t1)
t = logmodel.predict(X_test)
acc=accuracy_score(y_test,t)
#print("accuracy  of logistic regration is")
#print(acc)

#RandomForestClassifier
rfc = RandomForestClassifier(n_estimators=100)
rfc.fit(X, y)
t2= rfc.predict(da)
if t2==1: 
     t2 = 1
else:
     t2=2
#print (t2)
t = rfc.predict(X_test)
acc=accuracy_score(y_test,t)
#print( 'accuracy of random forest  is')
#print(acc)
#KNeighborsClassifier
knn = KNeighborsClassifier(n_neighbors=1)
knn.fit(X_train,y_train)
t3 = knn.predict(da)
if t3==1: 
     t3 = 1
else:
     t3=2
#print (t3)
t= knn.predict(X_test)
acc=accuracy_score(y_test,t)
#print( 'accuracy of KNN is')
#print(acc)
gnb = GaussianNB()
gnb.fit(X,y)
t4 = gnb.predict(da)
if t4==1: 
     t4 = 1
else:
     t4=2 
#calculating result
ma=[t1,t2,t3,t4]
tre=pd.Series(data=ma).mean()
print(tre)
val = {'Pid':id,'ta':t1,'tb':t2,'tc':t3,'td':t4,'tr':tre}
mycursor = mysql_cn.cursor()
sql="Delete from predi where PatientID = %(Pid)s"
mycursor.execute(sql,val)
sql = "INSERT INTO predi (PatientID,t1,t2,t3,t4,result) VALUES (%(Pid)s,%(ta)s,%(tb)s,%(tc)s,%(td)s,%(tr)s)"
mycursor.execute(sql,val)
mysql_cn.commit()
mysql_cn.close()
#print(val)
#print('Actual result is')
#print (da)
#print (ma)
#print (tre)


