Public Class Compte

    Private _soldeActuel As Integer
    'METHODES D'ACCES AUX DONNEES
    Public Property soldeActuel() As Integer
        Get
            Return Me._soldeActuel
        End Get
        Set(ByVal Value As Integer)
            Me._soldeActuel = Value
        End Set
    End Property

    'Private _numeroCompte As Integer
    ''METHODES D'ACCES AUX DONNEES
    'Public Property numeroCompte() As Integer
    '    Get
    '        Return Me._numeroCompte
    '    End Get
    '    Set(ByVal Value As Integer)
    '        Me._numeroCompte = Value
    '    End Set
    'End Property

    'declaration d'une propriete en VS2010 equivalent aux lignes de dessus
    Public Property numeroCompte As Integer

    'LES CONSTRUCTEURS
    'creation du premier constructeur sans argument
    Public Sub New()
        'constructeur : on initialise le solde
        Me.soldeActuel = 25
        'on demande la saisie du numéro de compte methode classique
        'Me.numeroCompte = CInt(Microsoft.VisualBasic.Interaction.InputBox("Entrer le numero du compte"))
        'on demande la saisie du numéro de compte methode objet
        'Me.numeroCompte = Integer.Parse(Microsoft.VisualBasic.Interaction.InputBox("Entrer le numero du compte"))
        'on demande la saisie du numéro de compte methode objet avec controle des donnees
        Try
refaire:
            Me.numeroCompte = Integer.Parse(Microsoft.VisualBasic.Interaction.InputBox("Entrer le nouveau numero du compte"))
        Catch ex As Exception
            MessageBox.Show("Numero incorect...")
            GoTo refaire
        End Try
    End Sub

    'creation d'un deuxieme constructeur avec un argument le solde initial POLYMORPHISME
    Public Sub New(ByVal numeroInitial As Integer)
        Me.soldeActuel = 0
        'on demande la saisie du numéro de compte
        Me.numeroCompte = numeroInitial
    End Sub

    'creation d'un troisieme constructeur avec deux arguments solde initial et numero
    Public Sub New(ByVal numeroInitial As Integer, ByVal soldeInitial As Integer)
        Me.soldeActuel = soldeInitial
        Me.numeroCompte = numeroInitial
    End Sub

    'METHODES DE CALCUL
    Public Sub depot(ByVal somme As Integer)
        Me.soldeActuel += somme
    End Sub

    Public Overridable Sub retrait(ByVal somme As Integer)
        Dim nouveauSolde As Integer
        nouveauSolde = soldeActuel - somme
        If nouveauSolde < 0 Then
            MessageBox.Show("Il manque : " & Math.Abs(nouveauSolde).ToString & " Euro", "Probleme", MessageBoxButtons.OK, MessageBoxIcon.Error)
        Else
            Me.soldeActuel = nouveauSolde
        End If
    End Sub


    'METHODE D'AFFICHAGE
    Private Sub afficheNumeroCompte()
        'Debug.Print("Compte N° : " & CStr(Me.numeroCompte))
        Debug.Print("Compte N° : " & Me.numeroCompte.ToString)
    End Sub

    Private Sub afficheSolde()
        Debug.Print("Solde = " & Me.soldeActuel.ToString)
    End Sub


    'LIAISON AVEC IHM
    Public Overloads Sub afficheIHM(ByVal uneFeuille As Form, ByVal unLabel As Label)
        uneFeuille.Text = Me.numeroCompte.ToString
        unLabel.Text = Me.soldeActuel.ToString
    End Sub


    'METHODE DE DEBUG
    Public Sub afficheDebug()
        Me.afficheNumeroCompte()
        Debug.Indent()
        Me.afficheSolde()
        Debug.Unindent()
    End Sub

    Protected Overrides Sub finalize()
        MessageBox.Show("objet detruit")
    End Sub

End Class

