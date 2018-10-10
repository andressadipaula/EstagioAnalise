jQuery( function($){
  $(".tel").mask("(99) 9999-9999");
});

jQuery(function($){
  $(".cel").mask("(99) 99999-9999");
});

jQuery(function($){
  $(".cpf").mask("999.999.999-99");
});

jQuery(function($){
  $(".cnpj").mask("99.999.999.9999-99");
});

jQuery(function($){
  $(".cep").mask("99999-999");
});

jQuery(function($){
  $(".data-nascimento").mask("99/99/9999");
});
//--------------------------------------------------------------------------------------------------
// Alerta
window.setTimeout(function() {
    $(".alert").fadeTo(500, 0).slideUp(500, function(){
        $(this).remove();
    });
}, 4000);

//Esconde botões na Lista de Animais
//Por Id
function exibe(id){
  $('#'+id).show();
}

function oculta(id){
  $('#'+id).hide();
}

//---------------------------------------------------------------------------------------------------
//insere datatable
$(document).ready(function(){
    $('.table').DataTable(
      {
  "language": {

      "sEmptyTable": "Nenhum registro encontrado",
      "sInfo": "Mostrando de _START_ até _END_ de _TOTAL_ registros",
      "sInfoEmpty": "Mostrando 0 até 0 de 0 registros",
      "sInfoFiltered": "(Filtrados de _MAX_ registros)",
      "sInfoPostFix": "",
      "sInfoThousands": ".",
      "sLengthMenu": "_MENU_ Resultados por página",
      "sLoadingRecords": "Carregando...",
      "sProcessing": "Processando...",
      "sZeroRecords": "Nenhum registro encontrado",
      "sSearch": "Pesquisar: ",
      "oPaginate": {
          "sNext": "Próximo",
          "sPrevious": "Anterior",
          "sFirst": "Primeiro",
          "sLast": "Último"
      },
      "oAria": {
          "sSortAscending": ": Ordenar colunas de forma ascendente",
          "sSortDescending": ": Ordenar colunas de forma descendente"
      }

  }
}
    );

});



// $(function () {
//     $(".table").DataTable({
//         "language": {
//             // dessa forma não funciona, apesar de localizar o arquivo no console
//             // "url": "bower_components/datatables-plugins/i18n/Portuguese-Brasil.lang"
//
//             // dessa forma funciona certo
//             "url": "https://cdn.datatables.net/plug-ins/1.10.16/i18n/Portuguese-Brasil.json"
//         }
//     });
// });


//---------------------------------------------------------------------------------------------------
//valida cpf
$(function()
{
    //Executa a requisição quando o campo cpf perder o foco
    $('#cpf').blur(function()
    {
      var cpf = $('#cpf').val().replace(/[^0-9]/g, '').toString();


    if (cpf == "00000000000" ||
        cpf == "11111111111" ||
        cpf == "22222222222" ||
        cpf == "33333333333" ||
        cpf == "44444444444" ||
        cpf == "55555555555" ||
        cpf == "66666666666" ||
        cpf == "77777777777" ||
        cpf == "88888888888" ||
        cpf == "99999999999") {

       $( "#erroCpf" ).html( "CPF inválido" );

       $('#cpf').val('');
       $('#cpf').focus(function(){

       $( "#erroCpf" ).html( "" );
     });
   }

   if( cpf.length == 11 )
   {
    var v = [];

            //Calcula o primeiro dígito de verificação.
            v[0] = 1 * cpf[0] + 2 * cpf[1] + 3 * cpf[2];
            v[0] += 4 * cpf[3] + 5 * cpf[4] + 6 * cpf[5];
            v[0] += 7 * cpf[6] + 8 * cpf[7] + 9 * cpf[8];
            v[0] = v[0] % 11;
            v[0] = v[0] % 10;

            //Calcula o segundo dígito de verificação.
            v[1] = 1 * cpf[1] + 2 * cpf[2] + 3 * cpf[3];
            v[1] += 4 * cpf[4] + 5 * cpf[5] + 6 * cpf[6];
            v[1] += 7 * cpf[7] + 8 * cpf[8] + 9 * v[0];
            v[1] = v[1] % 11;
            v[1] = v[1] % 10;

            //Retorna Verdadeiro se os dígitos de verificação são os esperados.
            if ( (v[0] != cpf[9]) || (v[1] != cpf[10]) )
            {
              $( "#erroCpf" ).html( "CPF inválido" );

              $('#cpf').val('');
              $('#cpf').focus(function(){

                $( "#erroCpf" ).html( "" );
              });
            }
          }
          else
          {
            $('#cpf').val('');
            $('#cpf').focus(function(){

              $( "#erroCpf" ).html( "" );
            });
          };
        });
  });

//---------------------------------------------------------------------------------------------------
//valida cnpj
$(function()
{
    //Executa a requisição quando o campo cpf perder o foco
    $('#cnpj').blur(function()
    {
      var cnpj = $('#cnpj').val().replace(/[^0-9]/g, '').toString();

      if(cnpj == '')
      {
        $('#cnpj').val('');
        $('#cnpj').focus(function(){

          $( "#erroCnpj" ).html( "" );
        });

      }

      if (cnpj.length != 14)
      {
        $('#cnpj').val('');
        $('#cnpj').focus(function(){

          $( "#erroCnpj" ).html( "" );
        });
      }

        // Elimina CNPJs invalidos conhecidos
        if (cnpj == "00000000000000" ||
            cnpj == "11111111111111" ||
            cnpj == "22222222222222" ||
            cnpj == "33333333333333" ||
            cnpj == "44444444444444" ||
            cnpj == "55555555555555" ||
            cnpj == "66666666666666" ||
            cnpj == "77777777777777" ||
            cnpj == "88888888888888" ||
            cnpj == "99999999999999")
          {
           $( "#erroCnpj" ).html( "CNPJ inválido" );

           $('#cnpj').val('');
           $('#cnpj').focus(function(){

           $( "#erroCnpj" ).html( "" );
         });
       }

        // Valida DVs
        tamanho = cnpj.length - 2
        numeros = cnpj.substring(0,tamanho);
        digitos = cnpj.substring(tamanho);
        soma = 0;
        pos = tamanho - 7;
        for (i = tamanho; i >= 1; i--) {
          soma += numeros.charAt(tamanho - i) * pos--;
          if (pos < 2)
            pos = 9;
        }
        resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;
        if (resultado != digitos.charAt(0))
        {
          $( "#erroCnpj" ).html( "CNPJ inválido" );

          $('#cnpj').val('');
          $('#cnpj').focus(function(){

            $( "#erroCnpj" ).html( "" );
          });
        }

        tamanho = tamanho + 1;
        numeros = cnpj.substring(0,tamanho);
        soma = 0;
        pos = tamanho - 7;
        for (i = tamanho; i >= 1; i--) {
          soma += numeros.charAt(tamanho - i) * pos--;
          if (pos < 2)
            pos = 9;
        }
        resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;
        if (resultado != digitos.charAt(1))
        {
          $( "#erroCnpj" ).html( "CNPJ inválido" );

          $('#cnpj').val('');
          $('#cnpj').focus(function(){

            $( "#erroCnpj" ).html( "" );
          });
        }
      });
  });

//---------------------------------------------------------------------------------------------------
//inicia erros vazios
$(document).ready(function(){

   $('.button').click(function(){
    $(".help-block").html( "" );
    $('#email').val('');
    $('#password').val('');
  });

});

//---------------------------------------------------------------------------------------------------
//valida login
$(document).ready(function(){

  $('#btn-entrar').click(function () {

    var email=$('#inputEmail').val();
    var senha=$('#inputSenha').val();

    $.ajax({
      type:'get',
      url:'/login/entrar',
      data:{'email':email,
      'password':senha},
                dataType:'json',//return data will be json
                success:function(p){
                  console.log(p);
                  if (!p)
                   alert('Login ou senha inválidos!');

                 else

                   location.reload();

               },
               error:function(){

               }
             });

  });
});
//---------------------------------------------------------------------------------------------------
// email ja existe
$(document).ready(function(){

  $('#email').blur(function () {

    var email=$('#email').val();

    $.ajax({
      type:'get',
      url:'/emailExist',
      data:{'email':email},
                dataType:'json',//return data will be json
                success:function(t){
                  if (t===true) //se o email eh repetido
                  {
                    $( "#erroEmail" ).html( "Já existe cadastro com o email informado!" ); //mostra a mensagem de erro

                    $('#email').focus(function(){ // se clicar no input

                      $( "#erroEmail" ).html( "" ); //limpa a mensagem
                    }); //fim evento focus

                  }// fim if

                },
                error:function(){

                }
              });

  });
});

//---------------------------------------------------------------------------------------------------
// cpf ja existe
$(document).ready(function(){

  $('#cpf').blur(function () {

    var cpf= $('#cpf').val();

    $.ajax({
      type:'get',
      url:'/cpfExist',
      data:{'cpf':cpf},
                dataType:'json',//return data will be json
                success:function(y){
                  if (y===true) //se o cpf eh repetido
                  {
                    $( "#erroCpf" ).html( "Já existe cadastro com o cpf informado!" ); //mostra a mensagem de erro

                    $('#cpf').focus(function(){ // se clicar no input

                      $( "#erroCpf" ).html( "" ); //limpa a mensagem
                    }); //fim evento focus

                  }// fim if

                },
                error:function(){

                }
              });

  });
});
//---------------------------------------------------------------------------------------------------
// cnpj ja existe
$(document).ready(function(){

  $('#cnpj').blur(function () {

    var cnpj= $('#cnpj').val();

    $.ajax({
      type:'get',
      url:'/cnpjExist',
      data:{'cnpj':cnpj},
                dataType:'json',//return data will be json
                success:function(p){
                  if (p===true) //se o cnpj eh repetido
                  {
                    $( "#erroCnpj" ).html( "Já existe cadastro com o cnpj informado!" ); //mostra a mensagem de erro

                    $('#cnpj').focus(function(){ // se clicar no input

                      $( "#erroCnpj" ).html( "" ); //limpa a mensagem
                    }); //fim evento focus

                  }// fim if

                },
                error:function(){

                }
              });

  });
});

/*function validaLogin() {

    var email=$('#inputEmail').val();
    var senha=$('#inputSenha').val();

    $.ajax({
      type:'get',
      url:'/login/entrar',
      data:{'email':email,
      'password':senha},
                dataType:'json',//return data will be json
                success:function(p){

                  if (p===false){

                   confirm('Login ou senha inválidos!');
                   return false;
                 }else{
                   return true;
                   location.reload();
                  };
               },
               error:function(){

               }
             });

  };*/
