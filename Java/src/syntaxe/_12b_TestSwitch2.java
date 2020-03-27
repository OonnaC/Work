package syntaxe;


public class _12b_TestSwitch2 {
	
	public static void main (String[] args)  {
					
		System.out.print("Entrer un entier : ") ;	
		int monEntier=Clavier.lireInt();
		
		if (monEntier>100 || monEntier <0) {
			System.err.println("Impossible...");
			System.exit(0);
			
		}
	
		int decimal = monEntier /10 ;
		int unite = monEntier % 10 ;
		
		switch (decimal)
		{
			case 0 :
				switch (unite)
				{
					case 1 :
						System.out.println("Un") ;
						break ;
					case 2 : 
						System.out.println("Deux") ;
						break ;
					case 3 : 
						System.out.println("Trois") ;
						break ;
					case 4 : 
						System.out.println("Quatre") ;
						break ;
					case 5 : 
						System.out.println("cinq") ;
						break ;
					case 6 : 
						System.out.println("Six") ;
						break ;
					case 7 : 
						System.out.println("Sept") ;
						break ;
					case 8 : 
						System.out.println("Huit") ;
						break ;
					case 9 : 
						System.out.println("Neuf") ;
						break ;
				}
				break ;
			case 1 :
				switch (unite)
				{
					case 1 :
						System.out.println("Onze") ;
						break ;
					case 2 : 
						System.out.println("Douze") ;
						break ;
					case 3 : 
						System.out.println("Treize") ;
						break ;
					case 4 : 
						System.out.println("Quatorze") ;
						break ;
					case 5 : 
						System.out.println("Quinze") ;
						break ;
					case 6 : 
						System.out.println("Seize") ;
						break ;
					case 7 : 
						System.out.println("Dix sept") ;
						break ;
					case 8 : 
						System.out.println("Dix huit") ;
						break ;
					case 9 : 
						System.out.println("Dix neuf") ;
						break ;
				}
				break;
			case 2 : 
				System.out.print("Vingt ") ;
				break ;
			case 3 : 
				System.out.print("Trente ") ;
				break ;
			case 4 : 
				System.out.print("Quarante ") ;
				break ;
			case 5 : 
				System.out.print("Cinquante ") ;
				break ;
			case 6 : 
				System.out.print("Soixante ") ;
				break ;
			case 7 : 
				System.out.print("Septente ") ;
				break ;
			case 8 : 
				System.out.print("Octante ") ;
				break ;
			case 9 : 
				System.out.print("Nonente ") ;
				break ;
		}
		

	
	if ((monEntier >20) && (monEntier % 10 != 0))
		switch (unite)
		{
			case 1 :
				System.out.println("et un") ;
				break ;
			case 2 : 
				System.out.println("deux") ;
				break ;
			case 3 : 
				System.out.println("trois") ;
				break ;
			case 4 : 
				System.out.println("quatre") ;
				break ;
			case 5 : 
				System.out.println("cinq") ;
				break ;
			case 6 : 
				System.out.println("six") ;
				break ;
			case 7 : 
				System.out.println("sept") ;
				break ;
			case 8 : 
				System.out.println("huit") ;
				break ;
			case 9 : 
				System.out.println("neuf") ;
				break ;
		}
		
		
	}		
		
}		
		
	

	
	


