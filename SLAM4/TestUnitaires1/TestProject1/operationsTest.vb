Imports Microsoft.VisualStudio.TestTools.UnitTesting

Imports TestUnitaires



'''<summary>
'''Classe de test pour operationsTest, destinée à contenir tous
'''les tests unitaires operationsTest
'''</summary>
<TestClass()> _
Public Class operationsTest


    Private testContextInstance As TestContext

    '''<summary>
    '''Obtient ou définit le contexte de test qui fournit
    '''des informations sur la série de tests active ainsi que ses fonctionnalités.
    '''</summary>
    Public Property TestContext() As TestContext
        Get
            Return testContextInstance
        End Get
        Set(value As TestContext)
            testContextInstance = Value
        End Set
    End Property

#Region "Attributs de tests supplémentaires"
    '
    'Vous pouvez utiliser les attributs supplémentaires suivants lorsque vous écrivez vos tests :
    '
    'Utilisez ClassInitialize pour exécuter du code avant d'exécuter le premier test dans la classe
    '<ClassInitialize()>  _
    'Public Shared Sub MyClassInitialize(ByVal testContext As TestContext)
    'End Sub
    '
    'Utilisez ClassCleanup pour exécuter du code après que tous les tests ont été exécutés dans une classe
    '<ClassCleanup()>  _
    'Public Shared Sub MyClassCleanup()
    'End Sub
    '
    'Utilisez TestInitialize pour exécuter du code avant d'exécuter chaque test
    '<TestInitialize()>  _
    'Public Sub MyTestInitialize()
    'End Sub
    '
    'Utilisez TestCleanup pour exécuter du code après que chaque test a été exécuté
    '<TestCleanup()>  _
    'Public Sub MyTestCleanup()
    'End Sub
    '
#End Region


    '''<summary>
    '''Test pour Carre
    '''</summary>
    <TestMethod()> _
    Public Sub CarreTest()
        Dim target As operations = New operations() ' TODO: initialisez à une valeur appropriée

        'Premier test
        Dim nb As Integer = 0 ' TODO: initialisez à une valeur appropriée
        Dim expected As Integer = 0 ' TODO: initialisez à une valeur appropriée
        Dim actual As Integer
        actual = target.Carre(nb)
        Assert.AreEqual(expected, actual)
        'Assert.Inconclusive("Vérifiez l'exactitude de cette méthode de test.")

        'Deuxieme test
        nb = 5
        expected = 26 '25 '9
        actual = target.Carre(nb)
        Assert.AreEqual(expected, actual)

    End Sub

    '''<summary>
    '''Test pour Puissance
    '''</summary>
    <TestMethod()> _
    Public Sub PuissanceTest()
        Dim target As operations = New operations() ' TODO: initialisez à une valeur appropriée
        Dim n As Integer = 0 ' TODO: initialisez à une valeur appropriée
        Dim p As Integer = 0 ' TODO: initialisez à une valeur appropriée
        Dim expected As Integer = 1 ' TODO: initialisez à une valeur appropriée
        Dim actual As Integer
        actual = target.Puissance(n, p)
        Assert.AreEqual(expected, actual)

        'Jeu de test pour Function Pow
        n = 2
        p = 3
        expected = 8
        actual = target.Puissance(n, p)
        Assert.AreEqual(expected, actual)

        'Jeu de test pour Function Pow
        n = 4
        p = 5
        expected = 1024
        actual = target.Puissance(n, p)
        Assert.AreEqual(expected, actual)

    End Sub
End Class
