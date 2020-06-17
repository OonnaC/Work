Module Module1

    Sub Main()
        Dim unCompteEpargne As New CompteEpargne()

        Dim unChoix As String = ""
        Dim uneSomme As Double = 0.0

        Console.Write("NOM DE LA BANQUE : ")
        Dim nomBanque As String = Console.ReadLine()

        While unChoix <> "Q" And unChoix <> "q"

            Console.Clear()
            Console.ForegroundColor = ConsoleColor.White
            Console.Write("BANQUE : ")
            Console.ForegroundColor = ConsoleColor.Green
            Console.WriteLine(nomBanque)
            Console.ForegroundColor = ConsoleColor.White
            Console.WriteLine("------")

            unCompteEpargne.afficheConsole()

            Console.ForegroundColor = ConsoleColor.White
            Console.WriteLine("********************************************************")
            Console.WriteLine("*                                                      *")
            Console.WriteLine("*  Operations : (D)epot (R)etrait (I)nteret (Q)uitter  *")
            Console.WriteLine("*                                                      *")
            Console.WriteLine("********************************************************")
            Console.WriteLine()
            Console.Write("                 CHOIX : ")
            unChoix = Console.ReadLine
            If unChoix = "D" Or unChoix = "d" Then
                Console.ForegroundColor = ConsoleColor.Green
                Console.Write("  DEPOT D'UNE SOMME DE : ")
1:              'uneSomme = Convert.ToDouble(Console.ReadLine())
                uneSomme = Double.Parse(Console.ReadLine)
                unCompteEpargne.depot(uneSomme)
            End If
            If unChoix = "R" Or unChoix = "r" Then
                Console.ForegroundColor = ConsoleColor.Red
                Console.Write(" RETRAIT D'UNE SOMME DE : ")
                uneSomme = Double.Parse(Console.ReadLine)
                unCompteEpargne.retrait(uneSomme)
            End If
            If unChoix = "I" Or unChoix = "i" Then
                Console.ForegroundColor = ConsoleColor.Green
                Console.Write(" AJOUT DES INTERETS ")
                unCompteEpargne.depot(unCompteEpargne.calculInteret())
            End If
        End While

        Console.ReadLine()
    End Sub

End Module
