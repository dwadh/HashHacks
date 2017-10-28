import sqlite3
db = sqlite3.connect('details')
cur = db.cursor()
cur.execute('SELECT passw, id FROM investor WHERE uname = ?', (sys.argv[1]))
data = cur.fetchone()
r_passw = data[0]
idd = data[1]
passw = sys.argv[2]
if (passw == r_passw):
	print(idd)
else:
	print(0)