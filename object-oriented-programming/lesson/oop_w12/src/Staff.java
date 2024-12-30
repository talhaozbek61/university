public class Staff {
    private String name, lastName;
    private int salary;

    public Staff(String name, String lastName){
        this.name = name;
        this.lastName = lastName;
    }
    
    public String getName() {
        return name;
    }

    public String getLastName() {
        return lastName;
    }

    public void setSalary(int salary) {
        this.salary = salary;
    }

    public String getInfo(){
        String info = "Staff: " + this.name + " " + this.lastName + ", this month will receive " + this.salary + " TL";
        return info;
    }
}
