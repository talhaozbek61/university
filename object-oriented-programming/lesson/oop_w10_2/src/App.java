public class App {
    public static void main(String[] args) throws Exception {
      
        // Animal
        Animal animal = new Animal();

        animal.setColor("Red");
        System.out.println(animal.toString());

        // Lion
        Lion lion = new Lion();

        lion.setColor("White");
        lion.setForestName("Wind");
        System.out.println(lion.toString());
        lion.kukre();
        System.out.println(lion);


        // Dog
        Dog dog = new Dog();

        dog.setColor("Siyah");
        dog.setOwner("Talha");
        System.out.println(dog);


    }
}
