package library;
import java.util.*;
public class Epics 
{
	static Scanner sc=new Scanner(System.in);
	public static void m3(String[]args)
	{
		System.out.println("\t\t\tWelcome to Journal Department");
		System.out.println("Select the Journal");
		System.out.println("1.Ramayana\n2.Bible\n3.Kuron\n4.Exit");
		int input=sc.nextInt();
		switch(input){
		case 1:{//Ramayana
			System.out.println("You choose Ramayana");
			break;
		}
		case 2:{//Bible
			System.out.println("You choose Bible");
			break;
		}
		case 3:{//Kuron
			System.out.println("You choose Kuron");
			break;
		}
		default:{//exit
			 Main.main(args);
			 break;
		}
		}
	}

}
