<template>
  <main>
      <div class="container">
        <div class="row">
            <div v-if="loading == false" class="col-12 col-md-10 col-lg-8 ">
                <div class="row">
                    <div v-for="list in postList" :key="list.id" class="col-12 col-md-6 col-lg-3 d-flex justify-content-center">
                        prova
                    </div>
                </div>
            </div>
            <div v-else class="col-12 loader">
                <div  class="spinner-border text-secondary loader-m" role="status">
                    <span class="sr-only">Loading...</span>
                </div>
            </div>
        </div>
    </div>
  </main>
</template>

<script>
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
    background-color: rgba($color: #000000, $alpha: 0.7);
    z-index: 5;
    .loader-m{
        position: absolute;
        right: 0;
        left: 0;
        bottom: 0;
        top: 0;
        width: 30%;
        z-index: 6;
    }
}
.container{
    position: relative;
}
</style>