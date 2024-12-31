public class Staff extends Employee {
    private final static int SALARY = 800;

    public Staff(String name, String lastName){
        super(name, lastName);
    }

    public int salaryCalculation(){
        return Staff.SALARY;
    }

    public String whoAmI(){
        return "Staff";
    }

}
