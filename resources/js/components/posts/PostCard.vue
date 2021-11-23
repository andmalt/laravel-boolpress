<template>
    <div class="card">
        <img src="" class="card-img-top" alt="">
        <div class="card-body">
        <h4 class="card-title">{{ list.title }}</h4>
        <p class="card-text">Scritto da {{ list.user_id }}</p>
        <p class="card-text">{{ list.post_content }}</p>
        <p class="card-text"><small class="text-muted">{{ list.post_date }}</small></p>
        </div>
    </div>
</template>

<script>
export default {
    name:'PostCard',
    props:{
        list:Object,
    }
}
</script>

<style>

</style>