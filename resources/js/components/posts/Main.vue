<template>
  <main>
      <div class="container">
        <div class="row text-center">
            <div v-if="loading == false" class="col-12">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10 col-lg-8">
                        <PostCard :list="list" v-for="list in postList.data" :key="list.id" />
                    </div>
                </div>
        
                <div class="col-12 d-flex justify-content-center py-4">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            <li v-if="postList.current_page > 1 " @click="$emit('getPostList', postList.current_page - 1 )" class="page-item"><a class="page-link" href="#" >Previous</a></li>
                            <li v-for="n in postList.last_page" @click="$emit('getPostList', n )" :class="n == postList.current_page  ? 'active' : '' " :key="n" class="page-item"><a class="page-link" href="#">{{ n }}</a></li>
                            <li v-if="postList.current_page < postList.last_page" @click="$emit('getPostList', postList.current_page + 1 )" class="page-item"><a class="page-link" href="#">Next</a></li>
                        </ul>
                    </nav>
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
            
        }
    },
    props:[
        'loading',
        'postList',
    ],
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
.page-item{
    .active{
        background-color: #e9ecef;
    }
}
</style>