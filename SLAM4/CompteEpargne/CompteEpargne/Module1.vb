Module Module1

    Dim monCompte1 As New ClassCompteEpargne(1000)
    Dim monCompte2 As New ClassCompteEpargne(1000, 1234)
    Dim monCompte3 As New ClassCompteEpargne(1000, 1234, 5000)
    Dim monCompte4 As New ClassCompteEpargne(1000, 1234, 5000, 5)
    Sub Main()


        afficheDebugEpargne(monCompte4)
        Console.ReadLine()
    End Sub

End Module
