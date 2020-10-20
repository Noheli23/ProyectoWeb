<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo producto</title>
    <link rel="stylesheet" href="../css/estilo.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

    <link rel="stylesheet" href="../css/fontawesome-free-5.13.0-web/css/fontawesome.min.css">
    <link rel="stylesheet" href="../css/fontawesome-free-5.13.0-web/css/brands.css"> 
    <link rel="stylesheet" href="../css/fontawesome-free-5.13.0-web/css/solid.css">
    
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-toggleable-sm sticky-top">
        <a class="navbar-brand" href="#"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/fa/Apple_logo_black.svg/647px-Apple_logo_black.svg.png" alt="logo" 
            class="d-inline-block aling-top"  style="width:40px;">
            Manzana</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav mr-0 ml-auto mt-2 mt-lg-0 text-center">
            <a class="nav-link" href="../html/marca.html">Marcas</a>
            <a class="nav-link" href="../html/categoria.html">Categorias</a>
            <a class="nav-link active" href="tablaProducto.php">Productos</a>
            <a class="nav-link " href="../html/empresa.html">Datos de la empresa</a>
          </div>
        </div>
      </nav>
<!--Carousel -->
      <div id="carrusel" class="carousel slide carousel-fade " data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="../images/css_coding-wallpaper-1024x576.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="../images/robot_20-wallpaper-1024x576.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="../images/lg_g3_ink-wallpaper-1024x576.jpg" class="d-block w-100" alt="...">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carrusel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carrusel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
<!--From -->
<div class="container text-center mt-4">
    <h3>Regitro de nuevo producto</h3>
</div>
<div class="container p-4 mt-5 mb-5 border shadow rounded col-sm-9" id="from">
    <form>
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Referencia</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="inputEmail3">
            </div>
          </div>
        <div class="form-group row">
          <label for="inputEmail3" class="col-sm-2 col-form-label">Nombre</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="inputEmail3">
          </div>
        </div>
        <div class="form-group row">
          <label for="inputEmail3" class="col-sm-2 col-form-label">Valor</label>
          <div class="col-sm-10">
            <input type="number" class="form-control" id="inputEmail3">
          </div>
        </div>
        <div class="form-group row">
          <label for="inputEmail3" class="col-sm-2 col-form-label">Marca</label>
          <div class="col-sm-10">
          <select class="form-control">
                <option value="0">Seleccione</option>
                <?php
            require("conexion.php");
            $consulta = "SELECT * FROM marca";
            $resultado = $conexion->query($consulta);
            while ($fila = $resultado->fetch_assoc()) {
              ?>
                    <option value="<?php echo $fila['id']; ?>"><?php echo $fila['nombre']; ?></option>
                    <?php
                                  }
                ?>
              </select>
          </div>
        </div>
        <div class="form-group row">
          <label for="inputEmail3" class="col-sm-2 col-form-label">Categoría</label>
          <div class="col-sm-10">

              <select class="form-control">
                <option value="0">Seleccione</option>
                <?php
            require("conexion.php");
            $consulta = "SELECT * FROM categoria";
            $resultado = $conexion->query($consulta);
            while ($fila = $resultado->fetch_assoc()) {
              ?>
                    <option value="<?php echo $fila['id']; ?>"><?php echo $fila['nombre']; ?></option>
                    <?php
                                  }
                ?>
              </select>
            
          </div>
        </div>
        <div class="form-group row">
          <label for="message-text" class="col-sm-2 col-form-label">Descripción</label>
          <div class="col-sm-10">
            <textarea class="form-control" id="message-text"placeholder=""></textarea> 
          </div>
        </div>
        <div class="form-group row">
          <label for="inputEmail3" class="col-sm-2 col-form-label">Detalle</label>
          <div class="col-sm-10">
            <textarea class="form-control" id="message-text"placeholder=""></textarea> 
          </div>
        </div>
        <div class="form-group row">
          <label for="inputEmail3" class="col-sm-2 col-form-label">Imagen</label>
          <div class="col-sm-10">
            <input type="file" class="form-control-file" id="default" placeholder="Name"> 
          </div>
        </div>
    
        <div class="form-group row text-center">
          <div class="col-sm-12">
            <button type="submit" class="btn btn-primary">Guardar</button>
          </div>
        </div>
      </form>
</div>
<div class="container" id="contenedor"></div>

 <!--Footer-->
<footer class="footer py-2">
    <div class="container ">
        <div class="row">
            <div class="col col-sm-10">
                <b>Información de contacto</b> 
                <br>
                 Email: noheliviva@ufps.edu.co
                <br>
                Teléfono: 3132070709 
            </div>
                <div class="col col-sm-2" id="redes">
                    <a href=""><i class="fab fa-facebook-square fa-2x" title="Facebook"></i></a>
                    <a href=""><i class="fab fa-twitter-square fa-2x" title="Twitter"></i></a>
                    <a href=""><i class="fab fa-instagram fa-2x" title="Instagram"></i></a>
                    <br>
                    <a href="#"data-toggle="modal" id="selh3" data-target="#exampleModal" data-whatever="@mdo">
                    <button type="button"  class="btn btn-primary btn-sm">Contactanos</button></a>
            </div>
            
            
        </div>
        <div class="text-center">
            Copyright © AÑO 2020
            Autor: Noheli Villa Valencia
        </div>
          
    </div>
</footer>


<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
    crossorigin="anonymous"></script>     
<script src="../js/datos.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>   
</body>
</html>