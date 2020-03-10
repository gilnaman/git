var route='http://localhost/DemoSari/public/';
var urlUser=route+'apiUsuario';
new Vue({

	http:{
		headers:{
			'X-CSRF-TOKEN': document.querySelector('#token').getAttribute('value')
		}
	},


	el:'#usuario',
	data:{
		saludo:'hola mundo',
		nick:'',
		password:'',
		nombre:'',
		apellidos:'',
		foto:'',
		preview:''
	},

	methods:{
		alSeleccionar(event){
			this.foto=event.target.files[0];
			// console.log(this.foto);
			this.preview=URL.createObjectURL(this.foto)
		},

		guardarUser:function(){
			var data = new FormData();
			data.append('nick', this.nick);
			data.append('password',this.password);
			data.append('nombre',this.nombre);
			data.append('apellidos',this.apellidos);
			data.append('foto',this.foto);

			var config={
				header:{'Content-Type':'image/jpg'}
			}

			this.$http.post(urlUser,data,config)
			.then(function(json){
				
			})
			.catch(function(json){
				console.log(json);
				alert('USUARIO AGREGADO');
			})

		}

	}
	

});