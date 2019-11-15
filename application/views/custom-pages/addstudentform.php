<link href='http://fonts.googleapis.com/css?family=Marcellus' rel='stylesheet' type='text/css'>
<link href="http://localhost/CodeIgniter/css/styles.css" rel="stylesheet" type="text/css">
	<script>
		$(document).ready(function(){
			$("#add_student_form").validate({
				rules:{
					's_roll_no':{
						required: true,
						minlength:5
					},
					's_name':{
						required: true,
						minlength:5
					},
					's_f_name':{
						required: true,
						minlength:5
					},
					's_age':{
						required: true,
						number:true,
						minlength:1,
						maxlength:2
					},
					's_address':{
						required: true,
						minlength:5
					},
					's_class':{
						required: true,
					},
					's_date_of_birth':{
						required: true,
						
					},
					's_previous_school':{
						required: true,
						minlength:5
					},
					's_phone_number':{
						required: true,
						number:true,
						maxlength:13,
						minlength:11
					},
					's_cell_number':{
						required: true,
						number:true,
						maxlength:13,
						minlength:11
					},
					's_birth_certificate_number':{
						required: true,
						number:true,
						maxlength:13,
						minlength:13

					}
				}
			});
		});
	</script>
	
<div id="container">
	<?php 
	$addform = array('name' => 'add_student_form' , 'id' => 'add_student_form');
	echo form_open_multipart('Studentcontroller/save_student_controller',$addform); ?>
	<h1>Student Registration</h1>
	<div class="form-group">	</div>
	<div class ="row container col-sm-12 col-md-12 col-lg-12">	
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
			<div class ="col-sm-1 col-md-1 col-lg-1"> </div>
			<div class ="col-sm-5 col-md-5 col-lg-5">	
		<?php
			echo form_label('Roll# :','roll_number',$attributes); 
			echo form_label('','',$space); 
			echo form_input(array('id' => 's_roll_no', 'name' => 's_roll_no' ,'class'=> 'col-md-12 form-control'));
			echo form_label('Name :','name',$attributes); 
			echo form_label('','',$space); 
			echo form_input(array('id' => 's_name', 'name' => 's_name' ,'class'=> 'col-md-12 form-control')); 
			echo form_label('Father Name :','father_name',$attributes); 
			echo form_label('','',$space);
			echo form_input(array('id' => 's_f_name', 'name' => 's_f_name' ,'class'=> 'col-md-12 form-control')); 
			echo form_label('Age :','age',$attributes); 
			echo form_label('','',$space);
			echo form_input(array('id' => 's_age', 'name' => 's_age' ,'class'=> 'col-md-12 form-control')); 
			echo form_label('Address :','address',$attributes); 
			echo form_label('','',$space);
			echo form_input(array('id' => 's_address', 'name' => 's_address' ,'class'=> 'col-md-12 form-control'));
			echo form_label('Class :','class',$attributes); 
			echo form_label('','',$space);
			echo form_input(array('id' => 's_class', 'name' => 's_class' ,'class'=> 'col-md-12 form-control'));			
		?>
		</div>
		<div class ="col-sm-5 col-md-5 col-lg-5">	
			<?php
			echo form_label('Date Of Birth :','date_of_birth',$attributes); 
			echo form_label('','',$space);
			echo form_input(array('id' => 's_date_of_birth', 'name' => 's_date_of_birth' ,'class'=> 'col-md-12 form-control'));
			echo form_label('Previous School :','previous_school',$attributes); 
			echo form_label('','',$space);
			echo form_input(array('id' => 's_previous_school', 'name' => 's_previous_school' ,'class'=> 'col-md-12 form-control'));
			echo form_label('Phone# :','phone_number',$attributes); 
			echo form_label('','',$space);
			echo form_input(array('id' => 's_phone_number', 'name' => 's_phone_number' ,'class'=> 'col-md-12 form-control'));
			echo form_label('Cell# :','cell_number',$attributes); 
			echo form_label('','',$space);
			echo form_input(array('id' => 's_cell_number', 'name' => 's_cell_number' ,'class'=> 'col-md-12 form-control'));
			echo form_label('Student (Birth Certificate#/CNIC#) :','birth_certificate_number',$attributes); 
			echo form_label('','',$space);
			echo form_input(array('id' => 's_birth_certificate_number', 'name' => 's_birth_certificate_number' ,'class'=> 'col-md-12 form-control'));

			echo form_label('School Leaving Certificate :','school_leaving_certificate',$attributes); 
			echo form_label('','',$space);
			echo form_input(array('type'=>'file' ,'id' => 's_school_leaving_certificate', 'name' => 's_school_leaving_certificate' ,'class'=> 'col-md-12 form-control'));

			echo form_label('','',$attributes);
			?>
		</div>
		<div class ="col-sm-1 col-md-1 col-lg-1"> </div>
	</div>
	<div class ="row container col-sm-12 col-md-12 col-lg-12">
		
		<div class ="col-sm-9 col-md-9 col-lg-9"> </div>
		<div class ="col-sm-1 col-md-1 col-lg-1">
		<?php
			echo form_label('','',$space);
			echo form_label('','',$space);
			echo form_submit(array('type' =>'submit', 'id' => 'save_student' , 'name' => 'save_student' , 'value' => 'Submit','class' => 'btn btn-primary')); 
			echo form_close();
			?>
		</div>
		<div class ="col-sm-2 col-md-2 col-lg-2"> </div>
	</div>
<?php  } ?>
</div>