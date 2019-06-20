<template>
    <div class="container">

<!--
        <div class="row">
            <div class="col-md-4">

                <component is="Login-Component"></component>
                        
            </div>

            
            <div class="col-md-6">
                <Create-Booking />
            </div>
        </div>
-->
        <div class="row">
            <Registration-Component />
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
