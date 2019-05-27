<?php

$nome = "José";
include("bd.php");
include("initSession.php");
include("cabecalho.php");

if(!isset($_SESSION["usuarioLogado"])){

    header("Location: login.php");

}

$id = $_SESSION["usuarioLogado"];
$sql = mysqli_query($conexao, "SELECT codigoPedido from pedidos where comprador = $id");



$codigoPedidosLista = array();

 while($row = $sql->fetch_array()) {
//Lista dos pedidos do comprador
array_push($codigoPedidosLista, $row["codigoPedido"]);
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

    <title>Sticky Footer Template for Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/sticky-footer/">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="sticky-footer.css" rel="stylesheet">
  </head>

  <body>



    <!-- Begin page content -->
    <main role="main" class="container">

      <div class="row">
        <div  class="col-md-12"> <center><h1>Olá <?=$nome?>, seja bem vindo a area do cliente</h1> </div>
      </div>

      <div class="row">

         <div style="margin-top: 100px;" class="col-md-12">

      
     

   <h3>Ultimos pedidos</h3>

    <table class="table">
        <th>N. pedido</th>
           <th></th>
                      <th>Nome</th>

       
      <th>Preço</th>
       <th>Quantidade</th>
<?php

$codigo = 0;
$k = 0;
$j = 0;

while($j < count($codigoPedidosLista)){


$codigo = $codigoPedidosLista[$j];

$sql = mysqli_query($conexao, "SELECT * from pedido_produtos as pp join produto as pr where pp.codigoProduto = pr.id AND pp.codigoPedido = $codigo");


        while($row = $sql->fetch_array()){




?>


     

    






     





      <tr>

        <td><?=$row["codigoPedido"]?></td>
        
        
              <td><img class="img-responsive" src="<?=$row["imagemProduto"]?>" width="60" height="60"></td>

        

         <td>
<?=$row["nome"]?>
        </td>

        <td>
<h1> R$<?=$row["preco"]?> </h1>

        </td>

          <td>
<h6> <?=$row["quantidade"]?> </h6>

        </td>

      


      </tr>
<?php
}

$j++;

}


?>


    </table>

</div>


</div>
    </main>

    <footer class="footer">
      <div class="container">
      </div>
    </footer>
  </body>
</html>
