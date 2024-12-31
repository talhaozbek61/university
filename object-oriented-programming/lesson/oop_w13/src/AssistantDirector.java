public class AssistantDirector extends Employee {
    private final static int ASSISTANT_DIRECTOR_SALARY = 1800;
    private final static int ASSISTANT_DIRECTOR_PRIM_LIMIT = 20000;

    private int sale;

    public AssistantDirector(String name, String lastName){
        super(name, lastName);
    }

    public void setTotalSales(int sale){
        this.sale = sale;
    }

    public int salaryCalculation(){
        if(this.sale > ASSISTANT_DIRECTOR_PRIM_LIMIT)
            return ASSISTANT_DIRECTOR_SALARY + (this.sale - ASSISTANT_DIRECTOR_PRIM_LIMIT) / 10;
        
        return ASSISTANT_DIRECTOR_SALARY;
    }

    public String whoAmI(){
        return "Assistant Director";
    }
}
