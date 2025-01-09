public class App {
    public static void main(String[] args) throws Exception {
       Interface1 a1 = new A();
       a1.a1();

       Interface2 a2 = new A();
       a2.a2();

       A p1 = new A();
       p1.a1();
       p1.a2();
       p1.s1();
    }
}
