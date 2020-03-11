<!DOCTYPE html>
<html>
<head>
	 <meta charset="UTF-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="token" id="token" value="{{ csrf_token() }}">
    <meta name="route" value="{{url('/')}}">
    <title>CRUD CARRERAS</title>

  <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/vue.js"></script>
    
</head>

<body style="background-color: #FBF7CB">
	<div class="container">
  <div id="carrera">
    <br>
    <br>
    <form method="get" class="sidebar-form">
      <div class="input-group">
        <span class="input-group-btn">
          <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="glyphicon glyphicon-search"></i>
          </button>
        </span>
        <input type="text" placeholder="Buscar" v-model="buscar" class="form-control">
          
      </div>
    </form>

    <br>
    <button class="btn btn-md btn-success" data-toggle="modal" data-target="#agregar">Agregar</button>
    

      <br><br>


       <div class="row">
        <div class="col-md-12 col-xs-12">
        
          <div class="table-responsive">
            <table class="table table-bordered table-sm table-hover">
            <thead class="thead-dark" style="background: #FFFFFF">
              <th>ID</th>
              <th>CARRERA</th>
              
              <th>OPCIONES</th>
            </thead>
            <tbody style="background-color: #FF9966">
              <tr v-for="(car,index) in filtroCarrera">
                <td>@{{car.id_carrera}}</td>
                <td>@{{car.carrera}}</td>
                
                <td>
                  <span class="glyphicon glyphicon-pencil btn btn-xs btn-primary" data-toggle="modal" data-target="#editarcarrera" v-on:click="showCarrera(car.id_carrera)"></span>
                  <span class="glyphicon glyphicon-trash btn btn-xs btn-danger" v-on:click="eliminarCarrera(car.id_carrera)"></span>
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
          <div class="modal-header"  style="background-color: #FF9966 ">
            <h5 class="modal-title" id="exampleModalLabel"><strong class="color">Carrera</strong></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close" v-on:click="limpiar()">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body" style="background-color: #FBF7CB">
          
          <div class="row">
            <div class="col-12">
              
              <label>Nombre de la Carrera</label>
              <input type="text" name="carrera" class="form-control" v-model="carrera"><br>

            </div>
          </div>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-warning" data-dismiss="modal" v-on:click="limpiar()">Cancelar</button>
            <button type="button" class="btn btn-info" data-dismiss="modal" v-on:click="agregarCarrera(id_carrera)">Guardar</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Fin de modal -->

    <!-- Modal Editar -->
    <div class="modal fade" id="editarcarrera" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header" style="background-color: #FF9966 ">
            <h5 class="modal-title" id="exampleModalLabel"><strong class="color">Editar Carrera</strong></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close" v-on:click="limpiar()">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body" style="background-color: #FBF7CB">
          
          <div class="row">
            <div class="col-12">
              <label>Id</label>
              <input type="text" disabled="" name="id_sucursal" class="form-control" v-model="id_carrera" placeholder="id">
              <br>
              <label>Nombre De La Carrera</label>
              <input type="text" name="carrera" class="form-control" v-model="carrera"><br>

            </div>
          </div>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-warning" data-dismiss="modal" v-on:click="limpiar()">Cancelar</button>
            <button type="button" class="btn btn-info" data-dismiss="modal" v-on:click="updateCarrera(id_carrera)">Guardar cambios</button>
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
  <script src="js/carreras.js"></script>


</body>

</html>
<input type="hidden" name="route" value="{{url('/')}}">



