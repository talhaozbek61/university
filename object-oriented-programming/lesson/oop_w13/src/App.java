public class App {
    private final static int TOTAL_SALE = 37000;
    public static void main(String[] args) throws Exception {
        // System.out.println("Hello, World!");

        Employee[] employees = new Employee[12];

        // Director
        employees[0] = new Director("Talha", "ÖZBEK");
        ((Director) employees[0]).setTotalSales(TOTAL_SALE);

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

        // Assistant Director
        employees[7] = new AssistantDirector("Ibrahim", "Parlak");
        ((AssistantDirector)employees[7]).setTotalSales(TOTAL_SALE);

        employees[8] = new Courier("Ahmet", "Hoppa");
        ((Courier)employees[8]).setSales(100);
        
        employees[9] = new Courier("Ali", "Hopala");
        ((Courier)employees[9]).setSales(40);

        employees[10] = new Courier("Burcu", "Hop");
        ((Courier)employees[10]).setSales(50);

        employees[11] = new TeaMan("Mustafa", "Ozdal");
        ((TeaMan)employees[11]).setSales(30);


        System.out.println("Employee salaries:");
        for(int i = 0; i <= employees.length -1; i++){
            System.out.println(employees[i].getInfo());
        }

    }
}
