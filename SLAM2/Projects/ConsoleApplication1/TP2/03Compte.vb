Module Compte

    Sub Main()
        Dim nbre As Integer
        Dim nombre As Integer

        Console.Write("Ecrire un nombre entier")

        nombre = Integer.Parse(Console.ReadLine())
        nbre = nombre + 1

        Console.Write("Nombre + 1: " & nbre.ToString)

        Console.ReadLine()

    End Sub
End Module
