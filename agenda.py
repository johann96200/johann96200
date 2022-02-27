yearLength = 366 # 2016 est une année bisextile
firstWDay = 4    # 2016 commence un vendredi

def loadAgenda(filename):
    t=[""]*yearLength
    for line in open(filename):
        (day,event)=line.split(':',2)
        t[int(day)]=event.rstrip()
    return(t)

t=loadAgenda("agenda2")


def affiche(t):
    for i in range(365):
        print(i,t[i])    
affiche(t)


    
wDays = ["Lundi","Mardi","Mercredi","Jeudi","Vendredi","Samedi","Dimanche"]

def weekday(day):
    return(wDays[wDays(day+firstwDay)%7]
#print(weekday(1)

def affich(t):
    a = firstWday
    for i in range(0,365):
        if t[i]= " "
        a =wDay[i%7]
        print(weekday(i),it[i])

affiche(t)

def affihcee(a):
    b = 0
    for i in range(365):
        if t[i]= " ":
            b= b +1
    print("Il y a", str(b), "evenement dans l'agenda")


def (a):
    
