package library;
import java.util.Scanner;
public class Main {
    static Scanner sc=new Scanner(System.in);
	public static void main(String[] args) {
		
		System.out.println("\t\t\t\"Welcome to Library\"");
		System.out.println("Select the Department");
		System.out.println("1.Technical\n2.Journals\n3.Epics\n4.Exit");
		int n=sc.nextInt();
		switch(n){
		case 1:{//technical
			Technical.m1(args);
			break;
		}
		case 2:{//journals
			Journal.m2(args);
			break;
		}
		case 3:{//epics
			Epics.m3(args);
			break;
		}
		case 4:{//Exit
			System.out.println("Thank You for using Library");
			break;
		}
		default:{//Invalid input
			System.out.println("Sorry There is No Department in this number");
			break;
		}
		}

	}

}
