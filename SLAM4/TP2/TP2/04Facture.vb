Module Facture

    Sub Main()
        Dim montantarticle As Single
        Dim nbrearticle As Integer
        Dim taux As Single
        Dim montantHT As Single
        Dim montantTVA As Single
        Dim prixpayer As Single

        Console.Write("Entrer le montant HT:")
        montantarticle = Single.Parse(Console.ReadLine())

        Console.Write("Entrer le nombre d'articles:")
        nbrearticle = Integer.Parse(Console.ReadLine())

        montantHT = montantarticle * nbrearticle

        Console.Write("Entrer le taux de TVA: ")
        taux = Single.Parse(Console.ReadLine())

        montantTVA = montantHT * taux / 100
        prixpayer = montantHT + montantTVA


        Console.WriteLine("Le montant HT est: " & montantHT.ToString)
        Console.WriteLine("Le montant de la TVA est: " & montantTVA.ToString)
        Console.WriteLine("Le prix à payer est de: " & prixpayer.ToString)

        Console.ReadLine()

    End Sub
End Module
