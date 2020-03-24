package syntaxe;

//import java.io.IOException;

public class TestFonction_03 {
	
	public static int carre(int x)
	{
		return (x * x); 
		
	}

	public static void main (String[] args){
		
		System.out.print("Entrer un entier : ") ;	
		int monEntier=Clavier.lireInt() ;
		System.out.println("Le carré de cet entier est : " + carre(monEntier)) ;
	}

}
