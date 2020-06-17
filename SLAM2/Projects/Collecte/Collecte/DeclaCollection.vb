Module Collecter
    Dim maCollection As New Collection
    Dim monDictionnaire As New Collection


    Sub Main()
        'maCollection.Add("prof")
        'maCollection.Add(2)
        'maCollection.Add("trois")
        'maCollection.Add(4.1)

        'MsgBox(maCollection.Item(2))
        'MsgBox(maCollection.Count.ToString)

        'maCollection.Remove(2)

        'MsgBox(maCollection.Item(2))
        'MsgBox(maCollection.Count.ToString)


        'Parcourir une collection avec la boucle for (compliqué)
        'For i As Integer = 1 To maCollection.Count
        'MsgBox(maCollection.Item(i).ToString)
        'Next i


        'Parcourir une collection avec foreach (rapide, +simple)
        'For Each unElement As Object In maCollection
        'MsgBox(unElement.ToString)
        'Next

        monDictionnaire.Add("Hello", "Minougris")
        monDictionnaire.Add(2, "deuxieme")
        monDictionnaire.Add("Timothy", "troisieme")
        monDictionnaire.Add(4.65, "quatrieme")

        'Deplacement de Minougris
        monDictionnaire.Remove("Minougris")

        'Affichage de tous les elements de la collection
        For Each unElement As Object In monDictionnaire

            Console.WriteLine(unElement.ToString)
        Next
        'Demander si 
        MsgBox(monDictionnaire.Contains("troisieme"))
        MsgBox(monDictionnaire.Contains("Minougris"))

        Console.ReadLine()

    End Sub

End Module
