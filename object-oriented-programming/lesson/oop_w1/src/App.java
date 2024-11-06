public class App {
    public static void main(String[] args) throws Exception {
        System.out.println("Welcome");
        
        // (3-11) Priority Example
        int a = 3, b = 5, c;
        c = a * ++b / 5 - 12 *a + b;
        System.out.println("c: " + c);
        
        // (3-12) Example of Prioritization by Parameter
        c = (a * ++b) / (5 - 12) * (a + b);
        System.out.println("c: " + c);
        boolean bool = (a + b) < (a * c) && (a + b) >= (b + a);
        System.out.println("bool: " + bool);
        
        // Example
        int number = 5;
        System.out.println(number * number);
    }
}
