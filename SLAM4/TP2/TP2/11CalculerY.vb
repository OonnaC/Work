Module Calcul

    Public Function calc(ByVal x As Single, ByVal a As Single, ByVal b As Single, ByVal c As Single) As Single

        'calc = (a * x ^ 2) + (b * x) + c
        Return (a * x * x) + (b * x) + c

    End Function



    Sub Main()

        'For i As Integer = -50 To 50
        '    Console.WriteLine(calc(i, 1, 2, 3).ToString)
        'Next i

        Dim A As Single
        Dim B As Single
        Dim C As Single
        Dim X As Single

        Console.Write("Valeur de X: ")
        X = Single.Parse(Console.ReadLine())
        Console.Write("Valeur de A: ")
        A = Single.Parse(Console.ReadLine())
        Console.Write("Valeur de B: ")
        B = Single.Parse(Console.ReadLine())
        Console.Write("Valeur de C: ")
        C = Single.Parse(Console.ReadLine())


        Console.WriteLine("Votre valeur Y est égal à :" & calc(X, A, B, C))

        Console.ReadLine()



    End Sub

End Module
