Module Caisse


    Dim tailleProduit As Integer
    Dim taillePanier As Integer

    'declaration d'une structure
    Public Structure Produit
        Dim Designation As String
        Dim Prix As Double
        Dim Numero As Integer
    End Structure


    Public Structure Panier
        Dim NumeroProduit As Integer
        Dim Quantite As Integer
    End Structure

    'declaration d'un tableau de structures
    Dim Mesproduits(100) As Produit
    Dim Monpanier(100) As Panier
    Dim total As Double = 0.0


    Sub Main()

        MesProduits(1).Designation = "Banane"
        MesProduits(1).Numero = 1
        MesProduits(1).Prix = 0.89

        MesProduits(2).Designation = "Pomme"
        MesProduits(2).Numero = 2
        MesProduits(2).Prix = 0.5

        MesProduits(3).Designation = "Orange"
        MesProduits(3).Numero = 3
        Mesproduits(3).Prix = 0.3

        MesProduits(4).Designation = "Pain"
        MesProduits(4).Numero = 4
        Mesproduits(4).Prix = 0.95

        MesProduits(5).Designation = "Croissant"
        MesProduits(5).Numero = 5
        Mesproduits(5).Prix = 1.0


        tailleProduit = 5
        taillePanier = 0

        Dim numProd As Integer
        Dim qte As Integer


        Do

            Console.Clear()
            'affiche liste produits
            For j = 1 To tailleProduit
                Console.WriteLine(Mesproduits(j).Numero & "-" & Mesproduits(j).Designation)


            Next j
            Console.WriteLine()
            Console.WriteLine()
            Console.Write("Numero du produit (1.." & tailleProduit.ToString & ") " & (tailleProduit + 1).ToString & "=Exit : ")

            numProd = Integer.Parse(Console.ReadLine())

            If numProd = tailleProduit + 1 Then
                Exit Do

            End If

            Console.Write("Articles:" & Mesproduits(numProd).Designation & " -- Quantite : ")
            qte = Integer.Parse(Console.ReadLine())

            taillePanier = taillePanier + 1
            Monpanier(taillePanier).NumeroProduit = numProd
            Monpanier(taillePanier).Quantite = qte


        Loop

        Console.Clear()
        Console.ForegroundColor = ConsoleColor.White
        Console.WriteLine("         TICKET DE CAISSE")
        Console.WriteLine("-----------------------------------")
        Console.WriteLine(Format(Date.Now, "Le dddd dd MMMM yyyy à HH:mm:ss"))
        Console.WriteLine()
        Console.WriteLine(taillePanier.ToString & " article(s)")
        Console.WriteLine()

        'affichage panier
        Dim prixtot As Double = 0.0
        Dim designation As String = ""
        Dim prixarticles As Double = 0.0

        For j = 1 To taillePanier



            prixarticles = Mesproduits(Monpanier(j).NumeroProduit).Prix
            designation = Mesproduits(Monpanier(j).NumeroProduit).Designation

            prixtot = prixarticles * Monpanier(j).Quantite

            Console.WriteLine(Monpanier(j).Quantite & " " & designation & "                 " & prixtot)
            '  Console.WriteLine(prixarticles)

            total = total + prixtot


        Next j


        Console.WriteLine("TOTAL :" & total.ToString)
        Console.WriteLine("Merci de votre visite")
        Console.WriteLine("----------------------------------")
        Console.WriteLine()

        Console.ReadLine()







    End Sub
End Module
