Public Class Parking


    'PROPRIETES
    Private _PlacesLibres As Integer
    Private _PlacesOccupees As Integer
    Private _Nom As String


    'METHODE D’ACCES AUX DONNEES
    Public Property PlacesLibres() As Integer
        Get
            PlacesLibres = Me._PlacesLibres
        End Get
        Set(ByVal value As Integer)
            Me._PlacesLibres = value
        End Set

    End Property

    Public Property PlacesOccupees() As Integer
        Get
            PlacesOccupees = Me._PlacesOccupees
        End Get
        Set(ByVal value As Integer)
            Me._PlacesOccupees = value
        End Set

    End Property

    Public Property Nom() As String
        Get
            Nom = Me._Nom
        End Get
        Set(ByVal value As String)
            Me._Nom = value
        End Set
    End Property

    'METHODE D'AFFICHAGE
    Private Sub afficheConsoleplaceslibres()
        Console.WriteLine("Nombre de places libres: " & Me.PlacesLibres.ToString)
    End Sub
    Private Sub afficheConsoleplacesoccupees()
        Console.WriteLine("Nombres de places occupées : " & Me.PlacesOccupees.ToString)
    End Sub
    Private Sub afficheConsolenom()
        Console.WriteLine("Nom : " & Me.Nom.ToString)
    End Sub
    Public Sub afficheConsole()
        Me.afficheConsolenom()
        Me.afficheConsoleplaceslibres()
        Me.afficheConsoleplacesoccupees()

    End Sub

    'Methode de debbug

    Public Sub afficheDebug()
        Debug.WriteLine("Nombre de places libres: " & Me.PlacesLibres.ToString)
        Debug.Indent()
        Debug.WriteLine("Nombres de places occupées : " & Me.PlacesOccupees.ToString)
        Debug.Unindent()
        Debug.WriteLine("Nom: " & Me.Nom.ToString)
        Debug.Unindent()
    End Sub


    'CONSTRUCTEURS

    Public Sub New()
        'Me.Nom = String.Parse(Microsoft.VisualBasic.Interaction.InputBox("Entrer votre nom: "))
        Me.PlacesLibres = Integer.Parse(Microsoft.VisualBasic.Interaction.InputBox("Entrer le numero de compte"))
        Me.PlacesOccupees = 0
    End Sub
    Public Sub New(ByVal unNom As Integer)
        Me.Nom = unNom
        Me.PlacesLibres = 1000
        Me.PlacesOccupees = 0
    End Sub
    Public Sub New(ByVal unNom As String, ByVal lesPlacesLibres As Integer, ByVal lesPlacesOccupees As Integer)
        Debug.WriteLine("Creation d'un objet...")
        Me.Nom = unNom
        Me.PlacesLibres = lesPlacesLibres
        Me.PlacesOccupees = lesPlacesOccupees
    End Sub

    'METHODE CALCUL

    ''' <summary>
    ''' Permet d'ajouter une place de libre sur le parking
    ''' </summary>
    ''' <param name="unAjout"> </param>
    ''' <remarks></remarks>
    Public Sub EntreeVoiture(ByVal unAjout As Integer)

        Me.PlacesOccupees += unAjout

        Me.PlacesLibres -= unAjout


    End Sub


    ''' <summary>
    ''' Permet de retirer une place de libre sur le parking
    ''' </summary>
    ''' <param name="unDecompte"></param>
    ''' <remarks></remarks>
    Public Sub SortieVoiture(ByVal unDecompte As Integer)

        Me.PlacesLibres += unDecompte
        Me.PlacesOccupees -= unDecompte



    End Sub


    'Public Sub Operation()
    'Dim choix As String = Microsoft.VisualBasic.Interaction.InputBox("(E)ntree --- (S)ortie)")
    'If choix = "E" Then
    'EntreeVoiture()
    'Else
    'SortieVoiture()
    ' End If
    'End Sub

    'DESTRUCTEUR
    Protected Overrides Sub Finalize()
        Debug.WriteLine("Destruction de l'objet...")
        MyBase.Finalize()
    End Sub

End Class
