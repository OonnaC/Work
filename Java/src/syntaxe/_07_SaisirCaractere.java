package syntaxe;

import java.io.IOException;

public class _07_SaisirCaractere {

	public static void main (String[] args) throws IOException {
		 
		char c = ' ' ;
			
		System.out.print("Entrer un caractere : ") ;
			
		c = (char)System.in.read() ;
			
		System.out.println("Le caractere entre est : " + c) ;					
		   
	}
	 
}

