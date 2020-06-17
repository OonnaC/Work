Module Delta

    Function permut(ByVal a As Single, ByVal b As Single, ByVal c As Single, ByVal x As Single)

        Dim y As Double = (a * x ^ 2) + (b * x) + c


        Return y
    End Function

    Function calculdelta(ByVal a As Single, ByVal b As Single, ByVal c As Single)

        Dim delta As Single = (b) ^ 2 - (4 * a * c)

        Return delta
    End Function


    Sub Main()

        Dim A As Double
        Dim B As Double
        Dim C As Double
        Dim X As Integer = 0

        Console.Write("Valeur de A: ")
        A = Double.Parse(Console.ReadLine())
        Console.Write("Valeur de B: ")
        B = Double.Parse(Console.ReadLine())
        Console.Write("Valeur de C: ")
        C = Double.Parse(Console.ReadLine())

        For compteur = -5 To 5
            X = X + compteur


        Next


        Console.WriteLine("Votre valeur Y est égal à :" & permut(A, B, C, X))

        Console.ReadLine()



    End Sub

End Module
