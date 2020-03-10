<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="token" id="token" value="{{ csrf_token() }}">
   <!--  <meta name="route" value="{{url('/')}}"> -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Personal</title>

    <!-- Bootstrap --> 
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script type="text/JavaScript" src="js/vue.js"></script> 
    
</head>
<body style="background-color: #0B243B">


<div id="personal" class="container">

  <div class="container">
    <div class="row">
     <div class="col-xs-10">

      <br>
      <br>

      <input type="text" placeholder="Buscar" v-model="buscar" class="form-control">

      <br>

      <button class="btn btn-md btn-success" data-toggle="modal" data-target="#agregar">Agregar</button>
    

      <br>
      <br>


       <div class="row">
        <div class="col-xs-12 col-xs-12">
        
          <div class="table-responsive">
            <table class="table table-bordered">
            <thead style="background-color: orange">
              <th><center>Curp</center></th>
              <th><center>Nombres</center></th>
              <th><center>Apellido Paterno</center></th>
              <th><center>Apellido Materno</center></th>
              <th><center>Opciones</center></th>

            </thead>
            <tbody style="color: white">
              <tr v-for="(personal,index) in filtroPersonal">
                <td><center>@{{personal.curp}}</center></td>
                <td><center>@{{personal.nombre}}</center></td>
                <td><center>@{{personal.apellidop}}</center></td>
                <td><center>@{{personal.apellidom}}</center></td>
                
                <td>
                 <center><span class="glyphicon glyphicon-pencil btn btn-xs btn-primary" data-toggle="modal" data-target="#editarPersonal" v-on:click="guardarPersonal(personal.curp)"></span>

                  <span class="glyphicon glyphicon-trash btn btn-xs btn-danger" v-on:click="eliminarPersonal(personal.curp)"></span></center>

                </td>
              </tr>
            </tbody>
          </table>
          </div>
          
        </div>
        
      </div>
  
          

                    <!-- Modal Agregar -->
    <div class="modal fade" id="agregar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header"  style="background-color:orange ">
            <h5 class="modal-title" id="exampleModalLabel"><strong class="color">Personal</strong></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close" v-on:click="limpiar()">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body" style="background-color: #ECEEF0">
          
          <div class="row">
            <div class="col-xs-12">
              
              <label>Curp</label>
              <input type="text" name="Curp" class="form-control" v-model="curp"><br>

              <label>Nombre</label>
              <input type="text" name="Nombre" class="form-control" v-model="nombre"><br>

              <label>Apellido Paterno</label>
              <input type="text" name="Apellido Paterno" class="form-control" v-model="apellidop"><br>

              <label>Apellido Materno</label>
              <input type="text" name="Apellido Materno" class="form-control" v-model="apellidom"><br>

            </div>
          </div>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal" v-on:click="limpiar()">Cancelar</button>
            <button type="button" class="btn btn-primary" data-dismiss="modal" v-on:click="agregarPersonal(curp)">Guardar</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Fin de modal -->

    <!-- Modal Editar -->
    <div class="modal fade" id="editarPersonal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header" style="background-color:orange ">
            <h5 class="modal-title" id="exampleModalLabel"><strong class="color">Editar Personal</strong></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close" v-on:click="limpiar()">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body" style="background-color: #ECEEF0">
          
          <div class="row">
            <div class="col-xs-12">
              <label>Curp</label>
              <input type="text" disabled="" name="editarPersonal" class="form-control" v-model="curp" placeholder="id">
              <br>
              <label>Nombre</label>
              <input type="text" name="Nombre" class="form-control" v-model="nombre"><br>

              <label>Apellido Paterno</label>
              <input type="text" name="Apellido Paterno" class="form-control" v-model="apellidop"><br>

              <label>Apellido Materno</label>
              <input type="text" name="Apellido Materno" class="form-control" v-model="apellidom"><br>


            </div>
          </div>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal" v-on:click="limpiar()">Cancelar</button>
            <button type="button" class="btn btn-primary" data-dismiss="modal" v-on:click="actualizarPersonal(curp)">Guardar cambios</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Fin de modal -->
  </div>
</div>


  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/vue-resource.js"></script>
  <script src="js/personales/personales.js"></script>
   


  </body>
</html>

<!-- <input type="hidden" name="route" value="{{url('/')}}"> -->
                 

          
