package syntaxe;

import java.io.IOException;

public class _14_TableAscii {

	public static void main (String[] args) throws IOException {
		 
		char c = ' ' ;
		int i = 0 ;
		int j = 0 ;
		
		System.out.println("Le caracteres ASCII compris entre 32 et 255 :") ;
		
		System.out.print("            ");
		
		for ( i = 32 ; i < 256 ; i++  )  {
			
			j = (i-32)%10 ;
			if ( j == 0 ) {
				System.out.println() ;
			}	
			c = (char) (i) ;
			if ( i < 100 ) {
				System.out.print("0") ;
			}	
			System.out.print(i + " " + c + " ") ;		
		}		
	}	
}

							
		  
	 

