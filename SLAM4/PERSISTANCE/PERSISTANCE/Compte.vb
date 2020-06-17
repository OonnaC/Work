Public Class Compte

    Private _soldeActuel As Integer
    Private _numeroCompte As Integer

    'utilisation d'une collection typee contenant uniquement des operations
    Private _mesOperations As New List(Of Operation)

    'METHODES D'ACCES AUX DONNEES
    Public Property soldeActuel() As Integer
        Get
            Return Me._soldeActuel
        End Get
        Set(ByVal Value As Integer)
            Me._soldeActuel = Value
        End Set
    End Property

    Public Property numeroCompte() As Integer
        Get
            Return Me._numeroCompte
        End Get
        Set(ByVal Value As Integer)
            Me._numeroCompte = Value
        End Set
    End Property

    Public Property mesOperations() As List(Of Operation)
        Get
            mesOperations = Me._mesOperations
            ' Return Me._mesOperations
        End Get
        Set(ByVal value As List(Of Operation))
            Me._mesOperations = value
        End Set
    End Property

    'declaration d'une propriete en VS2010 equivalent aux lignes de dessus
    'Public Property numeroCompte As String

    'LES CONSTRUCTEURS
    'creation du constructeur sans argument
    Public Sub New()
        Me.mesOperations = New List(Of Operation)
    End Sub

    'creation d'un deuxieme constructeur avec un argument le numero initial POLYMORPHISME
    Public Sub New(ByVal numeroInitial As String)
        Me.mesOperations = New List(Of Operation)
        '        Try
        'refaire:
        '            Me.soldeActuel = Integer.Parse(Microsoft.VisualBasic.Interaction.InputBox("Entrer le solde : "))
        '        Catch
        '            MsgBox("Erreur entre un entier")
        '            GoTo refaire
        '        End Try
        Me.numeroCompte = numeroInitial
        Me.soldeActuel = 0
    End Sub

    'creation du premier constructeur avec deux arguments solde initial et numero
    Public Sub New(ByVal numeroInitial As String, ByVal soldeInitial As Integer)
        Me.mesOperations = New List(Of Operation)
        Me.soldeActuel = soldeInitial
        Me.numeroCompte = numeroInitial
        Debug.WriteLine("...COMPTE INSTANCIE...")
    End Sub

    Public Sub New(ByVal numeroInitial As String, ByVal soldeInitial As Integer, ByVal lesOperationsInitiales As List(Of Operation))
        Me.soldeActuel = soldeInitial
        Me.numeroCompte = numeroInitial
        Me.mesOperations = lesOperationsInitiales
        Debug.WriteLine("...COMPTE INSTANCIE...")
    End Sub

    'METHODES DE CALCUL
    'DEPOT
    Public Sub depot(ByRef uneSomme As Integer)
        Me.soldeActuel += uneSomme
    End Sub

    Public Sub depot(ByVal uneSomme As Integer, ByVal unLibelle As String)
        Me.depot(uneSomme)

        Dim uneOperationTemp As New Operation(TypeOperation.Depot, uneSomme, unLibelle)
        Me.mesOperations.Add(uneOperationTemp)
    End Sub


    Public Sub depot(ByVal uneSomme As Integer, ByVal unLibelle As String, ByVal uneDate As Date)
        Me.depot(uneSomme)

        Dim uneOperationTemp As New Operation(uneDate, TypeOperation.Depot, uneSomme, unLibelle)
        Me.mesOperations.Add(uneOperationTemp)
    End Sub




    'RETRAIT
    Public Overridable Sub retrait(ByVal uneSomme As Integer)
        Me.soldeActuel -= uneSomme
    End Sub

    Public Overridable Sub retrait(ByVal uneSomme As Integer, ByVal unLibelle As String)
        Dim nouveauSolde As Integer
        'verifie que l'on peut retirer la somme demandee
        nouveauSolde = soldeActuel - uneSomme
        If nouveauSolde < 0 Then
            Console.WriteLine("Impossible il manque : " & Math.Abs(nouveauSolde).ToString & " Euros")
            Console.ReadLine()
        Else
            Me.retrait(uneSomme)
            Dim uneOperationTemp As New Operation(TypeOperation.Retrait, uneSomme, unLibelle)
            Me.mesOperations.Add(uneOperationTemp)
        End If
    End Sub

    'METHODE D'AFFICHAGE 
    Private Sub afficheConsoleNumero()
        Console.Write("Compte N° : " & Me.numeroCompte)
    End Sub

    Private Sub afficheConsoleSolde()
        Console.ForegroundColor = ConsoleColor.Cyan
        Console.WriteLine("  -- Solde = " & Me.soldeActuel.ToString)
        Console.ForegroundColor = ConsoleColor.Gray
    End Sub

    Public Sub afficheCompte()
        Console.WriteLine(Me.numeroCompte.ToString)
        Console.WriteLine(Me.soldeActuel.ToString)

        For Each unOptemp As Operation In Me.mesOperations
            Console.WriteLine(unOptemp.ToString())
        Next
    End Sub

    Private Sub afficheConsoleOperations()
        Console.WriteLine("--Liste des operations : ")
        For Each uneOperation As Operation In Me.mesOperations
            If uneOperation.typeOp = TypeOperation.Depot Then
                Console.ForegroundColor = ConsoleColor.Green
            Else
                Console.ForegroundColor = ConsoleColor.Red
            End If
            Console.WriteLine("    " & uneOperation.ToString)
        Next
        Console.ForegroundColor = ConsoleColor.Gray
    End Sub


    Private Sub afficheConsoleOperationsInvert()
        Dim i As Integer
        Console.WriteLine("-- Liste des operations :")
        For i = Me.mesOperations.Count - 1 To 0 Step -1
            If Me.mesOperations.Item(i).typeOp = TypeOperation.Depot Then
                Console.ForegroundColor = ConsoleColor.Green
            Else
                Console.ForegroundColor = ConsoleColor.Red
            End If
            Console.WriteLine(Me.mesOperations.Item(i).ToString)
        Next i
        Console.ForegroundColor = ConsoleColor.Gray
    End Sub

    Public Sub afficheConsole()
        Console.Clear()
        Console.WriteLine()
        Me.afficheConsoleNumero()
        Me.afficheConsoleSolde()
        Me.afficheConsoleOperationsInvert()
        Console.WriteLine()
    End Sub


    'METHODE DE DEBUG
    Private Sub afficheNumeroCompte()
        'Debug.Print("Compte N° : " & CStr(Me.numeroCompte))
        Debug.Print("Compte N° : " & Me.numeroCompte)
    End Sub

    Private Sub afficheSolde()
        Debug.Print("-- Solde = " & Me.soldeActuel.ToString)
    End Sub

    Public Sub afficheDebug()
        Me.afficheNumeroCompte()
        Debug.Indent()
        Me.afficheSolde()
        Debug.Unindent()
    End Sub
    
    'DESTRUCTEUR
    Protected Overrides Sub finalize()

    End Sub

    'METHODE DE PERSISTANCE
    ''' <summary>
    ''' Sauvegarde dans un fichier séquentiel la classe Compte
    ''' </summary>
    ''' <remarks>Creation by Oonna CHAPALAIN v1.0</remarks>
    Public Sub Sauvegarde()
        Dim unFichier As New System.IO.StreamWriter("moncompte.txt")

        unFichier.WriteLine(Me.numeroCompte.ToString)
        unFichier.WriteLine(Me.soldeActuel.ToString)
        unFichier.WriteLine(Me.mesOperations.Count.ToString)
        'Pour chaque operation de la collection d'operation
        For Each uneOperation As Operation In Me.mesOperations
            unFichier.WriteLine(uneOperation.typeOp.ToString)
            unFichier.WriteLine(uneOperation.heureOp.ToString)
            unFichier.WriteLine(uneOperation.libelle)
            unFichier.WriteLine(uneOperation.montantOp.ToString)
        Next
        unFichier.Close()
    End Sub

    Public Sub Restaure()
        If (System.IO.File.Exists("moncompte.txt")) Then
            Dim unFichier As New System.IO.StreamReader("moncompte.txt")
            Me.numeroCompte = Integer.Parse(unFichier.ReadLine)
            Me.soldeActuel = Integer.Parse(unFichier.ReadLine)
            'On recupere le nombre d'operations
            Dim nbOperation As Integer = Integer.Parse(unFichier.ReadLine)

            Dim monTypeOp As TypeOperation

            For compteur = 1 To nbOperation
                If unFichier.ReadLine = "Depot" Then
                    monTypeOp = TypeOperation.Depot
                Else
                    monTypeOp = TypeOperation.Retrait
                End If
                'monTypeOp = [Enum].Parse(GetType(TypeOperation), unFichier.ReadLine)
                Dim uneDateOP As Date = Date.Parse(unFichier.ReadLine)
                Dim unLibelle As String = unFichier.ReadLine
                Dim uneSomme As Integer = Integer.Parse(unFichier.ReadLine)

                'Creation d'un objet de la classe operation que l'on va mettre dans la collection
                Dim uneOperation As New Operation(uneDateOP, monTypeOp, uneSomme, unLibelle)
                Me.mesOperations.Add(uneOperation)
            Next compteur

            unFichier.Close()
        End If
    End Sub
End Class

