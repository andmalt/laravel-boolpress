<template>
    <Main :loading="loading" :postList="postList" @getPostList="getPostList" />
</template>

<script>

import Main from "./posts/Main.vue"
import Axios from "axios";

export default {
    name:'App',
    components:{
        Main,
    },
    data(){
        return{
            loading:false,
            postList:[],
            baseUrl: 'http://127.0.0.1:8000',
        }
    },
    methods:{
        getPostList(page){
            this.loading = true;
            Axios.get(`${this.baseUrl}/api/post/?page=${page}`)
            .then((res)=> {
                /* console.log(res.data.posts); */
                this.postList = res.data.posts;
                console.log(this.postList);
            })
            .catch((error)=> {
                // handle error
                console.error(error);
            }) 
             .then(()=>{
                this.loading = false;
            })
        },
    },
    mounted(){
        this.getPostList(1);
    }
}
</script>

<style>

</style>