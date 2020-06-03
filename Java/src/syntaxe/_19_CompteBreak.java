package syntaxe;

import java.io.IOException;

public class _19_CompteBreak {

	public static void main (String[] args) throws IOException {
		 
		int i ;
		
		for (i = -5 ; i <= 5 ; i++) {
			if (i == 0)
				break ;
			System.out.println("I = " + i );
		}	
	}
	
}
