<template>
  <div>
    <div class="row mb-2">  
    <div v-if="data"  v-for="news in data" class="col-md-6">
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
    <nav v-if="links" >
      <ul class="pagination">
        <li v-for="(item, index) in links.links" :key="index"  class="page-item"  :class="{active:item.active}" ><a class="page-link" @click="getItems(index)" v-html="item.label"></a></li>
      </ul>
    </nav>
  </div>
</template>
<script>
export default {
    news:"NewsList",
    data(){
      return {
        data : null,
        links: null
      }
    },
    beforeCreate() {
        axios.get("/api/news")
        .then(response => {
            this.data = response.data.data
            this.links = response.data.meta;
          });
    },
    methods:{
        getItems(page) {
          axios.get( this.links.links[page].url )
            .then(response => {
              this.data = response.data.data;
               this.links = response.data.meta;
            });
        }
    }
}
</script>
