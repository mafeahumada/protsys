<?php 
$nit=$_POST["nit"];
$ras=$_POST["ras"];
$dire=$_POST["dire"];
$tel=$_POST["tel"];
$email=$_POST["cor"];
$db=mysql_connect("127.0.0.1","root","usrio01");
mysql_select_db("protsys",$db);
$consulta="insert into cliente values('$nit','$ras','$dire',$tel,'$email')";


mysql_query($consulta);
?>

<html>
  <head>
    <title>titu</title>
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
          <div class="well">
            REGISTRO GUARDADO
            <a href="index">Regresar</a>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
