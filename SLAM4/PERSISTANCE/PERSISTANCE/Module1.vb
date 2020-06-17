Imports System.IO
Module Module1

    Dim unCompte As New Compte()
    Dim maChaine As String

    Sub Main()

        ''ZONE DE TESTS POUR LA SAUVEGARDE DES DONNEES
        ''Pass the file path and the file name to the StreamWriter constructor.
        'Dim unFichier As New System.IO.StreamWriter("LeFichier.txt")
        ''Write a line of text.
        'unFichier.WriteLine("Hello World")
        ''Close the file.
        'unFichier.Close()

        'Dim unFichier As New System.IO.StreamReader("LeFichier.txt")
        'maChaine = unFichier.ReadLine()
        'MsgBox(maChaine)
        'unFichier.Close()

        'unCompte.numeroCompte = 1234
        unCompte.Restaure()

        Dim choix As Char = ""
        Dim uneSomme As Integer = 0
        Dim unLibelle As String = ""
        Dim numCompte As Integer = 1234

        While (choix <> "q")
            unCompte.afficheConsole()
            Console.WriteLine()
            Console.WriteLine("GESTION DE COMPTE")
            Console.Write("Choix (q)uit (r)etrait (d)epot : ")
            choix = Console.ReadLine()


            Select Case choix
                Case "d"
                    Console.Write("Depot de : ")
                    uneSomme = Integer.Parse(Console.ReadLine())
                    Console.Write("Libellé : ")
                    unLibelle = Console.ReadLine()
                    unCompte.depot(uneSomme, unLibelle)
                Case "r"
                    Console.Write("Retrait de : ")
                    uneSomme = Integer.Parse(Console.ReadLine())
                    Console.Write("Libellé : ")
                    unLibelle = Console.ReadLine()
                    unCompte.retrait(uneSomme, unLibelle)

                Case "q"
                    unCompte.Sauvegarde()
                    Console.Write("Au revoir...")

                Case Else
                    Console.WriteLine("--Choix non valide--")
            End Select

        End While

    End Sub

End Module
