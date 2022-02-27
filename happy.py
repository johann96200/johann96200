#Exercice3

def holdChaerlie(lis):
        a = False
        for i in range(0,len(lis)):
                for j in range(0,len(lis[i])):
                               if lis[i][j]== "Charlie":
                               a = True
        return a 
                               
                               
