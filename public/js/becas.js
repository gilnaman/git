var	route= document.querySelector("[name=route]").value;
var ulrBecas = route + '/apibeca';
var urlas= ulrBecas +'/';


new Vue({
	el:'#beca',

	http:{
		headers:{
			'X-CSRF-TOKEN':document.querySelector('#token').getAttribute('value')
		}
	},
	data:{
		Becas:[],
		beca:'',
		id_beca:'',
		editando:false,
		buscar:''

	},

	created:function(){
		this.getBecas();
	},

	methods:{
		getBecas:function(){
			this.$http.get(ulrBecas)
			.then(function(json){
				this.Becas=json.data;
			});
		},

		showModal:function(){
			$('#add_beca').modal('show');
			this.limpiar();
		},

		agregarBeca:function()
		{
			// construir un objeto que necesitamos por el api
			var becas={id_beca:this.id_beca,
				beca:this.beca}
				// limpiar campos
				this.id_beca='';
				this.beca='';
				// para un metodo store se necesita un post
				this.$http.post(ulrBecas,becas)
				.then(function(response){
					alert('agregado con exito');
					this.getBecas();
					$('#add_beca').modal('hide');
				});
		},
		showBeca:function(id){
			this.$http.get(ulrBecas+'/'+id)
			.then(function(json){
				this.id_beca=json.data.id_beca;
				this.beca=json.data.beca;
				this.editando=true;
			})	
		},

		eliminarBeca:function(id){
			var resp=confirm("se eliminara el Beneficiario")
			if (resp==true) {
				this.$http.delete(urlas+id)
				.then(function(json){
					this.getBecas();
				})
			}
		},
		updateBeca:function(id){
			// crear un json 
			var bec={id_beca:this.id_beca,
					  beca:this.beca,
					  }
		    console.log();

			this.$http.patch(urlas+id,bec)
			.then(function(json){
				this.getBecas();
				this.limpiar();
			})
		},
		limpiar:function(){
			this.id_beca='';
			this.beca='';
			this.editando=false;
		},

	},
	computed:{
	
		filtroBeca:function(){
			return this.Becas.filter((bec)=>{
				return bec.beca.match(this.buscar.trim()) ||
				bec.beca.toLowerCase().match(this.buscar.trim().toLowerCase());

			});
		}	
	}

});