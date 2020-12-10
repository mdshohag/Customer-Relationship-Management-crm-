    <div class="row">
    	<div class="col-md-12">
    		<h4 class="text-center">All right reserved by shohag</h4>
    	</div>
    </div>
    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="vendor/metisMenu/metisMenu.min.js"></script>

	 
    <!-- Morris Charts JavaScript -->
    <script src="vendor/raphael/raphael.min.js"></script>
    <script src="vendor/morrisjs/morris.min.js"></script>
    <script src="data/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="dist/js/sb-admin-2.js"></script>
	
	   <!-- DataTables JavaScript -->
    <script src="vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="vendor/datatables-responsive/dataTables.responsive.js"></script>
	<script src="alert/alertify.min.js"></script>

	<script type="text/javascript">
		$(function(){
			
			$("#client_add").submit(function(e){
				e.preventDefault();
					
				$.ajax({
					type:"post",
					url:"post_url/client_add.php",
					data:new FormData(this),
					contentType: false,
					cache:false,
					processData:false,
					success:function(res){
						
						//alert(res);
						//return false;
						if(res == 1){
							alertify.success('Success');
							$("#client_add")[0].reset();
						} 
						else{
							alertify.error('Not inserted');
						}
				},error:function(){
						alert('Error on Ajax');
					}     
				})
			});
		})
	</script>
	<script>
	$("#client_update").submit(function(e){
		e.preventDefault();
		
		$.ajax({
			type:"post",   
			url:"post_url/client_edite.php",
			data:new FormData(this),
			contentType:false,
			cache:false,
			processData:false,
			success: function(res){
						
						//alert(res);
						//return false;
						if(res == 1){
							alertify.success('Success');
							 location.href='clients_manage.php';
						} 
						else{
							alertify.error('Not Update');
						}
			},error: function(){
				alertify.error("Error on Ajax !!");
			}          
		})		
		
	})
	</script>

	<script type="text/javascript">
		$(function(){
			
			$("#client_add").submit(function(e){
				e.preventDefault();
				
				var  = $('[name=""]').val();
				var  = $('[name=""]').val();
				var status = $('[name="status"]').val();
				
				
				if( == ""){
						alertify.error('Input name');
						return false;
					}
					if( == ""){
						alertify.error(' ');
						return false;
					}
					if(status == ""){
						alertify.error('Select status');
						return false;
					}
					
				$.ajax({
					type:"post",
					url:"post_url/client_add.php",
					data:new FormData(this),
					contentType: false,
					cache:false,
					processData:false,
					success:function(res){
						
						//alert(res);
						//return false;
						if(res == 1){
							alertify.success('Success');
							// location.href='';
						} 
						else{
							alertify.error('Not inserted');
						}
				},error:function(){
						alert('Error on Ajax');
					}     
				})
			});
		})
	</script>
	<script>
    $(document).ready(function() {
		$("#projects_add").on('submit',function(e){
			e.preventDefault();
			var p_name = $("[name='p_name']").val();
			var p_category = $("[name='p_category']").val();
			var p_des = $("[name='p_des']").val();
			var p_location = $("[name='p_location']").val();
			
			var dataString = 'p_name='+p_name+
			'&p_category='+p_category+
			'&p_des='+p_des+
			'&p_location='+p_location;
			
			$.ajax({
				type:'post',
				url:'post_url/projects_add.php',
				data:dataString,
				success:function(res){
					if(res == 1){
						alertify.success("Project added successfully");
						$("#projects_add")[0].reset();
						
					}else{
						alertify.error("Project not inserted!");
					}
					
				}
			})
			
			
		});
		$(".p_edit_btn").on('click',function(){		
			$("#p_edit_form").slideDown();
			$("#p_list").slideUp(1000);
			var p_id = $(this).attr("p_id");
			var dataString = "p_id="+p_id;
			$.ajax({
				type:'post',
				url:'post_url/project_infobyid.php',
				data:dataString,
				success:function(res){
					var value= JSON.parse(res);
					$('[name="pid"]').val(p_id);
					$('[name="p_name"]').val(value.project_name);
					$('[name="p_category"]').val(value.p_category);
					$('[name="p_des"]').val(value.p_description);
					$('[name="p_location"]').val(value.project_location);
				}
			})
		});
$("#projects_edit").on('submit',function(e){
			e.preventDefault();
			var pid = $("[name='pid']").val();
			var p_name = $("[name='p_name']").val();
			var p_category = $("[name='p_category']").val();
			var p_des = $("[name='p_des']").val();
			var p_location = $("[name='p_location']").val();
			
			var dataString = 'p_name='+p_name+
			'&pid='+pid+
			'&p_category='+p_category+
			'&p_des='+p_des+
			'&p_location='+p_location;
			
			$.ajax({
				type:'post',
				url:'post_url/projects_edit.php',
				data:dataString,
				success:function(res){
					var result = JSON.parse(res);
					if(result.res == 1){
						alertify.success("Project updated successfully");
						$("#projects_edit")[0].reset();
						$("#p_edit_form").slideUp();
						$("#p_list").slideDown();

						$("#p_list_"+pid+" td:eq(1)").text(result.project_name);
						$("#p_list_"+pid+" td:eq(2)").text(result.p_category);
						$("#p_list_"+pid+" td:eq(3)").text(result.p_description);
						$("#p_list_"+pid+" td:eq(4)").text(result.project_location);
						
					}else{
						alertify.error("Project not updated!");
					}
					
				}
			})
		});
$("#p_edit_cancel").on('click',function(){		
			$("#p_edit_form").slideUp();
			$("#p_list").slideDown();
		});

		$("#projects_assign").on('submit',function(e){
			e.preventDefault();
			var p_name = $("[name='p_name']").val();
			var client_name = $("[name='client_name']").val();
			var amount = $("[name='amount']").val();
			var issue_date = $("[name='issue_date']").val();
			var delivery_date = $("[name='delivery_date']").val();
			
			var dataString = 'p_name='+p_name+
			'&client_name='+client_name+
			'&amount='+amount+
			'&issue_date='+issue_date+
			'&delivery_date='+delivery_date;

			
			$.ajax({
				type:'post',
				url:'post_url/projects_assign.php',
				data:dataString,
				success:function(res){
					if(res == 1){
						alertify.success("Project assigned successfully");
						$("#projects_assign")[0].reset();
						
					}else{
						alertify.error("Project not assigned!");
					}
					
				}
			})
		});
		$("#contact_schedule").on('submit',function(e){
			e.preventDefault();
			var client_name = $("[name='client_name']").val();
			var emp_name = $("[name='emp_name']").val();
			var description = $("textarea#con_des").val();
			var schedule_date = $("[name='schedule_date']").val();
			
			var dataString = 'client_name='+client_name+
			'&emp_name='+emp_name+
			'&description='+description+
			'&schedule_date='+schedule_date;
			// alertify.alert(dataString);
			// return false;
			
			$.ajax({
				type:'post',
				url:'post_url/contact_add.php',
				data:dataString,
				success:function(res){
					if(res == 1){
						alertify.success("Contact added successfully");
						$("#contact_schedule")[0].reset();
						
					}else{
						alertify.error("Contact not inserted!");
					}
					
				}
			})
		});
    });
    </script>
	
	<script type="text/javascript">
		$(function(){
			
			$("#user_add").submit(function(e){
				e.preventDefault();
					
				$.ajax({
					type:"post",
					url:"post_url/user_add.php",
					data:new FormData(this),
					contentType: false,
					cache:false,
					processData:false,
					success:function(res){
						
						//alert(res);
						//return false;
						if(res == 1){
							alertify.success('Success');
							$("#user_add")[0].reset();
						}
						else if(res == 2){
							alertify.error('Exist Email');
						}						
						else{
							alertify.error('Not inserted');
						}
				},error:function(){
						alert('Error on Ajax');
					}     
				})
			});
		})
	</script>
	<script>
    $(document).ready(function() {
        $('#dataTables').DataTable();
    });
    </script>
<script>
	$(function(){
		$("#signout").click(function(e){
			e.preventDefault();
			//alert('ok');
			$.ajax({
				type:'post',
				url:'post_url/signout.php',
				success:function(res){
					//alert(res);
					if(res == '1'){
						location.href='index.php';
					}else{
						alertify.error('Error on Logout');
					}
				}
			})
		});
	})
	</script>

</body>

</html>
