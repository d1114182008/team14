import random
score = [[random.randint(0, 100) for _ in range(40)] for _ in range(5)]
for i in range(5):
    total = sum(score[i])
    average = total / 40
    print(f" 總分為 {i + 1}: {average:.2f}")


for i in range(5):
    for j in range(40):
        print(score[i][j], end=", ")
    print()