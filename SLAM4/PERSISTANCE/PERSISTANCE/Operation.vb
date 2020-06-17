Public Class Operation

    'PROPRIETES DE LA CLASSE
    Private _heureOp As Date
    Private _typeOp As TypeOperation
    Private _montantOp As Integer
    Private _libelle As String


    'METHODES D'ACCES AUX DONNEES
    Public Property heureOp() As Date
        Get
            Return Me._heureOp
        End Get
        Set(ByVal Value As Date)
            Me._heureOp = Value
        End Set
    End Property
    Public Property typeOp() As TypeOperation
        Get
            Return Me._typeOp
        End Get
        Set(ByVal Value As TypeOperation)
            Me._typeOp = Value
        End Set
    End Property

    Public Property montantOp() As Integer
        Get
            Return Me._montantOp
        End Get
        Set(ByVal Value As Integer)
            Me._montantOp = Value
        End Set
    End Property

    Public Property libelle() As String
        Get
            Return Me._libelle
        End Get
        Set(ByVal value As String)
            Me._libelle = value
        End Set
    End Property


    'CONSTRUCTEUR
    Public Sub New(ByVal uneDate As Date, ByVal unType As TypeOperation, ByVal unMontant As Integer, ByVal unLibelle As String)
        Me.heureOp = uneDate
        Me.typeOp = unType
        Me.montantOp = unMontant
        Me.libelle = unLibelle
    End Sub

    Public Sub New(ByVal unType As TypeOperation, ByVal unMontant As Integer, ByVal unLibelle As String) 'on renseigne toutes les propriétés de l'objet
        Me.heureOp = Date.Now
        Me.typeOp = unType
        Me.montantOp = unMontant
        Me.libelle = unLibelle
    End Sub

    Public Sub New()

    End Sub


    'METHODE DE DEBUG
    Private Sub afficheHeureOperation()
        Debug.Print("Heure : " & Me.heureOp.ToString)
    End Sub

    Private Sub afficheTypeOperation()
        Debug.Print(Me.typeOp.ToString)
    End Sub

    Private Sub afficheMontantOperation()
        Debug.Print(Me.montantOp.ToString)
    End Sub

    Private Sub afficheLibelleOperation()
        Debug.Print(Me.libelle)
    End Sub

    Public Sub afficheDebug()
        Me.afficheHeureOperation()
        Me.afficheTypeOperation()
        Me.afficheMontantOperation()
        Me.afficheLibelleOperation()
    End Sub

    Public Overrides Function ToString() As String
        Return Me.heureOp.ToString & " " & Me.libelle & " -- " &
               Me.typeOp.ToString & " de " & Me.montantOp.ToString & " Euros"
    End Function


End Class
