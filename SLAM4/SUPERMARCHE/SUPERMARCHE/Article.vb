﻿Public Class Article
Private _Reference As String
Private _Designation As String
Private _PrixUnitaire As Double
Private _Quantite As Integer

'METHODES D'ACCES AUX DONNEES
Public Property Reference() As String
    Get
        Return Me._Reference
    End Get
    Set(ByVal Value As String)
        Me._Reference = Value
    End Set
End Property
Public Property Designation() As String
    Get
        Return Me._Designation
    End Get
    Set(ByVal Value As String)
        Me._Designation = Value
    End Set
End Property
Public Property PrixUnitaire() As Double
    Get
        Return Me._PrixUnitaire
    End Get
    Set(ByVal Value As Double)
        Me._PrixUnitaire = Value
    End Set
End Property
Public Property Quantite() As Integer
    Get
        Return Me._Quantite
    End Get
    Set(ByVal Value As Integer)
        Me._Quantite = Value
    End Set
End Property

'LES CONSTRUCTEURS
'creation du constructeur sans argument
Public Sub New()

End Sub

Public Sub New(ByVal uneReference As String, ByVal uneDesignation As String, ByVal unPrixUnitaire As Double)

End Sub

Public Sub New(ByVal uneReference As String, ByVal uneDesignation As String)

End Sub

Public Sub New(ByVal uneReference As String)

End Sub

Public Sub New(ByVal uneReference As String, ByVal uneDesignation As String, ByVal unPrixUnitaire As Double, ByVal uneQuantite As Integer)
    Me.Reference = uneReference
    Me.Designation = uneDesignation
    Me.PrixUnitaire = unPrixUnitaire
    Me.Quantite = uneQuantite
End Sub


Public Sub AfficheDebug()
    Debug.Print(Me.ToString)
End Sub

Public Sub AfficheConsole()
    Console.WriteLine(Me.ToString)
End Sub


'DESTRUCTEUR
Protected Overrides Sub finalize()
    Console.WriteLine("objet detruit")
End Sub


'METHODES DE CALCUL
Public Sub EntreeArticle(ByVal unNombre As Integer)
    Me.Quantite = Me.Quantite + unNombre
End Sub

Public Sub EntreeArticle()
    Me.EntreeArticle(1)
End Sub

Public Sub SortieArticle(ByVal unNombre As Integer)
    Me.Quantite = Me.Quantite - unNombre
End Sub

Public Sub SortieArticle()
    Me.SortieArticle(1)
End Sub

Public Overrides Function ToString() As String
    Return Me.Reference & " : " & Me.Designation & " : " & Me.PrixUnitaire.ToString & " : " & Me.Quantite.ToString
End Function


End Class

