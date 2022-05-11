<template>
    <div>
        <div v-if="!data" class="text-center">
        <img src="/img/ZKZg.gif" style="width:50px" class="mt-5">
      </div>
      <div v-else class="p-4 p-md-5 mb-4 text-white rounded bg-dark">
        <div v-for="currency in data" class="col-md-6 px-0">
          <h1 class="display-4 fst-italic">{{currency.title}}</h1>
          <p class="lead my-3">{{currency.description}}</p>
           <p class="lead mb-0">
             <router-link v-bind:to="currency.link" class="text-white fw-bold">Continue reading...</router-link>
            </p>
        </div>
      </div>   
    </div>
</template>

<script>
export default {
    name: "MainPageBannerComponent",
    data() {
        return {
          data: null
        };
    },
    beforeCreate() {
       axios.get('/api/banners')
            .then(response => (
                this.data = response.data.data
            ));
    },
    
}
</script>