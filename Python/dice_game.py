# Rolling dice code

import random

def rolldice():
    dice_total = random.randint(1,6) + random.randint(1,6)
    return dice_total


player1 = input("Enter player 1's name: ")
player2 = input("Enter player 2's name: ")

roll1 = rolldice()
roll2 = rolldice()
print(player1, 'rolled', roll1)
print(player2, 'rolled', roll2)