using System;
using System.Collections.Generic;
using System.Data.SqlClient;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace RespUnica.Certa
{
    class AdicionaPessoa
    {
        public string AdicionarPessoa(Pessoa pessoa)
        {
            if (!pessoa.IsValid())
                return "Dados inválidos";

            var repo = new RepoPessoa();
            repo.AdicionarPessoa(pessoa);

            return "Cliente cadastrado com sucesso";
        }
    }
}
