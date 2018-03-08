def ransom_note(magazine, ransom):
    hashtable = {}
    
    for word in ransom:
        if word in hashtable:
            hashtable[word]+=1
        else:
            hashtable[word]=1
            
    for word in magazine:
        if word in hashtable:
            hashtable[word]-=1
            
	    # Remove the char(as a key) in the hash table
            # If the char(s) are found in the magazine
            if hashtable[word] == 0:
                hashtable.pop(word)
        
        if len(hashtable) == 0:
            return True
        
        
    return False
    
m, n = map(int, input().strip().split(' '))
magazine = input().strip().split(' ')
ransom = input().strip().split(' ')
answer = ransom_note(magazine, ransom)
if(answer):
    print("Yes")
else:
    print("No")
    

