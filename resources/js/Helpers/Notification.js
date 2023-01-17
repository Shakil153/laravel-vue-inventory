
class Notification{
    success(){
        new Noty({
            type:'success',
            layout: "topRight",
            text: 'Successfully Done',
            timeout: 1000
            
        }).show();
        
    }

    alert(){
        new Noty({
      type: 'alert',
      layout: 'topRight',
      text: 'Are you Sure?',
      timeout: 1000,
         }).show();
    } 
  
  
  
    error(){
        new Noty({
      type: 'alert',
      layout: 'topRight',
      text: 'Something Went Wrong ! ',
      timeout: 1000,
         }).show();
    } 
  
  
   warning(){
        new Noty({
      type: 'warning',
      layout: 'topRight',
      text: 'Opps Wrong ',
      timeout: 1000,
         }).show();
    }

    image_validation(){
        new Noty({
      type: 'warning',
      layout: 'topRight',
      text: 'Cannot Upload more than 1 MB ',
      timeout: 1000,
         }).show();
    }

    addtocart_success(){
        new Noty({
            type:'success',
            layout: "topRight",
            text: 'Successfully Add to cart',
            timeout: 1000
            
        }).show();
    }
    deletecart_success(){
        new Noty({
          type: 'warning',
          layout: 'topRight',
          text: 'Cart Product Deleted',
          timeout: 1000,
             }).show();
    }
    incrementcart_success(){
        new Noty({
            type:'success',
            layout: "topRight",
            text: 'Cart Quantity Increase',
            timeout: 1000
            
        }).show();
    }

    decrementcart_success(){
        new Noty({
            type:'success',
            layout: "topRight",
            text: 'Cart Quantity Decrease',
            timeout: 1000
            
        }).show();
    }
 
   
   }
   
   export default Notification = new Notification()