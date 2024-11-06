public class Time {

    private int hour = 0;
    private int minute = 0;
    private int second = 0;
    
    void addSecond(int setNumber){
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
