Module Module1

    'Dim unCompte As New Compte()

    Dim uneOp As New Operation(TypeOperation.Depot, "cadeau", 100)

    Sub Main()



        MsgBox(uneOp.ToString)

        Console.WriteLine()
        Console.ReadLine()


    End Sub

End Module
