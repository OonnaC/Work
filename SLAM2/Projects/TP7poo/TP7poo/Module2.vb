Module Module2

    Dim Compte As New Compte(1234)
    Dim uneOperation As New Operation(TypeOperation.Depot, 10, "gift")


    Sub Main()
        
        Compte.depot(50, "cadeau de noel")
        Console.ReadLine()





    End Sub
























    '    Console.ForegroundColor = ConsoleColor.Grey
    '    While (choix <> "q")
    '        Dim index As Integer = 1
    '        Console.Clear()
    '        Console.ForegroundColor = ConsoleColor.Grey
    '        Console.WriteLine("*************************************")
    '        Console.WriteLine(mesComptes.Count.ToString & " compte(s) dans la banque")
    '        Console.WriteLine()
    '        Console.WriteLine("Liste des comptes : ")
    '        Console.WriteLine("--------------------")
    '        Console.WriteLine()
    '        Console.WriteLine()
    '        Console.Write("Choix (q)uit (r)etrait (d)epot : ")
    '        choix = Console.ReadLine()

    '        Select Case choix
    '            Case "r"
    '                Console.WriteLine("Entrer le numéro de compte :")

    '                Dim numeroCompte = Console.ReadLine()
    '                Dim index As Integer = rechercherIndex(numeroCompte)
    '                Console.Write("Index : " & index.ToString)
    '                Console.ReadLine()

    '            Case "d"
    '                Dim unCompte As New Compte()
    '                mesComptes.Add(unCompte)


    '            Case "s"
    '                Console.Write("Index : ")
    '                index = Integer.Parse(Console.ReadLine())
    '                Dim unChoix As String = ""
    '                Dim uneSomme As Integer
    '                While unChoix <> "Q" And unChoix <> "q"
    '                    Console.Clear()
    '                    mesComptes.Item(index).afficheIHM()

    '                    Console.ForegroundColor = ConsoleColor.White
    '                    Console.WriteLine()
    '                    Console.Write("                 CHOIX : ")
    '                    unChoix = Console.ReadLine
    '                    If unChoix = "D" Or unChoix = "d" Then
    '                        Console.ForegroundColor = ConsoleColor.Green
    '                        Console.Write("  DEPOT D'UNE SOMME DE : ")
    '                        uneSomme = Integer.Parse(Console.ReadLine)
    '                        mesComptes.Item(index).depot(uneSomme)
    '                    Else
    '                        If unChoix = "R" Or unChoix = "r" Then
    '                            Console.ForegroundColor = ConsoleColor.Red
    '                            Console.Write(" RETRAIT D'UNE SOMME DE : ")
    '                            uneSomme = Integer.Parse(Console.ReadLine)
    '                            mesComptes.Item(index).retrait(uneSomme)
    '                        End If
    '                    End If

    '                End While

    '            Case Else
    '                Console.WriteLine("--Choix non valide--")



    '        End Select

    '        Console.WriteLine()

    '    End While


End Module