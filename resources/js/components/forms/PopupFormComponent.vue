<template>
<div v-bind:class="class">

 
 
<button type="button" class="btn btn-default" @click="checkSend" data-bs-toggle="modal" data-bs-target="#feedback">
  Связаться со мной
</button>

<!-- Modal -->
<div class="modal fade" id="feedback" tabindex="-1" aria-labelledby="feedbackLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="feedbackLabel">Свзаться со мной</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div v-if="!success" class="modal-body">
         
           <p v-if="errors.length">
              <b>Пожалуйста исправьте указанные ошибки:</b>
              <ul>
                <li v-for="error in errors">{{ error }}</li>
              </ul>
            </p>
        <form @submit="checkForm"> 
              <div class="mb-3">
                <label for="inputEmail" class="form-label">Почта</label>
                <input type="email" v-model="email" class="form-control" id="inputEmail" aria-describedby="emailHelp">
              </div>
              <div class="mb-3">
                <label for="inputPhone" class="form-label">Номер телефона</label>
                <input type="text" placeholder="+7(___) ___-__-__" v-mask="'+7(###) ####-##-##'" v-model="phone" class="form-control" id="inputPhone">
              </div>
              <div class="mb-3">
                <label for="inputDescription" class="form-label">Комментарий</label>
                <textarea class="form-control" v-model="describe" id="inputDescription"></textarea>
              </div>

              <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" v-model="consent" id="policy">
                <label class="form-check-label" for="exampleCheck1">Политика конфиденциальности</label>
              </div>
              <button type="submit"  class="btn btn-primary">Отправить</button>
             </form>
      </div>
      <div v-else class="modal-body">
        
        <div class="alert alert-secondary" role="alert">
           Спасибо! Ваше сообщение было отправлено
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
 export default {
    name : "PopupFormComponent",
    props : ["class"],
     data() {
        return {
          email : null,
          phone: null,
          describe :null,
          consent : true,
          success : false,
          errors : []
        };
    },
    methods:{
      checkSend : function(){
        console.log("d");
        this.succes =  false
      },
      checkForm : function(e){
          e.preventDefault();

          if (this.email && this.phone && this.describe) {  
            this.send();
          }
          this.errors = [];
          if(!this.email){
            this.errors.push("Требуется указать Email");
          }
           if(!this.phone){
            this.errors.push("Требуется указать Телефон");
          }  
          if(!this.describe){
            this.errors.push("Требуется указать Комментарий");
          }
           e.preventDefault();

      },
      send : function(){
 
        axios.post('/api/forms',{
            email: this.email,
                phone: this.phone,
                describe: this.describe,
                consent: this.consent
          }).then(response => {
              if(response.data) 
                this.success = true;
              
              setTimeout(()=>{
                  this.email = null;
                  this.phone = null;
                  this.describe = null;
                  this.success = false;
                  },5000)
            });
            
        }
      }
    }
 
</script> 