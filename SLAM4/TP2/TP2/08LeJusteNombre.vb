Module Recherche_nombre

    Dim NbRandom As Integer
    Dim NbInferieur As Integer = 0
    Dim NbSup As Integer = 1000
    Dim NbSaisi As Integer
    Dim compteur As Integer = 0
    Dim Stopwatch As System.Diagnostics.Stopwatch
  
    'Console.Write("Entrer le nombre inférieur: ")
    'NbInferieur = Int.Parse(Console.ReadLine())
    'Console.Write("Entrer le nombre supérieur: ")
    'NbSup = Int.Parse(Console.ReadLine())

    Sub Main()

        Stopwatch = New Stopwatch

        Randomize()

        NbRandom = Int((NbSup - NbInferieur + 1) * Rnd() + NbInferieur)

        Stopwatch.Start()

        Console.WriteLine("Recherche d'un nombre ... ")
 

        Do 'While proposition <> NbRandom  'End while

            Console.Write("Entrez une valeur entre 0 et 1000 : ")
            NbSaisi = Integer.Parse(Console.ReadLine())
            compteur = compteur + 1

            If NbSaisi < NbRandom Then
                Console.WriteLine(compteur & "Le nombre que vous avez saisi est trop petit...")
            End If
            If NbSaisi > NbRandom Then
                Console.WriteLine(compteur & "Le nombre que vous avez saisi est trop grand...")
            End If

        Loop Until NbSaisi = NbRandom
        Stopwatch.Stop()
        Console.WriteLine("Bravo! Vous avez réussi en " & compteur.ToString & " coups ! Le nombre exact était " & NbRandom.ToString)
        Console.WriteLine(Stopwatch.Elapsed().TotalSeconds & " secondes")
        Console.Read()

    End Sub

End Module