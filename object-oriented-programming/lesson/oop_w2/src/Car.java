public class Car {
    String brand = "FORD";
    String modal = "MUSTANG 2.3 Fastback";
    String color = "GRAY";
    int gas = 5;
    int maxGas = 7;
    
    void info(){
        System.out.println("Brand: " + brand + " " + "Modal: " + modal + " " + "Color: " + color + " " + "Gas: " + gas);
    }
    
    void Ride() {
        if(gas == 0){
            System.out.println("I not ride a Mustang cause gas over");
            System.out.println("Add Gas!!");
        }
        else if(gas < 2 && gas >= 0){
             System.out.println("Gas is Low!");
              this.gas--;
        }
        else{
        System.out.println("I ride a Mustang");
        this.gas--;
        System.out.println("Last gas: " + gas);
        }
    }
    
    void addgas(int addedgas) {
        if(addedgas < maxGas){
        gas = maxGas - addedgas;
             if(gas > maxGas){
                 gas = maxGas;
                  System.out.println("Gas Full!");
             }
         }
        else if(gas == maxGas)
             System.out.println("Gas Full!");
        else{
            gas = maxGas;
             System.out.println("Gas Full!");
        }
    }
    
    void lastStep(){
        if(gas == 0){
            System.out.println("I not ride a Mustang cause gas over");
            System.out.println("Add Gas!!");
            addgas(maxGas);
        }
        else if(gas < 2 && gas >= 0){
             System.out.println("Gas is Low!");
              this.gas--;
        }
        else{
        System.out.println("I ride a Mustang");
        this.gas--;
        System.out.println("Last gas: " + gas);
        }
    }
    
}
