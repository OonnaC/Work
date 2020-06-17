
Public Class ClassCompteCheque
    Inherits ClassCompte

    'DECLARATION DES PROPRIETES PRIVEES
    Private _decouvertAutorise As Integer
    Public Property decouvertAutorise As Integer
        Get
            Return Me._decouvertAutorise
        End Get
        Set(value As Integer)
            Me._decouvertAutorise = value
        End Set
    End Property

    'LES CONSTRUCTEURS

    'creation d'un constructeur avec un argument le solde initial POLYMORPHISE
    'Sub New(ByVal soldeInitial As Integer)
    '    'on utilise la methode new de Compte avec un argument HERITAGE
    '    MyBase.New(soldeInitial)

    '    'on demande la saisie du découvert autorisé
    '    Me.decouvertAutorise = 0

    'End Sub

    'Num
    Sub New(ByVal numeroInitial As Integer)
        MyBase.New(numeroInitial)
        Me.soldeActuel = 0
        Me.decouvertAutorise = 1000

    End Sub

    'Num + solde
    Sub New(ByVal numeroInitial As Integer, ByVal soldeInitial As Integer)
        MyBase.New(numeroInitial, soldeInitial)
        Me.decouvertAutorise = 1000

        'Me.soldeActuel = soldeInitial
    End Sub
    ' Num, solde + découvert
    Sub New(ByVal numeroInitial As Integer, ByVal soldeInitial As Integer, ByVal decouvertInitial As Integer)
        MyBase.New(numeroInitial, soldeInitial)
        Me.decouvertAutorise = decouvertInitial

    End Sub


    'METHODE De CALCUL
    'methode retrait
    'Public Overrides Sub retrait(ByVal somme As Integer)

    '    'pour recuperer le solde actuel il faut utiliser la propriete
    '    'soldeActuel  de  la  classe  parent  car  soldeActuel  est  une  variable
    '    'privee de la classe parent
    '    nouveauSolde = MyBase.soldeActuel - somme

    '    'on modifie la valeur du solde de la classe Compte avec
    '    'la propriete soldeActuel
    '    MyBase.soldeActuel = nouveauSolde

    'End Sub

    'METHODE CALCUL
    Public Overrides Sub retrait(ByVal somme As Integer)
        If somme > Me.decouvertAutorise + MyBase.soldeActuel Then
            'pas assez d'argent
            Console.WriteLine("Cheque sans provision")
            Console.ReadLine()
        Else
            'assez d'argent on peut retirer
            MyBase.soldeActuel -= somme
        End If
    End Sub

    'METHODE DE DEBUG
    Private Sub afficheDecouvertAutorise()
        Debug.Print("Decouvert Autorise : " & Me.decouvertAutorise.ToString)
    End Sub

    Public Sub afficheDebugCompteCheque()

        'Debug.WriteLine("COMPTE N° : " & Me.numeroCompte.ToString)
        'Debug.Indent()
        'Debug.WriteLine("Solde : " & Me.soldeActuel.ToString)
        MyBase.afficheDebug()
        'Debug.WriteLine("Decouvert : " & Me.decouvertAutorise.ToString)
        Me.afficheDecouvertAutorise()
        Debug.Unindent()

    End Sub


    Public Overloads Sub afficheDebug()
        MyBase.afficheDebug()
        Me.afficheDecouvertAutorise()
        Debug.Unindent()
    End Sub

End Class
