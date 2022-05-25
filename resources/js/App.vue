<script setup>
  import PopupFormComponent from './components/forms/PopupFormComponent';
</script>

<template>
    <div>
         
<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <!--button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <a-- class="navbar-brand" href="#">Navbar</a-->
        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <router-link to="/" class="nav-link ">Home</router-link>
            </li>
            <li class="nav-item">
                <router-link to="/about" class="nav-link">About</router-link>
            </li>
            <li class="nav-item">
              <router-link to="/news" class="nav-link" >News</router-link>
            </li>
            <li class="nav-item">
                <router-link to="/dashboard" class="nav-link" >Dashboard</router-link>
            </li>
          </ul>
           <popup-form-component class="d-flex" ></popup-form-component> 
        </div>
      </div>
    </nav>

         
             
        </div>

    <main class="container">
        <router-view/>
    </main>
    
    <div class="container">

         footer 
 
    </div>
    </div>
</template>

<script>
export default {
    name: "App",
     /*
    created() {
     
    },
    methods: {
        
    },*/
}
</script>