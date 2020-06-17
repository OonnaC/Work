Public Class Deposant

    'DEFINITION DES PROPRIETES
    Private _IdDeposant As Integer
    Private _NomDeposant As String
    Private _PrenomDeposant As String
    Private _CiviliteDeposant As EnumCivilite
    Private _lesDemandes As List(Of Demande)
    'utilisation d'une collection contenant des demandes


    'METHODES D'ACCES AUX DONNEES
    Public Property IdDeposant() As Integer
        Get
            Return Me._IdDeposant
        End Get
        Set(ByVal Value As Integer)
            Me._IdDeposant = Value
        End Set
    End Property
    Public Property NomDeposant() As String
        Get
            Return Me._NomDeposant
        End Get
        Set(ByVal Value As String)
            Me._NomDeposant = Value
        End Set
    End Property
    Public Property PrenomDeposant() As String
        Get
            Return Me._PrenomDeposant
        End Get
        Set(ByVal Value As String)
            Me._PrenomDeposant = Value
        End Set
    End Property
    Public Property CiviliteDeposant As EnumCivilite
        Get
            Return Me._CiviliteDeposant
        End Get
        Set(ByVal value As EnumCivilite)
            Me._CiviliteDeposant = value
        End Set
    End Property
    Public Property lesDemandes As List(Of Demande)
        Get
            Return Me._lesDemandes
        End Get
        Set(ByVal value As List(Of Demande))
            Me._lesDemandes = value
        End Set
    End Property

    'LES CONSTRUCTEURS
    Sub New()

    End Sub
    Sub New(ByVal unID As Integer, ByVal unNom As String, ByVal unPrenom As String, ByVal uneCivilite As EnumCivilite, ByVal desDemandes As List(Of Demande))
        Me.IdDeposant = unID
        Me.NomDeposant = unNom
        Me.PrenomDeposant = unPrenom
        Me.CiviliteDeposant = uneCivilite
        Me.lesDemandes = desDemandes
    End Sub

    Public Overrides Function ToString() As String
        Return "N°" & Me.IdDeposant.ToString & " - " & Me.CiviliteDeposant.ToString & " " & Me.NomDeposant & " " & Me.PrenomDeposant
    End Function

    'METHODE DE DEBUGAGE
    Public Sub afficheDebug()
        Debug.Print(Me.ToString)
    End Sub

    'METHODE D AFFICHAGE
    Public Sub afficheConsole()
        Console.WriteLine("Deposant N°" & Me.IdDeposant.ToString & " " & Me.CiviliteDeposant.ToString & " " & Me.NomDeposant.ToString & " " & Me.PrenomDeposant.ToString)

        For Each uneDemande As Demande In Me.lesDemandes
            uneDemande.afficheConsole()

        Next


    End Sub

End Class