Module unePermutation

    Public Sub PERMUTE(ByRef v1 As Integer, ByRef v2 As Integer)

        Dim perm As Integer

        perm = v2
        v2 = v1
        v1 = perm


    End Sub


    Sub Main()

        Dim a As Integer = 2
        Dim b As Integer = 4

        Console.WriteLine(" a : " & a.ToString & " -- b : " & b.ToString)
        Console.WriteLine("Permutation de a et b")

        PERMUTE(a, b)

        Console.WriteLine(" a : " & a.ToString & " -- b : " & b.ToString)
        Console.WriteLine("Permutation de a et b")


        Console.ReadLine()

    End Sub

End Module

