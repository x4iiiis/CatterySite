<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Register Component</div>

                    <div class="card-body">
                        <center>
                            <form @submit.prevent='registerUser'>

                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>

                                    <div class="col-md-6">
                                        <input id="name" type="text" class="form-control" v-model="newUser.name" required="" autofocus="">

                                </div>
                                </div>

                                <div class="form-group row">
                                    <label for="email" class="col-md-4 col-form-label text-md-right">Email Address</label>

                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control" v-model="newUser.email">

                                </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>

                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control" v-model="newUser.password">

                                </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Confirm Password</label>

                                    <div class="col-md-6">
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" v-model="newUser.passwordconfirm" required="">
                                </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">Register</button>
                                    </div>
                                </div>
                            </form>
                        </center>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>


<script>
    export default {
        mounted() {
            console.log('RegistrationComponent.vue mounted.')
        },
        data() {
            return {
                newUser: {
                    name:"",
                    email:"",
                    password:"",
                    passwordconfirm:""
                }
            }
        },
        methods: {
            registerUser() {
                axios.post('/register', this.newUser )
                    .then(res => {
                        console.log(res);
                    })
                    .catch(err => {
                        console.log(err.response);
                    })
            }   
        }
    }
</script>
