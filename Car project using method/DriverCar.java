public class DriverCar
{
	public static void main(String[]args)
	{
		Car car1=new Car("Qualis","Grey",100000,new Engine("Diesel","800cc","8 stroke"),new Tyre("Ceat","215mm","Circle"),new Tyre("JK Tyres","215mm","Circle"),new Tyre("JK Tyres","215mm","Circle"),new Tyre("Ceat","215mm","Circle"));
	    //Details Of Car
		car1.detailsOfCar();
		//Details Of Engine
	    car1.e.detailsOfEngine();
	    //Details Of Tyre
	    car1.t1.detailsOfTyre();
	    car1.t2.detailsOfTyre();
	    car1.t3.detailsOfTyre();
	    car1.t4.detailsOfTyre();
	}

}
