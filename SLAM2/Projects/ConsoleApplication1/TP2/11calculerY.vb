Module Calcul

    Function permut(ByVal a, ByVal b, ByVal c, ByVal x)

        Dim y As Double = (a * x ^ 2) + (b * x) + c


        Return y
    End Function



    Sub Main()

        Dim A As Double
        Dim B As Double
        Dim C As Double
        Dim X As Double

        Console.Write("Valeur de A: ")
        A = Double.Parse(Console.ReadLine())
        Console.Write("Valeur de B: ")
        B = Double.Parse(Console.ReadLine())
        Console.Write("Valeur de C: ")
        C = Double.Parse(Console.ReadLine())
        Console.Write("Valeur de X: ")
        X = Double.Parse(Console.ReadLine())


        Console.WriteLine("Votre valeur Y est égal à :" & permut(A, B, C, X))

        Console.ReadLine()



    End Sub

End Module
