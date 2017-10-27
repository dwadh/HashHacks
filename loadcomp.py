import sqlite3
import json
import sys
a=''
lst=[]
s=1
db=sqlite3.connect('details')
cur=db.cursor()
name=""
cur.execute('SELECT id, name, desc, req, left, trans, logo from company where id = ?',(str(sys.argv[1]),))
ab=cur.fetchall()

r=0
for i in ab:
   
	for t in i:
		r+=1
		if r==6 and t == 'None':
			continue
		a+=str(t)
		a+='#'

D={}
D[0]=a
print (json.dumps(D))
sys.exit()