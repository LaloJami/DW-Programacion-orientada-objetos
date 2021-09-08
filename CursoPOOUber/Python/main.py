#from car import Car
from account import Account
from user import User
from driver import Driver

if __name__ == "__main__":
    #car = Car("AMS123", Account("Andres Herrera", "AND123"))
    #car.printDataCar()
    user1 = User("Alison", "ALI123", "Ali@hotmail.com", "asdflkjh")
    print(vars(user1))