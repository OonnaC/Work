package syntaxe;

import java.util.Scanner;

public class _09_TestScanner {
	
	public static void main (String[] args)  {
		
		Scanner ch = new Scanner(System.in);
		System.out.print("Veuillez saisir un mot : ");
		String str = ch.nextLine();
		System.out.println("Vous avez saisi : " + str);
		
		ch.close();
	}
	
}
