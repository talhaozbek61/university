public class Dog extends Animal {
    private String owner;

    public Dog(){
        System.out.println("Dog class established.");
    }

    public Dog(String owner) {
        this();
        this.owner = owner;
    }

    public Dog(String owner, String color) {
        super(color);
        this.owner = owner;
    }

    public String getOwner() {
        return owner;
    }
    
    public void setOwner(String owner) {
        this.owner = owner;
    }

    public void eat() {
        super.eat();
        System.out.println("the dog ate its prey.");
    }

    public void eat(int a) {
        for (int i = 0; i < a; i++) {
            this.eat();
           }
    }

    public void hav() {
        System.out.println("Hav");
    }

    public String toString(){
        return "Dog owner " + this.owner;
    }
}
