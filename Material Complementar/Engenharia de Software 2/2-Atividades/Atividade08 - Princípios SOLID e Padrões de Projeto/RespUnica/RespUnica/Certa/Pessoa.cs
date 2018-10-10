using System;
using System.Collections.Generic;
using System.Data.SqlClient;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace RespUnica
{
    class Pessoa
    {
        public class Cliente
        {

            public int ClienteId { get; set; }
            public string Nome { get; set; }
            public string Email { get; set; }
            public string CPF { get; set; }
            public DateTime DataCadastro { get; set; }

            public bool IsValid()
            {
                return RespUnica.Certa.CPFServices.IsValid(CPF);
            }
        }

        internal bool IsValid()
        {
            throw new NotImplementedException();
        }
    }
}