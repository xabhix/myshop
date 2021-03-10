function addcart(data){
    var itemarray 
    var localStorageContent=localStorage.getItem('items');
    
    
    if(localStorageContent===null){
       itemarray=[];
       itemarray.push(data);
       localStorage.setItem('items',JSON.stringify(itemarray));
       //console.log(itemarray);
    }else{
      itemarray=JSON.parse(localStorage.getItem('items'));
      itemarray.push(data);
      localStorage.setItem('items',JSON.stringify(itemarray));
   
     }
  
   //document.getElementById('addcart').textContent=itemarray.length;
   return itemarray;
  }
  