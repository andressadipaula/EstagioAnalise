using System;
using System.Collections.Generic;
using System.Data;
using System.Data.SqlClient;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace RespUnica
{
    class Pessoa
    {  public int PessoaId { get; set; }
        public string Nome { get; set; }
        public string Email { get; set; }
        public string CPF { get; set; }
        public DateTime DataCadastro { get; set; }
        public string AddPessoa()
        {
            if (!Email.Contains("@"))
                return "E-mail inválido";
            if (CPF.Length != 11)
                return "CPF inválido";
            using (var cn = new SqlConnection())
            {
                var cmd = new SqlCommand();
                cn.ConnectionString = "MinhaConnectionString";
                cmd.Connection = cn;
                cmd.CommandType = CommandType.Text;
                cmd.CommandText = "INSERT INTO Pesssoa (NOME, EMAIL CPF, DATACADASTRO) VALUES (@nome, @email, @cpf, @dataCad))";

                cmd.Parameters.AddWithValue("nome", Nome);
                cmd.Parameters.AddWithValue("email", Email);
                cmd.Parameters.AddWithValue("cpf", CPF);
                cmd.Parameters.AddWithValue("dataCad", DataCadastro);
                cn.Open();
                cmd.ExecuteNonQuery();
            }
            return "Cadastrado realizado com sucesso!";
        }
    }
    }
}