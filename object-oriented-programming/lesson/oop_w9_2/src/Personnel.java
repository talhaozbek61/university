public class Personnel {
    
    String name, lastname;

    public Personnel() {
        this.name = "Jack";
        this.lastname = "O";
    }

    public Personnel(String name,String lastname) {
        this.name = name;
        this.lastname = lastname;
    }

    public void PersonelInfo(){
        System.out.println(this.name + " " + this.lastname);
    }
}
