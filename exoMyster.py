def mystere0(s) :
    if len(s) == 0 :
        return ""
    else :
        return mystere0(s[1:len(s)]) + s[0]
print(mystere0("Hello"))

    
def mystere1(n) :
    a = n // 3600
    c = n % 3600
    b = c // 60
    c = c % 60
    return (str (a)+":"+str(b)+":"+str(c))
print(mystere1(8))

def mystere2(n) :
    u = 1
    for x in range(1, n, 1) :
        u = u * x
    return u

def mystere3(n) :
    m = 0
    while (m+1)**2 < n :
        m = m + 1
    return m


def mystere4(n):
    if (n==0):
        return 2
    else:
        return mystere5(n-1)*mystere5(n-1)

    
def mystere5(n):
    a = 0
    s = 1
    t = 1
    while (s<=n) :
        a = a+1
        s = s + t + 2
        t = t + 2
    return a


def mystere6(n):
    b, m = 2, n
    r = 1
    while m > 0:
        if m % 2 == 1:
            r = r * b
        b = b * b
        m = m //2
    return r 
print(mystere6(7))
print(mystere6(9))
print(mystere6(10))
