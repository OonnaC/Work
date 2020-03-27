package syntaxe;

import java.io.IOException;

public class _12a_TestSwitch {

	public static void main (String[] args) throws IOException {
		 
		char c = ' ' ;	
		System.out.print("Entrer un chiffre : ") ;	
		c = (char)System.in.read() ;
		
		switch (c)
		{
		case '0' : 
			System.out.println("Zero") ;
			break ;
		case '1' :
			System.out.println("Un") ;
			break ;
		case '2' : 
			System.out.println("Deux") ;
			break ;
		case '3' : 
			System.out.println("Trois") ;
			break ;
		case '4' : 
			System.out.println("Quatre") ;
			break ;
		case '5' : 
			System.out.println("Cinq") ;
			break ;
		case '6' : 
			System.out.println("Six") ;
			break ;
		case '7' : 
			System.out.println("Sept") ;
			break ;
		case '8' : 
			System.out.println("Huit") ;
			break ;
		case '9' : 
			System.out.println("Neuf") ;
			break ;
		default :
			System.out.println("Ce n'est pas un chiffre...") ;
		}	
	}
	
}

							
		  
	 

