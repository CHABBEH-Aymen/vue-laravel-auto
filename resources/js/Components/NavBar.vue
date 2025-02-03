<script setup>
</script>
<template lang="">
<div class="sidebar">
    <div class="sidebar-header">
        Dashboard
    </div>
    <nav class="sidebar-nav">
        <a href="#" class="nav-link">Home</a>
        <a href="#" class="nav-link">Analytics</a>
        <a href="#" class="nav-link">Settings</a>
        <a href="#" class="nav-link">Profile</a>
    </nav>
</div>
</template>

<style>
.sidebar {
    width: 25%;
    height: 100%;
    background-color: #1f2937;
    color: white;
    padding: 20px;
}

.sidebar-header {
    font-size: 1.5rem;
    font-weight: 600;
    text-align: center;
    margin-bottom: 20px;
}

.sidebar-nav {
    display: flex;
    flex-direction: column;
}

.nav-link {
    padding: 10px 15px;
    color: white;
    text-decoration: none;
    border-radius: 5px;
    transition: background-color 0.2s;
}

.nav-link:hover {
    background-color: #374151;
}
</style>
