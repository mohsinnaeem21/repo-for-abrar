<title>Edit Data</title>	
<h3> Edit Form </h3>
<br/><br/>
      <form id="form1" method="post" action = "<?php echo site_url('Usercontroller/update');?>">
		<div class ="row container col-sm-12 col-md-12 col-lg-12">
			<div class ="col-sm-2 col-md-2 col-lg-2"> </div>
			<div class ="col-sm-4 col-md-4 col-lg-4">	
				<div class="col-sm-12 col-md-12 col-lg-12">
					<br><label class="col-sm-12 col-md-12 col-lg-12" style="font-size:15px" > Name  </label>
					<br><input value="<?php echo $usersData['name'] ?>" class="col-sm-12 col-md-12 col-lg-12" type="text" name="name">  
				</div>
				<div class=" col-sm-12 col-md-12 col-lg-12">
					<br><label class="col-sm-12 col-md-12 col-lg-12" style="font-size:15px" > Age  </label>
					<br><input class=" col-sm-12 col-md-12 col-lg-12" " type="text" name="age" value="<?php echo $usersData['age'] ?>">
				</div>
				<div class="col-sm-12 col-md-12 col-lg-12">
					<br><label class="col-sm-12 col-md-12 col-lg-12" style="font-size:15px" > Email  </label>
					<br><input class=" col-sm-12 col-md-12 col-lg-12"  type="text" name="email" value="<?php echo $usersData['email'] ?>">
				</div>
				<div class="col-sm-12 col-md-12 col-lg-12">
					<br><label class="col-sm-12 col-md-12 col-lg-12" style="font-size:15px" > Password  </label>
					<br><input class="col-sm-12 col-md-12 col-lg-12"  type="password" name="password" value="">
				</div>
			</div>
			<div class ="col-sm-4 col-md-4 col-lg-4">	
				<div class=" col-sm-12 col-md-12 col-lg-12">
					<br><label class="col-sm-12 col-md-12 col-lg-12" style="font-size:15px" > Address  </label>
					<br><input class="col-sm-12 col-md-12 col-lg-12"  type="text" name="address" value="<?php echo $usersData['address'] ?>">  
				</div>
				<div class=" col-sm-12 col-md-12 col-lg-12">
					<br><label class="col-sm-12 col-md-12 col-lg-12" style="font-size:15px" > Cell#  </label>
					<br><input class=" col-sm-12 col-md-12 col-lg-12"  type="text" name="cell" value="<?php echo $usersData['cell'] ?>">
				</div>
				<div class="col-sm-12 col-md-12 col-lg-12">
					<br><label class="col-sm-12 col-md-12 col-lg-12" style="font-size:15px" > CNIC#  </label>
					<br><input class=" col-sm-12 col-md-12 col-lg-12" type="text" name="cnic" value="<?php echo $usersData['cnic'] ?>">
				</div>
			</div>
			<div class ="col-sm-2 col-md-2 col-lg-2"> </div>
		</div>
		<div class ="row container col-sm-12 col-md-12 col-lg-12">	
			<div class ="col-sm-2 col-md-2 col-lg-2"> </div>
			<div class="col-sm-4 col-md-4 col-lg-4">
				<br><input type="hidden" name="id" value=<?php echo $usersData['id'];?>>
				<input class="btn btn-success" type="submit" name="updatedata" value="Update" id="updatedata">
			</div>
			<div class="col-sm-4 col-md-4 col-lg-4"></div>
			<div class="col-sm-2 col-md-2 col-lg-2"></div>
		</div>	
	</form>