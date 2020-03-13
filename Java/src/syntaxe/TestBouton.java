package syntaxe;
import com.ms.wfc.app.*;
import com.ms.wfc.core.*;
import com.ms.wfc.ui.*;
import com.ms.wfc.html.*;

/**
 * Cette classe peut contenir un nombre variable de param�tres sur la ligne de
 * commande. L'ex�cution du programme d�marre avec la m�thode main().
 * Le constructeur de classe est invoqu� uniquement si un objet de type 'Form1'
 * est cr�� dans la m�thode main().
 */
public class Form1 extends Form
{
	public Form1()
	{
		// Requis pour la prise en charge du Concepteur de feuilles Visual J++
		initForm();
		// TODO: Ajoutez le code constructeur apr�s l'appel initForm.
	}/**
	  * Form1 red�finit la disposition afin de nettoyer la
	  * liste des composants.
	  */
	public void dispose()
	{
		super.dispose();
		components.dispose();
	}
	private void button1_click(Object source, Event e)
	{
		label1.setText("Hello World...");
		button1.setVisible(false);
	}
	/**
	 * REMARQUE : le code suivant est requis par le Concepteur de feuilles
	 * Visual J++. Il est possible de le modifier � l'aide de l'�diteur de
	 * feuilles. N'utilisez pas l'�diteur de code pour effectuer cette
	 * modification. */Container components = new Container();Label label1 = new Label();Button button1 = new Button();
	private void initForm()
	{
		this.setText("JAVA Hello World...");
		this.setAutoScaleBaseSize(new Point(5, 13));
		this.setClientSize(new Point(286, 78));
		this.setMaximizeBox(false);
		this.setStartPosition(FormStartPosition.CENTER_SCREEN);
		label1.setFont(new Font("Arial", 14.0f, FontSize.CHARACTERHEIGHT,FontWeight.BOLD, false, false, false, CharacterSet.DEFAULT, 0));
		label1.setForeColor(Color.RED);
		label1.setLocation(new Point(40, 16));
		label1.setSize(new Point(200, 24));
		label1.setTabIndex(0);
		label1.setTabStop(false);
		label1.setText("");
		label1.setBorderStyle(BorderStyle.FIXED_3D);
		label1.setTextAlign(HorizontalAlignment.CENTER);
		button1.setLocation(new Point(104, 48));
		button1.setSize(new Point(75, 23));
		button1.setTabIndex(1);
		button1.setText("Appuyer");
		button1.addOnClick(new EventHandler(this.button1_click));
		this.setNewControls(new Control[] {
				button1,label1});
	}
	/**
	 * Point d'entr�e principal de l'application.
	 *
	 * @param args Tableau de param�tres transmis � l'application
	 * via la ligne de commande.
	 */
	public static void main(String args[])
	{
		Application.run(new Form1());
	}
	
}

