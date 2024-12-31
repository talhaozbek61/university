public abstract class Employee {
    private String name, lastName;

    public Employee(String name, String lastName){
        this.name = name;
        this.lastName = lastName;
    }

    public String getName() {
        return name;
    }

    public String getLastName() {
        return lastName;
    }

    public abstract int salaryCalculation();

    public abstract String whoAmI();

    public String getInfo(){
        String info = this.whoAmI() + ": " + this.name + " " + this.lastName + ", this month will receive " + this.salaryCalculation() + " TL";

        return info;
    }

    
}
