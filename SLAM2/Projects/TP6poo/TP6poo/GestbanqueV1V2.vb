Module Banquer

    Dim mesComptes As New Collection
    Dim choix As Char = ""
    Dim numeroCompte As String

    Sub Main()

        Console.ForegroundColor = ConsoleColor.Green
        While (choix <> "q")
            Dim index As Integer = 1
            Console.Clear()
            Console.ForegroundColor = ConsoleColor.White
            Console.WriteLine("*************************************")
            Console.WriteLine(mesComptes.Count.ToString & " compte(s) dans la banque")
            Console.WriteLine()
            Console.WriteLine("Liste des comptes : ")
            Console.WriteLine("--------------------")
            For Each unCompte As Compte In mesComptes
                'Console.Write("Index : " & index.ToString & ">>>")
                unCompte.afficheConsole()
                'index += 1
            Next unCompte
            Console.WriteLine()
            Console.WriteLine()
            Console.Write("(q)uit (o)uvrir (c)lore (s)electionner (r)echercher: ")
            choix = Console.ReadLine()

            Select Case choix
                Case "r"
                    Console.WriteLine("Entrer le numéro de compte :")

                    Dim numeroCompte = Console.ReadLine()
                    index = rechercherIndex(numeroCompte)
                    Console.Write("Index : " & index.ToString)
                    Console.ReadLine()

                Case "o"
                    Dim unCompte As New Compte()
                        mesComptes.Add(unCompte)

                Case "c"
                    'Console.Write("Index : ")
                    Console.Write("Entrer le numéro du compte : ")
                    Dim numeroCompte = Console.ReadLine()
                    index = rechercherIndex(numeroCompte)
                    'index = Integer.Parse(Console.ReadLine())
                    mesComptes.Remove(index)

                Case "s"
                    Console.Write("Index : ")
                    Console.Write("Entrer le numéro du compte : ")
                    Dim numeroCompte = Console.ReadLine()
                    index = rechercherIndex(numeroCompte)
                    'index = Integer.Parse(Console.ReadLine())
                    Dim unChoix As String = ""
                    Dim uneSomme As Integer
                    While unChoix <> "Q" And unChoix <> "q"
                        Console.Clear()
                        mesComptes.Item(index).afficheIHM()

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
                            mesComptes.Item(index).depot(uneSomme)
                        Else
                            If unChoix = "R" Or unChoix = "r" Then
                                Console.ForegroundColor = ConsoleColor.Red
                                Console.Write(" RETRAIT D'UNE SOMME DE : ")
                                uneSomme = Integer.Parse(Console.ReadLine)
                                mesComptes.Item(index).retrait(uneSomme)
                            End If
                        End If

                    End While

                Case Else
                    Console.WriteLine("--Choix non valide--")



            End Select

            Console.WriteLine()

        End While

    End Sub
    Function rechercherIndex(ByVal unNumero As String) As Integer

        Dim position As Integer = 0

        For i As Integer = 1 To mesComptes.Count

            If mesComptes.Item(i).numeroCompte = unNumero Then
                position = i
                Exit For
            End If
        Next

        Return position

    End Function

    Function rechercherdanscollection(ByVal unNumero As String) As Integer

        Dim find As Boolean = False


        For i As Integer = 1 To mesComptes.Count

            If mesComptes.Item(i).numeroCompte = unNumero Then
                find = True
                Exit For
            End If
        Next

        Return find

    End Function

    Function appartientdanscollection(ByVal unNumero As String) As Integer
        Return Not rechercherIndex(unNumero) = 0
    End Function

End Module
