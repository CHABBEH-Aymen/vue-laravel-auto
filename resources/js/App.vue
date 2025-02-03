<script setup>
import NavBar from './Components/NavBar.vue';
</script>
<template>
    <NavBar/>
        <router-view v-slot="{ Component, route }">
            <div :key="route.name">
                <Component :is="Component" />
            </div>
        </router-view>
</template>
<style>
    body{
        margin: 0;
        padding: 0;
    }
    #app{
        display: flex;
        width: 100vw;
        height: 100vh;
    }
</style>