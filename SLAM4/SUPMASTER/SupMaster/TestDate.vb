Module TestDate
    'declaration d'une date
    Dim uneDate As Date

    Sub main()

        'instanciation d'une date
        uneDate = New Date(2015, 3, 17)

        'affichage de la date du jour
        Debug.Print(Date.Today.ToString)

        'formatage de la date du jour
        Debug.Print(uneDate.ToString)
        Debug.Print(Date.Today.ToString("dd/MM/yyyy"))

        Console.ReadLine()

    End Sub
End Module
