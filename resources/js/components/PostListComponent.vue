<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-3" v-for="post in posts" :key="post.id">
                <div class="card">
                    <div class="card-header">Example Component</div>
  
                    <div class="card-body">
                        <h2> {{post.title}} </h2>
                        <h3> {{post.author}} </h3>
                        <p> {{post.content}} </p>
                        <img :src="post.cover" alt="">
                    


                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
      
        mounted() {
            this.getPosts;
        },
        data(){
            return {
                posts:[]
            }
        },
        methods:{
         getPosts(){
             axios.get('/api/posts').then((response)=>{
                 this.posts=reponse.data
             })
         }
        }
    }
</script>
