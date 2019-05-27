<?php


include("bd.php");
include("initSession.php");
include("cabecalho.php");



$idProduto = $_GET["idProduto"];

array_push($_SESSION["produtosCarrinho"], $idProduto);

sort($_SESSION["produtosCarrinho"]);  







?>


    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
      <h1 class="display-4">Meu carrinho</h1>
      <p class="lead">Frete grátis nas compras acime de R$99</p>
    </div>

    <div class="container">
        

        <div class="card mb-4 box-shadow">
          
 <div class="card-header">
<div class="row">
            <div class="col-md-8">
            <h4  class="my-0 font-weight-normal">Produtos</h4>
</div>

<div class="col-md-4">
            <a href="checkout.php"><button  type="button" class="btn btn-lg btn-block btn-success">Finalizar compra</button></a>
</div>
          </div>
</div>

           <br/>



            <table class="table">

            <th></th>
            <th>Nome do produto</th>
            <th>Quantidade</th>             
            <th>Preço</th>

<?php
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


        $sql = mysqli_query($conexao, "SELECT * FROM produto where id = '$produtoAt'");
        $row = $sql->fetch_array();
        $total = $total + $row["preco"]; 


        ?>

        <tr>


              <td><img class="img-responsive" src="<?=$row["imagemProduto"]?>" width="60" height="60"></td>
              <td><?=$row["nome"]?>  </td>
              <td>
                
                <input type="number" name="quantidade" value="<?=$quantidade?>">
              </td>
              <td> <h2 class="card-title pricing-card-title">R$<?=$row["preco"]?> </h2> </td>
            </tr>

        <?php




        $i++;
        $quantidade = 1;


}


?>


             
            
            </table>

           

<div class="row">
             <br/>
            
            
            <table class="table">
            <tr>
              <td>  <input class="form-control" type="text" placeholder="Insira seu CEP" name="frete"></td>
              <td> <button  type="button" onclick="freteCalcula()" class="btn btn-lg btn-block btn-primary">Calcular frete</button></td>
            </tr>

            <tr>
              <td></td>
              <td> </td>
            </tr>



            </table>
</div>


 <script type="text/javascript">
              
              function freteCalcula(){

                document.getElementById("freteCalculado").innerHTML = "<h3 style='color:green'>FRETE GRÁTIS</h3>";


              }
            </script>

           

<div  class="card" style="width: 100%;">
  <div class="card-body">

      <table style="float: right; margin-right: 30px; margin-left: 30px; margin-bottom: 30px;" >



   


<tr>

                        <?php if($total > 99){
?>
                        <td> <h3 id="freteCalculado" style="float:right; color: green">Frete: </h3></td>
<?php
                        }
                          ?>


                      </tr>


<tr>
                        <td><h3 style="float:right; color: green" >Total: R$<?=$total?></h3></td>

                      </tr>

                      
           <tr>
  
  <td><a href="checkout.php"><button type="button" class="btn btn-lg btn-block btn-success">Finalizar compra</button></a></td>

  
</tr>



</table>

  </div>
</div>

</div>
                                   

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
