<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title> Cadastro - Cardio Health</title>
    <link rel="icon" href="imgs/icone.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/estiloFuncionario.css">
</head>

<body>


    <h1 class="tituloPagForm">Cadastro de funcionario</h1>

    <div class="formCadFunc">

        <form class="form-row" method="POST" action="../Codigos/CadastrarFuncionario.php">

            <div class="row">
                <div class="col-sm-6">
                    <p>
                        Nome de usuário: <input class="form-control bg-transparent" type="text" name="txtNomeUsuario" size="91" maxlength="91">
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
                        Salario: <input class="form-control bg-transparent" type="number" name="txtSalario" size="101" maxlength="101">
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
                        <input class="form-control bg-transparent" name="txtCep" type="text" id="cep" size="10" maxlength="9" onblur="pesquisacep(this.value);">
                    </p>
                </div>

                <div class="col-sm-6">
                    <p>
                        Rua:
                        <input class="form-control bg-transparent" name="txtRua" type="text" id="rua" size="60">
                    </p>
                </div>

                <div class="col-sm-6">
                    <p>
                        Número: <input class="form-control bg-transparent" type="text" name="txtNumero" size="10" maxlength="10">
                    </p>
                </div>

                <div class="col-sm-6">
                    <p>
                        Bairro:
                        <input class="form-control bg-transparent" name="txtBairro" type="text" id="bairro" size="40">
                    </p>
                </div>

                <div class="col-sm-6">
                    <p>
                        Cidade:
                        <input class="form-control bg-transparent" name="txtCidade" type="text" id="cidade" size="40">
                    </p>
                </div>

                <div class="col-sm-6">
                    <p>
                        Estado:
                        <input class="form-control bg-transparent" name="txtEstado" type="text" id="uf" size="2">
                    </p>
                </div>

                <div class="col-sm-6">
                    <p>
                        IBGE:
                        <input class="form-control bg-transparent" name="txtIbge" type="text" id="ibge" size="8">
                    </p>
                </div>


                <div class="col-sm-12">
                    <br>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="adm" value="1">
                        <label class="form-check-label" for="exampleRadios1">
                            Administrador(a)
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="secr" value="2">
                        <label class="form-check-label" for="exampleRadios2">
                            Secretario(a)
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="med" value="3">
                        <label class="form-check-label" for="exampleRadios3">
                            Medico(a)
                        </label>
                    </div>

                    <div class="col-12">
                        <br>
                        <p>
                            <input class="btn btn-primary" type="submit" name="btnOperacao" value="Cadastrar" />    

                            <a class="btn btn-primary" href="Adm.php">Cancelar</a>    
                            <!-- <input class="btn btn-primary" type="submit" name="btnOperacao" value="Cancelar" />     -->

                        </p>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <script src="../js/apiCEP.js"></script>
</body>

</html>