<?php
include("initSession.php");

include("bd.php");
$id = $_GET["id"];

$sql = mysqli_query($conexao, "SELECT * FROM produto where id = $id");

include("cabecalho.php");

?>







    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
      <h1 class="display-4">As melhores ofertas você encontra aqui na FG variedades</h1>
      <p class="lead">Frete grátis nas compras acime de R$99</p>
    </div>

    <div class="container">
      <div class="card-deck mb-3 text-center">
        
        <div class="card mb-4 box-shadow">
         
          <div class="card-body">
<?php
$row = $sql->fetch_array();

?>

           <img width="500" height="500" class="img-responsive" src="<?=$row['imagemProduto']?>">

           <br/>


          </div>
        </div>

        <div class="card mb-4 box-shadow">

 <div class="card-header">
            <h4 class="my-0 font-weight-normal"><?=$row['nome']?></h4>
          </div>


           <br/>
            <h2 class="card-title pricing-card-title">R$<?=$row['preco']?></h2>
            <center><p>3x de R$<?=($row['preco'] / 3) ?> s/ juros </p></center>

            <a href="carro.php?idProduto=<?=$id?>"><button type="button" class="btn btn-lg btn-block btn-success"> Comprar</button></a> 

             <br/>
            

            
            <table class="table">
            <tr>
              <td>  <input class="form-control" type="text" placeholder="Insira seu CEP" name="frete"></td>
              <td> <button onclick="freteCalcula()" type="button" class="btn btn-lg btn-block btn-primary">Calcular frete</button></td>
            </tr>
            </table>

            <script type="text/javascript">
              
              function freteCalcula(){

                document.getElementById("freteCalculado").innerHTML = "<h1 style='color:green'>FRETE GRÁTIS</h1>";


              }
            </script>

            <div id="freteCalculado">
              


            </div>
           



            <center><img class="img-responsive" width="270" height="100" src="imagens/cartoes.png"></center>

                                   

        </div>







      </div>


     <div class="card">
  <div class="card-header">
    Descrição
  </div>
  <div class="card-body">
    <blockquote class="blockquote mb-0">


<?=$row['descricaoProduto']?>

    </blockquote>
  </div>
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
