Public Class Region

    Private _Numero As Integer
    Private _Nom As String

    'METHODES D'ACCES AUX DONNEES
    Public Property Numero() As Integer
        Get
            Return Me._Numero
        End Get
        Set(ByVal Value As Integer)
            Me._Numero = Value
        End Set
    End Property

    Public Property Nom() As String
        Get
            Return Me._Nom
        End Get
        Set(ByVal Value As String)
            Me._Nom = Value
        End Set
    End Property

    'LES CONSTRUCTEURS
    Public Sub New()

    End Sub


End Class
