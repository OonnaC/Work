<Serializable()> Public Class Compte

    Private _soldeActuel As Double
    'METHODES D'ACCES AUX DONNEES
    Public Property soldeActuel() As Double
        Get
            Return Me._soldeActuel
        End Get
        Set(ByVal Value As Double)
            Me._soldeActuel = Value
        End Set
    End Property

    Private _numeroCompte As Integer
    'METHODES D'ACCES AUX DONNEES
    Public Property numeroCompte() As Integer
        Get
            Return Me._numeroCompte
        End Get
        Set(ByVal Value As Integer)
            Me._numeroCompte = Value
        End Set
    End Property

    'declaration d'une propriete en VS2010 equivalent aux lignes de dessus
    'Public Property numeroCompte As String



    'LES CONSTRUCTEURS
    'creation du constructeur sans argument
    Public Sub New()
        'constructeur : on initialise le solde
        Me.soldeActuel = 0.0
        'on demande la saisie du numéro de compte methode classique
        'Me.numeroCompte = CInt(Microsoft.VisualBasic.Interaction.InputBox("Entrer le numero du compte"))
        'on demande la saisie du numéro de compte methode objet
        'Me.numeroCompte = Integer.Parse(Microsoft.VisualBasic.Interaction.InputBox("Entrer le numero du compte"))
        'on demande la saisie du numéro de compte methode objet avec controle des donnees
        Try
refaire:
            Me.numeroCompte = Integer.Parse(Microsoft.VisualBasic.Interaction.InputBox("Entrer le numero du compte"))
        Catch ex As Exception
            'MessageBox.Show("Numero incorect...")
            GoTo refaire
        End Try
    End Sub

    'creation d'un deuxieme constructeur avec un argument le solde initial POLYMORPHISME
    Public Sub New(ByVal numeroInitial As Integer)
        Me.numeroCompte = numeroInitial
        Me.soldeActuel = 0.0
    End Sub

    'creation du premier constructeur avec deux arguments solde initial et numero
    Public Sub New(ByVal numeroInitial As Integer, ByVal soldeInitial As Double)
        Me.numeroCompte = numeroInitial
        Me.soldeActuel = soldeInitial
    End Sub



    'METHODES DE CALCUL

    ''' <summary>
    ''' Permet de deposer une somme sur le compte
    ''' </summary>
    ''' <param name="uneSomme"> somme que l'on desire deposer </param>
    ''' <remarks></remarks>
    Public Overridable Sub depot(ByVal uneSomme As Double)
        Me.soldeActuel += uneSomme
    End Sub

    Public Overridable Sub retrait(ByVal somme As Double)
        Dim nouveauSolde As Double
        nouveauSolde = soldeActuel - somme
        If nouveauSolde < 0 Then
            Console.WriteLine("Il manque : " & Math.Abs(nouveauSolde).ToString & " Euro")
            Console.ReadLine()
        Else
            Me.soldeActuel = nouveauSolde
        End If
    End Sub



    'METHODE D'AFFICHAGE 
    Private Sub afficheConsoleNumero()
        Console.WriteLine(Me.GetType().Name & " : " & Me.numeroCompte.ToString)
    End Sub

    Private Sub afficheConsoleSolde()
        Console.WriteLine("  -- Solde = " & Me.soldeActuel.ToString("0.00"))
    End Sub

    Public Overloads Sub afficheConsole()
        Me.afficheConsoleNumero()
        Me.afficheConsoleSolde()
    End Sub



    'METHODE DE DEBUG
    Private Sub afficheNumeroCompte()
        Debug.Print(Me.GetType().Name & " : " & Me.numeroCompte.ToString)
    End Sub

    Private Sub afficheSolde()
        Debug.Print("Solde = " & Me.soldeActuel.ToString)
    End Sub

    Public Overloads Sub afficheDebug()
        Me.afficheNumeroCompte()
        Debug.Indent()
        Me.afficheSolde()
        Debug.Unindent()
    End Sub



    'DESTRUCTEUR
    Protected Overrides Sub finalize()
        'Microsoft.VisualBasic.Interaction.MsgBox("objet detruit")
    End Sub

End Class

