public class App {
    public static void main(String[] args) throws Exception {
        System.out.println("Hello World!");
        
        Time timer = new Time();
        
        System.out.println("Start:");
        timer.showTime();
        System.out.println("-------");
        
        
        timer.addSecond(1000);
        System.out.println("Last Status:");
        timer.showTime();
    }
}
