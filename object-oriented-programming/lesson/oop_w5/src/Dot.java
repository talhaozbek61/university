public class Dot {
    int x,y;
    boolean isDisable = false;

    public Dot(){
        this.x = 0;
        this.y = 0;
        this.isDisable = false;
    }

    public Dot(int x, int y){
            this.x = x;
            this.y = y;
    }

    public void show(){
       this.isDisable = false;
       System.out.println("X: " + x + " " + "Y: " + y);
    }

    public void hide() {
        this.isDisable = true;
       System.out.println("");
    }
}
