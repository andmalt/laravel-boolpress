<template>
    <Main :loading="loading" :postList="postList" />
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
        }
    },
    methods:{
        getPostList(){
            this.loading = true;
            Axios.get(`http://127.0.0.1:8000/api/post`)
            .then((res)=> {
                this.postList = [...res.data.posts];
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
        this.getPostList();
    }
}
</script>

<style>

</style>