// var route = document.querySelector("[name=route]").value;
var personal='http://localhost/git/public/';
var urlPersonales=personal + '/apiPersonal';
new Vue({

	el:'#personal',
	// token
	http:{
		headers:{
			'X-CSRF-TOKEN': document.querySelector('#token').getAttribute('value')
		}
	},

	data:{
		personales:[],
		curp:'',
		nombre:'',
		apellidop:'',
		apellidom:'',
		buscar:'',
		
	},

	created:function(){
		this.getPersonal();
		this.getBuscar();
	},


	methods:{
		getPersonal:function(){
			this.$http.get(urlPersonales)
			.then(function(json){
				this.personales=json.data
			});
		},

		getBuscar:function(){
			this.$http.get(urlPersonales)
			.then(function(json){
				this.personales=json.data;
			}).catch(function(json){
				console.log(json);
			})
		},

		guardarPersonal:function(id){
			this.$http.get(urlPersonales + '/' + id)
			.then(function(json){
				this.curp=json.data.curp;
				this.nombre=json.data.nombre;
				this.apellidop=json.data.apellidop;
				this.apellidom=json.data.apellidom;
			});
		},

		eliminarPersonal:function(id){
			var resp=confirm("¿Estas Seguro Que Deseas Eliminar?")
			if(resp==true)
			{
				this.$http.delete(urlPersonales + '/' + id)
				.then(function(json){
				this.getPersonal();
				});
			}
			
		},

		// cancelarPersonal:function(){

		// 	var resp=confirm("¿Estas Seguro Que Deseas Cancelar?")
		// 	if(resp==true)
		// 	{

		// 		this.curp='';
		// 		this.nombre='';
		// 		this.apellidop='';
		// 		this.apellidom='';				
		// 	}

		// },
		agregarPersonal:function(){
			var personal={
				curp:this.curp,
				nombre:this.nombre,
				apellidop:this.apellidop,
				apellidom:this.apellidom,
			};

				this.curp='';
				this.nombre='';
				this.apellidop='';
				this.apellidom='';

			this.$http.post(urlPersonales,personal)
			.then(function(response){
				this.getPersonal();
			});

		},

		actualizarPersonal:function(id){
			// crear un json 
			var personal={
				curp:this.curp,
				nombre:this.nombre,
				apellidop:this.apellidop,
				apellidom:this.apellidom,
					  }
		    console.log();

			this.$http.patch(urlPersonales + '/' + id,personal)
			.then(function(json){
				this.getPersonal();
				this.limpiar();
			})
		},

		limpiar:function(){
				this.curp='';
				this.nombre='';
				this.apellidop='';
				this.apellidom='';
			
		}

	},

	computed:{
		filtroPersonal:function(){
			return this.personales.filter((pers)=>{
				return pers.apellidom.match(this.buscar.trim())||pers.apellidom.toLowerCase() 
					.match(this.buscar.trim().toLowerCase()) ||
					pers.apellidop.toLowerCase()
					.match(this.buscar.trim().toLowerCase());
			});
		},
	},
});

