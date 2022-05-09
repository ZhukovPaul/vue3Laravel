<template>
    <div class="container">
       <router-link to="/" class="nav-item nav-link">Home</router-link>
        <router-link to="/about" class="nav-item nav-link">About</router-link>
        <router-link to="/dashboard" class="nav-item nav-link">Dashboard</router-link>
    </div>
    <router-view/>
</template>

<script>
export default {
    name: "App",
    data() {
        
    },
    created() {
     
    },
    methods: {
        
    },
}
</script>