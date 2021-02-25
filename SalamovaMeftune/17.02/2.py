saitler=["a","ı","u","o","e","i","ö","ü"]
soz=input()
say=0
for x in saitler:
   if x in soz:
       say=say+1
       red=soz.count(x)
       if red>1:          
          say=say+red-1    
print(say)       
       
     
