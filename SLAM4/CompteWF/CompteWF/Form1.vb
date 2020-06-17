'Public Class Form1

'    Dim monCompte As New Compte()


'    Private Sub Label2_Click(sender As System.Object, e As System.EventArgs) Handles Label2.Click

'    End Sub

'    ''' <summary>
'    ''' Mise en place de l'affichage du numéro du compte
'    ''' </summary>
'    ''' <param name="sender"></param>
'    ''' <param name="e"></param>
'    ''' <remarks></remarks>
'    Private Sub Form1_Load(sender As System.Object, e As System.EventArgs) Handles MyBase.Load
'        Me.Text = "Compte N° " & monCompte.numeroCompte
'        lblSolde.Text = monCompte.soldeActuel
'    End Sub
'    ''' <summary>
'    ''' Mise en place de l'afficage des données du compte
'    ''' </summary>
'    ''' <param name="sender"></param>
'    ''' <param name="e"></param>
'    ''' <remarks></remarks>
'    Private Sub afficheNum_Click(sender As System.Object, e As System.EventArgs) Handles MyBase.Click 'MyBase.Click
'        MessageBox.Show("Numéro du compte :" & monCompte.numeroCompte)
'        'Console.ReadLine()

'    End Sub

'    ''' <summary>
'    ''' Mise en place de la modification du numéro du compte
'    ''' </summary>
'    ''' <param name="sender"></param>
'    ''' <param name="e"></param>
'    ''' <remarks></remarks>
'    'Private Sub ModifNum_Click(sender As System.Object, e As System.EventArgs) Handles MyBase.Click
'    '    Form2 form2 = New Form2();
'    '    frmForm2.ShowDialog();

'    'End Sub
'    Private Sub ModifNum_Click(sender As System.Object, e As System.EventArgs)

'        'Me.Text = "Compte N° " & monCompte.numeroCompte
'        'lblSolde.Text = monCompte.soldeActuel

'    End Sub

'    ''' <summary>
'    ''' Mise en place du bouton pour ajouter la somme
'    ''' </summary>
'    ''' <param name="sender"></param>
'    ''' <param name="e"></param>
'    ''' <remarks></remarks>
'    Private Sub ButtonAjout_Click(sender As System.Object, e As System.EventArgs) Handles ButtonAjout.Click
'        monCompte.depot(Integer.Parse(txtInputSomme.Text))
'        lblSolde.Text = monCompte.soldeActuel
'        txtInputSomme.Text = ""

'    End Sub

'    ''' <summary>
'    ''' Mise en place du bouton pour retirer la somme
'    ''' </summary>
'    ''' <param name="sender"></param>
'    ''' <param name="e"></param>
'    ''' <remarks></remarks>
'    Private Sub ButtonRetirer_Click(sender As Object, e As System.EventArgs) Handles ButtonRetirer.Click
'        monCompte.retrait(Integer.Parse(txtInputSomme.Text))
'        lblSolde.Text = monCompte.soldeActuel
'        txtInputSomme.Text = ""

'    End Sub

'End Class
﻿Public Class Form1

#Region "Exercice N°1"

'Dim monCompte1 As New Compte()

'Dim monCompte2 As New Compte(123)

'Dim monCompte3 As New Compte(456, 100)


#End Region

Dim monCompte As Compte


Private Sub Form1_FormClosed(ByVal sender As Object, ByVal e As System.Windows.Forms.FormClosedEventArgs) Handles Me.FormClosed
    monCompte = Nothing
End Sub

Private Sub Form1_Load(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles MyBase.Load
    monCompte = New Compte()

    'Exercice N°2'
    '------------'
    'monCompte.afficheDebug()
    'Debug.Print("depot 100")
    'monCompte.depot(100)
    'monCompte.afficheDebug()
    'Debug.Print("retrait 50")
    'monCompte.retrait(50)
    'monCompte.afficheDebug()

    rafraichirIHM()
End Sub

Private Sub btnNumero_Click(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles btnNumero.Click
    MessageBox.Show("Numéro du compte : " & monCompte.numeroCompte.ToString, Me.Text)
End Sub

Private Sub btnAjouter_Click(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles btnAjouter.Click
    Dim uneSomme As Integer
    Try
        uneSomme = Integer.Parse(Me.txtInputSomme.Text)
    Catch ex As Exception
        MessageBox.Show("Saisir un nombre...")
        Me.txtInputSomme.Text = ""
        Me.txtInputSomme.Focus()
        Exit Sub
    End Try
    monCompte.depot(uneSomme)
    Me.txtInputSomme.Text = ""
    rafraichirIHM()
End Sub

Private Sub btnRetirer_Click(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles btnRetirer.Click
    Dim uneSomme As Integer
    Try
        uneSomme = Integer.Parse(Me.txtInputSomme.Text)
    Catch ex As Exception
        MessageBox.Show("Saisir un nombre...")
        Me.txtInputSomme.Text = ""
        Me.txtInputSomme.Focus()
        Exit Sub
    End Try
    monCompte.retrait(uneSomme)
    Me.txtInputSomme.Text = ""
    rafraichirIHM()
End Sub

Private Sub btnModif_Click(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles btnModif.Click
    Dim unNumero As Integer
    Try
refaire:
        unNumero = Integer.Parse(Microsoft.VisualBasic.Interaction.InputBox("Entrer le nouveau numero du compte", Me.Text))
    Catch ex As Exception
        MessageBox.Show("Saisir un numero...")
        GoTo refaire
    End Try
    monCompte.numeroCompte = unNumero
    rafraichirIHM()
End Sub

Private Sub rafraichirIHM()
    monCompte.afficheIHM(Me, lblAffSolde)
End Sub


Private Sub Button1_Click(sender As System.Object, e As System.EventArgs)
    MsgBox(txtInputSomme.Text)

End Sub


End Class