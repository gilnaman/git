<!DOCTYPE html>
<html>
<head>
	<meta name="token" id="token" value="{{ csrf_token() }}">
	<meta name="route" value="{{url('/')}}">
	<title>Localidades</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<!-- <link rel="stylesheet" type="text/css" href=""> -->

	
	<script src="js/vue.js"></script>
	<script src="js/vue-resource.js"></script>
</head>
<body>
<br><br>
<br><br>
	<div id="local">

	<div class="container">
		<div class="row">
			<div class="col-xs-8">
				<br>
				<!-- <input type="text" name="" placeholder="clave de Localidad" class="u-full-width" v-model='id_localidad'> -->
				<input type="text" name="" placeholder="Localidad" class="form-control" v-model="localidad">
				<input type="text" name="" placeholder="Código Postal" class="form-control" v-model="cp">
			</div>
			<div class="col-xs-4">
				<button class="btn btn-primary form-control btn-block" v-on:click="updateLocalidad(auxLocalidad)" v-if="editando"> Actualizar</button><br>

				<button class="btn btn-danger form-control btn-block" v-on:click="cancelarEdit()"> Cancelar</button><br>

				<button class="btn btn-success btn-block form-control" v-on:click="agregarLocalidad()" v-if=!editando> Agregar</button>
			</div>
		</div>
	</div>
	<br><br>

	<div class="container">
		<table class="table table-striped table-bordered">

			<thead class="teb">
				<th>Clave</th>
				<th>Localidad</th>
				<th>Código postal</th>
				<th>Opciones</th>
			</thead>
			<tbody>
				<tr v-for="loc in localidades" class="">
					<td>@{{ loc.id_localidad }}</td>
					<td>@{{ loc.localidad }}</td>
					<td>@{{ loc.cp }}</td>
					<td>
						<span class="btn btn-warning glyphicon glyphicon-pencil" v-on:click="editLocalidad(loc.id_localidad)"></span>
						<span class="btn btn-danger glyphicon glyphicon-trash" v-on:click="eliminarLocalidad(loc.id_localidad)"></span>
					</td>
				</tr>
			</tbody>
		</table>
	</div>
</div>

<script src="js/local/localidades.js"></script>
<script src="js/jquery.js"></script>

</body>
</html>