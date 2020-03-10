@extends('master')
@section('titulo','becas')
@section('contenido')
<div id="beca" class="container">
    <div >
      <h1 class="alert alert-info"><center>Control de Becas</center></h1>
    </div>
      <button class="btn btn-warning" v-if="editando==false" v-on:click="showModal()">AGREGAR BECA</button>
      <br>
      <br>
          <input type="text" v-if="editando==false" placeholder="Escriba el nombre de la beca" class="form-control"
          v-model="buscar">
      <br>
      <div class="row" v-if="editando==true" >
        <div class="col-md-12">
        <h3 class="alert alert-danger">Editando Beca: @{{beca}}</h3>
          <form>
            <div class="form-row">
              <div class="col-4">
                <input type="text" placeholder="Escriba el nombre de la beca" class="form-control" v-model="beca" >
              </div>
            </div>
          </form> 
          <br>
          <br>
          <div class="container">
            <div class="row">
              <div class="col-4">
                <button class="btn btn-success" v-on:click="updateBeca(id_beca)">GUARDAR</button>
              </div>
              <div class="col-4">
                <button class="btn btn-warning" v-on:click="editando=false">CANCELAR</button>
              </div>
          </div>
          </div>
      </div>
      </div>
<!--       @{{Becas}} -->
      <div class="row table-responsive" v-if="editando==false">
        <div class="col-md-12">
          <table class="table table-dark">
            <thead>
            <th>id_beca</th>
              <th>Nombre</th>
              <th>opciones</th>
            </thead>
            <tbody>
              <tr v-for="bec in filtroBeca">
                <td>@{{bec.id_beca}}</td>
                <td>@{{bec.beca}}</td>

                <td>
                  <span class="icon-pencil btn btn-xs btn-primary" v-on:click="showBeca(bec.id_beca)"></span>
                  <span class="icon-trash btn btn-xs btn-danger" v-on:click="eliminarBeca(bec.id_beca)"></span>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

    <div class="modal" tabindex="-1" role="dialog" id="add_beca">
       <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
           <h5 class="modal-title">Nueva beca</h5>
           <button type="button" class="close" data-dismiss="modal" aria.label="close">
            <span aria-hidden="true">x</span>
           </button>
        </div>
      <div class="modal-body">
            <div class="form-row">
              <div class="col-4">
                <input type="text" placeholder="nombre de la beca" class="form-control" v-model="beca" >
              </div>
            </div>
      </div>
      <div class="modal-footer">
        <h6>Nombre de la beca : @{{ beca }}</h6>


          <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary" v-on:click="agregarBeca()">Guardar</button>
      </div>
      </div>
       </div>
 </div>
</div>
@endsection
@push('scripts')

<script src="js/vue-resource.js"></script>
<script src="js/becas.js"></script>
@endpush
<input type="hidden" name="route" value="{{url('/')}}">