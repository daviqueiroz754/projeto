
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

  <body style="background-color: #253144">

<span class="badge badge-pill badge-primary">Primary</span>
<span class="badge badge-pill badge-secondary">Secondary</span>
<span class="badge badge-pill badge-success">Success</span>
<span class="badge badge-pill badge-danger">Danger</span>
<span class="badge badge-pill badge-warning">Warning</span>
<span class="badge badge-pill badge-info">Info</span>
<span class="badge badge-pill badge-light">Light</span>
<span class="badge badge-pill badge-dark">Dark</span>




    <!-- Begin page content -->
    <main role="main" class="container">



<?php

$k = 0;

while ($k < 10) {


  $k++;

?>



<div style="margin-top: 100px;"  class="card">
  <div style="background-color: #183460; color: #ffffff;" class="card-header">
<div class="progress">
  <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
</div>

<br>

<div  class="row">
<div class="col-md-6">
          <h4 class="mt-5">Naïve Bayes algorithm</h4>
    <h5>Machine Learning</h5>
          <h6 >5 vezes completado</h6>
       

          </div>

          <div class="col-md-6">
    <span style="float: right" class="badge badge-pill badge-success">Success</span>
    </div>

    </div>

  </div>
  <div style="min-height: 500px;" class="card-body">
   



      <p  style="font-size: 24px; font-family: sans; letter-spacing: 2px; line-height: 1.8;">Bayesian methods are those that explicitly apply the Bayesian inference theorem and again solve classi cation and regression problems. Bayesian methods facilitate subjective probability in modeling. The following are some of the Bayesian based algorithms: 


Bayesian methods are those that explicitly apply the Bayesian inference theorem and again solve classi cation and regression problems. Bayesian methods facilitate subjective probability in modeling. The following are some of the Bayesian based algorithms:

Bayesian methods are those that explicitly apply the Bayesian inference theorem and again solve classi cation and regression problems. Bayesian methods facilitate subjective probability in modeling. The following are some of the Bayesian based algorithms:

Bayesian methods are those that explicitly apply the Bayesian inference theorem and again solve classi cation and regression problems. Bayesian methods facilitate subjective probability in modeling. The following are some of the Bayesian based algorithms:

Bayesian methods are those that explicitly apply the Bayesian inference theorem and again solve classi cation and regression problems. Bayesian methods facilitate subjective probability in modeling. The following are some of the Bayesian based algorithms:

Bayesian methods are those that explicitly apply the Bayesian inference theorem and again solve classi cation and regression problems. Bayesian methods facilitate subjective probability in modeling. The following are some of the Bayesian based algorithms:

Bayesian methods are those that explicitly apply the Bayesian inference theorem and again solve classi cation and regression problems. Bayesian methods facilitate subjective probability in modeling. The following are some of the Bayesian based algorithms:

Bayesian methods are those that explicitly apply the Bayesian inference theorem and again solve classi cation and regression problems. Bayesian methods facilitate subjective probability in modeling. The following are some of the Bayesian based algorithms:


      </p>


<table>
<tr>
<?php

$i = 0;
$j = 0;

$l = "x² – 10x + 24 = 0
4² – 10 * 4 + 24 = 0
16 – 40 + 24 = 0
–24 + 24 = 0";

$pieces0 = explode("\n", $l);
$pieces1 = implode(" ", $pieces0);
$pieces = explode(" ", $pieces1);



while ($i < count($pieces)) {
$j++;

  if($j == 4){
?>
<td><input width="30"  class="form-control" type="text" name="piece"></td>
<?php

$j = 0;

  }

  else{
?>

     <td> <p style="font-size: 32px;" class="lead"><?=$pieces[$i]?></p></td>

<?php

}
  $i++;

}


?>

</tr>
</table>



<div  class="row">
<button type="button" class="btn btn-primary btn-lg btn-block">GO!</button>


</div>
  </div>
</div>

<?php
}

 ?>

    </main>

    <footer class="footer">
      <div class="container">
        <span class="text-muted">Place sticky footer content here.</span>
      </div>
    </footer>
  </body>
</html>
