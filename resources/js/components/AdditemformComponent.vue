<template>
    <div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card mx-4">
                        <div class="card-body p-4">
                            
                                <h1>Add Items</h1>
                                <p v-text="message"></p>
                                <div class="input-group mb-3">
                                    <input type="item" class="form-control" name="" v-model="item" placeholder="Name" >
                                </div>
                                <div class="input-group mb-3">
                                    <input type="price" class="form-control" name="" v-model="price" placeholder="Price">
                                </div>
                                <div class="input-group mb-3">
                                    <!-- <select class="form-control" v-model="category_id">
                                        <option v-for="category in categories" :key="category.id">{{category.name}}</option>
                                    </select> -->
                                   
                                    <!-- <input type='file' class="custom-file-input" name=""> -->
                                    <input type="file" class="custom-file-input" id="customFile" v-on: change=" handleFileObject()">
                                    <label class="custom-file-label" for="customFile">Choose Image</label>
                                </div>
                            <button class="btn btn-primary offset-5" @click="itemadd">Add</button>    
                            
                        </div>
                        
                    </div>
                    
                </div>
                <div class="col-md-6">
                       <table class="table">
                        <tr> 
                            <th scope="col">Item</th>
                            <th scope="col">Price</th>
                            <!-- <th>Category</th> -->
                        </tr>
                        <tr v-for="(data,index) in olddata" :key="data.item">
                            
                            <td v-on:dblclick="EditedItem(data.item,index)" class="item" style="cursor:pointer"><span v-if="!isStartitemEditing">{{data.item}}</span>
                            <input type='item' class="itemname form-control" v-model="itemToupdate" v-if="isStartitemEditing && selectedItem==index" v-on:keyup.enter="updateItemfield(data.id ,index)" >
                            <span v-else><span v-if="isStartitemEditing">{{data.item}}</span></span>
                            </td>

                            <td v-on:dblclick="EditedPrice(data.price,index) in olddata" class="price" style="cursor: pointer"><span v-if="!isStartEditing">{{data.price}}</span>
                            <input type="price" v-if="isStartEditing && selectedItemprice==index" v-model="priceToUpdate" v-on:keyup.enter="updatePricefield(data.id ,index)" class="pricevalue form-control">
                            <span v-else><span v-if="isStartEditing">{{data.price}}</span></span>
                            </td>
                            <td><img :src="'/image/'+data.image" style="width:100px;heigth:100px" ref="file"></td>
                            <td><button class="btn btn-primary" @click="itemdelete(data.id,index) in olddata">Delete</button></td>
                            <td><button class="btn btn-primary" @click="edititem(data,index) in olddata">Edit</button></td>
                            
                        </tr>
                    </table>
                </div>
            </div>
            <!-- <div class="row">
                <div class="col-md-6" style="top:-79.25rem">
                    <div class="card mx-4">
                        <div class="card-body p-4">
                            <h1>update Item</h1>
                            <p v-text="message"></p>
                                <div class="input-group mb-3" id="demo1">
                                    <input type="item" class="form-control" name="" v-model="ItemforUpdate" placeholder="Name" >
                                </div>
                                <div class="input-group mb-3" id="demo2">
                                    <input type="price" class="form-control" name="" v-model="ItemPrice" placeholder="Price">
                                </div>
                                
                                <button class="btn btn-primary offset-5" >Update</button>
                                 
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
</template>
<script>
export default {
    data: function() {
        return {
            inputTag:[],
            item:'',
            price:'',
            category:'',
            message:'',
            id:'',
            Index:'',
            datafetch:[],
            additems:[],
            olddata:[],
            allCategories:'',
            ItemforUpdate:'',
            ItemPrice:'',
            UpdatedItem:'',
            PriceforItem:'',
            htmltag:'',
            value:'',
            priceToUpdate:'',
            isStartEditing: false,
            isStartitemEditing: false,
            selectedItem : '',
            itemToupdate:'',
            selectedItemprice : '',
            avatar: null,
            avatarName: null,
        }
    },
    computed: {
        
    },
    
    methods: {


        dataforvue(){
            axios.get('/fetch-item-vue')
            .then(response =>{
                console.log(response.data);
                this.olddata=response.data;
                
                
            })
           
            //return this.olddata
            console.log(this.olddata);
        },
        itemadd(){
            let item= { 'item': this.item, 'price': this.price };
            
            //this.datafetch=this.olddata; 
            
              
            

            if(this.item!=''&&this.price!=''){
                
                axios.post('/add-item-vue', item)
                .then(response => {
                this.olddata.unshift(response.data);
                (console.log(response))
                })
                 this.message='';
                 this.item='',
                 this.price='';
                 
            }else{
                this.message="Fields are empty."
                
            }
            

        },
        itemdelete(id,index){

            axios.delete('/delete-item-vue/'+id)
            .then(response =>{
               console.log(response.data)
            this.olddata.splice(index,1)  
            })
            
        },
        EditedItem(item,index){
            console.log(item,index);
            this.selectedItem = index;
            this.isStartitemEditing = true;
            this.itemToupdate = item;
            //this.PriceforItem=price;
            console.log(this.selectedItem)
         
            
          
        },
        
        EditedPrice(price,index){
            this.selectedItemprice = index;
            this.isStartEditing = true;
            this.priceToUpdate = price;
            //this.PriceforItem=price;
            console.log(this.selectedItem)
            
            
            
            
        },
        updatePricefield(id ,index){
                console.log(this.priceToUpdate, id, index);
                let editedPrice ={'price': this.priceToUpdate}
                axios.put('/update-item-vue/'+id,editedPrice)
                .then(response =>{
                    console.log(response.data)
                    this.olddata[index].price=this.priceToUpdate;
                    this.isStartEditing = false; 
                })
                
                // document.querySelectorAll('.price')[index].innerHTML=1;
        },
        updateItemfield(id,index){
            let editedItem ={'item': this.itemToupdate}
                axios.put('/update-item-vue/'+id,editedItem)
                .then(response =>{
                    console.log(response.data)
                    this.olddata[index].item=this.itemToupdate;
                    this.isStartitemEditing = false; 
                })
        },
        
    },
    // handleFileObject() {
    //     this.avatar = this.$refs.file.files[0]
    //     this.avatarName = this.avatar.name
    // },
    
    mounted() {
        this.dataforvue();
    },
}

  

</script>