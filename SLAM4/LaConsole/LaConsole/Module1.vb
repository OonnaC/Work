Module Module1

    Dim unparking As Parking
    Dim unparking2 As Parking
    Dim unparking3 As Parking

    Sub Main()

        'unparking = New Parking()
        'Console.WriteLine("Nom parking : " & unparking.nom.ToString)
        'Console.WriteLine("Places libres : " & unparking.placesLibres.ToString)
        'Console.WriteLine("Places occupées : " & unparking.placesOccupees.ToString)

        'Console.ReadLine()

        'unparking2 = New Parking("Saint-Louis", 4, 1)
        'unparking2.afficheDebug()

        'unparking3 = New Parking("Géger", 7, 3)
        'unparking3.entreeVoiture()
        'unparking3.afficheDebug()

        'Console.ReadLine()


        'instantiat° del'objet en utilisant le constructeur
        'unparking = New Parking("test", 5, 0)

        'unparking.entreeVoiture(1)

        'unparking.afficheConsole()

        'unparking.sortieVoiture(1)

        'unparking.afficheConsole()

        'Console.ReadLine()
        unparking = New Parking("Liberté", 3, 2)
        Dim unChoix As Char = ""
        Dim unAjout As Integer = 0
        Dim unDecompte As Integer = 0
        Dim nomParking As String = ""

        'Console.ForegroundColor = ConsoleColor.White
        'Console.Write("Nom du parking : ")
        'nomParking = Console.ReadLine

        'Console.ForegroundColor = ConsoleColor.White
        'Console.WriteLine("Bienvenue au parking " & nomParking.ToString)
        'Console.ReadLine()

        While unChoix <> "Q" And unChoix <> "q"
            Console.Clear()
            unparking.afficheConsole()
            If unparking.complet Then
                Console.ForegroundColor = ConsoleColor.Red
                Console.WriteLine("Parking Complet : Entrée impossible")
                Console.ForegroundColor = ConsoleColor.White
                Console.WriteLine("*********************************************")
                Console.WriteLine("*                                           *")
                Console.WriteLine("* Choix : (S)ortie - (Q)uitter - (A)fficher *")
                Console.WriteLine("*                                           *")
                Console.WriteLine("*********************************************")
                Console.WriteLine()
                Console.Write("                 CHOIX : ")
                unChoix = Console.ReadLine
                Select Case unChoix
                    Case "s"
                        unparking.sortieVoiture()
                    Case "q"
                        Console.WriteLine("Au revoir...")
                    Case Else
                        Console.WriteLine("--Choix non valide--")
                End Select
            End If
            If unparking.vide Then
                Console.ForegroundColor = ConsoleColor.Yellow
                Console.WriteLine("Parking vide sortie impossible")
                Console.ForegroundColor = ConsoleColor.White
                Console.WriteLine("*********************************************")
                Console.WriteLine("*                                           *")
                Console.WriteLine("* Choix : (E)ntree - (Q)uitter - (A)fficher *")
                Console.WriteLine("*                                           *")
                Console.WriteLine("*********************************************")
                Console.WriteLine()
                Console.Write("                 CHOIX : ")
                unChoix = Console.ReadLine
                Select Case unChoix
                    Case "e"
                        unparking.entreeVoiture()
                    Case "q"
                        Console.WriteLine("Au revoir...")

                    Case Else
                        Console.WriteLine("--Choix non valide--")
                End Select
            End If
            If Not (unparking.complet) And Not (unparking.vide) Then
                Console.ForegroundColor = ConsoleColor.White
                Console.WriteLine("*********************************************************")
                Console.WriteLine("*                                                       *")
                Console.WriteLine("* Choix : (E)ntree  - (S)ortie - (Q)uitter - (A)fficher *")
                Console.WriteLine("*                                                       *")
                Console.WriteLine("*********************************************************")
                Console.WriteLine()
                Console.Write("                 CHOIX : ")
                unChoix = Console.ReadLine
                Select Case unChoix
                    Case "e"
                        unparking.entreeVoiture()
                    Case "s"
                        unparking.sortieVoiture()
                    Case "q"
                        Console.WriteLine("Au revoir...")
                    Case Else
                        Console.WriteLine("--Choix non valide--")
                End Select
            End If

        End While

    End Sub

End Module
