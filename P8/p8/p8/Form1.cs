using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;
using System.Data;
using System.Data.SqlClient;

namespace p8
{
    public partial class Form1 : Form
    {
        public Form1()
        {
            InitializeComponent();
        }

        private void button1_Click(object sender, EventArgs e)
        {
            SqlConnection con = new SqlConnection();
            SqlCommand cmd = new SqlCommand();
            con.ConnectionString = @"server=DESKTOP-FM7OCN0\SQLEXPRESS;database=mibasewillson;user=goofy; password=7078";
            con.Open();
            cmd.Connection = con;
            cmd.CommandText = "insert into persona values('"+textBox1.Text+"','"+textBox2.Text+"', '"+textBox3.Text+"', '"+textBox4.Text+"', '"+textBox5.Text+"')";
            cmd.ExecuteNonQuery();
            con.Close();
        }

        private void button2_Click(object sender, EventArgs e)
        {
            SqlConnection con = new SqlConnection();
            SqlCommand cmd = new SqlCommand();
            con.ConnectionString = @"server=DESKTOP-FM7OCN0\SQLEXPRESS;database=mibasewillson;user=goofy; password=7078";
            con.Open();
            cmd.Connection = con;
            cmd.CommandText = "delete from persona where ci like'" + textBox1.Text + "'and nombre like'" + textBox2.Text + "' and apellido like '" + textBox3.Text + "'and fechanac like '" + textBox4.Text + "' and departamento like '" + textBox5.Text + "'";
            cmd.ExecuteNonQuery();
            con.Close();
        }
    }
}
