
<script>
		$(document).ready(function(){
			$("#update_student_form").validate({
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
						date_format:true
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
	$updateform = array('name' => 'update_student_form' , 'id' => 'update_student_form');
	echo form_open_multipart('Studentcontroller/update_student_controller/',$updateform); ?>
	<h1>Student Registration</h1>
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
			
			echo form_label('Roll# :','roll_number',$attributes); 
			echo form_label('','',$space); 
			echo form_input(array('id' => 's_roll_no', 'name' => 's_roll_no' ,'class'=> 'col-md-12 form-control', 'value' => "$usersData[roll_number]"));
			echo form_label('Name :','name',$attributes); 
			echo form_label('','',$space); 
			echo form_input(array('id' => 's_name', 'name' => 's_name' ,'class'=> 'col-md-12 form-control', 'value' => "$usersData[name]")); 
			echo form_label('Father Name :','father_name',$attributes); 
			echo form_label('','',$space);
			echo form_input(array('id' => 's_f_name', 'name' => 's_f_name' ,'class'=> 'col-md-12 form-control' ,'value' => "$usersData[father_name]")); 
			echo form_label('Age :','age',$attributes); 
			echo form_label('','',$space);
			echo form_input(array('id' => 's_age', 'name' => 's_age' ,'class'=> 'col-md-12 form-control', 'value' => "$usersData[age]")); 
			echo form_label('Address :','address',$attributes); 
			echo form_label('','',$space);
			echo form_input(array('id' => 's_address', 'name' => 's_address' ,'class'=> 'col-md-12 form-control' ,'value' => "$usersData[address]"));
			echo form_label('Class :','class',$attributes); 
			echo form_label('','',$space);
			echo form_input(array('id' => 's_class', 'name' => 's_class' ,'class'=> 'col-md-12 form-control' ,'value' => "$usersData[class] "));			
		?>
		</div>
		<div class ="col-sm-5 col-md-5 col-lg-5">	
			<?php
			echo form_label('Date Of Birth :','date_of_birth',$attributes); 
			echo form_label('','',$space);
			echo form_input(array('id' => 's_date_of_birth', 'name' => 's_date_of_birth' ,'class'=> 'col-md-12 form-control' ,'value' => "$usersData[date_of_birth]"));
			echo form_label('Previous School :','previous_school',$attributes); 
			echo form_label('','',$space);
			echo form_input(array('id' => 's_previous_school', 'name' => 's_previous_school' ,'class'=> 'col-md-12 form-control' ,'value' => "$usersData[previous_school]"));
			echo form_label('Phone# :','phone_number',$attributes); 
			echo form_label('','',$space);
			echo form_input(array('id' => 's_phone_number', 'name' => 's_phone_number' ,'class'=> 'col-md-12 form-control', 'value' => "$usersData[phone_number]"));
			echo form_label('Cell# :','cell_number',$attributes); 
			echo form_label('','',$space);
			echo form_input(array('id' => 's_cell_number', 'name' => 's_cell_number' ,'class'=> 'col-md-12 form-control' ,'value' => "$usersData[cell_number]"));
			echo form_label('Student (Birth Certificate#/CNIC#) :','birth_certificate_number',$attributes); 
			echo form_label('','',$space);
			echo form_input(array('id' => 's_birth_certificate_number', 'name' => 's_birth_certificate_number' ,'class'=> 'col-md-12 form-control', 'value' => "$usersData[birth_certificate_number]"));
			
			echo form_label('School Leaving Certificate :','school_leaving_certificate',$attributes); 
			echo form_label('','',$space);
			echo form_input(array('type'=>'file' ,'id' => 's_school_leaving_certificate' , 'name' => 's_school_leaving_certificate' ,'class'=> 'col-md-12 form-control'));
			echo form_label('','',$space);
			echo form_input(array('type'=>'image', 'name' => 'image','src' => "$usersData[school_leaving_certificate]" ,'class'=> 'col-md-12 form-control'));
			
			echo form_label('','',$attributes);
			?>
		</div>
		<div class ="col-sm-1 col-md-1 col-lg-1"> </div>
	</div>
	<div class ="row container col-sm-12 col-md-12 col-lg-12">
		<div class ="col-sm-2 col-md-2 col-lg-2"> </div>
		<div class ="col-sm-4 col-md-4 col-lg-4"> </div>
		<div class ="col-sm-1 col-md-1 col-lg-1"> </div>
		<div class ="col-sm-1 col-md-1 col-lg-1"> </div>
		<div class ="col-sm-1 col-md-1 col-lg-1"> </div>
		<div class ="col-sm-1 col-md-1 col-lg-1">
		<?php
			echo form_hidden(array('path'=>"$usersData[school_leaving_certificate]"));
			echo form_hidden(array('s_id'=>"$usersData[id]"));
			echo form_label('','',$space);
			echo form_label('','',$space);
			echo form_submit(array('type' =>'submit' , 'id' => 'update_student' , 'name' => 'update_student' , 'value' => 'Update','class' => 'btn btn-success pull-right'));
			echo form_close();
			?>
		</div>
		<div class ="col-sm-2 col-md-2 col-lg-2"> </div>
	</div>
<?php  } ?>
</div>