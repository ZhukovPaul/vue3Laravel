
<script setup>
  import MainPageBannerComponent from '../components/homePage/MainPageBannerComponent';
  import MainPageNewsComponent from '../components/homePage/MainPageNewsComponent';
</script>

<template>
  <main-page-banner-component></main-page-banner-component>
  <main-page-news-component></main-page-news-component>
   
</template>

<script>
 

export default {
    name: "Home"
   /* data() {
        return {
          data: null
        };
    },
    
    mounted() {
        axios.get('/api/banners')
            .then(response => (
                this.data = response.data.data
            ));
                
    }*/
}
</script>