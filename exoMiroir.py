from random import *

def reverse ( s ) :
    r = ""
    for i in range(0, len(s), 1):
        r = r + s[len(s)-(i+1)]
    return r
print(reverse("Miroir"))
print(reverse("Avec des espaces"))

def myReverse ( s ) :
    if (s == "Miroir" or s == "avec des espaces"):
        return reverse(reverse(s))
    else :
        return s
print(myReverse("Miroir"))

def wordFromDict ( i ):
    with open("dico_fr.txt") as f :
        l = f.read().splitlines()
    return l[i]
randrange(0,33)
print(wordFromDict(8))

