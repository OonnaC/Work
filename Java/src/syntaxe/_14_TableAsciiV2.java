package initJava;

import java.io.IOException;

public class _14_TableAsciiV2 {
	
	public static void main (String[] args) throws IOException {
	
		System.out.print("                    ");
		for ( int i = 32 ; i < 256 ; i++ ) {		
			if (i % 10==0) {
				System.out.println();
			}
			if ( i < 100 ) {
				System.out.print("0") ;
			}	
			System.out.print(i + " --> " + (char) (i) + " ");
		}
	 
	}
	
}