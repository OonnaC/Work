Public Class CompteEpargne

    Inherits Compte


    'PROPRIETEES
    Private _plafondAutorise As Double
    Private _tauxInteret As Double


    'METHODES D'ACCES AUX DONNEES
    Public Property plafondAutorise() As Double
        Get
            Return Me._plafondAutorise
        End Get
        Set(ByVal Value As Double)
            Me._plafondAutorise = Value
        End Set
    End Property

    Public Property tauxInteret() As Double
        Get
            Return Me._tauxInteret
        End Get
        Set(ByVal Value As Double)
            Me._tauxInteret = Value
        End Set
    End Property



    'LES CONSTRUCTEURS
    'creation d'un constucteur sans argument
    Sub New()
        'on utilise le methode new de Compte sans argument HERITAGE
        MyBase.New()
        Try
refaire:
            Me.plafondAutorise = Double.Parse(Microsoft.VisualBasic.Interaction.InputBox("Entrer le plafond autorise"))
        Catch ex As Exception
            Microsoft.VisualBasic.Interaction.MsgBox("plafond incorect...")
            GoTo refaire
        End Try
        Try
refaire1:
            Me.tauxInteret = Double.Parse(Microsoft.VisualBasic.Interaction.InputBox("Entrer le taux d'interet"))
        Catch ex As Exception
            Microsoft.VisualBasic.Interaction.MsgBox("taux incorect...")
            GoTo refaire1
        End Try

    End Sub

    'creation du constructeur avec tous les argument
    ''' <summary>
    ''' Creation d'un premier constructeur avec quatre arguments
    ''' </summary>
    ''' <param name="numeroInitial">numero du compte epargne</param>
    ''' <param name="soldeInitial">solde initial du compte epargne</param>
    ''' <param name="plafondInitial">plafond du compte epargne</param>
    ''' <param name="tauxInitial">taux du compte epargne</param>
    ''' <remarks>Creer le 29/04/2015 E.Le Guen (version 1.2)</remarks>
    Public Sub New(ByVal numeroInitial As Integer, ByVal soldeInitial As Double, ByVal plafondInitial As Double, ByVal tauxInitial As Double)
        MyBase.New(numeroInitial, soldeInitial)
        Me.plafondAutorise = plafondInitial
        Me.tauxInteret = tauxInitial
    End Sub

    'creation d'un constructeur avec un argument le numero initial POLYMORPHISME
    Public Sub New(ByVal numeroInital As Integer)
        MyBase.New(numeroInital)
        Me.plafondAutorise = 10000.0
        Me.tauxInteret = 2.0
    End Sub

    'creation d'un constructeur avec deux arguments solde initial et numero
    Public Sub New(ByVal numeroInital As Integer, ByVal soldeInitial As Double)
        MyBase.New(numeroInital, soldeInitial)
        Me.plafondAutorise = 10000.0
        Me.tauxInteret = 2.0
    End Sub



    'METHODES DE CALCUL
    'on redefinit la methode depot
    Public Overrides Sub depot(ByVal somme As Double)
        Dim nouveauSolde As Double
        'pour recuperer le solde actuel il faut utiliser la methode affichesolde
        'car soldeActuel est une variable privee de la classe parent
        nouveauSolde = MyBase.soldeActuel + somme
        If nouveauSolde > Me.plafondAutorise Then
            Console.WriteLine("Plafond atteint...")
        Else
            'on modifile la valeur du solde de la classe Compte avec
            'la methode initialisaSolde
            MyBase.depot(somme)
        End If
    End Sub

    Public Function calculInteret() As Double
        calculInteret = MyBase.soldeActuel * Me.tauxInteret / 100
    End Function



    'METHODE D'AFFICHAGE
    Private Sub afficheConsolePlafondAutorise()
        Console.WriteLine("  -- Plafond autorisé : " & Me.plafondAutorise.ToString)
    End Sub

    Private Sub afficheConsoleTauxInteret()
        Console.WriteLine("  -- Taux d'intéret = " & Me.tauxInteret.ToString)

    End Sub
    Public Overloads Sub afficheConsole()
        MyBase.afficheConsole()
        Me.afficheConsolePlafondAutorise()
        Me.afficheConsoleTauxInteret()
    End Sub



    'METHODE DE DEBUG
    Private Sub affichePlafondAutorise()
        Debug.Print("Plafond autorisé : " & Me.plafondAutorise.ToString)
    End Sub

    Private Sub afficheTauxInteret()
        Debug.Print("Taux d'intéret = " & Me.tauxInteret.ToString)
    End Sub

    Public Overloads Sub afficheDebug()
        MyBase.afficheDebug()
        Me.affichePlafondAutorise()
        Me.afficheTauxInteret()
        Debug.Unindent()
    End Sub



End Class

