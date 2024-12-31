public class Courier extends Employee {
    private final static int COURIER_SALARY = 20;

    private int sale;

    public Courier(String name, String lastName){
        super(name, lastName);
    }

    public void setSales(int sale){
        this.sale = sale;
    }

    public int salaryCalculation(){
        return COURIER_SALARY + (this.sale * 20);
    }

    public String whoAmI(){
        return "Courier";
    }
}
