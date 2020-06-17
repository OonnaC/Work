Module Module1
    'Dim monCompte1 As New ClassCompteCheque(100)
    'Dim monCompte2 As New ClassCompteCheque(100, 9999)
    Dim monCompte3 As New ClassCompteCheque(100, 9999, 5000)
    Sub Main()

        'Méthode GetType
        'MsgBox(monCompte3.GetType.Name)
        'Console.ReadLine()


        'Dim unChoix As String = ""
        'Dim uneSomme As Integer = 0

        'Console.Write("NOM DE LA BANQUE : ")
        'Dim nomBanque As String = Console.ReadLine()

        'While unChoix <> "Q" And unChoix <> "q"

        '    Console.Clear()
        '    Console.ForegroundColor = ConsoleColor.White
        '    Console.Write("BANQUE : ")
        '    Console.ForegroundColor = ConsoleColor.Green
        '    Console.WriteLine(nomBanque)
        '    Console.ForegroundColor = ConsoleColor.White
        '    Console.WriteLine("------")

        '    unCompteCheque.afficheConsole()

        '    Console.ForegroundColor = ConsoleColor.White
        '    Console.WriteLine("***************************************************")
        '    Console.WriteLine("*                                                 *")
        '    Console.WriteLine("*  Operations : (D)epot  - (R)etrait - (Q)uitter  *")
        '    Console.WriteLine("*                                                 *")
        '    Console.WriteLine("***************************************************")
        '    Console.WriteLine()
        '    Console.Write("                 CHOIX : ")
        '    unChoix = Console.ReadLine
        '    If unChoix = "D" Or unChoix = "d" Then
        '        Console.ForegroundColor = ConsoleColor.Green
        '        Console.Write("  DEPOT D'UNE SOMME DE : ")
        '        uneSomme = Integer.Parse(Console.ReadLine)
        '        unCompteCheque.depot(uneSomme)
        '    Else
        '        If unChoix = "R" Or unChoix = "r" Then
        '            Console.ForegroundColor = ConsoleColor.Red
        '            Console.Write(" RETRAIT D'UNE SOMME DE : ")
        '            uneSomme = Integer.Parse(Console.ReadLine)
        '            unCompteCheque.retrait(uneSomme)
        '        End If
        '    End If

        'End While
    End Sub

End Module
