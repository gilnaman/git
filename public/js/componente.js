Vue.component('titulo',{
template:'<h1>UNIVERSIDAD TECNOLÓGICA DEL CENTRO</h1>'
});

Vue.component('contar',{
	template:`<button class="btn btn-primary btn-block" @click="inc()">
	{{valor}}
	</button>
	`,
	data:function(){
		return {
			valor:0
		}
	},
	methods:{
		inc:function(){
			this.valor++;
		}
	}
});


new Vue({
	el:"#ejemploComponente",
	data:{
		prueba:'Hola'
	}
});