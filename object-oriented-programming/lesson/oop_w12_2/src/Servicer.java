public class Servicer extends Employee {
    private final static int HOURL_RATE = 10;
    private int workingHours;

    public Servicer(String name, String lastName){
        super(name, lastName);
    }

    public void setWorkingHours(int workingHours){
        this.workingHours = workingHours;
    }

    public int salaryCalculation(){
        return this.workingHours * Servicer.HOURL_RATE;
    }

    public String whoAmI(){
        return "Servicer";
    }
}
