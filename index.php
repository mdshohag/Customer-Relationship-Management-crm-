<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>CRM</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	
	<link rel="stylesheet" href="alert/alertify.min.css">
	<link rel="stylesheet" href="alert/default.min.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign In</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" id="login">
                            <fieldset>
                                <div class="form-group">
                                    <input  class="form-control" placeholder="E-mail" name="email" id="email" type="email" autofocus value="admin@admin.com">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" id="pass" type="password" value="admin">
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                    </label>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <input type="submit" class="btn btn-lg btn-success btn-block" value="Login">
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
	
	<script src="alert/alertify.min.js"></script>
    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="dist/js/sb-admin-2.js"></script>
	<script>
	$(document).ready(function(){
		$("#login").submit(function(e){
			e.preventDefault();
			
			var email = $("#email").val();
			var pass = $("#pass").val();
			
			var dataString = 
			'para_email='+email+
			'&para_pass='+pass;
		
			
			if(email == ""){
				alertify.error('Email field is empty');
				return false;
			}		
			
			if(pass == ""){
				alertify.error('Password field is empty');
				return false;
			}		
			
			$.ajax({
				type:'post',
				url:'post_url/admin_login.php',
				data:dataString,
				success:function(res){
					//alert(res);
					//return false;
					
					if(res == 'no'){
						alertify.error('Username or Password does not match !!');
						return false;
					}
					location.href='dashboard.php';
				}
			})
			
		});
	});
	</script>

</body>

</html>
