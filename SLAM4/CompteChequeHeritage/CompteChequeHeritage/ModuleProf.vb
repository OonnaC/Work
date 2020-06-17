Module ModuleProf
    'Dim unCompteCheque As ClassCompteCheque
    'ligne permettant de tester le constructeur sans parametre
    'Dim unCompteCheque As New ClassCompteCheque(7564, 500, -40)


    'Dim unCompteCheque1 As CompteCheque

    Sub Main()

        'unCompteCheque0.afficheConsole()

        ''test du constructeur avec un parametre
        'unCompteCheque = New CompteCheque(1234)
        'unCompteCheque.afficheConsole()

        ''test du constructeur avec trois parametres
        'unCompteCheque1 = New CompteCheque(456, 10, 1000)
        'unCompteCheque1.afficheConsole()
        'unCompteCheque1.retrait(1020)
        'unCompteCheque1.retrait(990)

        ''test des methodes de debugage
        'unCompteCheque.afficheConsole()

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
