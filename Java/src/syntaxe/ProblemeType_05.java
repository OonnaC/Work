package syntaxe;

public class ProblemeType_05 {
	
	public static void main(String [] args)
	{
		// Un nombre r�el en double pr�cision
		double NombreReelDouble = 14.75d ;
		// Un nombre r�el en simple pr�cision
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
		/*La somme d'un nombre r�el double et d'un nombre r�el simple dans une variable float n'est pas support�e
		  Cela �tant du au fait que le nombre r�el double est trop grand/a un spectre trop large par rapport au nombre
		  r�el simple.*/
		//System.out.println("Somme nombre double + nombre simple : " + SommeNbreSimple1);

	}

}
