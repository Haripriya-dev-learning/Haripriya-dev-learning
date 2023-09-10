public class Engine {
	//states
	String type;
	String cc;
	String stroke;
	//constructors
	public Engine(){
		//L.I
	}
	public Engine(String type,String cc,String stroke){
		//L.I
		this.type=type;
		this.cc=cc;
		this.stroke=stroke;
	}
	//Behaviours
	public void detailsOfEngine(){
		System.out.println("Engine type is:"+type);
		System.out.println("Engine CC is:"+cc);
		System.out.println("Engine Stroke is:"+stroke);
		System.out.println("****************************");
		
	}
}
