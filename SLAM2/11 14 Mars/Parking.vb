Public Class Parking

    'PROPRIETES
    Private _nbplacelibre As Integer
    Private _nbplaceoccupe As Integer
    Private _nomparking As String

    'METHODE D’ACCES AUX DONNEES
    Public Property nbplacelibre() As Integer
        Get
            nbplacelibre = Me._nbplacelibre
        End Get
        Set(ByVal value As Integer)
            Me._nbplacelibre = value
        End Set
    End Property

    Public Property nbplaceoccupe() As Integer
        Get
            nbplaceoccupe = Me._nbplaceoccupe
        End Get
        Set(ByVal value As Integer)
            Me._nbplaceoccupe = value
        End Set
    End Property

    Public Property nomparking() As String
        Get
            nomparking = Me._nomparking
        End Get
        Set(ByVal value As String)
            Me._nomparking = value
        End Set
    End Property

    'CONSTRUCTEURS
    Public Sub New()
        Me.nomparking = Microsoft.VisualBasic.Interaction.InputBox("entrer un nom de parking")
        Me.nbplacelibre = Integer.Parse(Microsoft.VisualBasic.Interaction.InputBox("entrer le nombre de place libre"))
        Me.nbplaceoccupe = Integer.Parse(Microsoft.VisualBasic.Interaction.InputBox("entrer le nombre de place occupée"))
    End Sub
    Public Sub New(ByVal unNom As String, ByVal placeLibre As Integer, ByVal placeOccupee As Integer)
        Me.nomparking = unNom
        Me.nbplacelibre = placeLibre
        Me.nbplaceoccupe = placeOccupee
    End Sub
    Public Sub New(ByVal unNom As String, ByVal placeLibre As Integer)
        Me.nomparking = unNom
        Me.nbplacelibre = placeLibre
        Me.nbplaceoccupe = 0
    End Sub

    'METHODE AFFICHAGE
    Private Sub afficheNom()
        Console.WriteLine("Nom de parking : " & Me.nomparking)
    End Sub
    Private Sub afficheNombrePlaceLibre()
        Console.WriteLine("   Nombre de place libre : : " & Me.nbplacelibre.ToString)
    End Sub
    Private Sub afficheNombrePlaceOccupee()
        Console.WriteLine("   Nombre de place occupée : " & Me.nbplaceoccupe.ToString)
    End Sub
    Public Sub afficheConsole()
        Me.afficheNom()
        Me.afficheNombrePlaceLibre()
        Me.afficheNombrePlaceOccupee()
    End Sub

    'METHODE DE DEBUG
    Public Sub afficheDebug()
        Debug.WriteLine("Parking : " & Me.nomparking)
        Debug.Indent()
        Debug.WriteLine("Place libre : " & Me.nbplacelibre.ToString)
        Debug.Unindent()
        Debug.WriteLine("Place occupée : " & Me.nbplaceoccupe.ToString)
        Debug.Unindent()
    End Sub


    'METHODE DE CLASSE

    ''' <summary>
    ''' Cette fonction permet de savoir si le parking est complet
    ''' </summary>
    ''' <returns>Booleen True si complet et False sinon</returns>
    ''' <remarks></remarks>
    Public Function complet()
        Return Me.nbplacelibre = 0
    End Function



    ''' <summary>
    ''' Cette fonction permet de savoir si le parking est vide
    ''' </summary>
    ''' <returns>Booleen True si complet et False sinon</returns>
    ''' <remarks></remarks>
    Public Function vide()
        Return Me.nbplaceoccupe = 0
    End Function




    ''' <summary>
    ''' Cette methode permet l'entree d'un vehicule
    ''' </summary>
    ''' <remarks>On teste si le parking n'est pas complet</remarks>
    Public Sub entre()
        If Not (Me.complet) Then
            Me.nbplacelibre = Me.nbplacelibre - 1
            Me.nbplaceoccupe = Me.nbplaceoccupe + 1
        End If
    End Sub

    ''' <summary>
    ''' Cette methode permet l'entree de plusieurs vehicules
    ''' </summary>
    ''' <param name="unNombre">Nombre de vehicules qui entrent</param>
    ''' <remarks>On teste si l'entree est possible</remarks>
    Public Sub entre(ByVal unNombre As Integer)
        If unNombre < Me.nbplacelibre Then
            Me.nbplacelibre = Me.nbplacelibre - unNombre
            Me.nbplaceoccupe = Me.nbplaceoccupe + unNombre
        End If
    End Sub

    ''' <summary>
    ''' Cette methode permet la sortie d'un vehicule
    ''' </summary>
    ''' <remarks>On teste si le parking n'est pas vide</remarks>
    Public Sub sortie()
        If Not (Me.vide) Then
            Me.nbplacelibre = Me.nbplacelibre + 1
            Me.nbplaceoccupe = Me.nbplaceoccupe - 1
        End If
    End Sub

    ''' <summary>
    ''' Cette methode permet la sortie de plusieurs vehicules
    ''' </summary>
    ''' <param name="unNombre">Nombre de vehicules qui sortent</param>
    ''' <remarks>On teste si la sortie est possible</remarks>
    Public Sub sortie(ByVal unNombre As Integer)
        If unNombre < Me.nbplaceoccupe Then
            Me.nbplacelibre = Me.nbplacelibre + unNombre
            Me.nbplaceoccupe = Me.nbplaceoccupe - unNombre
        End If
    End Sub


End Class



