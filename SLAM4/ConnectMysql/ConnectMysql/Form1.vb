Public Class ButtonValiderModif



    Dim connexionSql As MySqlConnection
    Dim donnee As DataTable
    Dim da As MySqlDataAdapter

    Private Sub Form1_Load_1(sender As System.Object, e As System.EventArgs) Handles MyBase.Load

        Dim chaine As String
        chaine = "server=127.0.0.1; port=3307; userid=root; password=; database=mysql; pooling=false"
        connexionSql = New MySqlConnection(chaine)
        connexionSql.Open()
        MessageBox.Show("Connexion  réussie...")

        Dim reader As MySqlDataReader
        Dim cmd As New MySqlCommand("SHOW DATABASES", connexionSql)

        reader = cmd.ExecuteReader()
        cmbBases.Items.Clear()

        While (reader.Read())
            cmbBases.Items.Add(reader.GetString(0))
        End While
        reader.Close()

    End Sub

    Private Sub Label1_Click(sender As System.Object, e As System.EventArgs) Handles Label1.Click

    End Sub


    Private Sub cmbBases_SelectedIndexChanged(sender As Object, e As System.EventArgs) Handles cmbBases.SelectedIndexChanged

        MsgBox(cmbBases.SelectedItem.ToString)
        Dim reader As MySqlDataReader
        connexionSql.ChangeDatabase(cmbBases.SelectedItem.ToString)
        Dim cmd As New MySqlCommand("SHOW TABLES", connexionSql)

        Try
            reader = cmd.ExecuteReader()
            cmbBases.Items.Clear()

            While (reader.Read())
                cmbTables.Items.Add(reader.GetString(0))
            End While
            reader.Close()

        Catch ex As MySqlException
            MessageBox.Show("Probleme avec MySQL: " + ex.Message)
        End Try

    End Sub



    Private Sub cmbTables_SelectedIndexChanged(sender As System.Object, e As System.EventArgs) Handles cmbTables.SelectedIndexChanged
        donnee = New DataTable
        da = New MySqlDataAdapter("SELECT * FROM " + cmbTables.SelectedItem.ToString(), connexionSql)
        Dim cb As MySqlCommandBuilder

        cb = New MySqlCommandBuilder(da)
        da.Fill(donnee)
        DataGridView1.DataSource = donnee

    End Sub

    Private Sub ButtonValiderModif_Click(sender As Object, e As System.EventArgs) Handles Me.Click
        Dim changes As DataTable = donnee.GetChanges()
        da.Update(changes)
        donnee.AcceptChanges()
    End Sub

End Class
