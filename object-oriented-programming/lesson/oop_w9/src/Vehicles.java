public class Vehicles {
    public static void main(String[] args) throws Exception {
        System.out.println("Vehicles:");
        
        Watercraft watercraft = new Watercraft();
        watercraft.getWatercraft();

        Land_Vehicle land = new Land_Vehicle();
        land.getLangVehicle();

        Aircraft aircraft = new Aircraft();
        aircraft.getAircraft();
    }
}