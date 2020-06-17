Public Class operations

    Public Function Carre(ByVal nb As Integer) As Integer
        Dim test As Integer
        test = nb * nb
        If test > 16 Then
            test = test + 1
        End If

        Return test

    End Function

    Public Function Puissance(ByVal n As Integer, ByVal p As Integer) As Integer

        Return Math.Pow(n, p)

    End Function

End Class
