<template>
    <div class="container">
        <div class="row justify-content-md-center mt-5">
            <div class="col-9">
                <div class="card">
                    <div class="card-body">
                        <form @submit.prevent="createTag">
                            <h5 class="card-title">Adicionar Tag</h5>

                            <div class="mb-3 mt-3">
                                <label for="tagName" class="form-label">Tag Nome</label>
                                <input type="text" class="form-control" id="tagName"  v-model="tag.name_tag" placeholder="Nome">
                            </div>

                            <div class="col-12 mt-1 text-end" >
                                <button type="submit" class="btn btn-primary">Salvar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import axios from 'axios'

    export default{
        name: 'CreateTag', 

        data(){
            return{
                tag:{ name_tag:"" }
            }
        },
        methods:{
            async createTag(){

                let url = 'http://127.0.0.1:8000/api/tag'

                await axios.post(url, this.tag).then(response=>{
                    if(response.data.code == 200) {
                        alert(response.data.message)
                        this.$router.push({name:"ListTag"})
                    }
                }).catch(error=>{
                    console.log(error)
                })
            }
        }
    }
</script>