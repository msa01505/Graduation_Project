$(document).ready(function(){
    cat();
    brand ();
    product();
    function cat(){   
        $.ajax({
        url:"action2.php",
        method:"post",
        data:{category:1},
        success: function (data){
            $("#get_category").html(data)
        }
    })
}
        function brand(){    
        $.ajax({
        url:"action2.php",
        method:"post",
        data:{brand:1},
        success: function (data){
            $("#get_brand").html(data)
        }
    })
}
function product(){    
    $.ajax({
    url:"action2.php",
    method:"post",
    data:{product:1},
    success: function (data){
        $("#get_product").html(data)
    }
})
}

$("body").delegate(".category","click", function (event){
    event.preventdefult();
    var cid =$(this).attr('cid');
    
    })
 


/*Cart*/
$("body").delegate("#product","click",function(event){
    event.preventDefault();
    var p_id =$(this).attr('pid');
    $.ajax({
        url     : "action2.php",
        method  : "POST",
        data    : {addProuduct:1,proId:p_id},
        success : function(data){
            $("#product_msg").html(data);
          }
       })
    })


    /*هنا لو هنحط ال cart */



    cart_checkout();
    function cart_checkout (){
        $.ajax({
            url     : "action2.php",
            method  : "post",
            data    : {cart_checkout:1},
            success : function(data){
                $("#cart_checkout").html(data);
                }
        })
    }  
    $("body").delegate(".qty","keyup",function(){
        var pid   = $(this).attr("pid");
        var qty   = $("#qty-"+pid).val();
        var price = $("#price-"+pid).val();
        var total = qty*price;
        $("#total-"+pid).val(total);
    })      
$("body").delegate(".remove","click",function(event){
    event.preventDefault();
    var pid = $(this).attr("remove_id");
    $.ajax({
        url     : "action2.php",
        method  : "post",
        data    : {removeFromCart:1,remove_id:pid},
        success : function(data){
            $("#cart_msg").html(data);
            cart_checkout();
        }
    })
    $("body").delegate(".update","click",function(event){
        event.preventDefault();
        var pid   = $(this).attr("update_id");
        var qty   = $("#qty-"+pid).val();
        var price = $("#price-"+pid).val();
        var total = $("#total-"+pid).val();
        $.ajax({
            url     : "action2.php",
            method  : "post",
            data    : {updateProduct:1, updateId:pid, qty:qty ,price:price ,total:total},
            success : function(data){
                $("#cart_msg").html(data);
    }


}) 
