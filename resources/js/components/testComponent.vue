<template>
    <div>
        <div class="row">
            <div class="col-md-6">
                <input type="name" class="form-control mt-2" name="" v-model="name" id="first" value=''>
            </div>
            <div class="col-md-6">
                <input type="text" class="form-control mt-2" name="" v-model="text" id="second" value="">
            </div>
            <button class=".btn .btn-success mt-2 offset-5" @click="test">Add</button>
        </div>
       
    </div>    
</template>
<script>
export default {
    data: function() {
            return{
                name:'',
                text:'',

            }
        },
    methods: {
        test(){
            let a=this.name
           this.text=a;
           this.name='';
        }
    },    
}
</script>