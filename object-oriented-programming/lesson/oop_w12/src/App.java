public class App {
    // Staff Salary
    private final static int Director_Salary = 2000;
    private final static int Director_Prim_Limit = 20000;
    private final static int Servicer_Salary = 10;
    private final static int Staff_Salary = 800;

    public static void main(String[] args) throws Exception {
        // System.out.println("Employees");

        // Servicers
        Servicer[] servicers = new Servicer[2];
        servicers[0] = new Servicer("Ali",  "Kaya");
        servicers[0].setSalary(Servicer_Salary * 60);
        
        servicers[1] = new Servicer("Jane", "Borl");
        servicers[1].setSalary(Servicer_Salary * 60);

        // Staff
        Staff[] staffs = new Staff[2];
        staffs[0] = new Staff("Ayse", "Demir");
        staffs[0].setSalary(Staff_Salary);

        staffs[1] = new Staff("Mehmet", "Çelik");
        staffs[1].setSalary(Staff_Salary);

        // Cleck
        Clerk[] clerks = new Clerk[2];
        clerks[0] = new Clerk("Okan", "Yeşil");
        clerks[0].setSalary(15000 / 10);

        clerks[1] = new Clerk("Burcu", "Seğmen");
        clerks[1].setSalary(22000 / 10);

        // Director
        Director director = new Director("T", "ÖZBEK");
        director.setSalary((37000 - Director_Prim_Limit) / 10 + Director_Salary);

        System.out.println("Employee salaries:");
        System.out.println(director.getInfo());

        for(int i = 0; i < servicers.length; i++){
            System.out.println(servicers[i].getInfo());
        }

        for(int i = 0; i < staffs.length; i++){
            System.out.println(staffs[i].getInfo());
        }

        for(int i = 0; i < clerks.length; i++){
            System.out.println(clerks[i].getInfo());
        }

    }
}
