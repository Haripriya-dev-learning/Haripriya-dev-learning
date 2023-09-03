package library;
import java.util.Scanner;
public class Technical {
	static Scanner sc=new Scanner(System.in);
	public static void m1(String[] args) {
		System.out.println("\t\t\tWelcome to Technical Department");
		System.out.println("Select the Language");
		System.out.println("1.Java\n2.SQL\n3.Web-Tech\n4.Selenium\n5.Exit");
		int input=sc.nextInt();
		switch(input){
		case 1:{//java
			System.out.println("You choose java");
			break;
		}
		case 2:{//sql
			System.out.println("You choose SQL");
			break;
		}
		case 3:{//web-tech
			System.out.println("You choose Web-tech");
			break;
		}
		case 4:{//selenium
			System.out.println("You choose Selenium");
			break;
		}
		default:{//exit
			 Main.main(args);
			 break;
		}
		}
	}
	

}
