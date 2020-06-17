Module GestBanqueV2
    Dim mesComptes As New Collection
    Dim choix As Char = ""


    Sub Main()


        While (choix <> "q")

            Console.Clear()
            Console.ForegroundColor = ConsoleColor.White
            Console.WriteLine("*************************************")
            Console.WriteLine(mesComptes.Count.ToString & " compte(s) dans la banque")
            Console.WriteLine()
            Console.WriteLine("Liste des comptes : ")
            Console.WriteLine("--------------------")
            For Each unCompte As Compte In mesComptes
                unCompte.afficheConsole()
            Next unCompte
            Console.WriteLine()
            Console.WriteLine()
            Console.Write("(q)uit (o)uvrir (c)lore (s)electionner (r)echercher : ")
            choix = Console.ReadLine()

            Select Case choix

                Case "r"
                    Console.Write("Entrer le numero de compte : ")
                    Dim numeroCompte = Console.ReadLine()
                    Dim index = rechercherIndex(numeroCompte)
                    Console.Write("  Index = " & index.ToString)
                    Console.ReadLine()

                Case "o"
                    Dim unCompte As New Compte()
                    mesComptes.Add(unCompte)

                Case "c"
                    Console.Write("Entrer le numero de compte : ")
                    Dim numeroCompte = Console.ReadLine()
                    Dim index = rechercherIndex(numeroCompte)
                    If index = 0 Then
                        Console.Write("Mauvais numero de compte... ")
                        Console.ReadLine()
                    Else
                        mesComptes.Remove(index)
                    End If


                Case "s"
                    Console.Write("Entrer le numero de compte : ")
                    Dim numeroCompte = Console.ReadLine()
                    Dim index = rechercherIndex(numeroCompte)
                    If index <> 0 Then
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
                    Else
                        Console.Write("Mauvais numero de compte... ")
                        Console.ReadLine()
                    End If

                Case Else
                    Console.WriteLine("--Choix non valide--")
            End Select

            Console.WriteLine()

        End While

    End Sub


    ''' <summary>
    ''' Fonctions de recherche de l'index de la collection en fonction du numero de compte
    ''' </summary>
    ''' <param name="unNumero">Numero de compte</param>
    ''' <returns>Index de la collection - 0 si n'existe pas</returns>
    ''' <remarks>Cree le 2 Mars 2017 V1.0 E.Le Guen</remarks>
    Function rechercherIndexV1(ByVal unNumero As Integer) As Integer

        Dim index As Integer = 1

        'si la collection est vide on renvoi 0
        If mesComptes.Count = 0 Then
            Return 0
        Else
            'tant que pas tout parcouru et pas trouve 
            While index <= mesComptes.Count And mesComptes.Item(index).numeroCompte <> unNumero
                'on passe au suivant
                index += 1
            End While

            'si J'ai trouve
            If mesComptes.Item(index).numeroCompte = unNumero Then
                'je renvoi l'index
                Return index
            Else
                'je renvoi 0
                Return 0
            End If

        End If

    End Function

    Function rechercherIndexV2(ByVal unNumero As String) As Integer
        Dim index As Integer = 1

        'tant pas tout parcouru et pas trouve
        While index < mesComptes.Count And mesComptes.Item(index).numeroCompte <> unNumero
            'on passe au suivant
            index += 1
        End While

        'si j'ai trouve
        If mesComptes.Item(index).numeroCompte = unNumero Then
            'je renvoi l'index
            Return index
        Else
            'je renvoi 0
            Return 0
        End If

    End Function

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

End Module
