class Node:
    def __init__(self, x):
        self.data = x
        self.next = None
class LinkedList:
    def __init__(self):
        self.head = None
    def printdata(self):
        tmp = self.head.next
        while tmp != None:
            print(tmp.data, end = "")
            tmp = tmp.next
