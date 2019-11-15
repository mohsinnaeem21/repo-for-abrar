$(document).ready(function(){
  // save comment to database
$(document).on('click', '#save',function(){
	var values = $('#form1').serialize();
		$.ajax({
			url: 'add.php',
			type: 'POST',
			async: false,
			data: values,
			success: function(response){
			
			var result = JSON.parse(response);
			//console.log(result);
			if(result.error == false){			
				swal({
					title: "Record Added!",
					text: result.message,
					type: "success",
					timer: 5000
				}, function() {
					window.location = "../index.php/?page=addform.php";
				});
			}
			else{
				swal({
					title: "Error!",
					text: result.message,
					type: "success",
					timer: 5000
				});
				}
			}
		});
	});  
	
	$(document).on('click', '#update', function(){
		
		var update_values = $('#form1').serialize();
		console.log(update_values);
		$.ajax({
			url: 'update.php',
			type: 'POST',
			data: update_values,
			success: function(response){		
			var result = JSON.parse(response);
			console.log(result);
			if(result.error == false){
				 swal({
					title: "Updated!",
					text: result.message,
					type: "success",
					timer: 5000
				}, function() {
					window.location = "../index.php/?page=index.php";
				});
			}
			else{
				swal({
					title: "Error!",
					text: result.message,
					type: "success",
					timer: 5000
				});
			}
			}
		});		
	});
});

// $(document).ready(function(){
        userlist(); //call function show all product
         
        $('#datatable').dataTable();         
        
        function userlist(){
            $.ajax({
                type  : 'ajax',
                url   : '<?php echo site_url('editform/edit')?>',
                async : true,
                dataType : 'json',
                success : function(data){
                    var html = '';
                    var i;
                    for(i=0; i<data.length; i++){
                        html += '<tr>'+
                                '<td>'+data[i].product_code+'</td>'+
                                '<td>'+data[i].product_name+'</td>'+
                                '<td>'+data[i].product_price+'</td>'+
                                '<td style="text-align:right;">'+
                                    '<a href="javascript:void(0);" class="btn btn-info btn-sm item_edit" data-product_code="'+data[i].product_code+'" data-product_name="'+data[i].product_name+'" data-price="'+data[i].product_price+'">Edit</a>'+' '+
                                    '<a href="javascript:void(0);" class="btn btn-danger btn-sm item_delete" data-product_code="'+data[i].product_code+'">Delete</a>'+
                                '</td>'+
                                '</tr>';
                    }
                    $('#show_data').html(html);
                }
 
            });
        }
 
        //Save product
        $('#btn_save').on('click',function(){
            var product_code = $('#product_code').val();
            var product_name = $('#product_name').val();
            var price        = $('#price').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo site_url('product/save')?>",
                dataType : "JSON",
                data : {product_code:product_code , product_name:product_name, price:price},
                success: function(data){
                    $('[name="product_code"]').val("");
                    $('[name="product_name"]').val("");
                    $('[name="price"]').val("");
                    $('#Modal_Add').modal('hide');
                    userlist();
                }
            });
            return false;
        });
 
        //get data for update record
        $('#show_data').on('click','.item_edit',function(){
            var product_code = $(this).data('product_code');
            var product_name = $(this).data('product_name');
            var price        = $(this).data('price');
             
            $('#Modal_Edit').modal('show');
            $('[name="product_code_edit"]').val(product_code);
            $('[name="product_name_edit"]').val(product_name);
            $('[name="price_edit"]').val(price);
        });
 
        //update record to database
         $('#btn_update').on('click',function(){
            var product_code = $('#product_code_edit').val();
            var product_name = $('#product_name_edit').val();
            var price        = $('#price_edit').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo site_url('product/update')?>",
                dataType : "JSON",
                data : {product_code:product_code , product_name:product_name, price:price},
                success: function(data){
                    $('[name="product_code_edit"]').val("");
                    $('[name="product_name_edit"]').val("");
                    $('[name="price_edit"]').val("");
                    $('#Modal_Edit').modal('hide');
                    userlist();
                }
            });
            return false;
        });
 
        //get data for delete record
        $('#show_data').on('click','.item_delete',function(){
            var product_code = $(this).data('product_code');
             
            $('#Modal_Delete').modal('show');
            $('[name="product_code_delete"]').val(product_code);
        });
 
        //delete record to database
         $('#btn_delete').on('click',function(){
            var product_code = $('#product_code_delete').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo site_url('product/delete')?>",
                dataType : "JSON",
                data : {product_code:product_code},
                success: function(data){
                    $('[name="product_code_delete"]').val("");
                    $('#Modal_Delete').modal('hide');
                    userlist();
                }
            });
            return false;
        });
 
    });