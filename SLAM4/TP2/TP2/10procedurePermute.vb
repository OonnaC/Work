Module Permuter

    Public Sub PERMUTE(ByRef v1 As Integer, ByRef v2 As Integer)

        Dim perm As Integer

        perm = v2
        v2 = v1
        v1 = perm

    End Sub
    Public Sub tri(ByRef x As Integer, ByRef y As Integer, ByRef z As Integer)

        If x > y Then
            PERMUTE(x, y)
        End If
        If y > z Then
            PERMUTE(y, z)
        End If
        If x > y Then
            PERMUTE(x, y)
        End If

    End Sub

    Sub Main()

        Dim a As Integer
        Dim b As Integer
        Dim c As Integer

        Console.Write("Nombre N°1: ")
        a = Integer.Parse(Console.ReadLine())
        Console.Write("Nombre N°2: ")
        b = Integer.Parse(Console.ReadLine())
        Console.Write("Nombre N°3: ")
        c = Integer.Parse(Console.ReadLine())
        Console.WriteLine(a.ToString & "-" & b.ToString & "-" & c.ToString)

        'If a > b Then
        '    PERMUTE(a, b)
        'End If
        'If b > c Then
        '    PERMUTE(b, c)
        'End If
        'If a > b Then
        '    PERMUTE(a, b)
        'End If

        tri(a, b, c)

        Console.WriteLine("Tri en ordre croissant par permutations....")
        Console.WriteLine(a.ToString & "-" & b.ToString & "-" & c.ToString)

        Console.ReadLine()

    End Sub

End Module

