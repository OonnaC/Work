Module GestBanqueV3
    Dim mesComptes As New Collection
    Dim choix As Char = ""

    Sub Main()

        While (choix <> "q")

            Console.Clear()
            Console.ForegroundColor = ConsoleColor.White
            Console.WriteLine("************************************")
            Console.WriteLine(mesComptes.Count.ToString & " compte(s) dans la banque")
            Console.WriteLine()
            Console.WriteLine("Liste des comptes (DICTIONNAIRE) : ")
            Console.WriteLine("-----------------------------------")
            For Each unCompte As Compte In mesComptes
                unCompte.afficheConsole()
            Next unCompte
            Console.WriteLine()
            Console.WriteLine()
            Console.Write("(q)uit (o)uvrir (c)lore (s)electionner : ")
            choix = Console.ReadLine()

            Select Case choix

                Case "o"
refaire:            Dim unCompte As New Compte()
                    'ajout d'un compte dans un dictionnaire (objet = unCompte) (cle = numeroCompte) 
                    'gestion des doublons
                    Try
                        mesComptes.Add(unCompte, unCompte.numeroCompte.ToString)
                    Catch ex As Exception
                        Microsoft.VisualBasic.Interaction.MsgBox("Numero deja existant...")
                        GoTo refaire
                    End Try

                Case "c"
                    Console.Write("Entrer le numero de compte : ")
                    Dim unNumeroCompte As String = Console.ReadLine()
                    'suppression dans le dictionnaire de l'objet corresondant a la cle numeroCompte
                    mesComptes.Remove(unNumeroCompte)

                Case "s"
                    Console.Write("Entrer le numero de compte : ")
                    Dim unNumeroCompte = Console.ReadLine()

                    Dim unChoix As String = ""
                    Dim uneSomme As Integer
                    While unChoix <> "Q" And unChoix <> "q"
                        Console.Clear()
                        'on utilise le compte selectionne dans le dictionnaire
                        mesComptes.Item(unNumeroCompte).afficheIHM()
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
                            mesComptes.Item(unNumeroCompte).depot(uneSomme)
                        Else
                            If unChoix = "R" Or unChoix = "r" Then
                                Console.ForegroundColor = ConsoleColor.Red
                                Console.Write(" RETRAIT D'UNE SOMME DE : ")
                                uneSomme = Integer.Parse(Console.ReadLine)
                               mesComptes.Item(unNumeroCompte).retrait(uneSomme)
                            End If
                        End If

                    End While

                Case Else
                    Console.WriteLine("--Choix non valide--")
            End Select

            Console.WriteLine()

        End While

    End Sub

End Module
