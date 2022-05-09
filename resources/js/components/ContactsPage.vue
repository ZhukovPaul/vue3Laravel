<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Example Component</div>
    {{name}} {{sername}}
                  
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props:['name','sername'],
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
