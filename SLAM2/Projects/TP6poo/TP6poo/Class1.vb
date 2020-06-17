Public Class Compte

    'PROPRIETES
    Private _numeroCompte As Integer
    Private _soldeActuel As Integer


    'METHODE D’ACCES AUX DONNEES
    Public Property numeroCompte() As Integer
        Get
            numeroCompte = Me._numeroCompte
        End Get
        Set(ByVal value As Integer)
            Me._numeroCompte = value
        End Set
    End Property

    Public Property soldeActuel() As Integer
        Get
            soldeActuel = Me._soldeActuel
        End Get
        Set(ByVal value As Integer)
            Me._soldeActuel = value
        End Set
    End Property



    'CONSTRUCTEUR
    Public Sub New()
        Me.numeroCompte = Integer.Parse(Microsoft.VisualBasic.Interaction.InputBox("Entrer le numero de compte"))
        Me.soldeActuel = 100
    End Sub
    Public Sub New(ByVal unNumero As Integer)
        Me.numeroCompte = unNumero
        Me.soldeActuel = 0
    End Sub
    Public Sub New(ByVal unNumero As Integer, ByVal unSolde As Integer)
        Debug.WriteLine("Creation d'un objet...")
        Me.numeroCompte = unNumero
        Me.soldeActuel = unSolde
    End Sub



    'METHODE D'AFFICHAGE
    Private Sub afficheConsoleNumero()
        Console.WriteLine("Compte N° : " & Me.numeroCompte.ToString)
    End Sub
    Private Sub afficheConsoleSolde()
        Console.WriteLine("  -- Solde : " & Me.soldeActuel.ToString)
    End Sub
    Public Sub afficheConsole()
        Me.afficheConsoleNumero()
        Me.afficheConsoleSolde()
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


    'METHODE DE CALCUL
    ''' <summary>
    ''' Permet de deposer une somme sur le compte
    ''' </summary>
    ''' <param name="uneSomme">Somme que l'on desire deposer</param>
    ''' <remarks></remarks>
    Public Sub depot(ByVal uneSomme As Integer)
        Me.soldeActuel += uneSomme
    End Sub
    ''' <summary>
    ''' Permet de deposer une somme sur le compte
    ''' </summary>
    ''' <remarks>affiche un inputbox pour saisir la somme</remarks>
    Public Sub depot()
        Dim uneSomme As Integer = Integer.Parse(Microsoft.VisualBasic.Interaction.InputBox("Entrer la somme", "RETRAIT..."))
        Me.depot(uneSomme)
    End Sub

    ''' <summary>
    ''' Cette methode permet de retirer une somme du compte
    ''' </summary>
    ''' <param name="uneSomme"></param>
    ''' <remarks>Cette methode a ete cree le 21/02/2013 par Erwan Version 1.0
    '''                modifiee le 21/02/2013 a 10:35 par Erwan Version 1.1 
    '''                - On gere le fait que le solde ne peut pas etre negatif 
    ''' </remarks>
    Public Sub retrait(ByVal uneSomme As Integer)
        Dim nouveauSolde As Integer = Me.soldeActuel - uneSomme
        If nouveauSolde < 0 Then
            Console.WriteLine("Il manque : " & Math.Abs(nouveauSolde).ToString & " Euro")
            Console.WriteLine("Press any key to continue...")
            Console.ReadLine()
        Else
            Me.soldeActuel -= uneSomme
        End If
    End Sub
    Public Sub retrait()
        Dim uneSomme As Integer = Integer.Parse(Microsoft.VisualBasic.Interaction.InputBox("Entrer la somme", "RETRAIT..."))
        Me.retrait(uneSomme)
    End Sub
    Public Function fctretrait(ByVal uneSomme As Integer) As Integer
        Dim nouveauSolde As Integer = soldeActuel - uneSomme
        If nouveauSolde < 0 Then
            Return Math.Abs(nouveauSolde)
        Else
            Me.soldeActuel = nouveauSolde
            Return 0
        End If
    End Function

    Public Sub Operation()
        Dim choix As String = Microsoft.VisualBasic.Interaction.InputBox("(D)epot --- (R)etrait)")
        If choix = "D" Then
            depot()
        Else
            retrait()
        End If
    End Sub


    'METHODE DE DEBUGAGE
    Public Sub afficheDebug()
        Debug.WriteLine("COMPTE N° : " & Me.numeroCompte.ToString)
        Debug.Indent()
        Debug.WriteLine("Solde : " & Me.soldeActuel.ToString)
        Debug.Unindent()
    End Sub


    'DESTRUCTEUR
    Protected Overrides Sub Finalize()
        Debug.WriteLine("Destruction de l'objet...")
        MyBase.Finalize()
    End Sub
End Class
