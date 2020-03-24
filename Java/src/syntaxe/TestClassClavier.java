package syntaxe;

import java.io.IOException;

public class TestClassClavier {

	public static void main (String[] args) throws IOException {
	
		System.out.print("Entrer un entier : ") ;	
		int monEntier=Clavier.lireInt() ;
		System.out.println("L'entier est : " + monEntier) ;				

		System.out.print("Entrer un float : ") ;
		float monFloat = Clavier.lireFloat() ;			
		System.out.println("Le float est : " + monFloat) ;		
		
		System.out.print("Entrer un double : ") ;
		double monDouble = Clavier.lireDouble() ;			
		System.out.println("Le double est : " + monDouble) ;		

		System.out.print("Entrer une chaine : ") ;
		String maChaine = Clavier.lireString() ;			
		System.out.println("La chaine est : " + maChaine) ;		
	}
	 
}

