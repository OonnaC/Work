Module Module2
    Dim unCompte As Compte

    Sub Main()
        Dim choix As Char = ""
        Dim uneSomme As Integer = 0
        unCompte = New Compte(1234, 100)

        While (choix <> "q")

            Console.Write("Choix (q)uit (r)etrait (d)epot (a)ffiche : ")
            choix = Console.ReadLine() 'Pas besoin de .Parse car 'choix' est un char

            Select Case choix
                Case "a"
                    unCompte.afficheConsole()
                Case "d"
                    Console.Write("Depot de : ") 'On part du principe que l'on a pas surchargé dépôt
                    uneSomme = Integer.Parse(Console.ReadLine())
                    unCompte.depot(uneSomme)
                Case "r"
                    Console.Write("Retrait de : ") 'On part du principe que l'on a pas surchargé dépôt
                    uneSomme = Integer.Parse(Console.ReadLine())
                    unCompte.retrait(uneSomme)

            End Select
        End While
    End Sub
End Module
