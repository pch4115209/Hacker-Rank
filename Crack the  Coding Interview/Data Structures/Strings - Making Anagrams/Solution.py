#Author: Chenghao (Peter) Pan
def number_needed(a, b):
    import math
    
    result = 0
    alphaCounter = {'a':0, 'b':0, 'c':0, 'd':0, 'e':0, 'f':0, 'g':0, 
             'h':0, 'i':0, 'j':0, 'k':0, 'l':0, 'm':0, 'n':0, 
             'o':0, 'p':0, 'q':0, 'r':0, 's':0, 't':0, 'u':0,
             'v':0, 'w':0, 'x':0, 'y':0, 'z':0};
    
    for char in a:
        alphaCounter[char]+=1
    
    for char in b:
        alphaCounter[char]-=1
    
    #Iterate alphabet dict
    #If the value for any char is not equal to zero,
    #it indicates the necessity of deletion    
    for key, value in alphaCounter.items():
        result += int(math.fabs(value))
        
    
    return result

a = input().strip()
b = input().strip()

print(number_needed(a, b))

