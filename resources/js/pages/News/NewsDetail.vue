<template>
<h1>{{data.title}}</h1>
 
<div>{{data.created_at}}</div>
<div>{{data.description}}</div>
</template>
<script>
export default{
    name:"NewsDetail",
    data(){
      return {
        data : null
      };
    },
    beforeCreate() {
      axios.get('/api/news/'+this.$route.params.slug)
        .then(response => (this.data = response.data));
    } 
}
</script>