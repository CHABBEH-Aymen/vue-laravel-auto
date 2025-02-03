<script setup>
import UserCard from "../Components/UserCard.vue";
import axios from 'axios';
import {
    ref,
    onMounted
} from 'vue';

const users = ref([]);
const getData = async () => {
    await axios.get("/all/users")
        .then((result) => {
            console.log(result);
            users.value = result.data;
        })
        .catch((error) => {
            console.error(error);
        });
}
onMounted(() => {
    axios.get("/all/users")
        .then((result) => {
            users.value = result.data.data;
        })
        .catch((error) => {
            console.error(error);
        });
});
</script>
<template lang="">
<h1>Users</h1>
<div class="d-flex flex-wrap p-3" style="width: 100%;gap:15px;">
    <UserCard v-for="user in users" :key="user.id">
        {{ user.name }}
    </UserCard>
</div>
</template>

<style lang="">
    
</style>
