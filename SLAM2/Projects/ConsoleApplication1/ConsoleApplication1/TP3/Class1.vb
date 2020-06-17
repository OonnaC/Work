Public Class leCompte



    'PROPRIETES
    Private _soldeActuel As Integer
    Private _numeroCompte As Integer

    'METHODE D’ACCES AUX DONNEES
    Public Property soldeActuel() As Integer
        Get
            soldeActuel = Me._soldeActuel
        End Get
        Set(ByVal value As Integer)
            Me._soldeActuel = value
        End Set

    End Property

    Public Property numeroCompte() As Integer
        Get
            numeroCompte = Me._numeroCompte
        End Get
        Set(ByVal value As Integer)
            Me._numeroCompte = value
        End Set

    End Property


    'METHODE D'AFFICHAGE
    Private Sub afficheConsolenumero()
        Console.WriteLine("COMPTE N° : " & Me.numeroCompte.ToString)
    End Sub
    Private Sub afficheConsolesoldeactu()
        Console.WriteLine("Solde : " & Me.soldeActuel.ToString)
    End Sub
    Public Sub afficheConsole()

        Me.afficheConsolenumero()
        Me.afficheConsolesoldeactu()

    End Sub



    'Methode de debbug

    Public Sub afficheDebug()
        Debug.WriteLine("COMPTE N° : " & Me.numeroCompte.ToString)
        Debug.Indent()
        Debug.WriteLine("Solde : " & Me.soldeActuel.ToString)
        Debug.Unindent()
    End Sub


    'CONSTRUCTEURS

    Public Sub New()

        Me.numeroCompte = 89
        Me.soldeActuel = 2000

    End Sub

 

    Public Sub New(ByVal unNumero As Integer)

        Me.numeroCompte = 56
        Me.soldeActuel = 0

    End Sub

    'METHODE D'UTILISATEURS

    ''' <summary>
    ''' Permet de deposer une somme sur ce compte
    ''' </summary>
    ''' <param name="uneSomme"> somme que l'on desire deposer </param>
    ''' <remarks></remarks>
    Public Sub depot(ByVal uneSomme As Integer)


        Me.soldeActuel += uneSomme


    End Sub
    ''' <summary>
    ''' Permet de retirer une somme sur ce compte
    ''' </summary>
    ''' <param name="unretrait"> montant que l'on desire retirer </param>
    ''' <remarks></remarks>
    Public Sub retrait(ByVal unretrait As Integer)


        Me.soldeActuel -= unretrait


    End Sub





End Class
