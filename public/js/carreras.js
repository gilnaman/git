// var route = document.querySelector("[name=route]").value;
 var route='http://localhost/git/public/';
var urlCarrera= route + '/' + 'apiCarrera';
new Vue({
	el:'#carrera',
	// token
	http:{
		headers:{
			'X-CSRF-TOKEN': document.querySelector('#token').getAttribute('value')
		}
	},

	data:{
		n:'carrera',
		carreras:[],
		
		
		carrera:'',
		id_carrera:0,
		buscar:''

		
	},

	created:function(){
		this.getCarrera();
		this.getBuscar();
	},


	methods:{
		getCarrera:function(){
			this.$http.get(urlCarrera)
			.then(function(json){
				this.carreras=json.data
			});
		},

		getBuscar:function(){
			this.$http.get(urlCarrera)
			.then(function(json){
				this.carreras=json.data;
			}).catch(function(json){
				console.log(json);
			})
		},


		eliminarCarrera:function(id){
			var resp=confirm("¿estas seguro de eliminar la Carrera?")
			if(resp==true)
			{
				this.$http.delete(urlCarrera + '/' + id)
				.then(function(json){
				this.getCarrera();
				});
			}
			
		},

		

		agregarCarrera:function(){
			// crear un json 
			var carrera={
					id_carrera:this.id_carrera,
					  carrera:this.carrera,
					  }

			this.$http.post(urlCarrera,carrera)
			.then(function(json){
				this.getCarrera();
				// limpiar
				this.limpiar();

				
			
			});
		},

		showCarrera:function(id){
			this.$http.get(urlCarrera+ '/' + id)
			.then(function(json){
				this.id_carrera=json.data.id_carrera;
				this.carrera=json.data.carrera;
				
			});
		},

		updateCarrera:function(id){
			//crear un json
			var carrera={
					id_carrera:this.id_carrera,
					carrera:this.carrera }

			this.$http.patch(urlCarrera+ '/' + id,carrera)
				.then(function(json){
					this.getCarrera();
					this.limpiar();
			});
		},


		

		limpiar:function(){
			this.id_carrera=0;
			this.carrera='';
			
		}

	},
	computed:{
		filtroCarrera:function(){
			return this.carreras.filter((carreras)=>{
				return carreras.carrera.match(this.buscar.trim()) || 
				carreras.carrera.toLowerCase().match(this.buscar.trim().toLowerCase());
			});
		},
	}
});