<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Médico-Cadastrar Consultas</title>
    <link rel="icon" href="imgs/icone.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/estiloFuncionario.css">


</head>

<body>
    <h1 class="tituloPagForm">Cadastro de consultas</h1>

    <div class="formCadFunc">

        <form class="form-row" method="POST" action="">

            <div class="row">
                <div class="col-sm-6">
                    <p>
                        Nome do paciete <input class="form-control bg-transparent" type="text" name="txtNome" size="91" maxlength="91">
                    </p>

                </div>

                <div class="col-sm-6">
                    <p>
                        Diagnóstico <input class="form-control bg-transparent" type="text" name="txtDiagnostico" size="111" maxlength="111">
                    </p>
                </div>
              
                <div class="col-sm-6">
                    <label>Quantidade de exames</label>

                    <select id="exames" class="form-control text-black">
                        <option value="0" selected>0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
                </div>

                <div class="col-sm-6">
                <label>Quantidade de receitas</label>

                <select id="receitas" class="form-control text-black">
                    <option value="0" selected>0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select>
            </div>


            

            <div class="exame1" id="exame1" style="display:none;">

                <div class="col-sm-12">
                    <p>
                        Código: <input class="form-control bg-transparent" type="text" name="txtcod" size="103" maxlength="103">
                    </p>
                </div>


                <div class="col-sm-12">
                    <p>
                        Nome:<input class="form-control bg-transparent" name="nome" type="text" id="name" size="100" maxlength="90">
                    </p>
                </div>

                <div class="col-sm-12">
                    <p>
                        Tipo:
                        <input class="form-control bg-transparent" name="tipo" type="text" id="tipo" size="60">
                    </p>
                </div>

            </div>


            <div class="exame2" id="exame2" style="display:none;">

                <div class="col-sm-12">
                    <p>
                        Código: <input class="form-control bg-transparent" type="text" name="txtcod" size="103" maxlength="103">
                    </p>
                </div>


                <div class="col-sm-12">
                    <p>
                        Nome:<input class="form-control bg-transparent" name="nome" type="text" id="name" size="100" maxlength="90">
                    </p>
                </div>

                <div class="col-sm-12">
                    <p>
                        Tipo:
                        <input class="form-control bg-transparent" name="tipo" type="text" id="tipo" size="60">
                    </p>
                </div>

            </div>

            <div class="exame3" id="exame3" style="display:none;">

                <div class="col-sm-12">
                    <p>
                        Código: <input class="form-control bg-transparent" type="text" name="txtcod" size="103" maxlength="103">
                    </p>
                </div>


                <div class="col-sm-12">
                    <p>
                        Nome:<input class="form-control bg-transparent" name="nome" type="text" id="name" size="100" maxlength="90">
                    </p>
                </div>

                <div class="col-sm-12">
                    <p>
                        Tipo:
                        <input class="form-control bg-transparent" name="tipo" type="text" id="tipo" size="60">
                    </p>
                </div>

            </div>


           
  


    <div class="receita1" id="receita1" style="display:none;">

        <div class="col-sm-12">
            <p>
                Código: <input class="form-control bg-transparent" type="text" name="txtcod" size="103" maxlength="103">
            </p>
        </div>


        <div class="col-sm-12">
            <p>
                Dose:<input class="form-control bg-transparent" name="dose" type="text" id="dose" size="100" maxlength="90">
            </p>
        </div>

        <div class="col-sm-12">
            <p>
                Medicamento:
                <input class="form-control bg-transparent" name="medicamento" type="text" id="medicamento" size="60">
            </p>
        </div>

        <div class="col-sm-12">
            <p>
                Tempo de tratamento:
                <input class="form-control bg-transparent" name="tempoTratamento" type="text" id="tempoTratamento" size="60">
            </p>
        </div>

    </div>

    <div class="receita2X" id="receita2" style="display:none;">

        <div class="col-sm-12">
            <p>
                Código: <input class="form-control bg-transparent" type="text" name="txtcod" size="103" maxlength="103">
            </p>
        </div>


        <div class="col-sm-12">
            <p>
                Dose:<input class="form-control bg-transparent" name="dose" type="text" id="dose" size="100" maxlength="90">
            </p>
        </div>

        <div class="col-sm-12">
            <p>
                Medicamento:
                <input class="form-control bg-transparent" name="medicamento" type="text" id="medicamento" size="60">
            </p>
        </div>

        <div class="col-sm-12">
            <p>
                Tempo de tratamento:
                <input class="form-control bg-transparent" name="tempoTratamento" type="text" id="tempoTratamento" size="60">
            </p>
        </div>

    </div>

    <div class="receita3" id="receita3" style="display:none;">

        <div class="col-sm-12">
            <p>
                Código: <input class="form-control bg-transparent" type="text" name="txtcod" size="103" maxlength="103">
            </p>
        </div>


        <div class="col-sm-12">
            <p>
                Dose:<input class="form-control bg-transparent" name="dose" type="text" id="dose" size="100" maxlength="90">
            </p>
        </div>

        <div class="col-sm-12">
            <p>
                Medicamento:
                <input class="form-control bg-transparent" name="medicamento" type="text" id="medicamento" size="60">
            </p>
        </div>

        <div class="col-sm-12">
            <p>
                Tempo de tratamento:
                <input class="form-control bg-transparent" name="tempoTratamento" type="text" id="tempoTratamento" size="60">
            </p>
        </div>

    </div>

    <div class="col-sm-12">
                    <div class="input-group date" data-provide="datepicker">
                        <p>
                            Data: <input class="form-control bg-transparent" type="date" name="txtNascimento" value="">
                        </p>
                    </div>
                </div>





    <div class="col-12">
        <br>
        <p>
            <input class="btn btn-primary" type="submit" name="btnOperacao" value="Cadastrar" />    

            <input class="btn btn-primary" type="submit" name="btnOperacao" value="Cancelar" />    

        </p>
    </div>


    </div>




    </div>
    </form>
    </div>

    <script>
        var select = document.getElementById('exames');
        var exame1 = document.getElementById('exame1');
        var exame2 = document.getElementById('exame2');
        var exame3 = document.getElementById('exame3');


        select.addEventListener('change', function() {
            if (select.value == 1) {
                exame1.style.display = 'block';
                exame2.style.display = 'none';
                exame3.style.display = 'none';
                console.log(select.value)
            } else if (select.value == 2) {
                exame1.style.display = 'block';
                exame2.style.display = 'block';
                exame3.style.display = 'none';
                console.log(select.value)
            } else if (select.value == 3) {
                exame1.style.display = 'block';
                exame2.style.display = 'block';
                exame3.style.display = 'block';
                console.log(select.value)
            } else {
                exame1.style.display = 'none';
                exame2.style.display = 'none';
                exame3.style.display = 'none';
                console.log(select.value)
            }
        })




        var selectRec = document.getElementById('receitas');
        var receita1 = document.getElementById('receita1');
        var receita2 = document.getElementById('receita2');
        var receita3 = document.getElementById('receita3');


        selectRec.addEventListener('change', function() {
            if (selectRec.value == 1) {
                receita1.style.display = 'block';
                receita2.style.display = 'none';
                receita3.style.display = 'none';
                console.log(selectRec.value)
            } else if (selectRec.value == 2) {
                receita1.style.display = 'block';
                receita2.style.display = 'block';
                receita3.style.display = 'none';
                console.log(selectRec.value)
            } else if (selectRec.value == 3) {
                receita1.style.display = 'block';
                receita2.style.display = 'block';
                receita3.style.display = 'block';
                console.log(selectRec.value)
            } else {
                receita1.style.display = 'none';
                receita2.style.display = 'none';
                receita3.style.display = 'none';
                console.log(selectRec.value)
            }
        })
    </script>




    <script src="../js/apiCEP.js"></script>
</body>

</html>