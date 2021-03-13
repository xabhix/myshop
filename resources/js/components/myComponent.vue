<template>
    <div>
        <h1>My new component </h1>
        <div class="row">
            <div class="col-md-6">
                <input type="name" class="form-control mt-2" name="" v-model="name" id="">
                <input type="email" class="form-control mt-2" name="" v-model="email" id="">
                <input type="address" class="form-control mt-2" name="" v-model="address" id="">

                <button class="btn btn-success" @click="addUser">Add</button>
            </div>
            <div class="col-md-6">
                <!-- {{email}} -->
                <table class="table">
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Address</th>
                    </tr>
                    <tr v-for="user in users" :key="user.name">
                        <td>{{user.name}}</td>
                        <td>{{user.email}}</td>
                        <td>{{user.address}}</td>
                    </tr>
                </table>
            </div>
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
                users: [],

            }
        },
        methods: {
            incrementor() {
                this.initialValue ++;
            },
            addUser() {
                let user = { 'email': this.email, 'name': this.name, 'address': this.address };
                this.users.push(user);
                this.email = '';
                this.name = '';
                this.address = '';
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