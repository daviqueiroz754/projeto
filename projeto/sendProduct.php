
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

    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom box-shadow">
      <h5 class="my-0 mr-md-auto font-weight-normal">Americanas.com</h5>
      <nav class="my-2 my-md-0 mr-md-3">
        <a class="p-2 text-dark" href="#">Quem somos</a>
        <a class="p-2 text-dark" href="#">Atendimento</a>
        
      </nav>
      <a class="btn btn-outline-primary" href="#">Entrar</a>
    </div>

    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
      <h1 class="display-4">Adicionar produto</h1>
      
    </div>

    <div class="container">
        

        <div class="card mb-4 box-shadow">
          
 <div class="card-header">


              <form method="post" enctype="multipart/form-data" action="saveImage.php">

           <input type="text" name="nomeProduto" class="form-control" placeholder="Insira o nome do produto">
          </div>

           <table class="table-borderless">
            <th>Imagem do produto</th>
            <tr>
               <td>  <input class="form-control" type="file" placeholder="Upload imagem do produto" name="arquivo"></td>
              <td> <button type="submit" class="btn btn-lg btn-block btn-primary">Salvar produto</button></td>
            </tr>
            </table>


           <br/>



            <table class="table">
              <th>Descricão para o produto</th>
                        
            <th>Preço</th>
            <tr>
              <td>
                
             <textarea class="form-control" name="descricaoProduto" placeholder="Insira uma descriçao para o produto"></textarea>

              </td>
                
               
                  
                

              </td>
              <td> <h2 class="card-title pricing-card-title"><input name="preco" type="number" class="form-control" placeholder="Insira o preço do produto - R$"> </h2> </td>
            </tr>

</form>
            <tr>
              

          
            </table>

           


             <br/>
            
            
           

            <div class="col-md-4">

                         
           
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
