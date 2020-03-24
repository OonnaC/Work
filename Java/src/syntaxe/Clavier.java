package syntaxe;

//classe fournissant des fonctions de lecture au clavier
import java.io.* ;

public class Clavier { 
	
	
	// lecture d置ne chaine
	public static String lireString ()  { 
		String ligne_lue = null ; // valeur a lire
		try { 
			InputStreamReader lecteur = new InputStreamReader (System.in) ;
			BufferedReader entree = new BufferedReader (lecteur) ;
			ligne_lue = entree.readLine() ;
		}
		catch (IOException err) { 
			System.exit(0) ;
		}

		return ligne_lue ;
	}
	
	
	// lecture d置n float
	public static float lireFloat () { 
		float x=0 ; // valeur a lire
		try { 
			String ligne_lue = lireString() ;
			x = Float.parseFloat(ligne_lue) ;
		}
		catch (NumberFormatException err) { 
			System.out.println ("*** Erreur de donnee ***") ;
			System.exit(0) ;
		}
	
		return x ;
	}
	
	
	// lecture d置n double
	public static double lireDouble () { 
		double x=0 ; // valeur a lire
		try { 
			String ligne_lue = lireString() ;
			x = Double.parseDouble(ligne_lue) ;
		}
		catch (NumberFormatException err) { 
			System.out.println ("*** Erreur de donnee ***") ;
			System.exit(0) ;
		}
		return x ;
	}
	
	
	// lecture d置n int
	public static int lireInt () { 
		int n=0 ; // valeur a lire
		try { 
			String ligne_lue = lireString() ;
			n = Integer.parseInt(ligne_lue) ;
		}
		catch (NumberFormatException err) { 
			System.out.println ("*** Erreur de donnee ***") ;
			System.exit(0) ;
		}
		return n ;
	}
	
	
}