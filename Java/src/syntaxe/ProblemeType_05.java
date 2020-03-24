package syntaxe;

public class ProblemeType_05 {
	
	public static void main(String [] args)
	{
		// Un nombre réel en double précision
		double NombreReelDouble = 14.75d ;
		// Un nombre réel en simple précision
		float NombreReelSimple = 12.45f ;
		
		double SommeNbreDouble = (14.75d+12.45d);
		double SommeNbreDouble1 = (14.75d+12.45f);
		float SommeNbreSimple = (14.75f+12.45f);
		//float SommeNbreSimple1 = (14.75d+12.45f);
		
		System.out.println("Double : " + NombreReelDouble);
		System.out.println("Simple : " + NombreReelSimple);
		System.out.println("");
		System.out.println("Somme double : " + SommeNbreDouble);
		System.out.println("Somme simple : " + SommeNbreSimple);
		System.out.println("");
		System.out.println("Somme nombre double + nombre simple : " + SommeNbreDouble1);
		/*La somme d'un nombre réel double et d'un nombre réel simple dans une variable float n'est pas supportée
		  Cela étant du au fait que le nombre réel double est trop grand/a un spectre trop large par rapport au nombre
		  réel simple.*/
		//System.out.println("Somme nombre double + nombre simple : " + SommeNbreSimple1);

	}

}
