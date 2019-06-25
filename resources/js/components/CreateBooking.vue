<template>
    <div class="container">

        <div class="card">
            <div class="card-header">Booking Component</div>

                <div class="card-body">

                    <center>
                        <h5>Book your pet's holiday below!</h5>
                    
                        <div class="row">

                            <div class="col-md my-2">
                                Pet Name:<br>
                                    <input type="text" name="petname" v-model="petName">
                            </div>
                            <div class="col-md my-2">
                                Species:<br>
                                    <input type="text" name="petspecies" v-model="petSpecies">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg my-2">
                                Special Instructions:<br>
                                    <textarea name="specialinstructions" v-model="specialInstructions" style="width:100%" placeholder="Example: 'Allergic to beef' (optional)"></textarea>
                                </div>
                        </div>

                        <div class="row">

                            <div class="col-md my-2">
                                Dropoff Date & Time:<br>
                                    <input type="date" name="indate" v-model="inDate">
                                    <input type="time" name="intime" v-model="inTime">
                            </div>
                            <div class="col-md my-2">
                                Pickup Date & Time:<br>
                                    <input type="date" name="outdate" v-model="outDate">
                                    <input type="time" name="outtime" v-model="outTime">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg my-4">
                                <button class="btn btn-success" @click="ValidateInput()">Submit</button>
                            </div>
                        </div>
                    </center>
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
                inDate: '',
                inTime: '',
                outDate: '',
                outTime: '',
                petName: '',
                petSpecies: '',
                specialInstructions: ''
            }
        },
        
        methods:{
            FormSubmit() {
                axios
                  .post('http://localhost:8000/api/booking', {
                        inDateTime: this.inDate + ' ' +  this.inTime,
                        outDateTime: this.outDate + ' ' + this.outTime,
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
