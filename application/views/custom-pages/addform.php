<title>Add Data</title>
	<script>
		$(document).ready(function(){
			$("#form1").validate({
				rules:{
					'name':{
						required: true,
						minlength:5
					},
					'age':{
						required: true,
						number:true,
					},
					'email':{
						required: true,
						email: true,
					},
					'address':{
						required: true,
					},
					'cell':{
						required: true,
						number:true,
						maxlength:13,
						minlength:11
					},
					'cnic':{
						required: true,
						number:true,
						maxlength:13,
						minlength:13
					},
					'password':{
						required: true,
						minlength:5
					}
				}
			});
		});
	</script>
	<?php 
		$addform = array('name' => 'form1' , 'id' => 'form1');
		echo form_open('Usercontroller/save',$addform); ?>
		<h1>Student Registration</h1>
			<?php
				{ 
				$space = array(
					'class' => 'col-md-12',
				);
				$attributes = array(
					'class' => 'col-md-12',
					'style' => 'color: #000;'
				);
			?>
			<div class ="row container col-sm-12 col-md-12 col-lg-12">	
			<div class ="col-sm-1 col-md-1 col-lg-1"> </div>
			<div class ="col-sm-5 col-md-5 col-lg-5">	
			<?php
				echo form_label('Name :','name',$attributes); 
				echo form_label('','',$space); 
				echo form_input(array('id' => 'name', 'name' => 'name' ,'class'=> 'col-md-12 form-control'));
				
				echo form_label('Age :','age',$attributes); 
				echo form_label('','',$space); 
				echo form_input(array('id' => 'age', 'name' => 'age' ,'class'=> 'col-md-12 form-control'));
				
				echo form_label('Email :','email',$attributes); 
				echo form_label('','',$space); 
				echo form_input(array('id' => 'email', 'name' => 'email' ,'class'=> 'col-md-12 form-control'));
				
				echo form_label('Password :','password',$attributes); 
				echo form_label('','',$space); 
				echo form_input(array('type' =>'password', 'id' => 'password', 'name' => 'password' ,'class'=> 'col-md-12 form-control'));
			?>
		
			</div>
			<div class =" col-sm-5 col-md-5 col-lg-5">	
			<?php
				echo form_label('Address :','address',$attributes); 
				echo form_label('','',$space); 
				echo form_input(array('id' => 'address', 'name' => 'address' ,'class'=> 'col-md-12 form-control'));
				
				echo form_label('Cell# :','cell',$attributes); 
				echo form_label('','',$space); 
				echo form_input(array('id' => 'cell', 'name' => 'cell' ,'class'=> 'col-md-12 form-control'));
				
				echo form_label('CNIC# :','cnic',$attributes); 
				echo form_label('','',$space); 
				echo form_input(array('id' => 'cnic', 'name' => 'cnic' ,'class'=> 'col-md-12 form-control'));
			?>	
			</div>
				<div class ="col-sm-1 col-md-1 col-lg-1"> </div>
	</div>	
	
	<div class ="row container col-sm-12 col-md-12 col-lg-12">
				
				<div class ="col-sm-9 col-md-9 col-lg-9"> </div>
				<div class ="col-sm-1 col-md-1 col-lg-1">
			<?php
				echo form_label('','',$space);

				echo form_submit(array('type' =>'submit', 'id' => 'saveusers' , 'name' => 'saveusers' , 'value' => 'Submit',	'class' => 'btn btn-success')); 
				echo form_close();
			?>
				</div>
				<div class ="col-sm-2 col-md-2 col-lg-2"> </div>
	</div>		
		<?php  } ?>