Public Class Form1

    Dim frmForm2 As New Form2()

#Region "Exo commentaire"

    'Mon commentaire...

#End Region

#Region "Exo 17"



#End Region

    Public Sub New()

        ' Cet appel est requis par le concepteur.
        InitializeComponent()

        ' Ajoutez une initialisation quelconque après l'appel InitializeComponent().
        'Me fait référence à un objet de type Form
        Me.Text = "TP VB.NET N°2"
        'modifie le nom de la fenêtre
        'MessageBox.Show("coucou")


    End Sub

    Private Sub Button1_Click(sender As System.Object, e As System.EventArgs) Handles Button1.Click

        MessageBox.Show("Bonjour")
        Console.ReadLine()

    End Sub

    Private Sub Button1_MouseMove(sender As Object, e As System.Windows.Forms.MouseEventArgs) Handles Button1.MouseMove

    End Sub

#Region "Exercice N°17"

    Private Sub Button2_Click(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles Button2.Click
        frmForm2.ShowDialog()
    End Sub

#End Region
End Class
