<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Root Application</div>

                    <div class="card-body">
                       I really need to wash ma baws

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
            console.log('Application mounted.')
        }
    }
</script>
