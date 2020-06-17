Public Class Operation

    Private _heureOp As Date
    'METHODES D'ACCES AUX DONNEES
    Public Property heureOp() As Date
        Get
            Return Me._heureOp
        End Get
        Set(ByVal value As Date)
            Me._heureOp = value
        End Set
    End Property
    Private _libelle As String
    'METHODES D'ACCES AUX DONNEES
    Public Property libelle() As String
        Get
            Return Me._libelle
        End Get
        Set(ByVal value As String)
            Me._libelle = value
        End Set
    End Property
    Private _montantOp As Integer
    'METHODES D'ACCES AUX DONNEES
    Public Property montantOp() As Integer
        Get
            Return Me._montantOp
        End Get
        Set(ByVal value As Integer)
            Me._montantOp = value
        End Set
    End Property
    Private _typeOp As TypeOperation
    'METHODES D'ACCES AUX DONNEES
    Public Property typeOp() As TypeOperation
        Get
            Return Me._typeOp
        End Get
        Set(ByVal value As TypeOperation)
            Me._typeOp = value
        End Set
    End Property


    'LES CONSTRUCTEURS
    Public Sub New()

    End Sub
    'creation d'un deuxieme constructeur avec un argument le solde initial POLYMORPHISME
    Public Sub New(ByVal uneDate As Date, ByVal unType As TypeOperation, ByVal unLibelle As String, ByVal unMontant As Integer )

        Me.heureOp = uneDate
        Me.typeOp = unType
        Me.libelle = unLibelle
        Me.montantOp = unMontant
    End Sub

    Public Sub New(ByVal unType As TypeOperation, ByVal unLibelle As String, ByVal unMontant As Integer)

        Me.heureOp = Date.Now
        Me.typeOp = unType
        Me.libelle = unLibelle
        Me.montantOp = unMontant
    End Sub
    'METHODE DE DEBUG

    Private Sub afficheHeureOperation()
        Debug.Print("Heure : " & Me.heureOp.ToString)
    End Sub

    Private Sub afficheLibelleOperation()
        Debug.Print("Libellé : " & Me.libelle)
    End Sub

    Private Sub afficheMontant()
        Debug.Print("Montant = " & Me.montantOp.ToString)
    End Sub

    Private Sub afficheTypeOperation()
        Debug.Print(" Type de l'opération: " & Me.typeOp.ToString)
    End Sub
    Public Sub afficheDebug()
        Me.afficheHeureOperation()
        'Debug.Unindent()
        Me.afficheLibelleOperation()
        'Debug.Indent()
        Me.afficheMontant()
        'Debug.Indent()
        Me.afficheTypeOperation()
        'Debug.Indent()

    End Sub
    Public Overrides Function ToString() As String
        Return Me.heureOp.ToString & "  " & Me.libelle.ToString & " -- " & Me.typeOp.ToString & " de " & Me.montantOp.ToString & " €"

    End Function

End Class
