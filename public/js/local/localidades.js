var ruta = document.querySelector("[name=route]").value;
var rut = 'http://localhost/git/public/'
var urlLocalidad = rut + '/apiLocal';

new Vue({
	
	http:{
		headers:{
			'X-CSRF-TOKEN':document.querySelector('#token').getAttribute('value')
		}
	},

	el:"#local",

	created:function(){
		this.getLocalidad();
	},

	data:{
		localidades:[],
		id_localidad:'',
		localidad:'',
		cp:'',
		auxLocalidad:'',
		editando:false
	},

	methods:{
		getLocalidad:function(){
			this.$http.get(urlLocalidad)
			.then(function(response){
				this.localidades=response.data;
			}).catch(function(response){
				console.log(response);
			});
		},

		agregarLocalidad:function(){
			var localidad={id_localidad:this.id_localidad,localidad:this.localidad,cp:this.cp};

			this.id_localidad='';
			this.localidad='';
			this.cp='';

			this.$http.post(urlLocalidad,localidad)
			.then(function(response){
				this.getLocalidad();
			});
		},

		eliminarLocalidad:function(id){
			var resp =confirm("Esta seguro de eliminar esta localidad: " + id)
			if (resp==true) {
				this.$http.delete(urlLocalidad + '/' + id)
				.then(function(json){
					this.getLocalidad();
				});
			}
		},

		editLocalidad:function(id){
			this.editando=true;
			//peticion al servidor
			this.$http.get(urlLocalidad + '/' + id).then
			(function(response){
				this.id_localidad = response.data.id_localidad;
				this.localidad = response.data.localidad;
				this.cp = response.data.cp;
				this.auxLocalidad = response.data.id_localidad;
			});
		},

		updateLocalidad:function(id){
			var localidad={id_localidad:this.id_localidad,localidad:this.localidad,
				cp:this.cp};
			this.$http.put(urlLocalidad + '/' + this.id_localidad,localidad)
			.then(function(response){
				this.getLocalidad();
				this.editando=false;
				this.auxLocalidad;
				
				this.id_localidad='';
				this.localidad='';
				this.cp='';
			
			});
		},

		cancelarEdit:function(){
			this.id_localidad='';
			this.localidad='';
			this.cp='';	
		}

	}
})