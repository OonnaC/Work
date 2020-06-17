Module Module1

    Dim context As testentityEntities = New testentityEntities
    Dim newUser As user = New user()


    Sub Main()
        'newUser.login = "sergie"
        'newUser.password = "p@ssword123"
        'newUser.email = "serge.lamont@gmail.com"
        ''ajoute l’utilisateur au context
        'context.AddTouser(newUser)
        ''valide l’ajout dans la base de donnees
        'context.SaveChanges()

        '
        'affiche des infos en utilisant une query
        '
        'Dim query = From it In context.user
        '            Order By (it.numero)
        '            Select it

        'Dim utilisateur As user
        'For Each utilisateur In query
        '    Console.WriteLine(utilisateur.numero.ToString & " " & utilisateur.login.ToString & " " & utilisateur.password.ToString)
        '    'MessageBox.Show(utilisateur.login.ToString)
        '    'ListBox1.Items.Add(utilisateur.login.ToString)
        'Next

        'Console.ReadLine()

        '
        'modification des informations
        '
        Dim modif = (From it In context.user
                     Where it.numero = it.numero
                    Select it).First

        modif.email = modif.email + "pwd@orange.com"
        Dim utilisateur As user
        For Each utilisateur In modif
            Console.WriteLine(utilisateur.numero.ToString & " " & utilisateur.login.ToString & " " & utilisateur.password.ToString)
        Next
        Console.ReadLine()

    End Sub

End Module
