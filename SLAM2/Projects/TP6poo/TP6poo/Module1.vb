Module Collecter

    Dim mesComptes As New Collection

    Dim unCompte1 As New Compte(10, 50)
    Dim unCompte2 As New Compte(78, 51)
    Dim unCompte3 As New Compte(89, 53)


    Sub Main()

        mesComptes.Add(unCompte1)
        mesComptes.Add(unCompte2)
        mesComptes.Add(unCompte3)

        Debug.Print(unCompte1.ToString)

        mesComptes.Remove(2)

        mesComptes.Item(1).depot(10)
        mesComptes.Item(2).retrait(1)

        For i As Integer = 1 To mesComptes.Count
            mesComptes.Item(i).afficheConsole()
        Next

        'Console.ReadLine()
        For Each unCompteTemp As Compte In mesComptes
            unCompteTemp.afficheConsole()
        Next

        'For Each unObjet As unObject In mesComptes
        'unObjet.afficheConsole()
        'Next

        Console.ReadLine()

    End Sub

End Module