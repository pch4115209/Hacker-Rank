#Author:  Chenghao (Peter) Pan
"""
Detect a cycle in a linked list. Note that the head pointer may be 'None' if the list is empty.

A Node is defined as: 
 
    class Node(object):
        def __init__(self, data = None, next_node = None):
            self.data = data
            self.next = next_node
"""


def has_cycle(head):
    if head is None:
        return False
    
    numVisited = {}
    curHead = head;
    
    # Iterate the linked list
    while curHead:
        if curHead.data in numVisited:
            return True
            
        numVisited[curHead.data] = 1 # store visited node in the hashtable
        curHead = curHead.next    
    
    return False
    
