Imports Microsoft.VisualStudio.TestTools.UnitTesting

Imports TestUnitaires



'''<summary>
'''Classe de test pour CompteTest, destinée à contenir tous
'''les tests unitaires CompteTest
'''</summary>
<TestClass()> _
Public Class CompteTest


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
    '''Test pour depot
    '''</summary>
    <TestMethod()> _
    Public Sub depotTest()
        Dim target As Compte = New Compte(1234, 50) ' TODO: initialisez à une valeur appropriée
        Dim uneSomme As Integer = 100 ' TODO: initialisez à une valeur appropriée
        Dim expected As Integer = 150

        Dim actual As Integer
        target.depot(uneSomme)
        actual = target.soldeActuel
        Assert.AreEqual(expected, actual)

        'Assert.Inconclusive("Une méthode qui ne retourne pas une valeur ne peut pas être vérifiée.")
    End Sub

    '''<summary>
    '''Test pour retrait
    '''</summary>
    <TestMethod()> _
    Public Sub retraitTest()
        Dim target As Compte = New Compte(1234, 50) ' TODO: initialisez à une valeur appropriée
        Dim somme As Integer = 10 ' TODO: initialisez à une valeur appropriée

        Dim expected As Integer = 40

        target.retrait(somme)
        Dim actual As Integer
        actual = target.soldeActuel
        Assert.AreEqual(expected, actual)
    End Sub


End Class
