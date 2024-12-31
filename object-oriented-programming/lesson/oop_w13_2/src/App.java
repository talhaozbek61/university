public class App {
    public static void main(String[] args) throws Exception {
        // System.out.println("Hello, World!");

        Tossable rock = new Rock();
        rock.toss();

        Tossable baseball = new Baseball("Baseball");
        baseball.toss();

        Tossable football = new Football("Football");
        football.toss();
    }
}
