Public Class Parking

    'PROPRIETES
    Private _nom As String
    Private _placesLibres As Integer
    Private _placesOccupees As Integer


    'METHODE D’ACCES AUX DONNEES
    Public Property nom() As String
        Get
            nom = Me._nom
        End Get
        Set(ByVal value As String)
            Me._nom = value
        End Set
    End Property
    Public Property placesLibres() As Integer
        Get
            placesLibres = Me._placesLibres
        End Get
        Set(ByVal value As Integer)
            Me._placesLibres = value
        End Set
    End Property

    Public Property placesOccupees() As Integer
        Get
            placesOccupees = Me._placesOccupees
        End Get
        Set(ByVal value As Integer)
            Me._placesOccupees = value
        End Set

    End Property
    'CONSTRUCTEURS

    Public Sub New()
        Me.nom = "Cassandre"
        Me.placesLibres = 2
        Me.placesOccupees = 3
    End Sub

    Public Sub New(ByVal unNom As String)
        Me.nom = unNom
        Me.placesLibres = 0
        Me.placesOccupees = 1

    End Sub
    Public Sub New(ByVal unNom As String, ByVal unePlaceNonPrise As Integer)
        Me.nom = unNom
        Me.placesLibres = unePlaceNonPrise
        Me.placesOccupees = 0

    End Sub
    Public Sub New(ByVal unNom As String, ByVal unePlaceNonPrise As Integer, ByVal unePlacePrise As Integer)
        Me.nom = unNom
        Me.placesLibres = unePlaceNonPrise
        Me.placesOccupees = unePlacePrise

    End Sub
    'METHODES AFFICHAGES

    Public Sub afficheConsoleNom() 'Peut mettre Private pour caccher aux yeux de l'utilisateur
        Console.WriteLine("Nom du parking : " & Me.nom.ToString)
    End Sub
    Public Sub afficheConsolePlacesLibres()
        Console.WriteLine("Places libres : " & Me.placesLibres.ToString)
    End Sub
    Public Sub afficheConsolePlacesOccupees()
        Console.WriteLine("Places occupées : " & Me.placesOccupees.ToString)
    End Sub
    Public Sub afficheConsole()
        Me.afficheConsoleNom()
        Me.afficheConsolePlacesLibres()
        Me.afficheConsolePlacesOccupees()
    End Sub

    'METHODE DE DEBOGUAGE
    Public Sub afficheDebug()
        Debug.WriteLine("Nom du parking : " & Me.nom.ToString)
        Debug.Indent()
        Debug.WriteLine("Nombre de places libres : " & Me.placesLibres.ToString)
        Debug.Indent()
        Debug.WriteLine("Nombre de places occupées : " & Me.placesOccupees.ToString)
        Debug.Unindent()
    End Sub

    'METHODES METIERS
    ''' <summary>
    ''' Cette fonction permet de savoir si le parking est complet
    ''' </summary>
    ''' <returns>Booleen True si complet et False sinon</returns>
    ''' <remarks></remarks>
    Public Function complet()
        Return Me.placesLibres = 0
    End Function



    ''' <summary>
    ''' Cette fonction permet de savoir si le parking est vide
    ''' </summary>
    ''' <returns>Booleen True si complet et False sinon</returns>
    ''' <remarks></remarks>
    Public Function vide()
        Return Me.placesOccupees = 0
    End Function


    ''' <summary>
    ''' Cette methode permet l'entrée d'un véhicule
    ''' </summary>
    ''' <remarks>On teste si le parking n'est pas complet</remarks>
    Public Sub entreeVoiture()
        If Not (Me.complet) Then
            Me.placesLibres = Me.placesLibres - 1
            Me.placesOccupees = Me.placesOccupees + 1
        End If
    End Sub

    'Public Sub entreeVoiture(ByVal unAjout As Integer)
    '    If unAjout < Me.placesLibres Then
    '        Me.placesLibres = Me.placesLibres - unAjout
    '        Me.placesOccupees = Me.placesOccupees + unAjout
    '    End If
    'End Sub
    ''' <summary>
    ''' Ce décompte permet de retirer la sortie de voiture(s) dans l'objet Me.placesOccupees et d'insérer la sortie de voiture(s) du nombre de places libres dans l'objet Me.placesLibres
    ''' </summary>
    ''' <param name="unDecompte">Sortie de voiture(s)</param>
    ''' <remarks>méthode céée le 26/02/2019 par Oonna version 1.0</remarks>
    Public Sub sortieVoiture(ByVal unDecompte As Integer)
        If unDecompte < Me.placesOccupees Then
            Me.placesLibres = Me.placesLibres + unDecompte
            Me.placesOccupees = Me.placesOccupees - unDecompte
        End If
    End Sub

    ''' <summary>
    ''' Cette methode permet la sortie d'un vehicule
    ''' </summary>
    ''' <remarks>On teste si le parking n'est pas vide</remarks>
    Public Sub sortieVoiture()
        If Not (Me.vide) Then
            Me.placesLibres = Me.placesLibres + 1
            Me.placesOccupees = Me.placesOccupees - 1
        End If
    End Sub

    'DESTRUCTEUR
    Protected Overrides Sub Finalize()
        Debug.WriteLine("Destruction de l'objet...")
        MyBase.Finalize()
    End Sub

    Sub entreeVoiture(ByVal uneOperation As Integer)
        Throw New NotImplementedException
    End Sub

End Class
