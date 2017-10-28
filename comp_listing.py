import sqlite3
import json
import sys
a=''
lst=[]
s=0
db=sqlite3.connect('details')
cur=db.cursor()
name=""
cur.execute('SELECT * FROM company')
data = cur.fetchall()
for i in data:
	for j in i[:2]:

		a+=str(j)
		a+='#'
	lst.append(a)
	a=''
	D={}
	for i in lst:
		D[s]=i
		s+=1
print (json.dumps(D))
sys.exit()
