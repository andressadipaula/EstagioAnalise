using System;
using System.Collections.Generic;
using System.Data;
using System.Data.SqlClient;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace RespUnica.Certa
{
    class RepoPessoa
    {
        public void AdicionarPessoa(Pessoa pessoa)
        {
            using (var cn = new SqlConnection())
            {
                var cmd = new SqlCommand();

                cn.ConnectionString = "MinhaConnectionString";
                cmd.Connection = cn;
                cmd.CommandType = CommandType.Text;
                cmd.CommandText = "INSERT INTO Pessoa (NOME, EMAIL CPF, DATACADASTRO) VALUES (@nome, @email, @cpf, @dataCad))";

                cmd.Parameters.AddWithValue("nome", pessoa.Nome);
                cmd.Parameters.AddWithValue("email", pessoa.Email);
                cmd.Parameters.AddWithValue("cpf", pessoa.CPF);
                cmd.Parameters.AddWithValue("dataCad", pessoa.DataCadastro);

                cn.Open();
                cmd.ExecuteNonQuery();
            }
        }
    }
}
