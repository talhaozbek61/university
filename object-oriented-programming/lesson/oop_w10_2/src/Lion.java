public class Lion extends Animal {
    private String forestName;

    public Lion() {
        System.out.println("lion class established.");
    }
    
    public Lion(String forestName) {
        this();
        this.forestName = forestName;
    }

    public Lion(String forestName, String color) {
        super(color);
        this.forestName = forestName;
    }

    public String getForestName() {
        return forestName;
    }
    
    public void setForestName(String forestName) {
        this.forestName = forestName;
    }

    public void eat() {
        super.eat();
        System.out.println("the lion ate its prey.");
    }

    public void eat(int a) {
        for (int i = 0; i < a; i++) {
            this.eat();
           }
    }

    public void kukre() {
        System.out.println("Kukre");
    }

    public String toString() {
        return this.forestName + " lion king of the jungle";
    }
}
