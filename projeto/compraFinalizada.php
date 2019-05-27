<?php
include("bd.php");
include("initSession.php");

include("cabecalho.php");

function getUserId($conexao, $email, $senha){

$sql = mysqli_query($conexao, "select id from usuario where email = '$email' AND senha = '$senha'");
$row = $sql->fetch_array();
return $row["id"]; 

}

$email = $_POST["email"];
$senha = $_POST["senha"];
$codigoPedido = 123445;

echo $email;
echo $senha;

$sql = mysqli_query($conexao, "SELECT * FROM usuario where email = '$email' AND senha = '$senha'");

if(!($row = $sql->fetch_array())){
$sql = mysqli_query($conexao, "insert into usuario(nome, email, senha) VALUES('Joao', '$email', '$senha')");
$usuario = getUserId($conexao, $email, $senha);


  
}else{

$usuario = $row["id"];


}



// Gerando pedido
mysqli_query($conexao, "insert into pedidos(codigoPedido, comprador) VALUES($codigoPedido, $usuario) ");




// Inserindo pedidos feitos pelo usuário
$produtoAt = 0;
$i = 0;
$total = 0;
$quantidade = 1;


while ($i < count($_SESSION["produtosCarrinho"])) {
        $produtoAt = $_SESSION["produtosCarrinho"][$i];

        if(isset($_SESSION["produtosCarrinho"][$i + 1])){

            if(($produtoAt == $_SESSION["produtosCarrinho"][$i + 1]) ){
                $quantidade++;
                $i++;
                continue;

            }


        }
                echo $quantidade;
                  $sql = mysqli_query($conexao, "insert into pedido_produtos(codigoPedido, codigoProduto, quantidade) VALUES($codigoPedido, $produtoAt, $quantidade) ");

$quantidade = 1;
$i++;

      }








?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Pricing example for Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/pricing/">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="pricing.css" rel="stylesheet">
  </head>

  <body>

  

    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
      <h1 class="text-success" class="display-4">Compra realizada com sucesso!</h1>
      <p class="lead">Muito obrigado por comprar com a FG variedades [nomeUsuario]</p>
      <center>     <a href="index.html"> <p class="lead">Voltar para pagina inicial</p></a>
</center>
    </div>

  

      <footer class="pt-4 my-md-5 pt-md-5 border-top">
        <div class="row">
          <div class="col-12 col-md">
           <center><img class="img-responsive" src="file:///Users/diego/Downloads/projeto/imagens/logo.png" alt="" width="300" height="50">
            <br/>

             <br/> <br/>
            <small class="d-block mb-3 text-muted">&copy; 2017-2018 Todos os direitos reservados - FG Variedades LTDA</small>
          </center>
          </div>



          </div>
      </footer>
    </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/vendor/holder.min.js"></script>
    <script>
      Holder.addTheme('thumb', {
        bg: '#55595c',
        fg: '#eceeef',
        text: 'Thumbnail'
      });
    </script>
  </body>
</html>
