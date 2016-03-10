<!DOCTYPE HTML>
<html>
	<head>
		<title></title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	</head>
	<body style="font-family:calibri;font-size:14px;">
		<div style="width:100%;background-color:#fff;height:100%;position:absolute;top:0;left:0;">
			<div style='width:100%;height:100%;text-align:center;background-color: #343a3d;
background-image: url("http://www.transparenttextures.com/patterns/black-linen.png");
/* This is mostly intended for prototyping; please download the pattern and re-host for production environments. Thank you! */'>
				<div style="margin:auto;width:250px;padding-top:10%;">
					<span class="fa fa-lock fa-4x" style="color:#fff;background-color:#343a3d;border-radius:100%;border:2px solid #fff; padding:10px 20px"></span>
					<h1 style="margin:20px 0px;color:#fff;text-align:left;margin-bottom:0px;">Sign In</h1>
					<h2 style="color:#8dc43f;margin-top:0px;text-align:left;">Administrator</h2>
					<?php echo form_open('backend/login/login_act');?>
						<div style="width:100%;float:left;"><input style="width:87%;float:left;margin:5px 0px;padding:5px 25px 5px 5px;border:1px solid #eee;border-radius:3px;" type="text" name="username" placeholder="username"/></div>
						<div style="width:100%;float:left;"><input style="width:87%;float:left;margin:5px 0px;padding:5px 25px 5px 5px;border:1px solid #eee;border-radius:3px;" type="password" name="password" placeholder="password"/></div>
						<button style="float:right;cursor:pointer;border:1px solid #fff;margin:5px 0px;background-color:#8dc43f;padding:5px;color:#fff;border-radius:3px;" type="submit"><i class="fa fa-sign-in" style="margin-right:5px;"></i>Sign in</button>
					<?php echo form_close();?>
					<span style="font-size:12px;color:#fff;width:100%;float:left;margin:10px auto 10px;"><?php echo validation_errors();?></span>
					<span style="font-size:12px;color:#fff;width:100%;float:left;margin:10px auto 10px;"><?php echo $this->session->flashdata('login_result');?></span>
					<span style="font-size:12px;color:#fff;width:100%;float:left;margin:20px auto 10px;">Not a member? <strong><i class="fa fa-phone" style="margin-right:5px;"></i>Please call TI Division.</strong></span>
					<span style="font-size:12px;color:#fff;width:100%;float:left;margin:auto;">Copyright &copy; 2016</span>
				</div>
			</div>
		</div>
	</body>
</html>