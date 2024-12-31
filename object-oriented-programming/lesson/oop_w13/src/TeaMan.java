public class TeaMan extends Employee {
    private final static int TEA_MAN_SALARY = 600;

    private int sale;

    public TeaMan(String name, String lastName){
        super(name, lastName);
    }

    public void setSales(int sale){
        this.sale = sale;
    }

    public int salaryCalculation(){
        return TEA_MAN_SALARY + (this.sale * 2);
    }

    public String whoAmI(){
        return "Tea Man";
    }
}
