from textblob import TextBlob		
import sqlite3
import json
import sys
a=''
rev_list=[]
s=1
db=sqlite3.connect('details')
cur=db.cursor()
name=""
cur.execute('SELECT id, cid, rid, uid, expert, text from reviews where cid = ?',(str(sys.argv[1]),))
ab=cur.fetchall()
#print (ab)
r=0
s=0
D={}
for i in ab:
    rev = str(i[5])
    crit = str(int(i[4]) + 1)
    rev_list.append(rev + '#' + crit)
#print (rev_list)


score = 0
total = 0
data = ['Excellent Company. Must invest#2', 'Yea, it is good#1']
for i in rev_list:
    dat = i.split('#')
    review = dat[0]
    critic = dat[1]
    analysis = TextBlob(review)
    a = analysis.sentiment
    polarity = float(a.polarity)
    #print (polarity)
    #Code for nlp
    score+= polarity*int(critic)
    total += int(critic)
final_score = score/total
print (final_score)


'''for i in range( 0, len(data)) :
    analysis = TextBlob(data[i])
    a = analysis.sentiment
    print (float(a.polarity))
    #senti.append(analysis.sentiment)

#print(senti)'''