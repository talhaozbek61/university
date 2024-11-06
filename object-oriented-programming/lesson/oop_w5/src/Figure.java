public class Figure {
    int number1, number2;

    Figure() {
        this.number1 = 0;
        this.number2 = 0;
    }

    Figure(int number) {
        this.number1 = number;

        // We will use it for the desired shape
        // this.number1 = number + 2;
    }


    Figure(int number1, int number2){
        this.number1 = number1;
        this.number2 = number2;
    }

    void Star(){
            for (int i = 1; i <= this.number1; i += 2) {
                for (int j = i; j < this.number1; j += 2) {
                    System.out.print(" ");
                }
                for (int j = 1; j <= i; j++) {
                    System.out.print("x");
                }
                System.out.println();
            }

        
            for (int i = this.number1 - 2; i >= 1; i -= 2) {
                for (int j = this.number1; j > i; j -= 2) {
                    System.out.print(" ");
                }
                for (int j = 1; j <= i; j++) {
                    System.out.print("x");
                }
                System.out.println();
            }
    }


    void Square(){
            for (int i = 1; i <= this.number1; i++) {
                for (int j = 1; j <= this.number1; j++) {
                    if (i == 1 || i == this.number1 || j == 1 || j == this.number1) {
                        System.out.print("x");
                    } else {
                        System.out.print(" ");
                    }
                }
                System.out.println();
            }
    }


    void LetterT() {
            for (int i = 1; i <= this.number1; i++) {
                System.out.print("x");
            }
            System.out.println(); 

            for (int i = 1; i < this.number1; i++) {
                for (int j = 0; j < this.number1 / 2; j++) {
                    System.out.print(" ");
                }
                System.out.println("x");
            }
        }

}
