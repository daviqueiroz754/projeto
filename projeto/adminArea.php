<?php

$nome = "José";
include("bd.php");
include("initSession.php");
include("cabecalho.php");
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
        <div  class="col-md-12"> <center><h1>Olá <?=$nome?>, seja bem vindo a area do administrador</h1> </div>
      </div>

      <div class="row">

         <div style="margin-top: 100px;" class="col-md-12">

   

       <h3>Usuários cadastrados</h3>

      <table class="table">
      <th>N. pedido</th>
      <th>Nome do produto</th>
      <th>Preço</th>
      <th>Endereço</th>
     


      <tr>
        
        <td>
          363763868368

        </td>

         <td>
          Video game

        </td>

        <td>R$900</td>

        <td> Rua Amélia</td>




      </tr>

      </table>

   <h3>Produtos Cadastrados</h3>

      <table class="table">
      <th>N. pedido</th>
      <th>Nome do produto</th>
      <th>Preço</th>
     


      <tr>
        
        <td>
          363763868368

        </td>

         <td>
          Video game

        </td>

        <td>R$900</td>

  <td>

          <button class="btn-danger">Remover</button>

        </td>

        <td>
          <button class="btn-success">Editar</button>

        </td>


      </tr>

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
