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

    Private _numeroCompte As Integer
    ''METHODES D'ACCES AUX DONNEES
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
        Me.soldeActuel = 0
        'on demande la saisie du numéro de compte methode classique
        'Me.numeroCompte = CInt(Microsoft.VisualBasic.Interaction.InputBox("Entrer le numero du compte"))
        'on demande la saisie du numéro de compte methode objet
        'Me.numeroCompte = Integer.Parse(Microsoft.VisualBasic.Interaction.InputBox("Entrer le numero du compte"))
        'on demande la saisie du numéro de compte methode objet avec controle des donnees
        Try
refaire:
            Me.numeroCompte = Integer.Parse(Microsoft.VisualBasic.Interaction.InputBox("Entrer le nouveau numero du compte"))
        Catch ex As Exception
            'MsgBox.Show("Numero incorect...")
            GoTo refaire
        End Try
    End Sub

    'creation d'un deuxieme constructeur avec un argument le solde initial POLYMORPHISME
    Public Sub New(ByVal numeroInitial As String)
        Me.soldeActuel = 0
        'on demande la saisie du numéro de compte
        Me.numeroCompte = numeroInitial
    End Sub

    'creation du premier constructeur avec deux arguments solde initial et numero
    Public Sub New(ByVal numeroInitial As String, ByVal soldeInitial As Integer)
        Me.soldeActuel = soldeInitial
        Me.numeroCompte = numeroInitial
        Debug.WriteLine("...COMPTE INSTANCIE...")
    End Sub



    'METHODES DE CALCUL

    ''' <summary>
    ''' Permet de deposer une somme sur le compte
    ''' </summary>
    ''' <param name="uneSomme"> somme que l'on desire deposer </param>
    ''' <remarks></remarks>
    Public Sub depot(ByVal uneSomme As Integer)
        Me.soldeActuel += uneSomme
    End Sub

    Public Overridable Sub retrait(ByVal somme As Integer)
        Dim nouveauSolde As Integer
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
        Console.Write("Compte N° : " & Me.numeroCompte)
    End Sub

    Private Sub afficheConsoleSolde()
        Console.Write("  -- Solde = " & Me.soldeActuel.ToString)
    End Sub

    Public Sub afficheConsole()
        Me.afficheConsoleNumero()
        Me.afficheConsoleSolde()
        Console.WriteLine()
    End Sub



    'METHODE DE DEBUG
    Private Sub afficheNumeroCompte()
        'Debug.Print("Compte N° : " & CStr(Me.numeroCompte))
        Debug.Print("Compte N° : " & Me.numeroCompte)
    End Sub

    Private Sub afficheSolde()
        Debug.Print("Solde = " & Me.soldeActuel.ToString)
    End Sub

    Public Sub afficheDebug()
        Me.afficheNumeroCompte()
        Debug.Indent()
        Me.afficheSolde()
        Debug.Unindent()
    End Sub

    Public Sub afficheIHM()
        Console.ForegroundColor = ConsoleColor.White
        Console.WriteLine()
        Console.WriteLine()
        Console.Write("   Numero de compte : ")
        Console.ForegroundColor = ConsoleColor.Cyan
        Console.Write(Me.numeroCompte.ToString)
        Console.WriteLine()
        Console.ForegroundColor = ConsoleColor.White
        Console.WriteLine()
        Console.WriteLine()
        Console.Write("              Solde : ")
        Console.Write(Me.soldeActuel.ToString & " Euros")
        Console.WriteLine()
        Console.WriteLine()
        Console.WriteLine()
        Console.WriteLine()
        Console.WriteLine()
    End Sub


    'DESTRUCTEUR
    Protected Overrides Sub finalize()
        Console.WriteLine("objet detruit")
    End Sub


    Public Overrides Function ToString() As String
        Return "N°" & Me.numeroCompte & " : " & Me.soldeActuel.ToString & "€"
    End Function

End Class

