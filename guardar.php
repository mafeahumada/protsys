<?php 
$nit=$_POST["nit"];
$ras=$_POST["ras"];
$dire=$_POST["dire"];
$tel=$_POST["tel"];
$email=$_POST["cor"];
$db=mysql_connect("localhost","root","");
mysql_select_db("protsys",$db);
$consulta="insert into cliente values('$nit','$ras','$dire',$tel,'$email')";


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
          <p> <a href="index.php"><strong>Regresar</strong></a> </p>
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
