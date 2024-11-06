public class Time {

    private int hour = 0;
    private int minute = 0;
    private int second = 0;

    // Constructor
    public Time() {
       this.hour = 0;
       this.minute = 0;
       this.second = 0;
    }

    Time(int second){
        this.addSecond(second);
    }

    // Time(int hour) {
    //     second = hour * 3600;
    // }

    Time(int hour, int minute) {
        second = hour * 3600 + minute * 60;
    }

    Time(int hour, int minute, int second) {
       second = hour * 3600 + minute * 60 + second;
       addSecond(second);
    }
    
    void addSecond(int setNumber){

        // When the initial values are 0, there is no need to use
        // minute += setNumber / 60;  // Dakikaya ekle
        // second += setNumber % 60;

        second += setNumber;

        if(second >= 60){
            minute += second / 60;  
            second = second % 60;    
        }
    
        if (minute >= 60){
            hour += minute / 60;    
            minute = minute % 60;  
        }
    
        if (hour >= 24)
            hour = hour % 24;
    }
    
    void showTime(){
        System.out.println("Hour: " + hour + " " + "Minute: " + minute + " " + "Second: " + second);
    }

}
