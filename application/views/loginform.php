<html>
	<head>    
		<title>Login</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> 
		<script src="http://ajax.microsoft.com/ajax/jquery.validate/1.7/jquery.validate.js"></script> 
		<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
		<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css"> 
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
		<script>
			$(document).ready(function(){
				$("#loginform").validate({
					rules:{
						'name':{
							required: true,
							},
						'password':{
							required: true,
							},
						}
					});			
					});
		</script>
		<script>
			 $(document).ready(function(){
           $('.captcha-refresh').on('click', function(){
               $.get('<?php echo base_url().'Logincontroller/refresh'; ?>', function(data){
                   $('#image_captcha').html(data);
               });
           });
       });
		</script>
	</head>
	<body>
	<?php
		$addform = array('name' => 'loginform' , 'id' => 'loginform');
		echo form_open('Logincontroller/login',$addform)?>
			<div class ="row container col-sm-12 col-md-12 col-lg-12">				
				<div class ="col-sm-4 col-md-4 col-lg-4"> </div>
				<div class ="col-sm-4 col-md-4 col-lg-4">
						<div class="col-sm-12 col-md-12 col-lg-12 text-center">
						<h1> Login </h1>
						</div>
					<div class="col-sm-12 col-md-12 col-lg-12">
						<br> <label class="col-sm-12 col-md-12 col-lg-12" style="font-size:15px" > UserName  </label>
						<br> <input class="col-sm-12 col-md-12 col-lg-12" placeholder="User Name" type="text" name="name">  
					</div>			
					<div class="col-sm-12 col-md-12 col-lg-12">
						<br><label class="col-sm-12 col-md-12 col-lg-12" style="font-size:15px"> Password  </label>
						<br><input class="col-sm-12 col-md-12 col-lg-12" placeholder="Password" type="password" name="password">
					</div>				
				</div>
				<div class ="col-sm-4 col-md-4 col-lg-4"> </div>
			</div>	
			<div class ="row container col-sm-12 col-md-12 col-lg-12">	
				<div class ="col-sm-4 col-md-4 col-lg-4"> </div>
				<div class="col-sm-4 col-md-4 col-lg-4">
					<br><input class="btn btn-success" type="submit" name="userlogin" value="Login" id="userlogin">
				<?php echo $this->session->flashdata("error"); ?>
				
				</div>
				<div class="col-sm-4 col-md-4 col-lg-4"></div>
			</div>
		<?php echo form_close(); ?>
	</body>
</html>