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
      user(){
        return this.$store.state.user;
      }
    },
    created(){
      console.log( this.user );
      console.log( this.$store.state );
      console.log( this.$route.params );
    }
}
</script>