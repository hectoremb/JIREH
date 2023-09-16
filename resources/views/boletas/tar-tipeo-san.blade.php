<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TIPEO SANGUÍNEO</title>
    <link href="./bootstrap.min.css" rel="stylesheet">
</head>
<body style="background: #58D9D9;">
  
    <br>
    <div class="bg-light" style="margin-left: 10%; margin-right: 10%;border-radius: 5px;" >
    <br>
      <div>
        <center><h1>BOLETA PARA TARJETA DE TIPEO SANGUÍNEO</h1></center>
      </div>
    <br>

    <form action="/tar-tipo-san" method="post" style="margin-left: 5%; margin-right: 5%;">
        @csrf
        <div class="row">
            <div class="col">
              <strong>1. Nombre</strong>
              <input  id="miTd" autocomplete="off" name="nombre" type="text" class="form-control" style="border-color: #5FB5B5;">
            </div>
            
          
        </div>  

        <div class="row">
           <div class="col">
              <strong>2. Grupo sanguíneo: </strong>
              <input autocomplete="off" name="grupo" type="text" class="form-control" style="border-color: #5FB5B5;">
            </div>
            
            <div class="col">
              <strong>3. Factor: </strong>
              <input autocomplete="off" name="factor" type="text" class="form-control" style="border-color: #5FB5B5;">
            </div>                  
        </div>

       

      <div class="d-flex bd-highlight mb-3">
        <div class="p-2 bd-highlight"><button type="submit" class="btn btn-primary">Generar Documento</button></div>
        <div class="ms-auto p-2 bd-highlight"><a href="/" class="btn btn-info" >Regresar</a></div>
      </div>
      
    </form>
    <br>
  </div>
  <br><br>
  

  <script>
        // Obtén el elemento <td> por su ID
        var tdElement = document.getElementById('miTd');

        // Convierte el texto a mayúsculas y actualiza el contenido del <td>
        tdElement.textContent = tdElement.textContent.toUpperCase();
    </script>
<script src="./bootstrap.bundle.min.js"></script>
</body>
</html>






