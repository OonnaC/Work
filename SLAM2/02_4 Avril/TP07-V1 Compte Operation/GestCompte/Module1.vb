Module Module1

    Dim unCompte As New Compte(1234, 100)

    Sub Main()

        unCompte.depot(50, "Argent de poche")
        unCompte.retrait(3, "Pizza")

        unCompte.afficheCompte()

        Console.ReadLine()

    End Sub




































    '    Dim choix As Char = ""
    '    Dim uneSomme As Integer = 0
    '    Dim unLibelle As String = ""

    '    While (choix <> "q")
    '        unCompte.afficheConsole()
    '        Console.WriteLine()
    '        Console.WriteLine("GESTION DE COMPTE")
    '        Console.Write("Choix (q)uit (r)etrait (d)epot : ")
    '        choix = Console.ReadLine()

    '        Select Case choix
    '            Case "d"
    '                Console.Write("Depot de : ")
    '                uneSomme = Integer.Parse(Console.ReadLine())
    '                Console.Write("Libellé : ")
    '                unLibelle = Console.ReadLine()
    '                unCompte.depot(uneSomme, unLibelle)
    '            Case "r"
    '                Console.Write("Retrait de : ")
    '                uneSomme = Integer.Parse(Console.ReadLine())
    '                Console.Write("Libellé : ")
    '                unLibelle = Console.ReadLine()
    '                unCompte.retrait(uneSomme, unLibelle)
    '            Case "q"
    '                Console.Write("Au revoir...")

    '            Case Else
    '                Console.WriteLine("--Choix non valide--")
    '        End Select

    '    End While

    'End Sub


End Module
