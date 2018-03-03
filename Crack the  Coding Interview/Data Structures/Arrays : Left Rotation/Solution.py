#Author: Chenghao (Peter) Pan

def array_left_rotation(a, n, k):
    array = [0] * n
    
    for i in range(0, n):
        index = (i + n - k) % n
        array[index] = a[i]
    
    return array

n, k = map(int, input().strip().split(' '))
a = list(map(int, input().strip().split(' ')))
answer = array_left_rotation(a, n, k);
print(*answer, sep=' ')

