<script>
	$(document).ready(function(){
		$("#blog_datatable").DataTable({
			"autoWidth": true,			
			"order": [[ 0, "asc" ]],
			"scrollY": 250,
			"scrollX": true,
			"stateSave": true,
			"deferRender":    true,
			// "overflow": hidden,
			// "text-overflow": ellipsis
/////////////////////////////////////////
			
///////////////////////
		});
	});
</script>		
<div class="table table-responsive table-bordered table-condensed">
	<table width='100%' border=0 class="table text-center container display" id='blog_datatable'>
		<thead>
			<tr bgcolor='#CCCCCC'>
				<th>Sr.no</th>
				<th>Title#</th>
				<th>Content</th>
				<th>Image</th>
				<th>Actions</th>
			</tr>
			 <?php
				$i=1;
				foreach($usersData as $row)
				{
				echo "<tr>";
				echo "<td>".$i."</td>";
				echo "<td>".$row['title']."</td>";
				// echo "<td><textarea rows=\"5\" cols=\"20\">" .$row['content']. "</textarea></td>";
				echo "<td>".word_limiter($row['content'], 5)."</td>";
				echo "<td>".form_input(array('type'=>'image','name'=>'image','src'=>$row['image']))."</td>";
				echo "<td><a href=".site_url('Blogcontroller/edit_blog/').$row['id']." >Edit</a> | <a href=".site_url('Blogcontroller/delete_blog/').$row['id']." onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
				echo "</tr>";
				$i++;
				}
			?>
		</thead>
	</table>
</div>