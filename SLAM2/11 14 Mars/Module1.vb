Module Module1
    'RESERVATION D UNE PLACE EN MEMOIRE
    Dim monparking As Parking
    Dim x As String

    Sub Main()
        'INSTANCIATION D UN PARKING
        monparking = New Parking("Liberte", 4)
        Console.ForegroundColor = ConsoleColor.White
        'controle 
        While x <> "q"
            Console.Clear()
            monparking.afficheConsole()
            If monparking.complet Then
                Console.ForegroundColor = ConsoleColor.Red
                Console.WriteLine("Parking Complet entree impossible")
                Console.ForegroundColor = ConsoleColor.White
                Console.Write("choix (q)uit, (s)ortie :")
                x = Console.ReadLine()
                Select Case x  
                    Case "s"
                            monparking.sortie()
                    Case "q"
                        Console.WriteLine("Au revoir...")
                    Case Else
                        Console.WriteLine("Reponse inccorrecte")
                End Select
            Else
                If monparking.vide Then
                    Console.ForegroundColor = ConsoleColor.Yellow
                    Console.WriteLine("Parking vide sortie impossible")
                    Console.ForegroundColor = ConsoleColor.White
                    Console.Write("choix (q)uit, (e)ntrée :")
                    x = Console.ReadLine()
                    Select Case x
                        Case "e"
                            monparking.entre()
                        Case "q"
                            Console.WriteLine("Au revoir...")

                        Case Else
                            Console.WriteLine("Reponse inccorrecte")
                    End Select
                Else
                    Console.WriteLine()
                    Console.Write("choix (q)uit, (e)ntrée, (s)ortie :")
                    x = Console.ReadLine()
                    Select Case x
                        Case "e"
                            monparking.entre()
                        Case "s"
                            monparking.sortie()
                        Case "q"
                            Console.WriteLine("Au revoir...")
                        Case Else
                            Console.WriteLine("Reponse inccorrecte")
                    End Select
                End If
            End If
        End While
    End Sub

End Module

