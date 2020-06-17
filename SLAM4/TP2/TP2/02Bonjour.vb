Module Bonjour

    Dim nom As String

    Sub Main()
        Console.Title = "BONJOUR..."
        Console.ForegroundColor = ConsoleColor.Green
        Console.BackgroundColor = ConsoleColor.Yellow
        Console.SetWindowSize(20, 10)
        Console.Write("Enrer votre nom : ")
        nom = Console.ReadLine()
        Console.WriteLine("BONJOUR " & nom)
        Console.Write("Appuyer sur ENTREE pour continuer..")
        Console.ReadLine()
    End Sub

End Module
