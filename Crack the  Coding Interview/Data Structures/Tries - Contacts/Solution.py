#Author: Chenghao (Peter) Pan

class ContactDirectory(object):
    directory = {} #hashmap / dict
        
    def add(self, contact):
        for i in range(1, len(contact) + 1):
            index = contact[None:i]
            
            if index in self.directory:
                self.directory[index] +=1
            else:
                self.directory[index] = 1
        
    def find(self, partial):
            if partial in self.directory:
                print(self.directory[partial])
            else:
                print('0')


# Testing 
n = int(input().strip())

dir = ContactDirectory()

for a0 in range(n):
    op, contact = input().strip().split(' ')
    
    if op == 'add':
        dir.add(contact)
    
    if op == 'find':
        dir.find(contact)
