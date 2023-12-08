

<script setup>
import Paginator from '@/Components/Paginator.vue';
import AppLayout from '@/Layouts/AppLayout.vue';

defineProps(['posts'])
</script>

<template>
    <AppLayout title="Post">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Posts
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div v-for="post in posts.data" :key="post.id" class="bg-white overflow-hidden shadow-xl sm:rounded-lg mb-2 text-center">
                   
                        {{ post.title }}
                   
                </div>
                <Paginator :meta = "posts.meta"/>
            </div>
        </div>
    </AppLayout>
</template>
