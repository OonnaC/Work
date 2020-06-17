Imports System.IO
Imports System.Runtime.Serialization.Formatters.Binary


Module Module2

    'Dim monCompte As Compte
    Dim unCompte As Compte
    Dim mesComptes As New Collection

    'Dim unCompte1 As New Compte

    Sub Main()

        'unCompte1 = New Compte(8888, 15000)
        'unCompte1.afficheConsole()

        'Console.ReadLine()

        Console.WriteLine("Ma collection de comptes : ")
        Console.WriteLine()

        unCompte = New Compte(123, 100)
        mesComptes.Add(unCompte)
        unCompte = New Compte(456, 1000)
        mesComptes.Add(unCompte)
        unCompte = New Compte(789, 10000)
        mesComptes.Add(unCompte)

        For Each unCompteTemp As Compte In mesComptes
            unCompteTemp.afficheConsole()
        Next

        'déclaration d'un fichier
        Dim monFichierSerialisation As Stream = File.Create("mesComptes.bin")
        'déclaration du "sérialiseur"
        Dim serialiser As New BinaryFormatter()
        'sérialisation
        serialiser.Serialize(monFichierSerialisation, mesComptes)
        'fermeture du ficher
        monFichierSerialisation.Close()

        Console.WriteLine()
        Console.WriteLine("Ma collection de comptes a ete serialisee...")
        Console.WriteLine()

        Console.WriteLine("Deserialisation de la collection de comptes : ")
        Console.WriteLine()

        If File.Exists("mesComptes.bin") Then
            Dim leFichierSerialisation As Stream = File.OpenRead("mesComptes.bin")
            Dim deserialiser As New BinaryFormatter()
            mesComptes = CType(deserialiser.Deserialize(leFichierSerialisation), Collection)
            leFichierSerialisation.Close()
        End If

        For Each unCompteTemp As Compte In mesComptes
            unCompteTemp.afficheConsole()
        Next

        Console.WriteLine()
        Console.WriteLine("Ma collection de comptes a ete bien deserialisee...")
        Console.WriteLine()


        Console.ReadLine()

    End Sub

    
End Module
