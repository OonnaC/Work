Module Module2

    'reserver un emplacment en memoire

    Dim lesplaces As Parking

    Sub Main()


        'instantiat° del'objet en utilisant le constructeur

        lesplaces = New Parking("test", 5, 0)

        Dim choix As Char = ""
        Dim unAjout As Integer = 0
        Dim unDecompte As Integer = 0

        lesplaces.EntreeVoiture(1)

        lesplaces.afficheConsole()

        lesplaces.SortieVoiture(1)

        lesplaces.afficheConsole()

        While (choix <> "q")
            Console.Write("Choix (q)uit (e)ntree (s)ortie (a)ffiche : ")
            choix = Console.ReadLine()

            Select choix
                Case "a"
                    lesplaces.afficheConsole()

                Case "e"
                    Console.Write("Entrée du véhicule : ")
                    unAjout = Integer.Parse(Console.ReadLine())
                    lesplaces.EntreeVoiture(unAjout)

                Case "s"
                    Console.Write("Sortie du véhicule : ")
                    unDecompte = Integer.Parse(Console.ReadLine())
                    lesplaces.SortieVoiture(unDecompte)

                Case Else
                    Console.WriteLine("--Choix non valide--")
            End Select


        End While

    End Sub

End Module
