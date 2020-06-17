
Public Class Demande

    'DEFINITION DES PROPRIETES
    Private _IdDemande As Integer
    Private _DateDemande As Date
    Private _LocaliteDemande As String
    Private _AvisDemande As EnumAvis

    'METHODES D'ACCES AUX DONNEES
    Public Property IdDemande() As Integer
        Get
            Return Me._IdDemande
        End Get
        Set(ByVal Value As Integer)
            Me._IdDemande = Value
        End Set
    End Property
    Public Property DateDemande() As Date
        Get
            Return Me._DateDemande
        End Get
        Set(ByVal Value As Date)
            Me._DateDemande = Value
        End Set
    End Property
    Public Property LocaliteDemande() As 
        Get
            Return Me._LocaliteDemande
        End Get
        Set(ByVal Value As )
            Me._LocaliteDemande = Value
        End Set
    End Property
    Public Property AvisDemande As 
        Get
            Return Me._AvisDemande
        End Get
        Set(ByVal value As )
            Me._AvisDemande = value
        End Set
    End Property

    'LES CONSTRUCTEURS
    Sub New()

    End Sub

    Sub New(ByVal unId As Integer, ByVal uneDate As Date, ByVal uneLocalite As String, ByVal unAvis As EnumAvis)
       
    End Sub


    Public Overrides Function ToString() As String
        Return "Demande N°" & Me.IdDemande & " Du " & Me.DateDemande.ToString & " A " & Me.LocaliteDemande & " Avis : " & Me.AvisDemande.ToString
    End Function

    'METHODE DE DEBUGAGE
    Public Sub afficheDebug()
        Debug.Print(Me.ToString)
    End Sub

    'METHODE D AFFICHAGE
    Public Sub afficheConsole()
        Console.WriteLine("  --> " & Me.ToString)
    End Sub
End Class
