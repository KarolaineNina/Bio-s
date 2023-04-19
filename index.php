<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style site.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200"/>
    <title>Página Inicial - Bio-S</title>
</head>
<body>
    <header>

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




    <!--inicio da tela inicial-->

    <div class="container-2">
      <main>
        <section class="module parallax parallax-1">
          <h1>ENERGIA SOLAR</h1>
          <h2>LIMPA, RENOVÁVEL E SUSTENTÁVEL</h2>
        </section>
  
        <section class="module content">
          <div class="base-inicial">
            <h2><a name="sobre">Sobre Nós</a></h2>
            <p>
              Somos uma empresa líder em vendas de placas de energia solar em Pernambuco. Nosso objetivo é fornecer soluções de energia renovável acessíveis e confiáveis para nossos clientes, ajudando-os a economizar dinheiro e reduzir sua pegada de carbono.
            </p>
            <p>
              Oferecemos uma ampla gama de placas solares de alta qualidade, projetadas para atender às necessidades específicas de cada cliente. Nossa equipe de especialistas em energia solar trabalha de perto com você, analisando seu consumo de energia e desenvolvendo um sistema solar personalizado para atender às suas necessidades.
            </p>
            <p>
              Além de vender placas solares, também oferecemos serviços de instalação e manutenção de sistemas solares. Nosso objetivo é garantir que seu sistema solar funcione de maneira eficiente e confiável por muitos anos, proporcionando economia de energia significativa e reduzindo sua dependência da rede elétrica.
            </p>
            <p>
              Estamos comprometidos em fornecer soluções de energia renovável de alta qualidade, ajudando nossos clientes a se tornarem mais sustentáveis e a economizar dinheiro em suas contas de energia elétrica. Entre em contato conosco para saber mais sobre nossos produtos e serviços de energia solar.
            </p>
          </div>
        </section>
  
        <section class="module parallax parallax-2">
          <h1>CONHEÇA NOSSO ESTOQUE</h1>
        </section>
  
        <section class="module content">
          <div class="base-inicial">
            <h2><a name="produtos">Nossos Produtos</a></h2>
            <p>
              Temos um estoque variado de placas solares, com diversas voltagens, tamanho e preços. Tudo devidamente calculado e feito para trazer uma melhor experiência para nossos clientes. Confira nossos produtos clicando no botão logo abaixo.
            </p>
            <button><a href="produtos.php">CONFIRA</a></button>
          </div>
        </section>
  
        <section class="module parallax parallax-3">
          <h1>ENTENDA MELHOR SOBRE ENERGIA</h1>
        </section>
  
        <section class="module content">
          <div class="base-inicial">
            <h2><a name="consultoria">Consultoria</a></h2>
            <p>
              Para os que não conhecem muito sobre como funcionam e toda a política de uso das placas solares, nós possuímos uma aba onde contém tudo o que você precisa saber sobre este assunto. Caso esteja interessado, clique no botão abaixo.
            </p>
            <button><a href="consultoria.php">CONFIRA</a></button>
          </div>
        </section>

        <section class="module parallax parallax-4">
          <h1>CONHEÇA NOSSOS PARCEIROS</h1>
        </section>
  
        <section class="module content">
          <div class="base-inicial">
            <h2><a>Parceiros</a></h2>
            <p>
              Além do nosso atendimento e serviços prestados aos nossos clientes, possuímos também empresas parceiras que disponibilizam outras opções de placas solares e até mesmo a instalação em sua residência. Não hesite em contatá-los.
            </p> 
            <button><a href="parceiros.php">CONFIRA</a></button>
          </div>
        </section>
      </main>
    </div>

    <!--fim da tela inicial-->
    </header>

    <!--<script src="mobile-navbar.js"></script>-->

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
</div>
  </body>
</html>
</html>