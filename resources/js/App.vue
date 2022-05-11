<template>
    <div class="container">
        <div class="nav-scroller py-1 mb-2">
            <nav class="nav d-flex justify-content-start">
                <router-link to="/" class="p-2 link-secondary">Home</router-link>
                <router-link to="/about" class="p-2 link-secondary">About</router-link>
                <router-link to="/dashboard" class="p-2 link-secondary">Dashboard</router-link>
            </nav> 
        </div>
    </div>
    
   <main class="container">
    <router-view/>
    </main>
    
</template>

<script>
export default {
    name: "App",
    
    created() {
     
    },
    methods: {
        
    },
}
</script>