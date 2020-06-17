Module Abonnement

    Sub Main()


        Dim prixunittele As Single
        Dim montantHT As Single
        Dim montantTVA As Single
        Dim montantTTC As Single
        Dim unite As Integer
        Dim taux As Single
        Const abonnementfixe = 8.9
        prixunittele = 0.12

        Console.Write("Entrer l'unité téléphonique: ")
        unite = Integer.Parse(Console.ReadLine())

        Console.Write("Entrer le taux de TVA: ")
        taux = Single.Parse(Console.ReadLine())

        montantHT = unite * prixunittele + abonnementfixe
        montantTVA = montantHT * taux / 100
        montantTTC = montantHT + montantTVA

        Console.WriteLine("Le montant HT de la facture mensuelle est de " & montantHT.ToString)
        Console.WriteLine("Le montant de la TVA est de " & montantTVA.ToString)
        Console.WriteLine("Le montant TTC de la facture est de " & montantTTC.ToString)

        Console.ReadLine()

    End Sub
End Module
