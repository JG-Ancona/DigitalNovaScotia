# Calculates how much of your loan have been paid

# Get the loan details

money_owned = float(input("How much do you owe, in dollars?\n"))    # $50,000
apr = float(input("What is the annual percentage rate?\n"))   # 3%
payment = float(input("What will your monthly payment be, in dollars?\n"))
months = int(input("How many months do you want to see results for?\n"))

# Divide apr by 100 to make it a percent, then divide by 12 to make monthly
monthly_rate = apr/100/12

for i in range(months):

    # Add interes
    interest_paid = money_owned * monthly_rate
    money_owned = money_owned + interest_paid

    if (money_owned - payment < 0):
        print("The last payment is ", money_owned)
        print("You paid off the loan in", i+1,"monts",sep=' ')
        break

    # Make a payment
    money_owned = money_owned - payment

    # Print the result after this month
    print("Paid", payment, "of which", interest_paid, "was interes", end=' ')
    print("Now I owe", money_owned)