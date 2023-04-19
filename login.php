<?php
    require_once("./conexao.php");
    if(isset($_POST['logar'])){

        if(isset($_POST['emaillog']) || isset($_POST['senhalog']))
        {
            if(strlen($_POST['emaillog']) == 0 )
            {
                echo "Preencha seu E-mail";
            }

            else if(strlen($_POST['senhalog']) == 0 )            
            {
                echo "Preencha sua senha";
            }

            else
            {
                $email = $mysqli ->real_escape_string($_POST['emaillog']);
                $senha = $mysqli ->real_escape_string($_POST['senhalog']);
            
                $sql_code = "SELECT * FROM `cliente` WHERE `emailcli` = '$email' AND `senhacli` = '$senha'";
                $sql_query = $mysqli ->query($sql_code) or die ("Falhar na execução do codigo SQL : " . $mysqli ->error);


                $quantidade = $sql_query->num_rows;

                if($quantidade == 1 )
                {

                    $usuario = $sql_query->fetch_assoc();

                    if (!isset($_SESSION)) 
                    { 
                        session_start();
                    }

                    $_SESSION['idUser'] = $usuario['idcli'];
                    $_SESSION['nomeUser'] = $usuario['nomecli'];

                    header('Location:index.php');
                   

                }
                else
                {
                    echo "Falha ao logar ! E-mail ou senha incorretos";
                }

            }
        }
    
    }


?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200"/>
</head>
<body>
    <div class="container">
        <div class="content first-content">
          <div class="first-column">
            <h2 class="tittle tittle-primario">BEM VINDO!</h2>
            <p class="description-primario">Se você já possui uma conta</p>
            <p class="description-primario">em nosso site, realize seu login.</p>
            <button id="entrar" class="btn-primario">ENTRAR</button>
          </div>  <!--FIM DA PRIMEIRA COLUNA-->
          <div class="second-column">
            <h2 class="tittle tittle-secundario">Crie sua conta</h2>
            <p class="description-secundario">Informe abaixo seus dados.</p>
            <form class="form" action="cadastrar.php" method="post">

            <label class="label-input" for="">
                    <span class="material-symbols-outlined">person</span>
                <input type="text" placeholder="Nome" name="nomecadcli">
            </label>

            <label class="label-input" for="">
                <span class="material-symbols-outlined">mail</span>
                <input type="email" placeholder="Email" name="emailcadcli">
            </label>

            <label class="label-input" for="">
                <!---<span class="material-symbols-outlined">mail</span>--->
                <span class="material-symbols-outlined">assignment_ind</span>
                <input type="text" placeholder="CPF" name="cpfcadcli" maxlength="11">
            </label>

                <label class="label-input" for="">
                    <span class="material-symbols-outlined">
                        lock
                        </span>
                <input type="password" placeholder="Senha" name="senhacadcli">
            </label>

                <button type="submit" class="btn-secundario" name="cadastrar">Inscreva-se</button>
            </form>
        </div><!--FIM DA SECUNDA COLUNA-->
        </div><!--FIRST CONTENT-->

            <div class="content second-content">
                <div class="first-column">
                    <h2 class="tittle tittle-primario">BEM VINDO!</h2>
                    <p class="description-primario">Ainda não criou uma conta em</p>
                    <p class="description-primario">nosso site? Clique no botão</p>
                    <p class="description-primario">abaixo e inscreva-se.</p>
                    <br>
                    <button id="inscrevase" class="btn-primario">Inscrever-se</button>
                </div><!--fim da first column-->

                <div class="second-column">
                    <h2 class="tittle tittle-secundario">Faça seu login</h2>
                    <p class="description-secundario">Informe abaixo seus dados.</p>

                    <form class="form" action="" method="post">
                        <label class="label-input">
                            <span class="material-symbols-outlined">
                                mail
                                </span>
                            <input type="email" placeholder="Email" name="emaillog">
                        </label>

                        <label class="label-input">
                            <span class="material-symbols-outlined">
                                lock
                                </span>
                            <input type="password" placeholder="Senha" name="senhalog">
                        </label>
                        <button type="submit" class="btn-secundario" name="logar">ENTRAR</button>

                    </form>
                </div><!--fim da segunda coluna-->
            </div><!-- fim do second content -->

    </div>
    <script src="transição.js"></script>
</body>
</html>