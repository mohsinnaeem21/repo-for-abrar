<script>
	$(document).ready(function(){
		$("#student_datatable").DataTable({
			"autoWidth": true,			
			"order": [[ 0, "asc" ]]
		});
	});
</script>		
<div class="table table-responsive table-bordered table-condensed">
	<table width='80%' border=0 class="table text-center container display" id='student_datatable'>
		<thead>
			<tr bgcolor='#CCCCCC'>
				<th>Sr.no</th>
				<th>Roll#</th>
				<th>Name</th>
				<th>Father Name</th>
				<th>Age</th>
				<th>Address</th>
				<th>Class</th>
				<th>Cell#</th>
				<th>Actions</th>
			</tr>
			 <?php
				$i=1;
				foreach($usersData as $row)
				{
				echo "<tr>";
				echo "<td>".$i."</td>";
				echo "<td>".$row['roll_number']."</td>";
				echo "<td>".$row['name']."</td>";
				echo "<td>".$row['father_name']."</td>";
				echo "<td>".$row['age']."</td>";
				echo "<td>".$row['address']."</td>";
				echo "<td>".$row['class']."</td>";
				echo "<td>".$row['cell_number']."</td>";
				echo "<td><a href=".site_url('Studentcontroller/edit_form_controller/').$row['id']." >Edit</a> | <a href=".site_url('Studentcontroller/delete_student_controller/').$row['id']." onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
				echo "</tr>";
				$i++;
				}
			?>
		</thead>
	</table>
</div>