# Health Prediction Analysis using Data Mining

As we know that health care industry is completely based on assumptions,
which after get tested and verified via various tests and patient have to be
depend on the doctors knowledge on that topic . so we made a system that
uses data mining techniques to predict the health of a person based on various
medical test results. so we can predict the health of that person based on
that analysis performed by the system.The system currently design only for
heart issues, for that we had used Statlog (Heart) Data Set from UCI Machine Learning Repository it includes attributes like age, sex, chest pain type, choles-terol, sugar, outcomes,etc.for training the system. we only need to passed few

general inputs in order to generate the prediction and the prediction results
from all algorithms are they merged together by calculating there mean value
that value shows the actual outcome of the prediction process which entirely
works in background .

# Basic Modules
We had followed the divide and conquer theory, so we divided the overall problem into 3
parts and develop each part or module separately. When all modules are ready, we should
integrate all the modules into one system.we briefly described all the modules and the
functionality of these modules bellow.

• User Authentication Module
This module will provide functionality of user authentication ,creation manages the
credentials for user to authenticate.

• Data Manipulation Module
This module will provide functionality of creation ,deletion,and modification of patient data.this module will also perform the data pre-processing since data provided
by user may contain some missing field and noisy data which needs to be pre processed.

• Prediction And Results Module
This module will Provide the prediction functionality for the system ,the prediction
is done by using various data mining techniques.the prediction results where also
handled by this module.

# Data Design
On this section we will study about the data set and structure of data which we are
obtaining and using for various orations.in which the training set is the database which is
use for training.

# Training Dataset
for training the system we had used the the data set present on UCI Machine Learning
repository which is the repository which provides datasets for various purposes for free.from
that we had used setLog heart dataset.which contains 13 attributes they are:
Attribute Information:

1. age

2. sex

3. chest pain type (4 values)

4. resting blood pressure

5. serum cholestoral in mg/dl

6. fasting blood sugar > 120 mg/dl

7. resting electrocardiographic results (values 0,1,2)

8. maximum heart rate achieved

9. exercise induced angina

10. oldpeak = ST depression induced by exercise relative to rest

11. the slope of the peak exercise ST segment

12. number of major vessels (0-3) colored by flourosopy

13. thal: 3 = normal; 6 = fixed defect; 7 = reversable defect

# Attributes types

Real: 1,4,5,8,10,12

Ordered:11,

Binary: 2,6,9

Nominal:7,3,13

# Variable to be predicted
Absence (1) or presence (2) of heart disease

where the rows represent the true values and the columns the predicted.
No missing values.

270 observations

# Health Analysis Database
This database holds all the data in relational model i.e in tabular format.

# EHR
EHR is the table which is used for storing health records, which contains attributes they
are

# Name Type Description
Sr. number Serial No.,PatientId

Createdby varchar Creator of Record

Createdat varchar Tme of creation

Fname varchar Full Name

Uid number Aadhar no.

Addre varchar Address

Phone number Contact no.

Dob varchar Date of birth

Mt varchar Marital Status

Birpla varchar Birth place

Gender varchar Gender of patient

Emrname varchar Emergency contact name

Emrrel varchar Relation with Emr

Emradd varchar Address of Emr

Emrphone number Contact info of Emr

Insno number Insurance no

Exppodate varchar Expiry date of policy

Popro varchar Policy Provider

Insphone number contact no of policy provider

BG varchar Blood Group

Alg varchar Alergies

Did number Doctot Id

Dname varchar Doctor name

Dqal varchar Qualification of doctor

Dphone number Contact no of doctor

Dadd varchar Doctor Address

Hei number Height

Wei number Weight

# System Design 

# Doctor
this table contains all the information required for login to the system for a Doctor which
contains:-

Name Type Description

Username varchar Username foe accessing system

Email varchar Email Address

Password varchar Password hash

did number Doctor Id

dName varchar Doctor name

dadd varchar Doctor address

dPhone number doctor contact

dQal varchar Doctor Qualification


# Users
this table contains all the information required for login to the system for a normal
user.,contains:-

Name Type Description

Sr number Serial No., Patient Id

Username varchar User name for accessing system

Email varchar Email Address

Password varchar password hash

# Pridi

this table contains prediction results generated by our system
