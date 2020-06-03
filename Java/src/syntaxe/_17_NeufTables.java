package syntaxe;

import java.io.IOException;

public class _17_NeufTables {

	public static void main (String[] args) throws IOException {
		 
		int i, t1 = 1, t2 = 2, t3 = 3 ;
		
		do {
			System.out.print("Table des : " + t1 + "  ") ;
			System.out.print("Table des : " + t2 + "  ") ;
			System.out.println("Table des : " + t3) ;
			i = 1 ;

			do {
				System.out.print(t1 + "*" + i + "=" + t1*i + "          ") ;
				System.out.print(t2 + "*" + i + "=" + t2*i+ "          ") ;
				System.out.println(t3 + "*" + i + "=" + t3*i+ "          ") ;
			} while ( i++ <10  ) ;

			t1 += 3 ;
			t2 += 3 ;
			t3 += 3 ; 
		} while ( t1 <= 7 ) ;
			
	}

}