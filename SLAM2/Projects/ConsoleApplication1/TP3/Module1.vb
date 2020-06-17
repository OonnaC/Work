Module Module1

    'reserver un emplacment en memoire

    Dim monCompte As leCompte
    Dim lettre As String
    Dim leretrait As Integer
    Dim ledepot As Integer
    Dim action As String





    Sub Main()

        'instantiat° del'objet en utilisant le constructeur

        monCompte = New leCompte(89)

        'monCompte.afficheConsole()

        'monCompte.depot(1000)

        'monCompte.afficheConsole()

        'monCompte.retrait(50)

        'monCompte.afficheConsole()

        Do Until (lettre = "q") Or (lettre = "Q")
            Console.WriteLine("Choix <q>uit <r>etrait <d>epot <a>ffiche :")
            lettre = Console.ReadLine()


            If (lettre = "r") Or (lettre = "R") Then
                Console.WriteLine("Choix du montant à retirer :")
                leretrait = Console.ReadLine()
                monCompte.retrait(leretrait)
            ElseIf (lettre = "d") Or (lettre = "D") Then
                Console.WriteLine("Choix du montant à déposer :")
                ledepot = Console.ReadLine()
                monCompte.depot(ledepot)
            End If

            If (lettre = "a") Or (lettre = "A") Then
                monCompte.afficheConsole()
            End If

        Loop

        Console.ReadLine()


    End Sub

End Module
