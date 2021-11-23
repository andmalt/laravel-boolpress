<template>
    <Main />
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

        }
    },
    methods:{
        getPostList(){
            Axios.get('/user?ID=12345')
            .then(function (res) {
                // handle success
                console.log(res);
            })
            .catch(function (error) {
                // handle error
                console.log(error);
            })
            .then(function () {
                // always executed
            });

        }
    }
}
</script>

<style>

</style>