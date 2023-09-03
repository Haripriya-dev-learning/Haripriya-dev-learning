package library;
import java.util.Scanner;
public class Journal{
static Scanner sc=new Scanner(System.in);
public static void m2(String[] args) {
	
	System.out.println("\t\t\tWelcome to Journal Department");
	System.out.println("Select the Journal");
	System.out.println("1.Comedy\n2.Horror\n3.Romantic\n4.Exit");
	int input=sc.nextInt();
	switch(input){
	case 1:{//Comedy
		System.out.println("You choose Comedy");
		break;
	}
	case 2:{//Horror
		System.out.println("You choose Horror");
		break;
	}
	case 3:{//Romantic
		System.out.println("You choose Romantic");
		break;
	}
	default:{//exit
		 Main.main(args);
		 break;
	}
	}
}


}

