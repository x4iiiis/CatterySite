<template>
    <div class="container">
        <div class="row">
            <div class="col-md-12 my-2">
                inDateTime:<br>
                <input type="text" name="indatetime" v-model="inDateTime">
            </div>
            <div class="col-md-12 my-2">
                outDateTime:<br>
                <input type="text" name="outdatetime" v-model="outDateTime">
            </div>
            <div class="col-md-12 my-2">
                petName:<br>
                <input type="text" name="petname" v-model="petName">
            </div>
            <div class="col-md-12 my-2">
                petSpecies:<br>
                <input type="text" name="petspecies" v-model="petSpecies">
            </div>
            <div class="col-md-12 my-2">
                specialInsructions:<br>
                <input type="text" name="specialinstructions" v-model="specialInstructions">
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
            console.log('Application mounted.')
        },

        data() {
            return {
                inDateTime: '',
                outDateTime: '',
                petName: '',
                petSpecies: '',
                userID: ''
            }
        },
        
        methods:{
            FormSubmit() {
                axios
                  .post('http://localhost:8000/api/booking', {inDateTime: this.inDateTime, outDateTime: this.outDateTime, petName: this.PetName, petSpecies: this.petSpecies, specialInsructions: this.specialInstructions, userID: this.userID})
                  .then(response =>  {
                        console.log(response.data)
                    }) 
            }
        }
    }
</script>
