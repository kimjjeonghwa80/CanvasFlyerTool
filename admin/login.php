<?php    
	require("library/config.php");
	
session_start();

$count=1;

	if($_SERVER["REQUEST_METHOD"] == "POST"){
		// username and password sent from Form
		$myusername=addslashes($_POST['email']);
		$mypassword=addslashes($_POST['password']);
		 
		$sql="SELECT * FROM adminuser WHERE username='".$myusername."' AND password='".$mypassword."'";
		$result=mysql_query($sql);
		$row=mysql_fetch_array($result);
		$active=$row['active'];
		$count=mysql_num_rows($result);
		 
		 
		// If result matched $myusername and $mypassword, table row must be 1 row
			if($count==1){
				//session_register("myusername");
				$_SESSION['email']=$myusername;
				 
				header("location: index.php");
			}
			else
			{
				$count=0;
			}
	}
?>

<!DOCTYPE html>
<html class="bg-black">
    <head>
        <meta charset="UTF-8">
        <title>NewHTML5CanvasFlyerTool</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="css/AdminLTE.css" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="bg-black">

        <div class="form-box" id="login-box">
		<div class="header" style="background-color: white;">
			<img src="" />
	    </div>
             <form id="loginform" action="login.php" method="post">
                <div class="body bg-gray">
                    <?php if($count==0) { ?>
                    <div class="form-group has-error">
                    <label class="control-label" for="inputError" style="text-align:left;">Your Username or Password is invalid</label>
                    </div>
                    <?php } ?>
                    <div class="form-group">
                        <input type="text" name="email" id="email" class="form-control" placeholder="Email"/>
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" id="password" class="form-control" placeholder="Password"/>
                    </div>
                  </div>
                <div class="footer">
                    <button type="submit" class="btn bg-olive btn-block">Login</button>
                </div>
            </form>
        </div>
    </body>

        <!-- jQuery 2.0.2 -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
		<script src="js/jquery.validate.min.js" type="text/javascript"></script>
		<script src="js/validation-methods.js" type="text/javascript"></script>
		<script type="text/javascript">
		$(document).ready(function () {
			$('#loginform').validate({
				rules: {
					email: {
						required: true,
						email: true
					},
					 password: {
						minlength: 6,
						required: true
					},
				},
				highlight: function (element) {
					$(element).closest('.form-group').removeClass('has-success').addClass('has-error');
				},
				 success: function (element) {
					element.text('Input with success').addClass('valid')
						.closest('.form-group').removeClass('has-error').addClass('has-success');
					element.remove('label');
				},
			});
		});
		</script>
</html>