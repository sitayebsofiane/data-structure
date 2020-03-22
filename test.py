def min(tab):
    min = tab[0]
    index = 0
    for count,ele in enumerate(tab,0):
        if min <= ele:
            min = ele
            index = count
    return min,index
def inverse(a):
    b = 0
    while a > 0:
        b = 10*b + a%10
        a = a//10
    return b
print(inverse(1234)) 