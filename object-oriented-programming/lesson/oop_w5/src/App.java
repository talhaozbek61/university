public class App {
    
    public static void main(String[] args) throws Exception {
        System.out.println("Hello World!");
        
        // Time.java
        Time timer = new Time();
        
        System.out.println("Start:");
        timer.showTime();
        System.out.println("-------");


        timer.addSecond(1000);
        System.out.println("Last Status:");
        timer.showTime();

        Time time = new Time(500);
        time.showTime();

        Time time2 = new Time(50,500,500);
        time2.showTime();

        // Dot.java
        Dot dot = new Dot();
        dot.show();
        dot.hide();

        Dot dot2 = new Dot(3,5);
        dot2.show();
        dot2.hide();

        // Student.java
        Student student = new Student();
        student.Print();

        System.out.println("-------");

        Student student2 = new Student("2432042042","TALHA","ÖZBEK");
        student2.Print();


        // Figure.java
        Figure figure = new Figure(3);
        figure.Star();
        System.out.println();
        figure.Square();
        System.out.println();
        figure.LetterT();
        System.out.println();

        Figure figure1 = new Figure(5);
        figure1.Star();
        System.out.println();
        figure1.Square();
        System.out.println();
        figure1.LetterT();

    }
}
