public class App {
    public static void main(String[] args) throws Exception {
        System.out.println("Staff members:");
       
        Personnel personnel = new Personnel();
        
        personnel.PersonelInfo();

        Manager manager = new Manager();
        
        // Manager manager = new Manager("What's up?");
        manager.PersonelInfo();

        Manager manager2 = new Manager("Manager Madonna", "Louise");

        manager2.PersonelInfo();
    
    }
}
