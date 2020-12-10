<?php

 require_once('functions/cls_dbconfig.php');
  function __autoload($classname){
    require_once("functions/$classname.class.php");
  }
  $cls_client  = new cls_client();

 $data = $cls_client->view_client_data();
 ?>
 <style type="text/css">
table {
    border-collapse: collapse;
}

table, th, td {
    border: 1px solid black;
}
 </style>
   <center>  <h3 class="page-header">Client Information</h3>    </center>           
<table width="100%" align="center">
	<thead>
		<tr >
			<th >SL No.</th>
			<th>Client Name</th>
			<th>Number</th>
			<th>Contact Person</th>
			<th>Number</th>
			<th>File id</th>
			<th>Status</th>
			
		</tr>
	</thead>
	<tbody>
		
		   <?php 
		  
	   while($row = $data->fetch_assoc()){

			 $catc = $row["status"];
	   ?>
			<tr class="odd gradeX"  border="1">
				<td style="text-align:center"><?php echo $row['id']; ?></td>
				<td style="text-align:center"><?php echo $row['client_name']; ?></td>
				<td style="text-align:center"><?php echo $row['client_number']; ?></td>
				
				<td style="text-align:center"><?php echo $row['contact_persoin']; ?></td>
				<td style="text-align:center"><?php echo $row['contact_persoin_number']; ?></td>
				<td style="text-align:center"><?php echo $row['file_id']; ?></td>
				<td style="text-align:center"><?php echo ucfirst($catc); ?></td>
				
				
				
				
			</tr>
		<?php } ?>
					
					
				</tbody>
			</table>
                           
                        
<script type="text/javascript">
window.print();
</script>

