import sqlite3
import json
import sys
a=''
lst=[]
s=1
r=0
k=0
D = {}
db=sqlite3.connect('details')
cur=db.cursor()
name=""
cur.execute('SELECT trans from investor where id = ?',(str(sys.argv[1]),))
ab=cur.fetchone()
ab = ab[0].split(',')
for i in ab:
	a = ''
	cur.execute('SELECT id, cid, uid, amt, share, datee from transac where id = ?',(i,))
	data = cur.fetchone()
	for t in data:
		r+=1
		if r==6 and t == 'None':
			continue
		a+=str(t)
		a+='#'
	comp = str(data[1])
	share = float(data[4])
	cur.execute('SELECT profit from company where id = ?', (comp))
	prof = int(cur.fetchone()[0])
	ret = prof*share*0.01
	a+=str(ret)
	a+='#'
	D[k] = a
	k+=1
print (json.dumps(D))
sys.exit()
