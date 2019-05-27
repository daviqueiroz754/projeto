<?php
include("initSession.php");

include("bd.php");

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

    <title>Checkout example for Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/checkout/">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="form-validation.css" rel="stylesheet">
  </head>

  <body class="bg-light">

    <div class="container">
      <div class="py-5 text-center">
        <img class="d-block mx-auto mb-4" src="imagens/unifg.png" alt="" width="200" height="50">
        <h2>Carrinho</h2>
       
      </div>

      <div class="row">
        <div class="col-md-4 order-md-2 mb-4">
        
        </div>



        <div class="col-md-8 order-md-1">
          <h4 class="mb-3">Informaçoes e dados de pagamento</h4>
          <form action="compraFinalizada.php" method="POST" class="needs-validation" novalidate>
            <div class="row">
              <form action="compraFinalizada.php" method="POST">
              <div class="col-md-6 mb-3">
                <label for="firstName">Nome</label>
                <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
                <div class="invalid-feedback">
                  Primeiro nome é obrigatório.
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="lastName">Sobrenome</label>
                <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
                <div class="invalid-feedback">
                 Ultimo nome é obrigatório.
                </div>
              </div>
            </div>

            <div class="mb-3">
              <label for="username">Nome de usuário</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">@</span>
                </div>
                <input type="text" class="form-control" id="username" placeholder="Nome de usuário" required>
                <div class="invalid-feedback" style="width: 100%;">
                  Seu nome de usuário é obrigatório.
                </div>
              </div>
            </div>

            <div class="mb-3">
              <label for="email">Email</label>
              <input type="email" class="form-control" name="email" id="email" placeholder="seuemail@exemplo.com">
              <div class="invalid-feedback">
                Insira seu e-mail para informaçôes de entrega.
              </div>
            </div>

            <div class="mb-3">
              <label for="email">Senha</label>
              <input name="senha" type="password" class="form-control" id="senha" placeholder="Digite uma senha">
            
            </div>

            <div class="mb-3">
              <label for="address">Endereço</label>
              <input type="text" class="form-control" id="address" placeholder="Ex: Rua da Aurora" required>
              <div class="invalid-feedback">
                Insira seu endereço de entrega.
              </div>
            </div>

           

            <div class="row">
             
              <div class="col-md-4 mb-3">
                <label for="state">Estado</label>
                

              <select class="custom-select d-block w-100" id="state" required>
    <option value="AC">Acre</option>
    <option value="AL">Alagoas</option>
    <option value="AP">Amapá</option>
    <option value="AM">Amazonas</option>
    <option value="BA">Bahia</option>
    <option value="CE">Ceará</option>
    <option value="DF">Distrito Federal</option>
    <option value="ES">Espírito Santo</option>
    <option value="GO">Goiás</option>
    <option value="MA">Maranhão</option>
    <option value="MT">Mato Grosso</option>
    <option value="MS">Mato Grosso do Sul</option>
    <option value="MG">Minas Gerais</option>
    <option value="PA">Pará</option>
    <option value="PB">Paraíba</option>
    <option value="PR">Paraná</option>
    <option value="PE">Pernambuco</option>
    <option value="PI">Piauí</option>
    <option value="RJ">Rio de Janeiro</option>
    <option value="RN">Rio Grande do Norte</option>
    <option value="RS">Rio Grande do Sul</option>
    <option value="RO">Rondônia</option>
    <option value="RR">Roraima</option>
    <option value="SC">Santa Catarina</option>
    <option value="SP">São Paulo</option>
    <option value="SE">Sergipe</option>
    <option value="TO">Tocantins</option>
    <option value="ES">Estrangeiro</option>
</select>




                <div class="invalid-feedback">
                  Selecione um estado valido.
                </div>
              </div>
              <div class="col-md-3 mb-3">
                <label for="zip">Cod. postal</label>
                <input type="text" class="form-control" id="zip" placeholder="" required>
                <div class="invalid-feedback">
                  Insira seu codigo postal.
                </div>
              </div>
            </div>
            

            <h4 class="mb-3">Pagamento</h4>

            <div class="d-block my-3">
              <div class="custom-control custom-radio">
                <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked required> 
                <label class="custom-control-label" for="credit">Cartão de credito</label>
              </div>
            
            
            </div>
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="cc-name">Nome no cartão </label>
                <input type="text" class="form-control" id="cc-name" placeholder="" required>
                <small class="text-muted">Nome completo como mostrado no cartão</small>
                <div class="invalid-feedback">
                  Nome no cartão é obrigatorio
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="cc-number">Numero no cartão</label>
                <input type="text" class="form-control" id="cc-number" placeholder="" required>
                <div class="invalid-feedback">
                  Numero no cartão é obrigatório
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-3 mb-3">
                <label for="cc-expiration">Data de expiração</label>
                <input type="text" class="form-control" id="cc-expiration" placeholder="" required>
                <div class="invalid-feedback">
                  Data de expiração é obrigatoria
                </div>
              </div>
              <div class="col-md-3 mb-3">
                <label for="cc-expiration">CVV</label>
                <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
                <div class="invalid-feedback">
                  Codigo de segurança necessário
                </div>
              </div>
            </div>
            <hr class="mb-4">
            <button class="btn btn-primary btn-lg btn-block" type="submit">Finalizar compra</button>
          </form>
        </div>
      </div>
      <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">&copy; 2017-2018 FG Variedades</p>
        <ul class="list-inline">
          <li class="list-inline-item"><a href="#">Quem somos</a></li>
          <li class="list-inline-item"><a href="#">Termos de uso</a></li>
          <li class="list-inline-item"><a href="#">Atendimento</a></li>
        </ul>
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
      // Example starter JavaScript for disabling form submissions if there are invalid fields
      (function() {
        'use strict';

        window.addEventListener('load', function() {
          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.getElementsByClassName('needs-validation');

          // Loop over them and prevent submission
          var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
              if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add('was-validated');
            }, false);
          });
        }, false);
      })();
    </script>
  </body>
</html>
