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
    <title>Produtos</title>
</head>
<body>
      <!--inicio do menu-->
      <div class="container">

        <input type="checkbox" name="" id="toggler">
        <label for="toggler" class="fas fa-bars"></label>

        <a class="logo" href="index.php">BIO-S</a>
    <nav class="nav-bar">
      
      <ul class="nav-list">
        <li><a href="index.php">SOBRE</a></li>
        <li><a href="produtos.php">PRODUTOS</a></li>
        <li><a href="consultoria.php">CONSULTORIA</a></li>
        <li><a href="parceiros.php">PARCEIROS</a></li>
      </ul>
    </nav>
    <div class="icones">
      <a href="login.php"><i><span class="material-symbols-outlined"> account_circle</span></i></a>
    </div>

  </div>

  <div class="home" id="home">
 
    <div class="box" style="background: url(_imagens/imagem-4.png) no-repeat;">
      <div class="content">
        <span>Adquira a sua</span>
        <h1>Placa Solar.</h1>
      </div>
    </div>

  </div>

<!--
    <div class="container-produtos">
      <div class="produtos">
        <img src="_imagens/imagem2-1.png" alt="">
        <h2>Painel Solar CS3W<br>410 W Canadian Solar</h2>
        <h2 class="preco-produto">R$ 939,30</h2>

        <div class="botao-produtos">
        <button class="btn-produto"><a href="./carrinho.php">Adicionar ao carrinho</a></button>
        <br><br>
        <button class="btn-produto"><a href="./carrinho.php"></a>Comprar</button>
      </div>
      </div>

    </div> -->




    <!-- modelos de placa na lista e no carrinho -->
    <div class="models">
    
        <!-- placa na lista -->
        <div class="placa-item">
            <a href="">
                <div class="placa-item--img"><img src="" /></div>
                <div class="placa-item--add">+</div>
            </a>
            <div class="placa-item--price">R$ --</div>
            <div class="placa-item--name">--</div>
            <div class="placa-item--desc">--</div>
        </div>

        <!-- placa no carrinho -->
        <div class="cart--item">
            <img src="" />
            <div class="cart--item-nome">--</div>
            <div class="cart--item--qtarea">
                <button class="cart--item-qtmenos">-</button>
                <div class="cart--item--qt">1</div>
                <button class="cart--item-qtmais">+</button>
            </div>
        </div>

    </div>


    <!-- conteudo principal -->
    <main>
        
    <h1 class="heading">PRODUTOS</h1>
<br><br><br>
        <div class="placa-area"></div>
    </main>
    <!-- /conteudo principal -->


    <!-- /models -->

    <aside>
        <div class="cart--area">
            <div class="menu-closer">❌</div>
            <h1>Seus pedidos</h1>
            <div class="cart"></div>
            <div class="cart--details">
                <div class="cart--totalitem subtotal">
                    <span>Subtotal</span>
                    <span>R$ --</span>
                </div>
                <div class="cart--totalitem desconto">
                    <span>Desconto</span>
                    <span>R$ --</span>
                </div>
                <div class="cart--totalitem total big">
                    <span>Total</span>
                    <span>R$ --</span>
                </div>
                <div class="btn-finalizar">
                <button class="cart--finalizar"><a href="./forma-de-pagamento.php">Finalizar a compra</a></button>
                </div>
            </div>
        </div>
    </aside>
    <!-- /aside do carrinho -->

    
    <!-- janela modal .pizzaWindowArea -->
    <div class="placaWindowArea">
        <div class="placaWindowBody">
            <div class="placaInfo--cancelMobileButton">Voltar</div>
            <div class="placaBig">
                <img src="" />
            </div>
            <div class="placaInfo">
                <h1>--</h1>
                <div class="placaInfo--desc">--</div>
                <div class="placaInfo--pricearea">
                    <div class="placaInfo--sector">Preço</div>
                    <div class="placaInfo--price">
                        <div class="placaInfo--actualPrice">R$ --</div>
                        <div class="placaInfo--qtarea">
                            <button class="placaInfo--qtmenos">-</button>
                            <div class="placaInfo--qt">1</div>
                            <button class="placaInfo--qtmais">+</button>
                        </div>
                    </div>
                </div>
                <div class="placaInfo--addButton">Adicionar ao carrinho</div>
                <div class="placaInfo--cancelButton">Cancelar</div>
            </div>
        </div>
    </div>
    <!-- /janela modal .pizzaWindowArea -->




  <!--fim do menu-->

<!--inicio do rodape-->

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
<!--fim do rodape-->

<script src="placas.js"></script>
<script src="script.js"></script>



</body>
</html>