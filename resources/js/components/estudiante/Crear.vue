<template>
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header"><h4>Registrar Estudiante</h4></div>
        <div class="card-body">
          <form @submit.prevent="crear">
            <div class="row">
              <div class="col-12 mb-2">
                <div class="form-group">
                  <label>Nombre</label>
                  <input type="text" class="form-control" v-model="estudiante.name">
                </div>
              </div>
              <div class="col-12 mb-2">
                <div class="form-group">
                  <label>Dirección</label>
                  <input type="text" class="form-control" v-model="estudiante.address">
                </div>
              </div>
              <div class="col-12 mb-2">
                <div class="form-group">
                  <label>Teléfono</label>
                  <input type="text" class="form-control" v-model="estudiante.phone_number">
                </div>
              </div>
              <div class="col-12">
                <button type="submit" class="btn btn-primary">Guardar</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name:"crear-estudiante",
  data(){
    return {
      estudiante:{
        nombre:"",
        address:"",
        phone_number:"",
      }
    }
  },
  methods:{
    async crear(){
      await this.axios.post('/api/estudiante',this.estudiante).then(response=>{
        this.$router.push({name:"mostrarEstudiantes"})
      }).catch(error=>{
        console.log(error)
      })
    }
  }
}
</script>