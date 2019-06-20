<template>
    <div class="container">


        <div class="row md-12">

            <div class="col-md-5 my-2" v-if="this.$store.state.userStore.user.id === 0">
                <component is="Login-Component"></component>        
            </div>


            <div class="col-md-7 my-2" v-if="this.$store.state.userStore.user.id === 0">
                <Registration-Component />
            </div>
        </div>

        <div class="row md-12">
            
            <div class="col-md-12 my-2">
                <Create-Booking />
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
