
Public Class ClassCompteEpargne
    Inherits ClassCompte

    Private _plafondAutorise As Integer
    Private _tauxInteret As Integer

    'METHODES D'ACCES AUX DONNEES
    Public Property plafondAutorise As Integer
        Get
            Return Me._plafondAutorise
        End Get
        Set(ByVal value As Integer)
            Me._plafondAutorise = value
        End Set
    End Property

    Public Property tauxInteret As Integer
        Get
            Return Me._tauxInteret
        End Get
        Set(ByVal value As Integer)
            Me._tauxInteret = value
        End Set
    End Property

    'CONSTRUCTEURS
    Sub New()
        'on utilise le methode new de Compte sans argument HERITAGE
        MyBase.New()
    End Sub

    Sub New(ByVal soldeActuel As Integer)
        MyBase.New(soldeActuel)
    End Sub

    Sub New(ByVal soldeActuel As Integer, ByVal numeroCompte As Integer)
        MyBase.New(soldeActuel, numeroCompte)
    End Sub

    Sub New(ByVal soldeActuel As Integer, ByVal numeroCompte As Integer, ByVal plafondAutorise As Integer)
        MyBase.New(soldeActuel, numeroCompte)
        Me.plafondAutorise = 5000
    End Sub

    Sub New(ByVal soldeActuel As Integer, ByVal numeroCompte As Integer, ByVal plafondAutorise As Integer, ByVal tauxInteret As Integer)
        MyBase.New(soldeActuel, numeroCompte)
        Me.plafondAutorise = 5000
        Me.tauxInteret = 4
    End Sub

    'METHODE DE DEBOGAGE
    Public Sub affichePlafond()
        Debug.Print("Plafond : " & Me.plafondAutorise.ToString)
    End Sub
    Public Sub afficheTaux()
        Debug.Print("Taux : " & Me.tauxInteret.ToString)
    End Sub
    Public Sub afficheDebugEpargne()

        MyBase.afficheDebug()
        Me.affichePlafond()
        Me.afficheTaux()
        Debug.Unindent()

    End Sub

    'METHODES DE CALCUL
    Public Sub calculInteret()

    End Sub

    Public Sub depot()

    End Sub

End Class
