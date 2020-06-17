Module Module1

    Dim tailleProduit As Integer
    Dim taillePanier As Integer

    Public Structure Produit
        Dim Numero As Integer
        Dim Designation As String
        Dim Prix As Double
    End Structure

    Public Structure Panier
        Dim NumeroProduit As Integer
        Dim Quantite As Integer
        Dim Prix As Double
    End Structure

    Dim Mesproduits(100) As Produit
    Dim Monpanier(100) As Panier

    Dim Numprod As Integer
    Dim quantite As Integer


    Dim laDesignation As String
    Dim lePrix As Double
    Dim prixproduits As Double
    Dim laQuantite As Integer
    Dim total As Double = 0.0
    Dim rep As String

    Sub Main()
        MesProduits(1).Numero = 1
        MesProduits(1).Designation = "Banane"
        MesProduits(1).Prix = 0.89

        MesProduits(2).Numero = 2
        MesProduits(2).Designation = "Pomme"
        MesProduits(2).Prix = 0.89

        MesProduits(3).Numero = 3
        MesProduits(3).Designation = "Orange"
        MesProduits(3).Prix = 0.89

        MesProduits(4).Numero = 4
        MesProduits(4).Designation = "Pain"
        MesProduits(4).Prix = 0.89

        MesProduits(5).Numero = 5
        MesProduits(5).Designation = "Croissant"
        MesProduits(5).Prix = 0.89

        tailleProduit = 5
        taillePanier = 0

        'MsgBox(Mesproduits(3).Designation)

        'Monpanier(1).NumeroProduit = 1
        'Monpanier(1).Quantite = 2
        'Monpanier(2).NumeroProduit = 2
        'Monpanier(2).Quantite = 4
        'Monpanier(3).NumeroProduit = 3
        'Monpanier(3).Quantite = 6
        'Monpanier(4).NumeroProduit = 4
        'Monpanier(4).Quantite = 1
        'Monpanier(5).NumeroProduit = 5
        'Monpanier(5).Quantite = 1





        For i As Integer = 1 To tailleProduit
            Console.WriteLine(Mesproduits(i).Numero.ToString & " - " & Mesproduits(i).Designation)

        Next i

        'Dim Numprod As Integer
        'Dim quantite As Integer


        'Dim laDesignation As String
        'Dim lePrix As Double
        'Dim prixproduits As Double
        'Dim laQuantite As Integer
        'Dim total As Double = 0.0

        Do

            taillePanier = taillePanier + 1
            Console.Write("Numero du produit : ")
            Numprod = Integer.Parse(Console.ReadLine())
            Console.Write("Quantite : ")
            quantite = Integer.Parse(Console.ReadLine())

            Monpanier(taillePanier).NumeroProduit = Numprod
            Monpanier(taillePanier).Quantite = quantite

            Console.WriteLine("On continue (o/n) : ")
            rep = Console.ReadLine

        Loop Until rep = "n"


        For j As Integer = 1 To taillePanier
            

            laDesignation = Mesproduits(Monpanier(j).NumeroProduit).Designation
            laQuantite = Monpanier(j).Quantite
            lePrix = Mesproduits(Monpanier(j).NumeroProduit).Prix

            prixproduits = laQuantite * lePrix
            total = total + prixproduits
            Console.WriteLine(Monpanier(j).Quantite.ToString & "  " & laDesignation & "  " & lePrix.ToString & " Total : " & prixproduits.ToString)


        Next j

        Console.WriteLine("TOTAL : " & total.ToString)
        Console.ReadLine()



    End Sub

End Module
