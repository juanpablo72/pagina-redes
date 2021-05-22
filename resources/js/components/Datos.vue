<template>
	<div >
		<div class="container">
			<div class="text-center">
				<h1>Gestionar articulos</h1>
			</div>
      
			<br>
      <button type="button" @click="abrir()" class="btn btn-info btn-lg">Nuevo</button>

<!-- Modal -->
<div >
       
         
<div id="myModal"  class="modal "  :class="{mostrar:modalv}" v-if="modalv" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button"   @click="cerrar();" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"><b>{{titulomodal}}</b></h4>
      </div>
      <div class="modal-body">
        <p>Some text in the modal.</p>
      </div>
      <div class="modal-footer">

<button type="button" @click="guardar();" class="btn btn-success" data-dismiss="modal">guardar</button>

        <button type="button" @click="cerrar();" class="btn btn-secondary" data-dismiss="modal">cancelar</button>
      </div>
    </div>

  </div>
</div>
</div>
			<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">nombre</th>
      <th scope="col">descripcion</th>
      <th scope="col">cantidad</th>
      <th scope="col">Opciones</th>
    </tr>
  </thead>
  <tbody>
    <tr v-for="dat in datos" :key="dat.id">
      <th scope="row">{{dat.id}}</th>
      <td>{{dat.nombre_materia}}</td>
      <td>{{dat.docente}}</td>
      <td>{{dat.tipoMateria}}</td>
      <td>
        <div class="row">
          <div class="btn-group">
            <button  @click="editar()"class="btn btn-danger">editar</button>
            <button @click="eliminar(dat.id)" class="btn btn-success">Borrar </button>
            
          </div>
         
        </div>
      </td>

    </tr>
    
  </tbody>

</table>
		</div>
	</div>
</template>

<script >
	
export default {

  data() {
        return {
          modificar:false,
          modalv:0,
          titulomodal:'',
            datos : [],
        }
    },
  
  methods:
{
  async  lista()
  {
    const repuesta =await axios.get('datos');
     this.datos=repuesta.data;
  },
   async  eliminar(id)
  {
    const repuesta =await axios.delete('d/'+id);
    this.lista();
  },
  async  editar()
  { 
    this.modificar = true;
    //const repuesta =await axios.delete('articulos/'+id);
    //this.lista();
  },
  abrir()
  {
    this.modalv=1;
    if(this.modificar )
    {
      this.titulomodal='modificar';
    }
      else{ this.titulomodal='Nuevo Articulo';}
  },
  cerrar()
  {
    this.modalv=0;
  }
,guardar()
{
  
}
 
}
,
created()
{
this.lista();
}

};

 


</script>

<style>
  .mostrar
  {
    display:list-item;
    opacity:1;
    background:rgba(44,38,75,0.849);
   
  }
	
</style>