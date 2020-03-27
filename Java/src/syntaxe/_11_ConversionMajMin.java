package syntaxe;

import java.io.IOException;

public class _11_ConversionMajMin {

	public static void main (String[] args) throws IOException {
		 
		char c = ' ' ;	
		System.out.print("Entrer un caractere : ") ;	
		c = (char)System.in.read() ;
			
		if (c>='A' && c<='Z') {
			System.out.println("Minuscule : "+ (char)((int) c + 32 )) ;
		} else {
			if (c>='a' && c<='z') {
				System.out.println("Majuscule : "+ (char)((int) c - 32 )) ;
			} else {
				System.out.println(c) ;
			}
		}	
	}

}
							
		  
	 

