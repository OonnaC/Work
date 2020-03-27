package syntaxe;

public class TableASCii {
	
	public static int aord (char str) {
		return (str);
	}
	
	public static void main(String[] args) {
		
		for (int nombre = 33; nombre <= 250; nombre ++) {
			System.out.println("Code ASCII de "+nombre+" : "+ aord(nombre));
		}
	}

}
