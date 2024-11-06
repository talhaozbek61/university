public class Student {
    String tc, name, lastName;
    
    public Student(){
        this.tc = "2323232332";
        this.name = "Talha";
        this.lastName = "Özbek";
    }

    public Student(String tc, String name, String lastName) {
        this.tc = tc;
        this.name = name;
        this.lastName = lastName;
    }

    public void Print() {
        System.out.println("TC: " + tc + " " + "Name: " + name + " " + "Lastname: " + lastName);
    }
}
