from car import Car
from account import Account
if __name__ == "__main__":
    # print("Hola mundo")
    # car = Car()
    # car.license = "AMS123"
    # car.driver = "Andres Herrera"
    # car.passenger = 4
    # print(vars(car))
    # car2 = Car()
    # car2.license = "XTE741"
    # car2.driver = "Carmen Herrera"
    # car2.passenger = 2
    # print(vars(car2))
    car = Car("AMS123", Account("Andres Herrera", "AND123"))
    car.printDataCar()