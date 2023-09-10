public class Car {
	//states
	String cname;
	String color;
	double price;
	//Early Instansiation
	Engine e;
	Tyre t1,t2,t3,t4;
	//constructors
	public Car(){
		//L.I
	}
	public Car(String cname,String color,double price){
		//L.I
		this.cname=cname;
		this.color=color;
		this.price=price;
	}
	public Car(String cname,String color,double price,Engine e1,Tyre tt1,Tyre tt2,Tyre tt3,Tyre tt4){
		//L.I
		this.cname=cname;
		this.color=color;
		this.price=price;
		e1=e;
		tt1=t1;
		tt2=t2;
		tt3=t3;
		tt4=t4;
	}
	//Behaviours
	public void detailsOfCar(){
		System.out.println("The Brand Of the Car is:"+cname);
		System.out.println("The Color of the Car is:"+color);
		System.out.println("The Price of the Car is:"+price);
		System.out.println("**********************************");
	}

}
