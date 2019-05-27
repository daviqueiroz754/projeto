<?php

include("bd.php");
include("cabecalho.php");

if(isset($_GET["remove"])){

  $id = $_GET["id"];

mysqli_query($conexao, "delete from produto where id = $id");


}

$sql = mysqli_query($conexao, "SELECT * from produto");




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
        <div  class="col-md-12"> <center><h1>Olá, seja bem vindo a area administrativa</h1> </div>
      </div>

<center><a href="sendProduct.php"><button class="btn-success">Adicionar produto</button></a></center>
      <div class="row">

         <div style="margin-top: 100px;" class="col-md-12">

   <h3>Produtos</h3>

<table class="table">

        <th></th>
        <th>Nome</th>

<?php
      while($row = $sql->fetch_array()) {


  

  ?>

     


    

       <tr>
               <td><img class="img-responsive" src="<?=$row["imagemProduto"]?>" width="60" height="60"></td>

      <td><?=$row["nome"]?></td>
          <td><a href="adminProdutos.php?id=<?=$row["id"]?>&remove=true"><button class="btn-danger">Remover</button></a></td>
</tr>
<?php

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
