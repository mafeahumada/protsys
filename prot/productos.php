<html>
  <head>
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

        <div class="col-md-6">
        <h1><strong> Productos</strong> </h1>
          <div class="well">
                
          <div class="well">
              <form class="form-horizontal">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">Codproducto</label>
                  <div class="col-sm-8">
                    <input type="text" name ="cp" class="form-control" id="inputEmail3" placeholder="producto">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">Nombre</label>
                  <div class="col-sm-8">
                    <input type="text" name="nom"class="form-control" id="inputEmail3" placeholder="nombre">
                  </div>
                <hr>
                
                  <!-- <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <input type="file" id="exampleInputFile">
                    <p class="help-block">Example block-level help text here.</p>
                  </div> -->
                  <!-- <div class="checkbox">
                    <label>
                      <input type="checkbox"> Check me out
                    </label>
                  </div> -->
                  <div>
                  <center><button type="submit" class="btn btn-info"><strong>GUARDAR</strong></button></center>
                  </div>
                </form>
          </div>

        </div>
        <div class="col-md-6">
          <center><h1> <strong>Formulario de producto </strong></h1></center>

          <hr>
          <<!-- p>
            aqui se guarda una person
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum delectus, id temporibus vitae repudiandae. Numquam voluptatem nesciunt eligendi corrupti tempora natus illum, nihil ullam repudiandae fugit consequuntur, iure obcaecati ratione.
          </p>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde magni iusto dolores recusandae a, tenetur, inventore? Repudiandae illo ut assumenda saepe incidunt nostrum sunt molestiae. Commodi quo provident vitae id?
          </p> -->

          <div>
            <center><img src="logo1.jpg" alt="img-responsive" class="img-responsive" width="300"></center>
          </div>
        </div>



      </div>
    </div>
  </body>
</html>
