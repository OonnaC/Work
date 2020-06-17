Module Factoriel04

    Sub Main()

        Dim nombre As Integer
        Dim f As Double = 1.0
        Dim i As Double = 1.0


        Console.Write("Entrer le nombre: ")
        nombre = Double.Parse(Console.ReadLine())

        Do

            f = f * i
            i = i + 1

        Loop While i <= nombre

        Console.WriteLine("Le factoriel du nombre est : " & f.ToString)
        Console.ReadLine()

    End Sub

End Module
