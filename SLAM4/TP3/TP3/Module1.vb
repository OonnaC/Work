Module Module1

    Dim unCompte As Compte
    Dim unCompte2 As Compte
    Dim unCompte3 As Compte


    Sub Main()

        'unCompte = New Compte()
        'unCompte2 = New Compte(4567)
        unCompte3 = New Compte(7895, 45000)
        unCompte3.afficheDebug()
        'Console.WriteLine("Montant :" & unCompte4.depot)
        'unCompte3.depot(5)
        'unCompte3.afficheDebug()
        unCompte3.depot()
        unCompte3.afficheDebug()
        'unCompte.afficheConsole()

        'unCompte.numeroCompte = 4567
        Console.WriteLine("Numéro du compte :" & unCompte.numeroCompte.ToString)
        Console.WriteLine("Montant du compte :" & unCompte.soldeActuel.ToString)

        'MsgBox(unCompte())

        Console.ReadLine()

    End Sub

End Module
