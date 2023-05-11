<script setup>
import { Link } from '@inertiajs/vue3';
// Controllerからの値
defineProps({ 
    blogs: Array 
})
</script>
<template>
    <ul>
        <li v-for="blog in blogs" :key="blog.id">
            件名：<Link class="text-blue-400"
            :href="route('inertia.show', { id: blog.id })">{{blog.title}}</Link>、            
            本文：{{ blog.content }}                    
        </li>
    </ul>
    <div v-if="$page.props.flash.message" class="bg-blue-300">
        {{ $page.props.flash.message }}
    </div>
    ああああ
</template>
