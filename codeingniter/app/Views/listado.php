<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container">
      <h1>Agregar Registro</h1>
      <div class="row">
        <div class="col-sm-12">
          <form action="<?PHP echo base_url('index.php/crear')?>" method="POST">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" class="form-control" required>
            <label for="apaterno">Apellido Paterno: </label>
            <input type="text" id="apaterno" name="apaterno" class="form-control" required>
            <label for="nombre">Apellido Materno: </label>
            <input type="text" id="amaterno" name="amaterno" class="form-control" required>
            <button class="btn btn-primary form-control">Guardar</button>
          </form>
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-sm-12">
          <div class="table table-resposive">
            <table class="table table-hover table-bordered">
              <tr>
                <th>NOMBRE</th>
                <th>APELLIDO PATERNO</th>
                <th>APELLIDO MATERNO</th>
                <th>Editar</th>
                <th>Eliminar</th>
                
              </tr>
              
              <?PHP foreach( $datos as $dato):?>
                <tr>
                  <td><?php echo $dato->nombre ?></td>
                  <td><?php echo $dato->a_paterno ?></td>
                  <td><?php echo $dato->a_materno ?></td>
                  <td><a href="<?php echo base_url('index.php/obtenerInformacion').'/'.$dato->id ?>" class="btn btn-sm btn-warning">Editar</a></td>
                  <td><a href="<?php echo base_url('index.php/eliminar').'/'.$dato->id ?>" class="btn btn-sm btn-danger">Eliminar</a></td>
                </tr>
              <?php endforeach ?>
              
            </table>
          </div>
        </div>
       </div>
      </div>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
      let mensaje = '<?php echo $mensaje; ?>';
      if (mensaje == '0'){
        swal(':D','Registro insertado correctamente','success');
      }else if(mensaje == '1'){
        swal(':(','No fue posible insertar registro correctamente','error');
      }else if(mensaje == '2'){
        swal(':D','Registro actualizado correctamente','success');
      }else if(mensaje == '3'){
        swal(':(','No fue posible actualizar registro correctamente','error');
      }else if(mensaje == '4'){
        swal(':D','Registro eliminado correcctamente','success');
      }else if(mensaje == '5'){
        swal(':(','No fue posible eliminar registro correctamente','error');
      }
      
    </script>
  </body>
</html>
