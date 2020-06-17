Module Module1

    Dim uneDemande As Demande

    Dim unDeposant As Deposant

    Dim desDemandes As New List(Of Demande)


    Sub Main()



        ' Question N°3

        uneDemande = New Demande(100, Date.Now, "Brest", EnumAvis.Favorable)
        'MsgBox(uneDemande.ToString)


        ' Question N°6 creation d'une collection de deux demandes

        desDemandes.Add(uneDemande)

        uneDemande = New Demande(200, New Date(2018, 3, 4), "Quimper", EnumAvis.Defavorable)

        desDemandes.Add(uneDemande)



        'creation du deposant avec la collection de demandes

        unDeposant = New Deposant(123, "DURAND", "PAUL", EnumCivilite.Monsieur, desDemandes)

        unDeposant.afficheConsole()


        Console.ReadLine()
    End Sub

End Module
