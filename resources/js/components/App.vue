<template>
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">Login Component</div>

                    <div class="card-body">

                        Login Below
                        <Login-Component />
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">Booking Component</div>

                    <div class="card-body">

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
            console.log('App.vue mounted.')
        }
    }
</script>
