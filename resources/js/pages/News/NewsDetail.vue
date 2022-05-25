<template>
<div v-if="data">
<h1>{{data.title}}</h1>
 
<div>{{data.created_at}}</div>
<div>{{data.description}}</div>
</div>
</template>
<script>
export default{
    name:"NewsDetail",
    data(){
      return {
        data : null
      }
    },
    beforeCreate() {
      axios.get('/api/news/'+this.$route.params.slug)
        .then(response => (this.data = response.data));
      this.$store.commit('increment');
    } ,
    computed :  {
      count(){
        return this.$store.state.count;
      }
    },
    created(){
      console.log( this.count );
      console.log( this.$store.state.user );

    }
}
</script>