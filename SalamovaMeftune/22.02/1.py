inp=input()
a=[]
a=inp.split()
helparino=0
for i in a:
    helparino=a.count(i)
    if helparino>1:
        a.remove(i)
print (a)
