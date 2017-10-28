 #!/usr/bin/env python -W ignore::DeprecationWarning
import numpy as np
import pandas as pd
from sklearn.preprocessing import LabelEncoder
from sklearn.preprocessing import StandardScaler
from sklearn import svm
import sys
import sqlite3

db = sqlite3.connect('details')
cur = db.cursor()
company = sys.argv[1]
desc = sys.argv[2]
reqfund = sys.argv[3]
currprofit = reqfund
noofcof = sys.argv[4]
noofadv = sys.argv[5]
tsize = sys.argv[6]
noorep= sys.argv[7]
avgsize = sys.argv[8]
base = sys.argv[9]
focus = sys.argv[10]
mob = sys.argv[11]
reach = sys.argv[12]
workcomp = sys.argv[13]
foconsdata = sys.argv[14]
crowdfund = sys.argv[15]
mlbusiness = sys.argv[16]
logo = ''
succ = 1
conf = 1
trans = ''

cur.execute('''INSERT INTO company (name,desc,req,left,\
	trans,profit,logo,no_coof,no_adv,sen_lead,\
	rep_inv,avg_cpast,pors,porpv,corp,logp,top_comp,\
	cust_data,crowd,ml,succ,conf) VALUES (?,?,?,?,?,\
	?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)''', (company,desc,reqfund,reqfund\
		,trans,logo,currprofit,noofcof,noofadv,tsize,noorep,avgsize,base,focus\
		,mob,reach,workcomp,foconsdata,crowdfund,mlbusiness,succ,conf,))


db.commit()











data = pd.read_csv("final_clean_data.csv")
data.head()

le = LabelEncoder()

del data['Unnamed: 0']

data['Average.size.of.companies.worked.for.in.the.past'] = le.fit_transform(data['Average.size.of.companies.worked.for.in.the.past'])
data['Product.or.service.company.'] = le.fit_transform(data['Product.or.service.company.'])
data['Focus.on.private.or.public.data.'] = le.fit_transform(data['Focus.on.private.or.public.data.'])
data['Cloud.or.platform.based.serive.product.'] = le.fit_transform(data['Cloud.or.platform.based.serive.product.'])
data['Local.or.global.player'] = le.fit_transform(data['Local.or.global.player'])
data['Worked.in.top.companies'] = le.fit_transform(data['Worked.in.top.companies'])
data['Focus.on.consumer.data.'] = le.fit_transform(data['Focus.on.consumer.data.'])
data['Crowdfunding.based.business'] = le.fit_transform(data['Crowdfunding.based.business'])
data['Machine.Learning.based.business'] = le.fit_transform(data['Machine.Learning.based.business'])
data['Dependent.Company.Status'] = le.fit_transform(data['Dependent.Company.Status'])

del data['Company_Name']

target = data['Dependent.Company.Status']
del data['Dependent.Company.Status']
data.head()
del data['Focus.functions.of.company']
data.head()
from sklearn import datasets,svm , metrics,cross_validation
clf = svm.SVC(kernel ='linear',C=5)     #SVC is cupport vector classifier
X_train,X_test, Y_train,Y_test = cross_validation.train_test_split(data,target,test_size = 0.2)
X_train.shape
clf.fit(X_train,Y_train)
pred = [[noofcof, noofadv, noorep, tsize, noorep, avgsize, base, focus, mob, reach, workcomp, foconsdata, crowdfund,
mlbusiness]]
prediction = clf.predict(pred)
print(clf.score(X_test,Y_test))