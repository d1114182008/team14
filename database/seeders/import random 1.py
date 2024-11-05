import random 
score = [[0]*40 for i in range (5)]
for i in range(5):
     for j in range(40):
         score [i][j]=random.randint(0,100)
for i in range (40):
     total= 0
     for j in range (40):
          total = total + score[i][j]
          print(score[i][j],",",sep="",end="")
          
print ("分為",total)

        