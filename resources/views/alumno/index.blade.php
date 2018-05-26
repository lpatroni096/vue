<html>

<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
<script src="https://cdnjs.cloudflare.com/ajax/libs/vue-resource/1.3.1/vue-resource.min.js"></script>

<body>

    <br><br>

    <div id="app" class="container">
        
        <div class="input-group mb-3">

            <input type="text" class="form-control" v-model="alumno_id" placeholder="Ingresar Id" >
        
            <div class="input-group-append">
        
                <button class="btn btn-primary" v-on:click="search" type="button">Buscar</button>
        
            </div>
            
        </div>

        <hr>

        <table class="table table-striped table-dark">

            <thead>

                <tr>
        
                    <th>ID</th>
        
                    <th>Curso</th>
        
                    <th>Creado</th>

                </tr>

            <thead>

            <tbody>
                
                <tr v-for="curso in alumno.cursos">

                    <td>@{{curso.id}}</td>

                    <td>@{{curso.nombres}}</td>

                    <td>@{{curso.created_at}}</td>
                    
                </tr>

            </tbody>

        </table>

        <br>

        <table class="table table-striped table-dark">

            <thead>

                <tr>
                    
                    <th>Nombres</th>

                    <th>Apellido</th>

                    <th>Dni</th>

                    <th>Edad</th>

                </tr>

            <thead>

            <tbody>
                
                <tr>

                    <td>@{{alumno.nombres}}</td>

                    <td>@{{alumno.apellido}}</td>

                    <td>@{{alumno.dni}}</td>
                    
                    <td>@{{alumno.edad}}</td>

                </tr>

            </tbody>

        </table>

    </div>

<script>

    var app = new Vue({
    
        el: '#app',
    
        data: { 
            
            alumno_id : '', 
        
            alumno : {}
        
        },
    
        methods:{
            
            search: function ()
            {               
                this.$http.get('/alumno/'+this.alumno_id).then(function(response)
                {
                    this.alumno = response.body;
                });
            }
        }
    });

</script>


</body>

</html>