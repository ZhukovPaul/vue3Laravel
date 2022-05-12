<template>
  
<div class="row mb-2">
    
    <div v-if="!data" class="col-md-12 " >
        <div class="text-center">
          <img src="/img/ZKZg.gif" style="width:50px" class="mt-5">
        </div>
    </div>
    <div v-else-if="count == 0">
     <div class="text-center">
        News haven't been added yet
      </div>
    </div>

    <div  v-else v-for="news in data" class="col-md-6">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-primary">{{news.themes.title}}</strong>
          <h3 class="mb-0">{{news.title}}</h3>
          <div class="mb-1 text-muted">{{news.created_at}}</div>
          <p class="card-text mb-auto">{{news.short}}</p>
           
           <router-link v-bind:to="'/news/'+news.id" class=" fw-bold">Continue reading...</router-link>
          
        </div>
        <div class="col-auto d-none d-lg-block">
          <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>

        </div>
      </div>
    </div>
  </div>
 

</template>

<script>
 
export default{
    name: "MainPageNewsComponent",
    data() {
        return {
            data : null,
            count : null
        }
    },
    beforeCreate() {
        axios.get("/api/news")
        .then(response => {
          this.data = response.data.data ;
          this.count = response.data.data.length;
          });
    } 
}
</script>