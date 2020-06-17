Module Commander

    Sub Main()

        Dim PU As Single
        Dim QTCOM As Integer
        Dim PAP As Single
        Dim PORT As Single
        Dim REMISE As Single
        Dim TOT As Single


        Console.Write("Entrer le prix unitaire du produit: ")
        PU = Single.Parse(Console.ReadLine())

        Console.Write("Entrer la quantité commandée: ")
        QTCOM = Integer.Parse(Console.ReadLine())

        TOT = PU * QTCOM

        If TOT <= 500 Then
            PORT = TOT * 2 / 100
        Else
            PORT = 0
        End If

        If TOT > 1000 Then
            REMISE = TOT * 10 / 100
        Else
            If TOT >= 200 Then
                REMISE = TOT * 5 / 100
            Else
                REMISE = 0
            End If
        End If

        PAP = TOT + PORT + REMISE

        Console.WriteLine("Le prix unitaire du produit est: " & PU.ToString)
        Console.WriteLine("La quantité commandée est: " & QTCOM.ToString)
        Console.WriteLine("Le total ( remise et frais de port non-inclus) est: " & TOT.ToString)
        Console.WriteLine("Le port est de: " & PORT.ToString)
        Console.WriteLine("La remise est de: " & REMISE.ToString)
        Console.WriteLine("Le prix à payer est: " & PAP.ToString)

        Console.ReadLine()

    End Sub

End Module
