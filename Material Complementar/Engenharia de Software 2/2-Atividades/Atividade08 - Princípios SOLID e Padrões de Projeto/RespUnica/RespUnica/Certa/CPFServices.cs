using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace RespUnica.Certa
{
    class CPFServices
    {

        public static bool IsValid(string cpf)
        {
            return cpf.Length == 11;
        }
    }
}
