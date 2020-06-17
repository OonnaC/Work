Module Module1

    Dim uneVisite As Visite
    Dim lesVisites As List(Of Visite)

    Sub Main()

        'Question Numero 3
        uneVisite = New Visite(Date.FromOADate(29 / 4 / 2019), "Pierre")
        Debug.Print(uneVisite.ToString)
        'uneVisite.afficheConsole()
        uneVisite = New Visite(Date.Today, "Lola")
        Console.WriteLine(uneVisite.ToString)
        Console.ReadLine()

        'Question Numero 4
      
        Dim hier As Date = New Date(2015, 3, 17)
        Dim premiereVisite As New Visite(hier, "Pierre")

        Dim deuxiemeVisite As New Visite(Date.Today, "Jean")

        Dim demain As Date = New Date(2015, 3, 19)
        Dim troisiemeVisite As New Visite(demain, "Pierre")

        Dim uneOrganisation As New Organisation("GRT", "Paris")
        uneOrganisation.LesVisites.Add(premiereVisite)
        uneOrganisation.LesVisites.Add(deuxiemeVisite)
        uneOrganisation.LesVisites.Add(troisiemeVisite)
        uneOrganisation.AfficheConsole()
        Console.ReadLine()

        Dim lesVistes As New List(Of Visite)
        lesVistes = uneOrganisation.VisitesAFaire
        Console.WriteLine()
        Console.WriteLine()
        Console.WriteLine("LISTE DES VISITES A FAIRE AU " & Date.Today.ToString("dd/MM/yyyy") & " : ")
        For Each uneVisiteTemp As Visite In lesVisites
            Console.WriteLine(uneVisiteTemp.ToString)
        Next

        Console.ReadLine()
    End Sub

End Module
