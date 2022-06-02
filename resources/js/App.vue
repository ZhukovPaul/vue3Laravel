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
                <router-link to="/" class="nav-link ">Главная</router-link>
            </li>
            <li class="nav-item">
                <router-link to="/about" class="nav-link">Обо мне</router-link>
            </li>
            <li class="nav-item">
              <router-link to="/news" class="nav-link" >Новости</router-link>
            </li>
            <li class="nav-item">
                <router-link to="/dashboard" class="nav-link" >Статьи</router-link>
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