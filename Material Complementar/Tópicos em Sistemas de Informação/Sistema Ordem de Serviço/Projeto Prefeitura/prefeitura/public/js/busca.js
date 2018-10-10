$(document).ready(function(){

$(document).on('change','#formBusca',function () {

            var especie=$('#inputEspecie').val();
            var sexo=$('#inputSexo').val();
            var porte=$('#inputPorte').val();
            var raca=$('#inputRaca').val();
            var cor=$('#inputCor').val();
            var idade=$('#inputIdade').val();
            var cidade=$('#inputCidade').val();
            var estado=$('#inputEstado').val();

            var div=$(this).parent().parent();

            var op=" ";
            $.ajax({
                type:'get',
                url:'/listagem/buscaAnimais',
                data:{'especie':especie,
                      'sexo':sexo,
                      'porte':porte,
                      'raca':raca,
                      'cor':cor,
                      'idade':idade,
                      'cidade':cidade,
                      'estado':estado},
                dataType:'json',//return data will be json
                success:function(registros){
                  
                     $('#animais').html(" ");
                    for(var i=0;i<registros.length;i++){
                      regAnimal = '<div id="conteudo-animal" class="col-xs-6 col-sm-2">'+
                              '<img id="img-listagem" class="img-responsive img-rounded" width="150" src="/'+registros[i].foto+'" alt="">'+
                              '<h3>'+registros[i].nome+'</h3>'+
                              '<h4 id="idades">Idade: <span>'+registros[i].idade+ (registros[i].idade<=1 ? " Ano": " Anos")+'</span></h4>'+
                              '<h4>Local: <span>'+registros[i].cidade+'</span></h4>'+
                              '<button class="btn btn-primary" id="btn-detalhes-listagem" type="button"'+
                              'name="button" data-toggle="modal" data-target="#'+registros[i].id_Animal+'">'+
                              '<span style="font-size:18px;">+</span> Detalhes</button>'
                              '</div>'

                      $('#animais').append(regAnimal);
                    };

                },
                error:function(){

                }
            });

        });
    });



// Para a busca de foto em adoção
$(document).ready(function(){

$(document).on('change','#escolhaAnimal',function () {

            var id_Animal=$('#id_Animal').val();

            var div=$(this).parent().parent();

            var op=" ";
            $.ajax({
                type:'get',
                url:'/adocao/buscaFoto',
                data:{'id_Animal':id_Animal}, //aqui é a variavel var que a gente recebeu no inicio dessa funcão
                dataType:'json',//return data will be json
                success:function(registro){
                   console.log(registro);

                     $('#busca-foto-adocao').html(" ");
                      resultado = '<img class="img-rounded" src="/'+registro.foto+'">'
                      $('#busca-foto-adocao').append(resultado);

                },
                error:function(){

                }
            });

        });
    });
