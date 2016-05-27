<?php
include "conexion.php";

if (isset($_POST["cp"])) {
$ced=$_POST["cp"];
} else {
$ced="1";
}

$sql="select * from productos where cp=$cp";

$ver=mysql_query($sql);
?>

<html>
  <head>
      <style>
        p{text-align:justify;}
      </style>
    <title>Protsys</title>

    <link rel="stylesheet" href="css/bootstrap.css">
      <script type="text/javascript" src="js/jquery-2.2.3.js"></script>    
      <script type="text/javascript" src="js/bootstrap.js"></script>

      <style type="text/css">
        #escudo{
          width: 40px;
        }
      </style>

  </head>
    <body>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <?php include 'menu.php' ?> 
          </div>

          <div class="col-md-3">
            <center><h3>INGRESE CODIGO</h3></center>
              <hr>
                <form action="buscarproductos.php" method="post">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Codproducto</label>
                    <input type="text" class="form-control" placeholder="" name="ced">
                  </div>

                  <button type="submit" class="btn btn-info">BUSCAR</button>
                </form>
          </div>
          <div class="col-md-9">
            <center><h1>PRODUCTOS</h1></center>
              <hr>
                <table class="table table-striped">
                  
 

                  <tr>
                       <td class="info">Codproducto</td>
                        <td class="danger">Nombre</td>
                       

                      </tr>


                    <?php
                      while($row = mysql_fetch_row($ver)){ 
                    ?>
                        <tr>
                          
                          <td><?php echo $row[0] ?></td>
                          <td><?php echo $row[1] ?></td>       
                          
                        </tr> 
                    <?php
                    } 
                    ?>
                </table>  
          </div>
            </form>
          
        </div>
      </div>
    </body>  
</html>