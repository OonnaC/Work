package syntaxe;

import java.io.IOException;

public class _15c_Romain3 {
	
	public static String convertion (int nombre, String param1, String param2, String param3) {
		String chaine ="";
		
		switch(nombre){
	        case 1 :
	        case 2 :
	        case 3 :
	            for(int i=1; i <= nombre; i++){
					chaine = chaine + param1;
				}
				break;
			case 4 :
				chaine = param1 + param2;
	            break;
	        case 5 :
	            chaine = param2;
	            break;
	        case 6 :
	        case 7 :
	        case 8 :
				chaine = param2;
	            for(int i=6; i <= nombre; i++){
					chaine = chaine + param1;
				}
	            break;
	        case 9 :
	            chaine = param1 + param3;
	            break;
		}		
		return chaine;
	}
	

	
	
	public static void main (String[] args) throws IOException {
		
		System.out.println("Conversion en Chiffre Romain (1..3999)");
		
		System.out.print("Entrer un entier : ") ;	
		int romain=Clavier.lireInt();

		int millier = romain / 1000;
		int centaine = (romain / 100)%10;
		int dizaine = (romain / 10)%10;
		int unite = romain%10;
		
		for(int i=1; i <= millier; i++){
			System.out.print("M");
		}

		System.out.print(convertion (centaine, "C", "D", "M")) ;
		
		System.out.print(convertion (dizaine, "X", "L", "C")) ;

		System.out.print(convertion (unite, "I", "V", "X")) ;
	
	}

}
