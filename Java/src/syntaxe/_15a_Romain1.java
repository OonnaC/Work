package syntaxe;

import java.io.IOException;

public class _15a_Romain1 {

	public static void main (String[] args) throws IOException {
		String chaine ="";
		
		System.out.print("Entrer un chiffre : ") ;	
		int unite=Clavier.lireInt();
		
		switch(unite){
	        case 1 :
		    	chaine ="I";
		    	break;
	        case 2 :
		    	chaine ="II";
		    	break;
	        case 3 :
		    	chaine ="III";
		    	break;
			case 4 :
				chaine = "IV";
	            break;
	        case 5 :
	            chaine = "V";
	            break;
	        case 6 :
		    	chaine ="VI";
		    	break;
	        case 7 :
		    	chaine ="VII";
		    	break;
	        case 8 :
		    	chaine ="VIII";
		    	break;
	        case 9 :
	            chaine = "IX";
	            break;
		}
		
		System.out.println("En romain : " + chaine) ;				
	
	}
	 
}

