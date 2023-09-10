public class Tyre {
	//states
	String brand_name;
	String size;
	String shape;
	//Constructors
	public Tyre(){
		//L.I
	}
	public Tyre(String brand_name,String size,String shape){
		//L.I
		this.brand_name=brand_name;
		this.shape=shape;
		this.size=size;	
	}
	//behaviours
	public void detailsOfTyre(){
		System.out.println("Tyre Brand is:"+brand_name);
		System.out.println("Tyre Size is:"+size);
		System.out.println("Tyre Shape is:"+shape);
		System.out.println("**************************");
	}
}
