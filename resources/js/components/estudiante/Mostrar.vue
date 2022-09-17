<template>
    <div class="row">
        <div class="col-12 mb-2">
            <router-link :to='{name:"crearEstudiante"}' class="btn btn-warning">Nuevo Registro</router-link>
        </div>
        <div class="col-12">             
                    <div class="table-responsive">
                        <table class="table table-success table-striped">
                            <thead class="bg-primary text-dark">
                                <tr>
                                    <th>ID</th>
                                    <th>Nombre</th>
                                    <th>Direccion</th>
                                    <th>Numero Telefonico</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="estudiante in estudaintes" :key="estudaintes.id">
                                    <td>{{ estudiante.id }}</td>
                                    <td>{{ estudiante.name }}</td>
                                    <td>{{ estudiante.address }}</td>
                                    <td>{{ estudiante.phone_number }}</td>
                                </tr>
                            </tbody>                         
                        </table>
                    </div>                          
        </div>
    </div>
</template>

<script>
export default {
    name:"estudiantes",
    data(){
        return {
            estudaintes:[]
        }
    },
    mounted(){
        this.mostrarEstudiantes()
    },
    methods:{
        async mostrarEstudiantes(){
            await this.axios.get('/api/estudiante').then(response=>{
                this.estudaintes = response.data
            }).catch(error=>{
                console.log(error)
                this.estudaintes = []
            })
        }
    }
}
</script>