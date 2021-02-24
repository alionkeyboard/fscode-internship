meme=[
    "seks",
    ["amsik",
     "sik",
     "futasiki"
]
    ]

boyukmeme=[]

def flatter(best):
 for i in best:
     if isinstance(i,list):
         return flatter(i)
     else:
         boyukmeme.append(i)

flatter(meme)
print(boyukmeme)
                    
