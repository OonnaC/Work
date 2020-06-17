<Global.Microsoft.VisualBasic.CompilerServices.DesignerGenerated()> _
Partial Class Form1
    Inherits CompteWF.Form2

    'Form remplace la méthode Dispose pour nettoyer la liste des composants.
    <System.Diagnostics.DebuggerNonUserCode()> _
    Protected Overrides Sub Dispose(ByVal disposing As Boolean)
        Try
            If disposing AndAlso components IsNot Nothing Then
                components.Dispose()
            End If
        Finally
            MyBase.Dispose(disposing)
        End Try
    End Sub

    'Requise par le Concepteur Windows Form
    Private components As System.ComponentModel.IContainer

    'REMARQUE : la procédure suivante est requise par le Concepteur Windows Form
    'Elle peut être modifiée à l'aide du Concepteur Windows Form.  
    'Ne la modifiez pas à l'aide de l'éditeur de code.
    <System.Diagnostics.DebuggerStepThrough()> _
    Private Sub InitializeComponent()
        Me.afficheNum = New System.Windows.Forms.Button()
        Me.ModifNum = New System.Windows.Forms.Button()
        Me.ButtonAjout = New System.Windows.Forms.Button()
        Me.ButtonRetirer = New System.Windows.Forms.Button()
        Me.Label1 = New System.Windows.Forms.Label()
        Me.Label2 = New System.Windows.Forms.Label()
        Me.txtInputSomme = New System.Windows.Forms.TextBox()
        Me.lblSolde = New System.Windows.Forms.Label()
        Me.SuspendLayout()
        '
        'afficheNum
        '
        Me.afficheNum.Location = New System.Drawing.Point(12, 12)
        Me.afficheNum.Name = "afficheNum"
        Me.afficheNum.Size = New System.Drawing.Size(28, 23)
        Me.afficheNum.TabIndex = 0
        Me.afficheNum.Text = "N°"
        Me.afficheNum.UseVisualStyleBackColor = True
        '
        'ModifNum
        '
        Me.ModifNum.Location = New System.Drawing.Point(204, 13)
        Me.ModifNum.Name = "ModifNum"
        Me.ModifNum.Size = New System.Drawing.Size(68, 21)
        Me.ModifNum.TabIndex = 1
        Me.ModifNum.Text = "Modif N°"
        Me.ModifNum.UseVisualStyleBackColor = True
        '
        'ButtonAjout
        '
        Me.ButtonAjout.Location = New System.Drawing.Point(28, 117)
        Me.ButtonAjout.Name = "ButtonAjout"
        Me.ButtonAjout.Size = New System.Drawing.Size(75, 30)
        Me.ButtonAjout.TabIndex = 2
        Me.ButtonAjout.Text = "Ajouter"
        Me.ButtonAjout.UseVisualStyleBackColor = True
        '
        'ButtonRetirer
        '
        Me.ButtonRetirer.Location = New System.Drawing.Point(185, 117)
        Me.ButtonRetirer.Name = "ButtonRetirer"
        Me.ButtonRetirer.Size = New System.Drawing.Size(75, 30)
        Me.ButtonRetirer.TabIndex = 3
        Me.ButtonRetirer.Text = "Retirer"
        Me.ButtonRetirer.UseVisualStyleBackColor = True
        '
        'Label1
        '
        Me.Label1.AutoSize = True
        Me.Label1.Location = New System.Drawing.Point(58, 23)
        Me.Label1.Name = "Label1"
        Me.Label1.Size = New System.Drawing.Size(34, 13)
        Me.Label1.TabIndex = 4
        Me.Label1.Text = "Solde"
        '
        'Label2
        '
        Me.Label2.AutoSize = True
        Me.Label2.Location = New System.Drawing.Point(185, 23)
        Me.Label2.Name = "Label2"
        Me.Label2.Size = New System.Drawing.Size(13, 13)
        Me.Label2.TabIndex = 5
        Me.Label2.Text = "€"
        '
        'txtInputSomme
        '
        Me.txtInputSomme.Location = New System.Drawing.Point(103, 82)
        Me.txtInputSomme.Name = "txtInputSomme"
        Me.txtInputSomme.Size = New System.Drawing.Size(82, 20)
        Me.txtInputSomme.TabIndex = 7
        '
        'lblSolde
        '
        Me.lblSolde.BackColor = System.Drawing.SystemColors.Info
        Me.lblSolde.BorderStyle = System.Windows.Forms.BorderStyle.FixedSingle
        Me.lblSolde.Font = New System.Drawing.Font("Microsoft Sans Serif", 9.75!, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, CType(0, Byte))
        Me.lblSolde.ForeColor = System.Drawing.Color.Red
        Me.lblSolde.Location = New System.Drawing.Point(107, 12)
        Me.lblSolde.Name = "lblSolde"
        Me.lblSolde.Size = New System.Drawing.Size(78, 31)
        Me.lblSolde.TabIndex = 8
        Me.lblSolde.Text = "Label3"
        Me.lblSolde.TextAlign = System.Drawing.ContentAlignment.MiddleCenter
        '
        'Form1
        '
        Me.AutoScaleDimensions = New System.Drawing.SizeF(6.0!, 13.0!)
        Me.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font
        Me.ClientSize = New System.Drawing.Size(284, 165)
        Me.Controls.Add(Me.lblSolde)
        Me.Controls.Add(Me.txtInputSomme)
        Me.Controls.Add(Me.Label2)
        Me.Controls.Add(Me.Label1)
        Me.Controls.Add(Me.ButtonRetirer)
        Me.Controls.Add(Me.ButtonAjout)
        Me.Controls.Add(Me.ModifNum)
        Me.Controls.Add(Me.afficheNum)
        Me.Name = "Form1"
        Me.Text = "Form1"
        Me.ResumeLayout(False)
        Me.PerformLayout()

    End Sub
    Friend WithEvents afficheNum As System.Windows.Forms.Button
    Friend WithEvents ModifNum As System.Windows.Forms.Button
    Friend WithEvents ButtonAjout As System.Windows.Forms.Button
    Friend WithEvents ButtonRetirer As System.Windows.Forms.Button
    Friend WithEvents Label1 As System.Windows.Forms.Label
    Friend WithEvents Label2 As System.Windows.Forms.Label
    Friend WithEvents txtInputSomme As System.Windows.Forms.TextBox
    Friend WithEvents lblSolde As System.Windows.Forms.Label

End Class
