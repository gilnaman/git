var ruta='http://localhost/DemoSari/public/';
var ulrUser= ruta + 'apiUsuario';

new Vue({
	http: {
		headers:{
			'X-CSRF-TOKEN': document.querySelector('#token').getAttribute('value')
		}
	},

	el:'#usuario',
	data:{
		saludo:'Hola Mundo',
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
			this.preview= URL.createObjectURL(this.foto);
		},

		guardarUser:function(){
			var data = new FormData();

			data.append('nick',this.nick);
			data.append('password',this.password);
			data.append('nombre',this.nombre);
			data.append('apellidos',this.apellidos);
			data.append('foto',this.foto);

			var config={
				header:{'Content-Type':'image/jpg'}
			}

			this.$http.post(ulrUser,data,config).then(function(json){
				alert('USUARIO AGREGADO');
			})
			.catch(function(json){
				console.log(json);
			})
		}
	}
})