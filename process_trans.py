import sqlite3
import json
import sys
import datetime
now = datetime.datetime.now()
datee = now.strftime("%Y-%m-%d %H:%M").split()[0]
a=''
rev_list=[]
s=1
db=sqlite3.connect('details')
cur=db.cursor()
company = int(sys.argv[1])
investor = int(sys.argv[2])
amount = int(sys.argv[3])
cur.execute('SELECT req, left FROM company WHERE id = ?', (company,))
ammt = cur.fetchone()
req = float(ammt[0])
left = float(ammt[1])
share = int(amount)/req
new_amt = left - amount
cur.execute('SELECT balance FROM investor WHERE id = ?', (investor,))
balance = int(cur.fetchone()[0])
new_balance = balance - amount
cur.execute('''INSERT INTO transac(cid, uid, amt, share, datee) VALUES (?,?,?,?,?)''', (company, investor, amount, share, datee))
cur.execute('''UPDATE company SET left = ? WHERE id = ?''', (new_amt, company,))
cur.execute('''UPDATE investor SET balance = ? WHERE id = ?''', (new_balance, investor,))
db.commit()

'''





name=""
cur.execute('SELECT id, cid, rid, uid, expert, text from reviews where cid = ?',(str(sys.argv[1]),))
ab=cur.fetchall()
print (ab)
r=0
s=0
D={}
for i in ab:
   
	for t in i:
		r+=1
		a+=str(t)
		a+='#'
	D[s]=a
	s+=1
	rev = str(i[5])
	crit = str(int(i[4]) + 1)
	rev_list.append(rev + '#' + crit)
#print (rev_list)

print (json.dumps(D))'''
sys.exit()