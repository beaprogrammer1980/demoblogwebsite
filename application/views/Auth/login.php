<!DOCTYPE html>
<html>
<head>
	<title></title>
	
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css"/>
</head>
<body>
<!-- 
1.create login.php controller and call the login view
2.i login view copy the form code from getbootstap webiste of form tag
3.change filed of username and password
4.create model and database connect code
4.add the form validation in login controller file
5.create database and user table and check the username & password froom the database.
6.if username is correct load the dashboard file else load the login file
-->
	<div class="container">
      <div class="row">
			<div class="col-md-4 offset-md-4" style="padding-top: 50px">
                 <?php $errorMsg=$this->session->userdata('errorMsg');?>
                 <?php if(!empty($errorMsg)) {?>
				<div class="alert alert-danger" role="alert">
					<?php echo $errorMsg; ?>
				</div>
			<?php } ?>
				<form action="" name="loginForm" id="loginForm" method="post">
					<h3 class="text-center" style="padding-bottom: 15px">Please Sign in</h3>
					   <div class="form-group">
					    <label for="Username" class="form-label">Username</label>
					    <input type="text" class="form-control" id="username" value="<?php echo set_value('username'); ?>" name="username" placeholder="Enter Username">
					    <p><?php echo form_error('username');?></p>
					   </div>
					   <div class="form-group">
					     <label for="password" class="form-label">Password</label>
					     <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password">
					     <p><?php echo form_error('password');?></p>
					   </div>
					   
				   <button type="submit" class="btn btn-primary btn-block btn-lg">Submit</button>
				</form>
				</div>

</div>      	
</body>
</html>
