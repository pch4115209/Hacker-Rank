#Author: Chenghao (Peter) Pan

""" Node is defined as
class node:
    def __init__(self, data):
        self.data = data
        self.left = None
        self.right = None
"""
import sys

def checkBST(root):
    lower = 0
    upper = sys.maxsize
    
    return helper(root, lower, upper)
    
def helper(node, lower, upper): 
    if lower is not None and node.data <= lower:
        return False
    
    if upper is not None and node.data >= upper:
        return False
    
    
    result1 = True
    result2 = True
    
    if node.left is not None:
        result1 = helper(node.left, lower, node.data)
    if node.right is not None:
        result2 = helper(node.right, node.data, upper)

    return result1 and result2
