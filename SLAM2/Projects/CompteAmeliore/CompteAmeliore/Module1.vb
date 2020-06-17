Module Module1
    Dim unCompte As New Compte(1)
    Dim uneOperation As Operation
    Dim numeroCompte As String
    Dim Choix As Char = ""
    Dim uneSomme As Integer
    Dim libelle As List(Of Operation)
    Dim unsolde As Integer


    Sub Main()
        'uneOperation = New Operation(TypeOperation.Depot, "test", 100)
        'unCompte.depot(50, "cadeau de noel")
        'unCompte.retrait(45, "Henry")

        'unCompte.afficheDebug()
        'Console.Read()
        'Console.ReadLine()


        Console.ForegroundColor = ConsoleColor.Gray
        While (Choix <> "q" And Choix <> "Q")
            Console.Clear()
            Console.ForegroundColor = ConsoleColor.Gray
            Console.WriteLine("Compte N°: " & unCompte.numeroCompte.ToString)
            Console.WriteLine()
            Console.WriteLine("--Liste des operations : ")
            For Each uneOp As Operation In unCompte.mesOperations
                uneOp.ToString()
            Next uneOp
            Console.WriteLine()
            Console.WriteLine()
            Console.WriteLine("GESTION DE COMPTE")
            Console.Write("Choix (q)uit (r)etrait (d)epot: ")
            Choix = Console.ReadLine()

            Select Case Choix

                Case "r"
                    Console.WriteLine("Retrait de :")
                    uneSomme = Integer.Parse(Console.ReadLine)
                    Console.WriteLine("Libellé :")
                    '= unsolde - uneSomme

                Case "d"
                    Console.Write("Dépôt de : ")
                    uneSomme = Integer.Parse(Console.ReadLine)
                    Console.Write("Libellé :")
                    '= unsolde - uneSomme
                    '        Dim unNumeroCompte = Console.ReadLine()

                    '        Dim unChoix As String = ""
                    '        Dim uneSomme As Integer
                    '        While unChoix <> "Q" And unChoix <> "q"
                    '            Console.Clear()
                    '            mesComptes.Item(index).afficheIHM()
                    '            If unChoix = "D" Or unChoix = "d" Then
                    '                Console.ForegroundColor = ConsoleColor.Green
                    '                Console.Write("  DEPOT D'UNE SOMME DE : ")
                    '                uneSomme = Integer.Parse(Console.ReadLine)
                    '                mesComptes.Item(index).depot(uneSomme)
                    '            Else
                    '                If unChoix = "R" Or unChoix = "r" Then
                    '                    Console.ForegroundColor = ConsoleColor.Red
                    '                    Console.Write(" RETRAIT D'UNE SOMME DE : ")
                    '                    uneSomme = Integer.Parse(Console.ReadLine)
                    '                    mesComptes.Item(index).retrait(uneSomme)
                    '                End If
                    '            End If

                    '        End While

                Case Else
                    Console.WriteLine("--Choix non valide--")



            End Select

            Console.WriteLine()

        End While

    End Sub


End Module
