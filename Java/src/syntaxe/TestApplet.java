package syntaxe;

import java.awt.Graphics;
import java.applet.*;

public class TestApplet extends Applet { 
	
	private static final long serialVersionUID = 1;

	public void paint(Graphics graphics) {
		graphics.drawString("Hello World test...",10,100);
	}

}