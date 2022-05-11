<template>
News Detail {{ $route.params.slug }}

</template>
<script>
export default{
    name:"NewsDetail",
      created() {
        this.$watch(() => this.$route.params,(toParams, previousParams) => {
          console.log(toParams, previousParams);
        }
    )
  },
}
</script>