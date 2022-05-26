<template>
<div v-bind:class="class">

 
 
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Send message
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div v-if="!success" class="modal-body">
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" v-model="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Phone</label>
                <input type="text" v-model="phone" class="form-control" id="exampleInputPassword1">
              </div>
              <div class="mb-3">
                <label for="inputDescription" class="form-label">More information</label>
                <textarea class="form-control" v-model="describe" id="inputDescription"></textarea>
              </div>

              <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" v-model="consent" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Consent to the data private policy</label>
              </div>
              <button type="button" @click="send" class="btn btn-primary">Submit</button>
             
      </div>
      <div v-else class="modal-body">
        
        <div class="alert alert-secondary" role="alert">
           Message was send
        </div>
      </div>
      <div class="modal-footer">
        
        
      </div>
    </div>
  </div>
</div>
 
</div>
</template>

<script>
import Axios from 'axios';

export default {
    name : "PopupFormComponent",
    props : ["class"],
     data() {
        return {
          email : null,
          phone: null,
          describe :null,
          consent : true,
          success : false
        };
    },
    methods:{
      send : function(){
        /*
        console.log(this.email);
        console.log(this.phone);
        console.log(this.describe);
        console.log(this.consent);
        */
        axios.post('/api/forms',
          {
                email: this.email,
                phone: this.phone,
                describe: this.describe,
                consent: this.consent
          })
            .then(response => {
              //console.log( response.data );
              if(response.data)
              this.success = true;
            }//this.data = response.data.data
            ).catch(error => {
              this.errorMessage = error.message;
              console.error("There was an error!", error);
            });
            ;
      }
    }
}
</script> 