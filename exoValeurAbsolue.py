def myAbs ( x ) :
    if (x >= 0) :
        return "ok"
    else :
        return "ko"

print("Entré : ")
print(45)
print("Sortie : ")
print(myAbs(45))


def newAbs ( x ) :
    if (x < 10) :
        return int(((x**2)**(1/2)))
    elif (x >=10 and x < 100):
        return int((x**2)**(1/2))
    elif (x == 100) :
        return -100
    else :
        return int((((x**2)**(1/2))**(1/2)))**2


