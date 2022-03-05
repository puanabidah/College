/*
 * Created by SharpDevelop.
 * User: LENOVO
 * Date: 07/12/2021
 * Time: 20:19
 * 
 * To change this template use Tools | Options | Coding | Edit Standard Headers.
 */
using System;
using System.Collections.Generic;
using System.Data;
using System.Drawing;
using System.Windows.Forms;
using MySql.Data;
using MySql.Data.MySqlClient;

namespace ProjekUAS
{
	/// <summary>
	/// Description of MainForm.
	/// </summary>
	public partial class MainForm : Form
	{
		MySqlConnection co = new MySqlConnection("Server = localhost; Database = data_produk; Uid = root");
		MySqlCommand mycommand = new MySqlCommand();
		MySqlDataAdapter myadapter = new MySqlDataAdapter();
		
		public void ReadData(){
			try{
				mycommand.Connection = co;
				myadapter.SelectCommand = mycommand;
				mycommand.CommandText = "select * from produk";
				DataSet ds = new DataSet();

				if (myadapter.Fill(ds,"dftpesan") > 0){
					dataGridView1.DataSource = ds;
					dataGridView1.DataMember = "dftpesan";
				}
			}
			catch (Exception ex){
				MessageBox.Show(ex.ToString());
			}
		} 
		
		public void InsertData(){
			try{
				mycommand.Connection=co;
				mycommand.CommandText="insert into produk values('"+textID.Text+"','"+textNama.Text+"','"+textHarga.Text+"','"+textWarna.Text+"','"+textKuantitas.Text+"')";
				myadapter.SelectCommand= mycommand;
				if (mycommand.ExecuteNonQuery()==1){
					MessageBox.Show("Data berhasil dimasukan","Informasi",MessageBoxButtons.OK,MessageBoxIcon.Information);
					ReadData();
				}
			}
			catch(Exception ex){
				MessageBox.Show(ex.ToString());
			}
		}
		
		public void UpdateData(){
			try{
				mycommand.Connection=co;
				mycommand.CommandText = "update produk set id='"+textID.Text+"',nama='"+textNama.Text+"',harga='"+textHarga.Text+"',warna='"+textWarna.Text+"',kuantitas='"+textKuantitas.Text+"' where id ='"+textID.Text+"'";
				myadapter.SelectCommand = mycommand;
				if (mycommand.ExecuteNonQuery()==1){
					MessageBox.Show("Data berhasil diupdate","Informasi",MessageBoxButtons.OK,MessageBoxIcon.Information);
					ReadData();
				}
			}
			catch(Exception ex){
				MessageBox.Show(ex.ToString());
			}
		}
		
		public void DeleteData(){
			try{
				mycommand.Connection=co;
				mycommand.CommandText="delete from produk where id='"+textID.Text+"'";
				myadapter.SelectCommand = mycommand;
				if (mycommand.ExecuteNonQuery()==1){
					MessageBox.Show("Data berhasil dihapus","Informasi",MessageBoxButtons.OK,MessageBoxIcon.Information);
					ReadData();
				}
			}
			catch(Exception ex){
				MessageBox.Show(ex.ToString());
			}
		}
		
		public void ResetData(){
			textID.Text="";
			textNama.Text="";
			textHarga.Text="";
			textWarna.Text="";
			textKuantitas.Text="";
		}
		
		public MainForm()
		{
			//
			// The InitializeComponent() call is required for Windows Forms designer support.
			//
			
			InitializeComponent();
			co.Open();
			ReadData();
			
			//
			// TODO: Add constructor code after the InitializeComponent() call.
			//
		}
		
		void InsertBtnClick(object sender, EventArgs e)
		{
			InsertData();
		}
		
		
		void UpdateBtnClick(object sender, EventArgs e)
		{
			UpdateData();
		}
		
		void DataGridView1CellClick(object sender, DataGridViewCellEventArgs e)
		{
			textID.Text = dataGridView1.Rows[e.RowIndex].Cells[0].Value.ToString();
			textNama.Text = dataGridView1.Rows[e.RowIndex].Cells[1].Value.ToString();
			textHarga.Text = dataGridView1.Rows[e.RowIndex].Cells[2].Value.ToString();
			textWarna.Text = dataGridView1.Rows[e.RowIndex].Cells[3].Value.ToString();
			textKuantitas.Text = dataGridView1.Rows[e.RowIndex].Cells[4].Value.ToString();
		}
		
		void DeleteBtnClick(object sender, EventArgs e)
		{
			DeleteData();			
		}
		
		void ResetBtnClick(object sender, EventArgs e)
		{
			ResetData();
		}
		
	}
}
