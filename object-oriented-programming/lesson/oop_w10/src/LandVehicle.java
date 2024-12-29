public class LandVehicle extends Vehicle {
    protected int wheelNumber;

    public LandVehicle(int wheelNumber) {
        this.wheelNumber = wheelNumber;
        System.out.println("Land Vehicle class established.");
    }

    public int getwheelNumber() {
        return this.wheelNumber;
    }
    
}
