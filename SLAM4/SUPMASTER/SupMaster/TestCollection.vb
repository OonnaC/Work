Module TestCollection
    'Declaration d'une collection fortement typee d'objet
    Dim mesObjets As List(Of Object)

    Sub main()
        'instanciation de la collection
        mesObjets = New List(Of Object)

        'ajout d'elements
        mesObjets.Add("Un")
        mesObjets.Add("Deux")
        mesObjets.Add("Trois")

        'affichage dans le debug du nombre d'elements de la collection
        Debug.Print(mesObjets.Count.ToString)

        'parcours de la collection
        For Each unElement As Object In mesObjets
            'affichage dans la console de l'element 
            Console.WriteLine(unElement.ToString)
        Next

        'suppression du deuxieme element (indice 1)
        mesObjets.Remove(1)

        'affichage du premier element (indce 0)
        Console.WriteLine(mesObjets.Item(0))

        Console.ReadLine()

    End Sub

End Module
