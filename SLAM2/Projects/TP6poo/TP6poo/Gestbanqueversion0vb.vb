Module Gestbanqueversion0vb

    Dim mesComptes As New Collection
    Dim Choisir As Char = ""



    Sub Main()

        Console.ForegroundColor = ConsoleColor.Green

        While Choisir <> "Q" And Choisir <> "q"

            Console.Write("*****************************************************")
            Console.WriteLine()
            Console.WriteLine(mesComptes.Count.ToString & " compte(s) dans la banque")
            Console.WriteLine()
            Console.Write("(q)uit (a)joute (l)iste (s)upprime (v)ider (d)epot (r)etrait :")
            Choisir = Console.ReadLine

            Select Case Choisir
                Case "a"
                    Dim unCompte As New Compte()
                    mesComptes.Add(unCompte)


                Case "l"
                    Dim index As Integer = 1
                    Console.WriteLine()
                    Console.Write("Liste des comptes : ")
                    Console.WriteLine()
                    Console.Write("--------------------")
                    For Each unCompteTemp As Compte In mesComptes
                        Console.Write("Index : " & index.ToString & ">>>")
                        unCompteTemp.afficheConsole()
                        index = index + 1
                    Next

                Case "s"
                    Console.Write("Index : ")
                    Dim Index As Integer = Integer.Parse(Console.ReadLine)
                    mesComptes.Remove(Index)


                Case "v"
                    mesComptes.Clear()

                Case "d"
                    Console.Write("Depot sur Index : ")
                    Dim Index As Integer = Integer.Parse(Console.ReadLine)
                    Console.Write("Somme:")
                    Dim uneSomme As Integer = Integer.Parse(Console.ReadLine)
                    mesComptes.Item(Index).depot(uneSomme)

                Case "r"
                    Console.Write("Retrait sur Index : ")
                    Dim Index As Integer = Integer.Parse(Console.ReadLine)
                    Console.Write("Retrait :")
                    Dim uneSomme As Integer = Integer.Parse(Console.ReadLine)
                    mesComptes.Item(Index).retrait(uneSomme)


                Case Else
                    Console.WriteLine(" --Votre choix n'est pas valide-- ")

            End Select

            'Dim sommeManque As Integer = unCompte.fctretrait(uneSomme)
            'If sommeManque > 0 Then
            '    Console.WriteLine()
            '    Console.WriteLine("         PB RETRAIT : il manque : " & sommeManque.ToString)
            '    Console.ReadLine()
            'End If


        End While


    End Sub

End Module
