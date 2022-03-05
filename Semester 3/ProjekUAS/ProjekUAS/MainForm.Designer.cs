/*
 * Created by SharpDevelop.
 * User: LENOVO
 * Date: 07/12/2021
 * Time: 20:19
 * 
 * To change this template use Tools | Options | Coding | Edit Standard Headers.
 */
namespace ProjekUAS
{
	partial class MainForm
	{
		/// <summary>
		/// Designer variable used to keep track of non-visual components.
		/// </summary>
		private System.ComponentModel.IContainer components = null;
		
		/// <summary>
		/// Disposes resources used by the form.
		/// </summary>
		/// <param name="disposing">true if managed resources should be disposed; otherwise, false.</param>
		protected override void Dispose(bool disposing)
		{
			if (disposing) {
				if (components != null) {
					components.Dispose();
				}
			}
			base.Dispose(disposing);
		}
		
		/// <summary>
		/// This method is required for Windows Forms designer support.
		/// Do not change the method contents inside the source code editor. The Forms designer might
		/// not be able to load this method if it was changed manually.
		/// </summary>
		private void InitializeComponent()
		{
			this.label1 = new System.Windows.Forms.Label();
			this.label2 = new System.Windows.Forms.Label();
			this.textID = new System.Windows.Forms.TextBox();
			this.label3 = new System.Windows.Forms.Label();
			this.textNama = new System.Windows.Forms.TextBox();
			this.label4 = new System.Windows.Forms.Label();
			this.textHarga = new System.Windows.Forms.TextBox();
			this.label5 = new System.Windows.Forms.Label();
			this.label6 = new System.Windows.Forms.Label();
			this.textWarna = new System.Windows.Forms.TextBox();
			this.insertBtn = new System.Windows.Forms.Button();
			this.updateBtn = new System.Windows.Forms.Button();
			this.deleteBtn = new System.Windows.Forms.Button();
			this.dataGridView1 = new System.Windows.Forms.DataGridView();
			this.resetBtn = new System.Windows.Forms.Button();
			this.textKuantitas = new System.Windows.Forms.TextBox();
			((System.ComponentModel.ISupportInitialize)(this.dataGridView1)).BeginInit();
			this.SuspendLayout();
			// 
			// label1
			// 
			this.label1.Font = new System.Drawing.Font("Broadway", 25.8F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
			this.label1.ForeColor = System.Drawing.Color.SaddleBrown;
			this.label1.Location = new System.Drawing.Point(195, 40);
			this.label1.Name = "label1";
			this.label1.Size = new System.Drawing.Size(477, 47);
			this.label1.TabIndex = 0;
			this.label1.Text = "Toko Sinar Jaya";
			// 
			// label2
			// 
			this.label2.Font = new System.Drawing.Font("Tw Cen MT", 18F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
			this.label2.Location = new System.Drawing.Point(108, 124);
			this.label2.Name = "label2";
			this.label2.Size = new System.Drawing.Size(100, 36);
			this.label2.TabIndex = 1;
			this.label2.Text = "ID";
			// 
			// textID
			// 
			this.textID.Font = new System.Drawing.Font("Tw Cen MT", 16.2F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
			this.textID.Location = new System.Drawing.Point(324, 123);
			this.textID.Name = "textID";
			this.textID.Size = new System.Drawing.Size(331, 37);
			this.textID.TabIndex = 17;
			// 
			// label3
			// 
			this.label3.Font = new System.Drawing.Font("Tw Cen MT", 18F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
			this.label3.Location = new System.Drawing.Point(108, 173);
			this.label3.Name = "label3";
			this.label3.Size = new System.Drawing.Size(121, 45);
			this.label3.TabIndex = 3;
			this.label3.Text = "Nama Produk";
			// 
			// textNama
			// 
			this.textNama.Font = new System.Drawing.Font("Tw Cen MT", 16.2F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
			this.textNama.Location = new System.Drawing.Point(324, 173);
			this.textNama.Name = "textNama";
			this.textNama.Size = new System.Drawing.Size(331, 37);
			this.textNama.TabIndex = 4;
			// 
			// label4
			// 
			this.label4.Font = new System.Drawing.Font("Tw Cen MT", 18F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
			this.label4.Location = new System.Drawing.Point(108, 223);
			this.label4.Name = "label4";
			this.label4.Size = new System.Drawing.Size(143, 40);
			this.label4.TabIndex = 5;
			this.label4.Text = "Harga";
			// 
			// textHarga
			// 
			this.textHarga.Font = new System.Drawing.Font("Microsoft Sans Serif", 16.2F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
			this.textHarga.Location = new System.Drawing.Point(324, 223);
			this.textHarga.Name = "textHarga";
			this.textHarga.Size = new System.Drawing.Size(331, 38);
			this.textHarga.TabIndex = 6;
			// 
			// label5
			// 
			this.label5.Font = new System.Drawing.Font("Tw Cen MT", 18F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
			this.label5.Location = new System.Drawing.Point(108, 275);
			this.label5.Name = "label5";
			this.label5.Size = new System.Drawing.Size(129, 37);
			this.label5.TabIndex = 7;
			this.label5.Text = "Warna";
			// 
			// label6
			// 
			this.label6.Font = new System.Drawing.Font("Tw Cen MT", 18F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
			this.label6.Location = new System.Drawing.Point(108, 326);
			this.label6.Name = "label6";
			this.label6.Size = new System.Drawing.Size(161, 39);
			this.label6.TabIndex = 8;
			this.label6.Text = "Kuantitas";
			// 
			// textWarna
			// 
			this.textWarna.Font = new System.Drawing.Font("Tw Cen MT", 16.2F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
			this.textWarna.Location = new System.Drawing.Point(324, 275);
			this.textWarna.Name = "textWarna";
			this.textWarna.Size = new System.Drawing.Size(331, 37);
			this.textWarna.TabIndex = 9;
			// 
			// insertBtn
			// 
			this.insertBtn.BackColor = System.Drawing.Color.AntiqueWhite;
			this.insertBtn.Font = new System.Drawing.Font("Tw Cen MT", 16.2F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
			this.insertBtn.Location = new System.Drawing.Point(84, 399);
			this.insertBtn.Name = "insertBtn";
			this.insertBtn.Size = new System.Drawing.Size(145, 42);
			this.insertBtn.TabIndex = 11;
			this.insertBtn.Text = "Insert";
			this.insertBtn.UseVisualStyleBackColor = false;
			this.insertBtn.Click += new System.EventHandler(this.InsertBtnClick);
			// 
			// updateBtn
			// 
			this.updateBtn.BackColor = System.Drawing.Color.AntiqueWhite;
			this.updateBtn.Font = new System.Drawing.Font("Tw Cen MT", 16.2F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
			this.updateBtn.Location = new System.Drawing.Point(256, 399);
			this.updateBtn.Name = "updateBtn";
			this.updateBtn.Size = new System.Drawing.Size(139, 42);
			this.updateBtn.TabIndex = 12;
			this.updateBtn.Text = "Update";
			this.updateBtn.UseVisualStyleBackColor = false;
			this.updateBtn.Click += new System.EventHandler(this.UpdateBtnClick);
			// 
			// deleteBtn
			// 
			this.deleteBtn.BackColor = System.Drawing.Color.AntiqueWhite;
			this.deleteBtn.Font = new System.Drawing.Font("Tw Cen MT", 16.2F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
			this.deleteBtn.Location = new System.Drawing.Point(422, 399);
			this.deleteBtn.Name = "deleteBtn";
			this.deleteBtn.Size = new System.Drawing.Size(141, 42);
			this.deleteBtn.TabIndex = 13;
			this.deleteBtn.Text = "Delete";
			this.deleteBtn.UseVisualStyleBackColor = false;
			this.deleteBtn.Click += new System.EventHandler(this.DeleteBtnClick);
			// 
			// dataGridView1
			// 
			this.dataGridView1.ColumnHeadersHeightSizeMode = System.Windows.Forms.DataGridViewColumnHeadersHeightSizeMode.AutoSize;
			this.dataGridView1.Location = new System.Drawing.Point(40, 480);
			this.dataGridView1.Name = "dataGridView1";
			this.dataGridView1.RowTemplate.Height = 24;
			this.dataGridView1.Size = new System.Drawing.Size(721, 183);
			this.dataGridView1.TabIndex = 14;
			this.dataGridView1.CellClick += new System.Windows.Forms.DataGridViewCellEventHandler(this.DataGridView1CellClick);
			// 
			// resetBtn
			// 
			this.resetBtn.BackColor = System.Drawing.Color.AntiqueWhite;
			this.resetBtn.Font = new System.Drawing.Font("Tw Cen MT", 16.2F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
			this.resetBtn.Location = new System.Drawing.Point(589, 399);
			this.resetBtn.Name = "resetBtn";
			this.resetBtn.Size = new System.Drawing.Size(135, 42);
			this.resetBtn.TabIndex = 15;
			this.resetBtn.Text = "Reset";
			this.resetBtn.UseVisualStyleBackColor = false;
			this.resetBtn.Click += new System.EventHandler(this.ResetBtnClick);
			// 
			// textKuantitas
			// 
			this.textKuantitas.Font = new System.Drawing.Font("Tw Cen MT", 16.2F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
			this.textKuantitas.Location = new System.Drawing.Point(324, 328);
			this.textKuantitas.Name = "textKuantitas";
			this.textKuantitas.Size = new System.Drawing.Size(331, 37);
			this.textKuantitas.TabIndex = 16;
			// 
			// MainForm
			// 
			this.AutoScaleDimensions = new System.Drawing.SizeF(8F, 16F);
			this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
			this.BackColor = System.Drawing.Color.FromArgb(((int)(((byte)(255)))), ((int)(((byte)(192)))), ((int)(((byte)(192)))));
			this.ClientSize = new System.Drawing.Size(816, 706);
			this.Controls.Add(this.textKuantitas);
			this.Controls.Add(this.resetBtn);
			this.Controls.Add(this.dataGridView1);
			this.Controls.Add(this.deleteBtn);
			this.Controls.Add(this.updateBtn);
			this.Controls.Add(this.insertBtn);
			this.Controls.Add(this.textWarna);
			this.Controls.Add(this.label6);
			this.Controls.Add(this.label5);
			this.Controls.Add(this.textHarga);
			this.Controls.Add(this.label4);
			this.Controls.Add(this.textNama);
			this.Controls.Add(this.label3);
			this.Controls.Add(this.textID);
			this.Controls.Add(this.label2);
			this.Controls.Add(this.label1);
			this.Name = "MainForm";
			this.Text = "ProjekUAS";
			((System.ComponentModel.ISupportInitialize)(this.dataGridView1)).EndInit();
			this.ResumeLayout(false);
			this.PerformLayout();
		}
		private System.Windows.Forms.TextBox textKuantitas;
		private System.Windows.Forms.Button resetBtn;
		private System.Windows.Forms.DataGridView dataGridView1;
		private System.Windows.Forms.Button deleteBtn;
		private System.Windows.Forms.Button updateBtn;
		private System.Windows.Forms.Button insertBtn;
		private System.Windows.Forms.TextBox textWarna;
		private System.Windows.Forms.Label label6;
		private System.Windows.Forms.Label label5;
		private System.Windows.Forms.TextBox textHarga;
		private System.Windows.Forms.Label label4;
		private System.Windows.Forms.TextBox textNama;
		private System.Windows.Forms.Label label3;
		private System.Windows.Forms.TextBox textID;
		private System.Windows.Forms.Label label2;
		private System.Windows.Forms.Label label1;
	}
}
