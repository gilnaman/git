<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="token" id="token" value="{{ csrf_token() }}">
	
	<script src="js/vue.js"></script>
	<script src="js/jquery-3.3.1.min.js"></script>
</head>
<body>
	<!-- inicio del js -->
	<div id="departamento">
		<input type="text" placeholder="Buscar por Nombre" v-model="buscar">
		<!-- inicio del registro y la actulización -->
		<div>
			<input type="text" v-model="depto">

			<button v-if="!editando" @click="agregarD()">Agregar</button>
			<button v-if="editando" @click="editarD(auxD)">Editar</button>
		</div>
		<!-- fin del registro y actualización-->
		<!-- inicio de la tabla -->
		<table>
			<thead>
				<th>Departamento</th>
				<th>Nombre</th>
			</thead>
			<tbody>
				<tr v-for="(d,index) in filtroDepartamentos">
					<td>@{{index+1}}</td>
					<td>@{{d.depto}}</td>
					<td><button @click="edit(d.id_depto)">Editar</button> <button @click="eliminarD(d.id_depto,d.depto)">Eliminar</button></td>	
				</tr>
			</tbody>
		</table>
		<!-- fin de la tabla -->
		

	
	</div>

	<script src="js/departamento.js"></script>
	<script src="js/vue-resource.js"></script>
</body>
</html>
<input type="hidden" name="route" value="{{url('/')}}">





