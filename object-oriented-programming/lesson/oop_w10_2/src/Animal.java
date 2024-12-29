public class Animal {
    private String color;

    public Animal(String color) {
        this.color = color;
    }

    public Animal() {
        System.out.println("Animal class was set up.");
    }

    public String getColor() {
        return color;
    }

    public void setColor(String color) {
        this.color = color;
    }

    public void eat() {
        System.out.println("Animal Eat");
    }

    public void eat(int a) {
       for (int i = 0; i < a; i++) {
        this.eat();
       }
    }

    public String toString() {
        return this.color + " colored animal";
    }
}
