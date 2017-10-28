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
cur.execute('SELECT req, left, trans FROM company WHERE id = ?', (company,))
ammt = cur.fetchone()
req = float(ammt[0])
left = float(ammt[1])
c_trans = str(ammt[2])
share = int(amount)/req
new_amt = left - amount
cur.execute('SELECT balance, trans FROM investor WHERE id = ?', (investor,))
u_dat = cur.fetchone()
balance = int(u_dat[0])
u_trans = str(u_dat[1])
new_balance = balance - amount
cur.execute('''INSERT INTO transac(cid, uid, amt, share, datee) VALUES (?,?,?,?,?)''', (company, investor, amount, share, datee))
cur.execute('''UPDATE company SET left = ? WHERE id = ?''', (new_amt, company,))
cur.execute('''UPDATE investor SET balance = ? WHERE id = ?''', (new_balance, investor,))
db.commit()

cur.execute('SELECT id FROM transac WHERE cid = ? AND uid = ?', (company, investor,))
obt_data = cur.fetchall()[-1]
t_id = str(obt_data[0])
u_trans = u_trans + ',' + t_id
c_trans = c_trans + ',' + t_id
cur.execute('''UPDATE company SET trans = ? WHERE id = ?''', (c_trans, company,))
cur.execute('''UPDATE investor SET trans = ? WHERE id = ?''', (u_trans, investor,))
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