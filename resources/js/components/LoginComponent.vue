<template>
    <div class="container">
        <div class="row">
            <div class="col-md-12 my-2">
                email:<br>
                    <input type="text" name="email" v-model="email">
            </div>
            <div class="col-md-12 my-2">
                password:<br>
                    <input type="text" name="password" v-model="password">
            </div>
            

            <div class="col-md-12 my-2">
                <button class="btn btn-success" @click="FormSubmit()">Submit</button>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Login component mounted.')
        },
        
        data() {
            return {
                email: '',  
                password: ''
            }
        },
        
        methods:{
            FormSubmit() {
                axios
                  .post('http://localhost:8000/api/auth/login', {
                        email: this.email,
                        password: this.password
                    })
                  .then(response =>  {
                        console.log(response.data)
                    }) 
            }
        }
    }
</script>
