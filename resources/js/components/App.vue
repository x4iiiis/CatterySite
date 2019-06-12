<template>
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">Login Component</div>

                    <div class="card-body">

                        <center><h5>Login below!</h5></center>
                        <Login-Component />
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Booking Component</div>

                    <div class="card-body">

                        <center><h5>Book your pet's holiday below!</h5></center>
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
            console.log('App.vue mounted.')
        }
    }
</script>
