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
                inDateTime: '2019/02/06 19:30:13',  
                outDateTime: '2019/02/08 19:30:13',
                petName: '',
                petSpecies: '',
                specialInstructions: ''
            }
        },

        props: {
            id: {
                type: [ Number ],
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
                        userID: this.id
                    })
                  .then(response =>  {
                        console.log(response.data)
                    }) 
            }
        }
    }
</script>
