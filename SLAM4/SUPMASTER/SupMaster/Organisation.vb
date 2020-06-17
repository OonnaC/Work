Public Class Organisation

    Private _Nom As String
    Private _Adresse As String
    'utilisation d'une collection typee contenant uniquement des visites
    Private _LesVisites As New List(Of Visite)

    'METHODES D'ACCES AUX DONNEES
    Public Property Nom() As String
        Get
            Return Me._Nom
        End Get
        Set(ByVal Value As String)
            Me._Nom = Value
        End Set
    End Property

    Public Property Adresse() As String
        Get
            Return Me._Adresse
        End Get
        Set(ByVal Value As String)
            Me._Adresse = Value
        End Set
    End Property

    Public Property LesVisites() As List(Of Visite)
        Get
            Return Me._LesVisites
        End Get
        Set(ByVal Value As List(Of Visite))
            Me._LesVisites = Value
        End Set
    End Property

    'LES CONSTRUCTEURS
    'creation du constructeur sans argument
    Public Sub New()
        Me.LesVisites = New List(Of Visite)
    End Sub

    Public Sub New(ByVal unNom As String, ByVal uneAdresse As String)
        Me.Nom = unNom
        Me.Adresse = uneAdresse
        Me.LesVisites = New List(Of Visite)
    End Sub

    Public Sub AfficheConsole()
        'Question Numero 5
        Console.WriteLine("Organisation: " & Me.Nom.ToString)
        Console.WriteLine("Adresse: " & Me.Adresse.ToString)
        Console.WriteLine(" ")
        Console.WriteLine("Liste des visites:")

        For Each uneVisite As Visite In Me.LesVisites
            Console.WriteLine(uneVisite.ToString)
        Next

    End Sub

    Public Function VisitesAFaire() As List(Of Visite)
        'Question Numero 6
        'créer une collection vide
        'parcours la collect
        'Si
        'Return
        Dim lesVisitesAFaire As New List(Of Visite)

        lesVisitesAFaire.Clear()

        For Each uneVisite As Visite In Me.LesVisites
            If uneVisite.DateVisite >= Date.Today Then
                lesVisitesAFaire.Add(uneVisite)
            End If
        Next


    End Function

End Class
