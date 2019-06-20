<template>
    <div class="container">


        <div class="row">
            <div class="col-md-4">

                <component is="Login-Component" v-if="this.$store.state.userStore.user.id === 0"></component>
                        
            </div>

            
            <div class="col-md-6">
                <Create-Booking />
            </div>
        </div>

        <br></br>

        <div class="row">
            <div class="col-md-12">
                <Registration-Component />
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('App.vue mounted.')
            console.log(this.$store.state.userStore.user.id)
        }
    }
</script>
