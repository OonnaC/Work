Module Enregistreuse

    Dim tailleProduit As Integer
    Dim taillePanier As Integer

    'declaration d'une structure
    Public Structure Produit
        Dim Numero As Integer
        Dim Designation As String
        Dim Prix As Double
    End Structure

    Public Structure Panier
        Dim NumeroProduit As Integer
        Dim quantite As Integer
    End Structure

    'declaration d'un tableau de structures
    Dim MesProduits(100) As Produit
    Dim MonPanier(100) As Panier


    Public Sub initialisation()
        'initialisation du tableau des produits
        MesProduits(1).Designation = "Banane"
        MesProduits(1).Numero = 1
        MesProduits(1).Prix = 0.89

        MesProduits(2).Designation = "Pomme"
        MesProduits(2).Numero = 2
        MesProduits(2).Prix = 0.5

        MesProduits(3).Designation = "Orange"
        MesProduits(3).Numero = 3
        MesProduits(3).Prix = 0.3

        MesProduits(4).Designation = "Pain"
        MesProduits(4).Numero = 4
        MesProduits(4).Prix = 0.95

        MesProduits(5).Designation = "Croissant"
        MesProduits(5).Numero = 5
        MesProduits(5).Prix = 1.0

        tailleProduit = 5
        taillePanier = 0
    End Sub

    Public Sub affichageProduit()
        Console.Clear()
        'Affichage des tous les produits
        For j = 1 To tailleProduit
            Console.WriteLine(MesProduits(j).Numero & " - " & MesProduits(j).Designation)
        Next j
        Console.WriteLine()
        Console.WriteLine()
    End Sub

    Public Sub editionTicket()
        'Edition du ticket de caisse
        Dim prixTotal As Double = 0.0
        Dim i As Integer
        Dim prixProd As Double = 0.0

        Console.Clear()
        Console.ForegroundColor = ConsoleColor.White
        Console.WriteLine("         TICKET DE CAISSE")
        Console.WriteLine("-----------------------------------")
        Console.WriteLine(Format(Date.Now, "Le dddd dd MMMM yyyy à HH:mm"))
        Console.WriteLine()
        Console.WriteLine(taillePanier.ToString & " article(s)")
        Console.WriteLine()

        'pour tout le panier
        For i = 1 To taillePanier
            Console.WriteLine(MonPanier(i).quantite.ToString & " " & MesProduits(MonPanier(i).NumeroProduit).Designation.PadLeft(10) & " " & MesProduits(MonPanier(i).NumeroProduit).Prix.ToString.PadRight(10))
            prixProd = MesProduits(MonPanier(i).NumeroProduit).Prix * MonPanier(i).quantite
            Console.WriteLine("                             " & prixProd.ToString)
            'On ajout au total
            prixTotal = prixTotal + prixProd
        Next i

        Console.WriteLine("                             ----")

        Console.Write("TOTAL :                      ")
        Console.ForegroundColor = ConsoleColor.Green
        Console.WriteLine(prixTotal.ToString)
        Console.ForegroundColor = ConsoleColor.White

        Console.WriteLine()
        Console.WriteLine("Merci de votre visite")
        Console.WriteLine("-----------------------------------")

        Console.Read()

    End Sub

    Public Sub annulation()
        Console.ForegroundColor = ConsoleColor.Red
        'Affichage de l'article annulé
        Console.WriteLine("Annulation : " & MesProduits(MonPanier(taillePanier).NumeroProduit).Designation)
        Console.ForegroundColor = ConsoleColor.Gray
        Console.ReadLine()
        'on retire le produit du panier
        taillePanier = taillePanier - 1
    End Sub

    Public Sub ajoutPanier(ByVal numProd As Integer, ByVal qte As Integer)
        'On ajoute le produit dans le panier
        taillePanier = taillePanier + 1
        MonPanier(taillePanier).NumeroProduit = numProd
        MonPanier(taillePanier).quantite = qte
    End Sub


    Sub Main()

        Dim numProd As Integer
        Dim qte As Integer

        initialisation()

        'Boucle permattant la saisie du panier
        Do
            affichageProduit()

            'Saisie du numero
            Console.Write("Numero du produit (1.." & tailleProduit.ToString & ") " & (tailleProduit + 1).ToString & "=Exit 0=Annulation : ")
            numProd = Integer.Parse(Console.ReadLine())

            'Quitte la boucle si le numero est superieur au nombre de produit
            If numProd > tailleProduit Then
                Exit Do
            End If

            'Gestion de l'annulation du dernier produit saisi
            If numProd = 0 Then
                annulation()
            Else
                Console.Write("Article : " & MesProduits(numProd).Designation & " -- Quantite : ")
                qte = Integer.Parse(Console.ReadLine())
                ajoutPanier(numProd, qte)
            End If
        Loop

        editionTicket()

    End Sub



End Module
