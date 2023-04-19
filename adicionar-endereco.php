
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style site.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200"/>
    <title>Adicione seu endereço</title>
</head>
<body>

              <!--inicio do menu-->
        <div class="container">

          <input type="checkbox" name="" id="toggler">
          <label for="toggler" class="fas fa-bars"></label>

          <a class="logo" href="index.php">BIO-S</a>
      <nav class="nav-bar">
        
        <ul class="nav-list">
          <li><a href="#sobre">SOBRE</a></li>
          <li><a href="produtos.php">PRODUTOS</a></li>
          <li><a href="consultoria.php">CONSULTORIA</a></li>
          <li><a href="parceiros.php">PARCEIROS</a></li>
        </ul>
      </nav>
      <div class="icones">
        <a href="login.php"><i><span class="material-symbols-outlined"> account_circle</span></i></a>
      </div>

    </div>

    
          <!--fim do menu-->
    
          <br><br><br><br><br>

          <h1 class="heading">ADICIONE SEU ENDEREÇO</h1>


          <div class="container-3">
          <form action="">
            <div class="single-input">
                <input required type="text" name="nome" size="50" id="nome" class="input">
                <label for="nome">Nome Completo</label>
            </div>
            
            <div class="single-input">
                <input required type="number" name="cpf" size="11" id="cpf" class="input">
                <label for="cpf">CPF</label>
            </div>

            <div class="single-input">
                <input required type="number" name="telefone" size="15" id="telefone" class="input">
                <label for="telefone">Número do telefone</label>
            </div>

            <div class="single-input">
                <input required type="text" name="cep" size="10" id="cep" class="input">
                <label for="telefone">CEP</label>
            </div>

            <div class="single-input">
                <input required type="text" name="rua" size="50" id="endereco" class="input">
                <label for="rua">Endereço</label>
            </div>

            <div class="single-input">
                <input required type="text" name="bairro" size="40" id="bairro" class="input">
                <label for="bairro">Bairro</label>
            </div>

            <div class="single-input">
                <input required type="text" name="cidade" size="50" id="cidade" class="input">
                <label for="cidade">Cidade</label>
            </div>

            <div class="single-input">
                <input required type="text" name="uf" size="2" id="uf" class="input">
                <label for="uf">Estado</label>
            </div>

            <div class="single-input">
                <input required type="text" name="numero" size="10" id="numero" class="input">
                <label for="numero">Número da casa</label>
            </div>
            
            <div class="single-input">
                <input required type="text" name="complemento" size="15" id="complemento" class="input">
                <label for="complemento">Complemento</label>
            </div>
            <div class="btn-continuar">
            <button><a href="./index.php">CONTINUAR</a></button>
            </div>
          </form>
        </div>
<br><br><br><br><br>
        <footer>
            <div class="boxs">
              <h2>MENU</h2>
              <ul>
                <li><a href="index.php">Início</a></li>
                <li><a href="#sobre">Sobre</a></li>
                <li><a href="produtos.php">Produtos</a></li>
                <li><a href="consultoria.php">Consultoria</a></li>
                <li><a href="parceiros.php">Parceiros</a></li>
              </ul>
            </div>
            <div class="boxs">
              <h2>Informações</h2>
              <ul>
                <li><a href="#">Contato</a></li>
                <li><a href="#">Email</a></li>
              </ul>
            </div>
          </footer>
          <div class="footer">
          <h2>FOCUS TECH</h2>
          <div class="sociais">
          <div class="social">
            <a href="#"><i class="fa-brands fa-instagram"></i></a>
          </div>
          <div class="social">
            <a href="#"><i class="fa-brands fa-facebook"></i></a>
          </div>
          <div class="social">
            <a href="#"><i class="fa-brands fa-whatsapp"></i></a>
          </div>
        </div>
</body>
</html>