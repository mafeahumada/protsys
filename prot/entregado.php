<<html>
  <head>
    <title>protsys</title>
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
      <div class="row">s
        <div class="col-md-12">
          <?php include 'menu.php' ?>
        </div>

        <div class="col-md-6">
        <h1><strong> Entregado</strong> </h1>
          <div class="well">
                <form action="guardarentregado.php" method="post">
                  <div class="form-group">
                    <label for="exampleInputEmail1">PT</label>
                    <input type="text" name="product" class="form-control" id="exampleInputEmail1" placeholder="">
                  </div>
                 <div class="form-group">
                    <label for="exampleInputEmail1">Ultima Fecha </label>
                    <input type="text" name="uf"class="form-control" id="exampleInputEmail1" placeholder="">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Fecha de Ingreso</label>
                    <input type="text" name="fi" class="form-control" id="exampleInputEmail1" placeholder="">
                  </div>
                  
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
                  <button type="submit" class="btn btn-info"><strong>GUARDAR</strong></button>
                </form>
          </div>

        </div>
        <div class="col-md-6">
          <center><h1> <strong>Formulario de Personas </strong></h1></center>
          <hr>
      <!--     <p>
            aqui se guarda una person
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum delectus, id temporibus vitae repudiandae. Numquam voluptatem nesciunt eligendi corrupti tempora natus illum, nihil ullam repudiandae fugit consequuntur, iure obcaecati ratione.
          </p>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde magni iusto dolores recusandae a, tenetur, inventore? Repudiandae illo ut assumenda saepe incidunt nostrum sunt molestiae. Commodi quo provident vitae id?
          </p> -->

          <div>
            <center><img src="logo1.jpg" alt="img-responsive" class="img-responsive" width="400"></center>
          </div>
        </div>



      </div>
    </div>
    
    <script>
      $('.dropdown-toggle').dropdown();
    </script>

  </body>
</html>
