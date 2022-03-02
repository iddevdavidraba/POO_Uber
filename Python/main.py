from account import Account
from car import Car


def run():
    print('Hola Mundo')

    car = Car("QWE123", Account("David Raba", "1049636848"))
    print(vars(car))
    print(vars(car.driver))


if __name__ == "__main__":
    run()
