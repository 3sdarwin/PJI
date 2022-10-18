<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Paciente - Secretária</title>
    <link rel="icon" href="imgs/icone.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/estiloFuncionario.css">
    
</head>

<body>

    <h1 class="tituloPagForm">Cadastrar pacientes</h1>

    <div class="formCadFunc">

        <form class="form-row" method="POST" action="../Codigos/CadastrarPaciente.php">

            <div class="row">
                <div class="col-sm-6">
                    <p>
                        Nome de paciente: <input class="form-control bg-transparent" type="text" name="txtNome" size="91" maxlength="91">
                    </p>

                </div>

                <div class="col-sm-6">
                    <p>
                        CPF: <input class="form-control bg-transparent" type="text" name="txtCpf" size="11" maxlength="11">
                    </p>
                </div>
                <div class="col-sm-6">
                    <p>
                        RG: <input class="form-control bg-transparent" type="text" name="txtRg" size="11" maxlength="11">
                    </p>
                </div>

                <div class="col-sm-6">
                    <p>
                        Email: <input class="form-control bg-transparent" type="Email" name="txtEmail" size="11">
                    </p>
                </div>

                <div class="col-sm-6">
                    <div class="input-group date" data-provide="datepicker">
                        <p>
                            Data de Nascimento: <input class="form-control bg-transparent" type="date" name="txtNascimento" value="">
                        </p>
                    </div>
                </div>

                <div class="col-sm-6">
                    <p>
                        <label for="inputName">Sexo:</label>
                        <select class="form-control bg-transparent" name="txtSexo">
                            <option class="text-dark" value="M">Masculino</option>
                            <option class="text-dark" value="F">Feminino</option>
                        </select>
                    </p>
                </div>

                <div class="col-sm-6">
                    <p>
                        Telefone: <input class="form-control bg-transparent" type="text" name="txtTel" size="103" maxlength="103">
                    </p>
                </div>


                <div class="col-sm-6">
                    <p>
                        Cep:
                        <input class="form-control bg-transparent" name="cep" type="text" id="cep" size="10" maxlength="9" onblur="pesquisacep(this.value);">
                    </p>
                </div>

                <div class="col-sm-6">
                    <p>
                        Rua:
                        <input class="form-control bg-transparent" name="rua" type="text" id="rua" size="60">
                    </p>
                </div>

                <div class="col-sm-6">
                    <p>
                        Número: <input class="form-control bg-transparent" type="text" name="numero" size="10" maxlength="10">
                    </p>
                </div>

                <div class="col-sm-6">
                    <p>
                        Bairro:
                        <input class="form-control bg-transparent" name="bairro" type="text" id="bairro" size="40">
                    </p>
                </div>

                <div class="col-sm-6">
                    <p>
                        Cidade:
                        <input class="form-control bg-transparent" name="cidade" type="text" id="cidade" size="40">
                    </p>
                </div>

                <div class="col-sm-6">
                    <p>
                        Estado:
                        <input class="form-control bg-transparent" name="uf" type="text" id="uf" size="2">
                    </p>
                </div>

                <div class="col-sm-6">
                    <p>
                        IBGE:
                        <input class="form-control bg-transparent" name="ibge" type="text" id="ibge" size="8">
                    </p>
                </div>

                    <div class="col-12">
                        <br>
                        <p>
                            <input class="btn btn-primary" type="button" value="Voltar" onClick="JavaScript: window.history.back();">

                            <input class="btn btn-primary" type="submit" name="btnOperacao" value="Cadastrar" />    
                        </p>
                    </div>


                </div>




            </div>
        </form>
    </div>

    <script src="../js/apiCEP.js"></script>
</body>

</html>