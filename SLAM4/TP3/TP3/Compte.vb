Public Class Compte
    'PROPRIETES
    Private _soldeActuel As Integer
    Private _numeroCompte As Integer


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
    'CONSTRUCTEURS

    Public Sub New() 'Parenthèse = signature; il contient des paramètres diff. et un nombre de paramètres diff.
        Me.numeroCompte = 1234
        Me.soldeActuel = 100
    End Sub

    Public Sub New(ByVal unNumero As Integer)
        Me.numeroCompte = unNumero
        Me.soldeActuel = 0

    End Sub
    Public Sub New(ByVal unNumero As Integer, ByVal unSolde As Integer)
        Me.numeroCompte = unNumero
        Me.soldeActuel = unSolde

    End Sub

    'METHODES AFFICHAGES

    Public Sub afficheConsoleNumero() 'Peut mettre Private pour caccher aux yeux de l'utilisateur
        Console.WriteLine("Compte N° : " & Me.numeroCompte.ToString)
    End Sub
    Public Sub afficheConsoleSolde()  'Peut mettre Private pour caccher aux yeux de l'utilisateur
        Console.WriteLine("Solde : " & Me.soldeActuel.ToString)
    End Sub
    Public Sub afficheConsole()
        Me.afficheConsoleNumero()
        Me.afficheConsoleSolde()
    End Sub

    'METHODE DE DEBOGUAGE
    Public Sub afficheDebug()
        Debug.WriteLine("COMPTE N° : " & Me.numeroCompte.ToString)
        Debug.Indent()
        Debug.WriteLine("Solde : " & Me.soldeActuel.ToString)
        Debug.Unindent()
    End Sub

    'METHODES METIERS
    ''' <summary>
    ''' Cette somme permet de déposer une somme dans l'objet
    ''' </summary>
    ''' <param name="montant">somme déposée</param>
    ''' <remarks>méthode céée le 25/02/2019 par oonna version 1.0</remarks>
    Public Sub depot(ByVal montant As Integer)
        Me.soldeActuel = Me.soldeActuel + montant

    End Sub
    Public Sub retrait(ByVal montant As Integer)
        Me.soldeActuel = Me.soldeActuel - montant
    End Sub
    Public Sub depot()
        Me.soldeActuel += Integer.Parse(InputBox("Entrer la somme", "DEPOT..."))
    End Sub
    Public Sub retrait()
        Me.soldeActuel -= Integer.Parse(InputBox("Entrer la somme", "RETRAIT..."))
    End Sub
End Class
