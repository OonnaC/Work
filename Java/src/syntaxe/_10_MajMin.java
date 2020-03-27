package syntaxe;

import java.io.IOException;

public class _10_MajMin {

	public static void main (String[] args) throws IOException {
		 
		char c = ' ' ;
			
		System.out.print("Entrer un caractere : ") ;
			
		c = (char)System.in.read() ;
			
		if (c>='A' && c<='Z') {
			System.out.println("Vous avez entre une majuscule.") ;
		} else {
			if (c>='a' && c<='z') {
				System.out.println("Vous avez entre une minuscule.") ;
			} else {
				System.out.println("Le caractère n'est pas une lettre") ;
			}
		}	
	}

}
							
		  
	 

