
<script>
		$(document).ready(function(){
			$("#update_blog_form").validate({
				rules:{
					'b_title':{
						required: true,
					},
					'b_content':{
						required: true,
						minlength:50
					},
					'b_image':{
						required: true,
					}
				}
			});
		});
	</script>


<div id="container">
	<?php
	$updateform = array('name' => 'update_blog_form' , 'id' => 'update_blog_form');
	echo form_open_multipart('Blogcontroller/update_blog/',$updateform); ?>
	<h1>Edit Blog </h1>
	<div class="form-group">	</div>
	<div class ="row container col-sm-12 col-md-12 col-lg-12">	
		<?php
		{ 
			$space = array(
			'class' => 'col-md-12',
			);
			$attributes = array(
			'class' => 'col-md-12 pull-right',
			'style' => 'color: #000;'
			);
			?>
			<div class ="col-sm-1 col-md-1 col-lg-1"> </div>
			<div class ="col-sm-5 col-md-5 col-lg-5">	
		<?php
			
			echo form_label('Title :','title',$attributes); 
			echo form_label('','',$space); 
			echo form_input(array('id' => 'b_title', 'name' => 'b_title' ,'class'=> 'col-md-12 form-control', 'value' => "$usersData[title]"));
			
			echo form_label('Blog Image :','image',$attributes); 
			echo form_label('','',$space);
			echo form_input(array('type'=>'file' ,'id' => 'b_image' , 'name' => 'b_image' ,'class'=> 'col-md-12 form-control'));
			echo form_label('','',$space);
			echo form_input(array('type'=>'image', 'name' => 'image','src' => "$usersData[image]" ,'class'=> 'col-md-12 form-control'));
			
			echo form_label('','',$attributes);	
		?>
		</div>
		<div class ="col-sm-5 col-md-5 col-lg-5">	
			<?php
			echo form_label('Blog Content :','content',$attributes); 
			echo form_label('','',$space);
			echo form_textarea(array('id' => 'b_content', 'name' => 'b_content' ,'class'=> 'col-md-12 form-control' ,'value' => "$usersData[content]"));
			?>
		</div>
		<div class ="col-sm-1 col-md-1 col-lg-1"> </div>
	</div>
	<div class ="row container col-sm-12 col-md-12 col-lg-12">
		
		<div class ="col-sm-9 col-md-9 col-lg-9"> </div>
		<div class ="col-sm-1 col-md-1 col-lg-1">
		<?php
			echo form_hidden(array('path'=>"$usersData[image]"));
			echo form_hidden(array('b_id'=>"$usersData[id]"));
			echo form_label('','',$space);
			echo form_label('','',$space);
			echo form_submit(array('type' =>'submit' , 'id' => 'update_blogs' , 'name' => 'update_blogs' , 'value' => 'Update','class' => 'btn btn-success pull-right'));
			echo form_close();
			?>
		</div>
		<div class ="col-sm-2 col-md-2 col-lg-2"> </div>
	</div>
<?php  } ?>
</div>
<script>
       CKEDITOR.replace( 'b_content' );
</script>