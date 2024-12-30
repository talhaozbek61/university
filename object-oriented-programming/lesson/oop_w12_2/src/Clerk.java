public class Clerk extends Employee {
    private int sale;

    public Clerk(String name, String lastName){
        super(name, lastName);
    }

    public void setSale(int sale){
        this.sale = sale;
    }

    public int salaryCalculation(){
        return this.sale / 10;
    }

    public String whoAmI(){
        return "Clerk";
    }

}
