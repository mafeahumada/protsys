<?php 
$product=$_POST["product"];
$produc=$_POST["produc"];
$df=$_POST["df"];
$nit=$_POST["nit"];
$clien=$_POST["clien"];
$descri=$_POST["descri"];
$esta=$_POST["esta"];
$fs=$_POST["fs"];
$fi=$_POST["fi"];
$as=$_POST["as"];
$ta=$_POST["ta"];
$fc=$_POST["fc"];
$pa=$_POST["pa"];

include  'conexion.php';


$consulta="insert into seguimiento values('$product','$produc','$df',$nit,'$clien', '$descri' , '$esta','$fs','$fi', '$as', '$ta', '$fc', '$pa')",


mysql_query($consulta);
?>

<html>
  <head>
    <title>productos construoficina</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script type="text/javascript" src="js/jquery-2.2.3.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>

  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <?php include 'menu.php' ?>
        </div>
        <div class="col-md-6">
          
          <img src="logotipo.jpg" alt="img-responsive" class="img-responsive">
                 
        </div>
        <div class="col-md-6">
          <center > <h1> <strong> Registro Guardado </strong></h1> <center/>
         <hr/>
          <div class="well">
          <p>Su registro a sido guardado exitosamente.</p>
          <p> <a class="btn btn-info" href="index.php" role="button"><strong> REGRESAR </strong></a> </p>
          </div>
          </div>
          
        </div>
      </div>
    </div>
    <script>
      $('.dropdown-toggle').dropdown();
    </script>
  </body>
</html>
