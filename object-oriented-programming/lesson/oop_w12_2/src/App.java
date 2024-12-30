public class App {
    public static void main(String[] args) throws Exception {
        // System.out.println("Hello, World!");

        Employee[] employees = new Employee[7];

        // Director
        employees[0] = new Director("Talha", "ÖZBEK");
        ((Director) employees[0]).setTotalSales(37000);

        // Clerk
        employees[1]  = new Clerk("Okan", "Yeşil");
        ((Clerk) employees[1]).setSale(15000);

        employees[2] = new Clerk("Burcu", "Seğmen");
        ((Clerk) employees[2]).setSale(22000);

        // Staff
        employees[3] = new Staff("Ayşe", "Demir");

        employees[4] = new Staff("Mehmet", "Çelik");

        // Servicer
        employees[5] = new Servicer("Ali", "Kaya");
        ((Servicer) employees[5]).setWorkingHours(60);

        employees[6] = new Servicer("Ahmet", "Ateş");
        ((Servicer)employees[6]).setWorkingHours(40);

        System.out.println("Employee salaries:");
        for(int i = 0; i <= employees.length -1; i++){
            System.out.println(employees[i].getInfo());
        }

    }
}
