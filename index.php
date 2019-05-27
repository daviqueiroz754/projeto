
<?php
include("bd.php");

$sql = mysqli_query($conexao, "SELECT * FROM produto");

include("cabecalho.php");


?>







   <center><img src="imagens/banner.jpg" class="img-responsive"></center>

   <br/>

    <div class="container">
               <div class="card-deck mb-3 text-center">











       



                <?php
                $i = 0;
                $j = 0;



while (true) {



if ($i == 3) {
?>
                 <div class="card-deck mb-3 text-center">

<?php

                  $i = 0;


}



if($row = $sql->fetch_array()){
?>





        
 <div class="card mb-4 box-shadow">
          <div style="background-color: orange;" class="card-header">
            <h4 class="my-0 font-weight-normal">  
<?= $row["nome"];?>

</h4>
          </div>



          <div class="card-body">   

           <img width="300" height="300" class="img-responsive" src="<?= $row["imagemProduto"];?>">

           <br/>



            <h1 style="font-size: 24px;" class="badge badge-pill badge-success"> R$<?= $row["preco"];?> </h1>
 <?php

       

        $i++;
?>




            <a href="produto.php?id=<?=$row["id"]?>"><button type="button" class="btn btn-lg btn-block btn-primary">Comprar</button></a>
          </div>
        </div>

       



        

 











<?php

if($i == 3){

$inicio = false;

  ?>

</div>

<?php

continue;

}

}else{

  break;
}

$j++;


}




if($j<3){

?>

</div>

<?php

}

    ?>



       




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
