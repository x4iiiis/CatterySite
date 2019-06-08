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
                specialInstructions:<br>
                <input type="text" name="specialinstructions" v-model="specialInstructions">
            </div>
            
            
            <div class="col-md-12 my-2">
                <button class="btn btn-success" @click="ValidateInput()">Submit</button>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('CreateBooking.vue mounted.')
        },

        data() {
            return {
                inDateTime: '2019/02/06 19:30:13',  
                outDateTime: '2019/02/08 19:30:13',
                petName: '',
                petSpecies: '',
                specialInstructions: ''
            }
        },
        
        methods:{
            FormSubmit() {
                axios
                  .post('http://localhost:8000/api/booking', {
                        inDateTime: this.inDateTime,
                        outDateTime: this.outDateTime,
                        petName: this.petName,
                        petSpecies: this.petSpecies,
                        specialInstructions: this.specialInstructions,
                        userID: this.$store.state.userStore.user.id
                    })
                  .then(response =>  {
                        console.log(response.data)
                    }) 
            },

            ValidateInput() {
                // User ID showing as 0 means the user has not logged in 
                if (this.$store.state.userStore.user.id == 0) {
                    console.log("Nah mate, user ID is 0. You need to log your ass in bruh")
                    return false
                }
                // Invalid Dates - needs more validation 
                if (this.inDateTime == '' || this.outDateTime == '') {
                    console.log("Date fields cannot be empty!")
                    return false
                }
                // Invalid Names or Species 
                if (this.petName == '' || this.petSpecies == '') {
                    console.log("Blank name and/or species fields")
                    return false
                }
                //Allow blank Special Instructions field - fills the database field with a forward slash
                if (this.specialInstructions == '') {
                    this.specialInstructions = '/'
                }


                //If all above validation checks have passed, submit the data
                this.FormSubmit()
            }
        }
    }
</script>
