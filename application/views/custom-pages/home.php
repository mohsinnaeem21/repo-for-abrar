<script>
	$(document).ready(function(){
		$("#datatable").DataTable({
			"autoWidth": true,			
			"order": [[ 0, "asc" ]]
		});
	});
</script>		
<div class="table table-responsive table-bordered table-condensed">
	<table width='80%' border=0 class="table text-center container display" id='datatable'>
		<thead>
			<tr bgcolor='#CCCCCC'>
				<th>Sr.no</th>
				<th>Name</th>
				<th>Age</th>
				<th>Email</th>
				<th>Address</th>
				<th>Cell#</th>
				<th>CNIC#</th>
				<th>Update
				</th>
			</tr>
			 <?php
				$i=1;
				foreach($usersData as $row)
				{
				echo "<tr>";
				echo "<td>".$i."</td>";
				echo "<td>".$row['name']."</td>";
				echo "<td>".$row['age']."</td>";
				echo "<td>".$row['email']."</td>";
				echo "<td>".$row['address']."</td>";
				echo "<td>".$row['cell']."</td>";
				echo "<td>".$row['cnic']."</td>";
				echo "<td><a href=".site_url('Usercontroller/editform/').$row['id']." >Edit</a> | <a href=".site_url('Usercontroller/delete/').$row['id']." onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
				echo "</tr>";
				$i++;
				}
			?>
		</thead>
	</table>
</div>