// var ruta= document.querySelector("[name=route]").value;
// var ruta='http://localhost/git/public/apiDepartamento';
// var urlD=ruta + '';
function init(){
var ruta= document.querySelector("[name=route]").value;
var urlD=ruta + '/apiDepartamento';

new Vue({
		http:{
			headers:{
				'X-CSRF-TOKEN':document.querySelector('#token').getAttribute('value')
			}
		},
	el:'#departamento',
	
	data:{
		buscar:'',
		depto:'',
		departamentos:[],
		editando:false,
		auxD:""
	},
	created:function(){
		this.getDepartamentos();
	},
	methods:{
		getDepartamentos:function(){
			this.$http.get(urlD).then(
				function(json){
				this.departamentos=json.data;
			});
		},
		// showModal:function(){
		// 	$('#add_d').modal('show');
		// },
		agregarD:function(){

			var d={
				depto:this.depto
			};
			this.$http.post(urlD,d)
			.then(function(json){
				alert("Departamento Agregado");
				this.getDepartamentos();
				this.terminar();
			});
		},
		terminar:function(){
			this.depto="";
			this.editando=false;
		},
		eliminarD:function(id,d){
			var resp= confirm("eliminar " + d)
			if (resp==true){
				this.$http.delete(urlD + '/' + id)
				.then(function(json){
					alert("Departamento Eliminado");
					this.getDepartamentos();
					this.terminar();
				});
			}
		},
		editarD:function(id){
			var d={
				depto:this.depto
			};
			this.$http.put(urlD + '/' + this.auxD,d)
			.then(function(response){
			this.getDepartamentos();
			alert("Departamento Editado");
			this.terminar();
		});
		},
		edit:function(id){
			this.editando=true;
		this.$http.get(urlD + '/' + id)
		.then(function(response){
			this.depto=response.data.depto;
			this.auxD=response.data.id_depto;
		});
		}

	},
	//Inicia la función de la búsqueda
	computed:{
	filtroDepartamentos:function(){
			return this.departamentos.filter((mn)=>{
				return mn.depto.toLowerCase().match(this.buscar.trim().toLowerCase());
			});			
		}
},
})
}
window.onload=init;