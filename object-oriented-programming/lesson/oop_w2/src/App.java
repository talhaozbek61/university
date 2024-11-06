public class App {
    public static void main(String[] args) throws Exception {
        System.out.println("Welcome");
        
        Car car1 = new Car();
        
        car1.info();
        // car1.modal = "Test";
        // car1.info();
        
        car1.Ride();
        car1.Ride();
        car1.Ride();
        car1.Ride();
        car1.Ride();
        car1.Ride();
        
        System.out.println("Gas is loaded...");
        car1.addgas(12);
        
        System.out.println("--------");
        int i = 0;
        while(i <= 100){
            System.out.println("While: " + i);
            car1.lastStep();
            i++;
        }
    }
}
