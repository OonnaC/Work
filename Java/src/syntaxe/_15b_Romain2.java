package syntaxe;

import java.io.IOException;

public class _15b_Romain2 {

	public static void main (String[] args) throws IOException {
		String chaine ="";
		
		System.out.print("Entrer un chiffre : ") ;	
		int unite=Clavier.lireInt();
		
		switch(unite){
	        case 1 :
	        case 2 :
	        case 3 :
	            for(int i=1; i <= unite; i++){
					chaine = chaine + "I";
				}
				break;
			case 4 :
				chaine = "IV";
	            break;
	        case 5 :
	            chaine = "V";
	            break;
	        case 6 :
	        case 7 :
	        case 8 :
				chaine = "V";
	            for(int i=6; i <= unite; i++){
					chaine = chaine + "I";
				}
	            break;
	        case 9 :
	            chaine = "IX";
	            break;
		}
		
		System.out.println("En romain : " + chaine) ;				
	
	}
	 
}

