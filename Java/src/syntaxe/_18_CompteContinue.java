package syntaxe;

import java.io.IOException;

public class _18_CompteContinue {

	public static void main (String[] args) throws IOException {
		 
		int i ;
		
		for (i = -5 ; i <= 5 ; i++) {
			if (i == 0) {
				//on rentre dans l'exeption et on continue
				//System.out.println("Zero");
				continue ;
			}	
			System.out.println("I = " + i );
		}	
		
		
	}
}	