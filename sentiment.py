from textblob import TextBlob		
score = 0
total = 0
data = ['Excellent Company. Must invest#2', 'Yea, it is good#1']
for i in data:
    dat = i.split('#')
    review = dat[0]
    critic = dat[1]
    analysis = TextBlob(review)
    a = analysis.sentiment
    polarity = float(a.polarity)
    #Code for nlp
    score+= polarity*int(critic)
    total += int(critic)
final_score = score/total
print (final_score)
'''data_senti = []

#split data from hashtag
for d in data:
    data_senti = data.split('#')'''
senti =[]

for i in range( 0, len(data)) :
    analysis = TextBlob(data[i])
    a = analysis.sentiment
    print (float(a.polarity))
    #senti.append(analysis.sentiment)

#print(senti)