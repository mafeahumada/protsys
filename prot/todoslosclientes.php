
<?php
include "conexion.php";
$sql="select * from cliente;";
$registros=mysql_query($sql);
?>

<html>
  <head>

    <title>Protsys</title>
    <link rel="stylesheet" href="css/bootstrap.css">
<script type="text/javascript" src="js/jquery-2.2.3.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
     <style type="text/css">
     p{text-align:justify}
      #cuadro{
        border-style: solid;
        margin-top: 20px;
        margin-bottom: 20px;
        background-color: red;
        border-radius: 10px 10px 10px 10px;
        height: 100px;
      }
    #escudo{

    width: 40px;
    }
    </style>
</head>
<body>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
           <div class="col-md-12">
          <?php include 'menu.php' ?>
        </div>
</div>
 
 <!-- <div class="col-md-6">

          <center><img src="escudo.jpg" class="img-responsive" width="400"></center> 
        </div> -->

        <div class="col-md-12">

        <center><h1> Todos los clientes  </h1></center>
          <hr>
  <table class="table table-condensed">
    <!-- On rows -->
    <!-- On cells (`td` or `th`) -->
<tr>
  <td class="info">Nit</td>
  <td class="danger">Razon social</td>
  <td class="info">Direccion</td>
  <td class="danger">Telefono</td>
<td class="info">Email address</td>


</tr>

<?php
  while ($row = mysql_fetch_row($registros)){
?>
    <tr>
      
      <td><?php echo $row[0] ?></td>
      <td><?php echo $row[1] ?></td>       
      <td><?php echo $row[2] ?></td>
      <td><?php echo $row[3] ?></td>
      <td><?php echo $row[4] ?></td>
   
    </tr> 
<?php
} 
?>

</table> 
</div>

</body>
</html>