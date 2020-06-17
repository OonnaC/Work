Public Class Article

    'PROPRIETES

    Private _Designation As Integer
    Private _PrixUnitaire As Integer
    Private _Quantite As Integer
    Private _Reference As Integer

    'METHODES D'ACCES AUX DONNEES

    Public Property Designation() As String
        Get
            Designation = Me._Designation
        End Get
        Set(ByVal value As String)
            Me._Designation = value
        End Set
    End Property

    Public Property PrixUnitaire() As Double
        Get
            PrixUnitaire = Me._PrixUnitaire
        End Get
        Set(ByVal value As Double)
            Me._PrixUnitaire = value
        End Set
    End Property

    Public Property Quantite() As Integer
        Get
            Quantite = Me._Quantite
        End Get
        Set(ByVal value As Integer)
            Me._Quantite = value
        End Set
    End Property

    Public Property Reference() As String
        Get
            Reference = Me._Reference
        End Get
        Set(ByVal value As String)
            Me._Reference = value
        End Set
    End Property

    'CONSTRUCTEURS

    Public Sub New()
        Me._Reference = 456
        Me._Designation = "Sandwich"
        Me._PrixUnitaire = 0.7
        Me._Quantite = 2
    End Sub

    Public Sub New(ByVal uneReference As String, ByVal uneDesignation As String)
        Me._Reference = uneReference
        Me._Designation = uneDesignation
        Me._PrixUnitaire = 1
        Me._Quantite = 5
    End Sub

    Public Sub New(ByVal uneDesignation As String, ByVal unPrixUnitaire As Double, ByVal uneQuantite As Integer)
        Me._Reference = 789
        Me._Designation = uneDesignation
        Me._PrixUnitaire = unPrixUnitaire
        Me._Quantite = uneQuantite
    End Sub

    Public Sub New(ByVal uneReference As String, ByVal uneDesignation As String, ByVal unPrixUnitaire As Double, ByVal uneQuantite As Integer)
        Me._Reference = uneReference
        Me._Designation = uneDesignation
        Me._PrixUnitaire = unPrixUnitaire
        Me._Quantite = uneQuantite
    End Sub

    'METHODES AFFICHAGES

    Public Sub afficheConsoleReference() 'Peut mettre Private pour caccher aux yeux de l'utilisateur
        Console.WriteLine("Reference du produit : " & Me.Reference.ToString)
    End Sub
    Public Sub afficheConsoleDesignation()
        Console.WriteLine("Nommage : " & Me.Designation.ToString)
    End Sub
    Public Sub afficheConsolePrixUnitaire()
        Console.WriteLine("Prix du produit à l'unité : " & Me.PrixUnitaire.ToString)
    End Sub
    Public Sub afficheConsoleQuantite()
        Console.WriteLine("Quantité du produit : " & Me.Quantite.ToString)
    End Sub
    Public Sub AfficheConsole()
        Me.afficheConsoleReference()
        Me.afficheConsoleDesignation()
        Me.afficheConsolePrixUnitaire()
        Me.afficheConsoleQuantite()
    End Sub

    'METHODE DE DEBOGUAGE

    Public Sub AfficheDebug()
        Debug.WriteLine("Reference du produit : " & Me.Reference.ToString)
        Debug.Indent()
        Debug.WriteLine("Nommage : " & Me.Designation.ToString)
        Debug.Indent()
        Debug.WriteLine("Prix du produit à l'unité : " & Me.PrixUnitaire.ToString)
        Debug.Unindent()
        Debug.WriteLine("Quantité du produit : " & Me.Quantite.ToString)
        Debug.Unindent()
    End Sub

    'METHODES METIERS

    Public Sub EntreeArticle()

    End Sub

    Public Sub EntreeArticle(ByVal unNombre As Integer)

    End Sub

    Public Sub SortieArticle()

    End Sub

    ''' <summary>
    ''' cette methode permet
    ''' </summary>
    ''' <param name="unNombre">parametre a renseigner</param>
    Public Sub SortieArticle(ByVal unNombre As Integer)

    End Sub

    'DESTRUCTEUR
    Protected Overrides Sub Finalize()
        Debug.WriteLine("Destruction de l'objet...")
        MyBase.Finalize()
    End Sub

End Class
