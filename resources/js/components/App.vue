<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Root Application</div>

                    <div class="card-body">

                        Login Below
                       <Login-Component />

                        <br></br>
                        
                        Make an appointment below
                       <Create-Booking />
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('App.vue mounted.'),
            console.log('this.$store.state.userStore.user.id = ' + this.$store.state.userStore.user.id)
        }
    }
</script>
