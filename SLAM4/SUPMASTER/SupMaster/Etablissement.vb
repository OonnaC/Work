Public Class Etablissement

    Private _Code As String

    'METHODES D'ACCES AUX DONNEES

    Public Property Code() As String
        Get
            Return Me._Code
        End Get
        Set(ByVal Value As String)
            Me._Code = Value
        End Set
    End Property

    'LES CONSTRUCTEURS
    Public Sub New()

    End Sub

End Class
