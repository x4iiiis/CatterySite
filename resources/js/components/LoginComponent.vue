<template>
    <div class="container">
        <center>
            <div class="row">
                <div class="col-md-12 my-2">
                    Email:<br>
                        <input type="text" name="email" v-model="email">
            </div>
                <div class="col-md-12 my-2">
                    Password:<br>
                        <input type="password" name="password" v-model="password">
            </div>


                <div class="col-md-12 my-2">
                    <button class="btn btn-success" @click="FormSubmit()">Submit</button>
                </div>
            </div>
        </center>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('LoginComponent.vue mounted.')
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
                  .post('http://localhost:8000/api/auth/login', { email: this.email, password: this.password })
                  .then(response =>  {
                        axios
                            .post('http://localhost:8000/api/auth/me', { token: response.data.access_token })
                            .then(response => {
                                this.UpdateStore(response.data.id, response.data.name)
                                console.log('Welcome ' + response.data.name.split(" ")[0] + '!')
                            })                                
                    }) 
            },

            UpdateStore(userID, userName) {
                this.$store.commit('updateUser', { id: userID, name: userName })
            }
        }
    }
</script>
