class Main {
    public static void main(String[] args) {
        Car car = new Car("QWE123", new Account("David Raba", "1049636848"));
        car.passengers = 4;
        car.printDataCar();
    }
}