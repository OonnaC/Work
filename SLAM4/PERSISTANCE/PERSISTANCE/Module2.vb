Module Module2
    Dim unCompte As Compte
    Dim uneOperation As Operation

    Sub Main()
        'TEST DE LA CLASSE OPERATION
        'uneoperation = New Operation(TypeOperation.Depot, 50, "Argent de poche")
        'unCompte.afficheDebug()
        'Console.WriteLine(uneOperation.ToString)

        'Console.ReadLine()

        Dim unChoix As String = ""
        Dim uneSomme As Integer = 0
        Dim unLibelle As String = ""

        Console.Write("NOM DE LA BANQUE : ")
        Dim nomBanque As String = Console.ReadLine()

        unCompte = New Compte(1234)

        While unChoix <> "Q" And unChoix <> "q"

            Console.Clear()
            Console.ForegroundColor = ConsoleColor.White
            Console.Write("BANQUE : ")
            Console.ForegroundColor = ConsoleColor.Green
            Console.WriteLine(nomBanque)
            Console.ForegroundColor = ConsoleColor.White
            Console.WriteLine("------")

            unCompte.afficheConsole()

            Console.ForegroundColor = ConsoleColor.White
            Console.WriteLine("***************************************************")
            Console.WriteLine("*                                                 *")
            Console.WriteLine("*  Operations : (D)epot  - (R)etrait - (Q)uitter  *")
            Console.WriteLine("*                                                 *")
            Console.WriteLine("***************************************************")
            Console.WriteLine()
            Console.Write("                 CHOIX : ")
            unChoix = Console.ReadLine
            If unChoix = "D" Or unChoix = "d" Then
                Console.ForegroundColor = ConsoleColor.Green
                Console.Write("  DEPOT D'UNE SOMME DE : ")
                uneSomme = Integer.Parse(Console.ReadLine)
                unCompte.depot(uneSomme)
                Console.Write("Libellé : ")
                unLibelle = Console.ReadLine()
            Else
                If unChoix = "R" Or unChoix = "r" Then
                    Console.ForegroundColor = ConsoleColor.Red
                    Console.Write(" RETRAIT D'UNE SOMME DE : ")
                    uneSomme = Integer.Parse(Console.ReadLine)
                    unCompte.retrait(uneSomme)
                    Console.Write("Libellé : ")
                    unLibelle = Console.ReadLine()
                    'Dim sommeManque As Integer = unCompte.fctretrait(uneSomme)
                    'If sommeManque > 0 Then
                    '    Console.WriteLine()
                    '    Console.WriteLine("         PB RETRAIT : il manque : " & sommeManque.ToString)
                    '    Console.ReadLine()
                    'End If
                End If
            End If

        End While

    End Sub
End Module
