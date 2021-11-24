<template>
    <div class="card my-4">
        <img :src="list.image_url" class="card-img-top" :alt="list.title + 'image'">
        <div class="card-body">
        <h4 class="card-title">{{ list.title }}</h4>
        <p class="card-text">Scritto da {{ list.user.name }}</p>
        <p class="card-text">{{ list.post_content }}</p>
        <p class="card-text"><small class="text-muted">{{ list.post_date }}</small></p>
        </div>
    </div>
</template>

<script>
export default {
    name:'PostCard',
    props:[
        'list',
    ]
}
</script>

<style>

</style>