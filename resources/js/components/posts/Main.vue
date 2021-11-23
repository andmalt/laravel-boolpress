<template>
  <main>
      <div class="container">
        <div class="row text-center">
            <div v-if="loading == false" class="col-12">
                <div class="row ">
                    <div class="col-12 d-flex justify-content-center">
                        <PostCard :list="list" v-for="list in postList" :key="list.id" />
                    </div>
                </div>
            </div>
            <div v-else class="col-12 loader">
                <div  class="spinner-border text-primary load" role="status">
                    <span class="sr-only ">Loading...</span>
                </div>
            </div>
        </div>
    </div>
  </main>
</template>

<script>
import PostCard from "./PostCard.vue";

export default {
    name:'Main',
    data(){
        return{
            posts:this.postList,
        }
    },
    props:{
        loading:Boolean,
        postList:Array,
    },
    components:{
    PostCard,
}
}
</script>

<style scoped lang="scss">
.loader{
    position: fixed;
    right: 0;
    left: 0;
    bottom: 0;
    top: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: rgba($color: #000000, $alpha: 0.7);
    z-index: 5;
    .load{
        padding: 5rem;
    }
}
.container{
    position: relative;
}
</style>