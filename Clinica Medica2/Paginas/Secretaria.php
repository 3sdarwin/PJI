<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Secretaria</title>
    <link rel="icon" href="imgs/icone.png">
    <link rel="stylesheet" href="../css/estiloAdm.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>

        <?php
            // session_start();
            // $_SESSION['logged'] = $_SESSION['logged'] ?? null;
            // $cargo = (String) $_SESSION['cargo'];
            // if(!$_SESSION['logged'] ?? strcmp($cargo, "Secretaria") != 0){
            //     header("Location: Login.php");
            // }
        ?>


    <div class="btnCadFunc">


        <h1>Secretaría</h1>
        <a type="button" class="custom-btn btn-3" data-toggle="modal" data-target="#exampleModalCenter">Agendar Consultas</a>
        <a class="custom-btn btn-3" href="CadastrarPaciente.php"><span>Cadastrar Paciente</span></a>
        <a class="custom-btn btn-3" href="../Codigos/logout.php"><span>Logout</span></a>



    </div>


    <!-- Button trigger modal -->
    <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
        Launch demo modal
    </button> -->

    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Agendar Consultas</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="../Codigos/AgendarConsulta.php" method="POST">
                    <div class="modal-body">
                        <div class="col-sm-6">
                            <p>
                                Nome de paciente: <input class="form-control bg-transparent text-black" type="text" name="txtNomeUsuario" size="91" maxlength="91">
                            </p>

                        </div>
                        <div class="col-sm-6">
                            <p>
                                Valor da consulta: <input class="form-control bg-transparent text-black" type="number" name="txtValorConsulta" size="50" maxlength="50" step='0.01'>
                            </p>

                        </div>
                        <div class="col-sm-6">
                            <div class="input-group date" data-provide="datepicker">
                                <p>
                                    Data: <input class="form-control bg-transparent text-black" type="datetime-local" name="txtsDate" value="">
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal" >Cancelar</button>
                        <button type="submit" class="btn btn-primary">Agendar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>



    

   
</body>

</html>