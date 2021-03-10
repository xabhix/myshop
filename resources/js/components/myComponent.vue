<template>
    <div>
        <h1>My new component </h1>
        <div class="row">
            <div class="col-md-6">
                <input type="name" class="form-control mt-2" name="" v-model="name" id="">
                <input type="email" class="form-control mt-2" name="" v-model="email" id="">
                <input type="address" class="form-control mt-2" name="" v-model="address" id="">
                </div>
            <div class="col-md-6">
                <!-- {{email}} -->
                <table class="table">
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Address</th>
                    </tr>
                    <tr>

                    </tr>
                </table>
            </div>
        </div>
        <div class="row">
            <button class="btn btn-success">Add</button>
        </div>
        <div class="row mt-2">
            <div class="col-md-6">
                <button class="btn btn-success" @click="incrementor">Incrementor</button>
            </div>
            <div class="col-md-6">
                {{isOdd}} : {{initialValue}}
            </div>
        </div>
    </div>
</template>
<script>
    export default {
        data: function() {
            return{
                email:'',
                initialValue : 0,
                name:'',
                address:'',
            }
        },
        methods: {
            incrementor() {
                this.initialValue ++;
            }
        },
        computed:{
            isOdd() {
                if(this.initialValue%2 == 0){
                    return 'Even';
                }else{
                    return 'Odd';
                }
            }
        }
    }
 
</script>