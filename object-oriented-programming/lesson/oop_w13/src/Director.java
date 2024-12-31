public class Director extends Employee {
    
    private final static int DIRECTOR_SALARY = 2000;
    private final static int DIRECTOR_PRIM_LIMIT = 20000;

    private int sale;

    public Director(String name, String lastName){
        super(name, lastName);
    }

    public void setTotalSales(int sale){
        this.sale = sale;
    }

    public int salaryCalculation(){
        if(this.sale > DIRECTOR_PRIM_LIMIT)
            return DIRECTOR_SALARY + (this.sale - DIRECTOR_PRIM_LIMIT) / 10;
        
        return DIRECTOR_SALARY;
    }

    public String whoAmI(){
        return "Director";
    }

}
