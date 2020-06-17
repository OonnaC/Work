Module MonCompte

    Sub Main()

        Dim nombre As Single

        Console.Write("Entrer un nombre :")
        nombre = Single.Parse(Console.ReadLine())
        nombre = nombre + 1.2

        Console.Write("Nombre + 1,2: " & nombre.ToString)

        Console.ReadLine()

    End Sub
End Module
