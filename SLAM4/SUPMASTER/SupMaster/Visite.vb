Public Class Visite

    Private _DateVisite As Date
    Private _Prospecteur As String

    'METHODES D'ACCES AUX DONNEES
    Public Property DateVisite() As Date
        Get
            Return Me._DateVisite
        End Get
        Set(ByVal Value As Date)
            Me._DateVisite = Value
        End Set
    End Property

    'Question Numero 1
    Public Property Prospecteur() As String
        Get
            Return Me._Prospecteur
        End Get
        Set(ByVal value As String)
            Me._Prospecteur = value
        End Set
    End Property


    'LES CONSTRUCTEURS
    Public Sub New()

    End Sub

    'Question Numero 2
    Public Sub New(ByVal uneDateVisite As Date, ByVal unProspecteur As String)
        Me.DateVisite = uneDateVisite
        Me.Prospecteur = unProspecteur
    End Sub


    Public Overrides Function ToString() As String
        Return "Visite du " & Me.DateVisite.ToString("dd/MM/yyyy") & " - Par " & Me.Prospecteur
    End Function


    Public Sub afficheConsole()
        Console.WriteLine(Me.ToString)
    End Sub

End Class
