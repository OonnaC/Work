Module Factoriel

    Sub Main()

        Dim nombre As Integer
        Dim facto As Double = 1.0


        Console.Write("Entrer le nombre: ")
        nombre = Integer.Parse(Console.ReadLine())

        For compteur = 1 To nombre
            facto = facto * compteur

            ' Console.WriteLine(" " & compteur.ToString)

        Next compteur
        Console.WriteLine("Le factoriel du nombre est : " & facto.ToString)
        Console.ReadLine()

    End Sub

End Module
