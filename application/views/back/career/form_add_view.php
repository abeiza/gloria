				<link href="<?php echo base_url(); ?>assets/css/jquery.ui.datepicker.css" rel="stylesheet">
				<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jquery.ui.theme.css" />
				<script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
				<script src="<?php echo base_url(); ?>assets/js/jquery.ui.datepicker.js"></script>
				<link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
				<script src="//code.jquery.com/jquery-1.10.2.js"></script>
				<script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
				<script src="<?php echo base_url();?>assets/js/jquery.ui.core.js"></script>
				<script src="<?php echo base_url();?>assets/js/jquery.ui.widget.js"></script>
				<script>
					$(function() {
						$("#exp").datepicker({dateFormat: 'yy-mm-dd'});
						
						$("#dept").change(function(){
							id=$("#dept").val();
							$.ajax({
								url:"<?php echo base_url();?>index.php/backend/manage_career/get_position/",
								cache:false,
								data:"id="+id,
								dataType: 'json',
								success:function(result){
									//alert(result);
									$("#position option").remove();
									$("#position").append('<option value="" selected disabled> -- Select Job Position -- </option>');
									$.each(result, function(i, data){
									$('#position').append("<option value='"+data.job_position_id+"'>"+data.job_short_code+" - "+data.job_position_name+"</option>");
									});
								}
							});
						});
					});
				</script>
				<script type="text/javascript" src="<?php echo base_url(); ?>assets/ckeditor/ckeditor.js"></script>
				<!-- Header -->
				<div style="float:left;width:100%;height:11.5%;background:#fff;color:#787878;">
					<div style="margin:0px 20px;width:auto;">	
						<h2 style="text-transform:uppercase;"><i class="fa fa-briefcase" style="margin-right:10px"></i>Post Job</h2>
					</div>
				</div>
				<!-- End of header -->
				<!-- Separator -->
				<div style="float:left;width:100%;height:0.5%;background:#64c0cc;color:#787878;">
				</div>
				<!-- End of separator -->
				<!-- Work Sheet -->
				<div style="float:left;width:100%;height:80%;background:#f9f9f9;">
					<!-- Sheet Pertama -->
					<div style="float:left;margin:10px 20px;width:96%;background-color:#fff; border-radius:3px; border:1px solid #f1f1f1">
						<div style="width:auto;color:#787878;padding:5px 20px;">
							<h2>Form Add</h2>
							<hr style="border-color:#fff;"/>
							<div style="background-color:#fff;border-radius:3px;padding:10px;margin:20px 0px;">
								<div>
									<?php if(!validation_errors()){echo validation_errors();}else{ echo '<div style="margin:10px 20px;width:auto;background-color:#ffffbf;font-size:12px;border-radius:3px;color:red;padding:10px;"><i class="fa fa-exclamation-triangle" style="color:red;font-size:16px;margin-right:5px;"></i><strong style="font-size:16px;">Warning !</strong>'.validation_errors().'</div>';}?>
									<?php echo $this->session->flashdata('add_result');?>
								</div>
								<?php echo form_open('backend/manage_career/add/');?>
								<div style="width:80%;float:left;padding:30px 0px 50px 0px;">
										<div style="width:100%">
											<label style="width:90%;float:left;text-align:left;margin-top:10px; margin-right:10px;">Job Title*</label>
											<input style="width:90%;float:left;margin:5px 0px;padding:7px;border:1px solid #ccc;" type="text" name="title"/>
										</div>
										<label style="width:90%;float:left;text-align:left;margin-top:10px; margin-right:10px;">Job Description*:</label>
										<div style="width:90%;float:left;margin-top:5px;">
											<textarea name="desc" style="height:500px;" id="desc"></textarea>
											<script>CKEDITOR.replace('desc');</script>
										</div>
										<label style="width:90%;float:left;text-align:left;margin-top:10px; margin-right:10px;">Requirement*:</label>
										<div style="width:90%;float:left;margin-top:5px;">
											<textarea name="req" style="height:500px;" id="req"></textarea>
											<script>CKEDITOR.replace('req');</script>
										</div>
								</div>
								<div style="width:20%;float:left;background:transparent;padding:30px 0px 50px 0px;">
										<div style="width:100%;float:left">
											<label style="width:90%;float:left;text-align:left;margin-top:10px; margin-right:10px;">Department*</label>
											<select id="dept" style="width:90%;float:left;margin:5px 0px;padding:7px;border:1px solid #ccc;" name="dept">
												<option value="" selected disabled>-- Select Department --</option>
												<option value="ACC">Accounting and Finance</option>
												<option value="GEN">General</option>
												<option value="HR">Human Resource Division</option>
												<option value="IT">Information & Technology</option>
												<option value="MRK">Marketing</option>
												<option value="PRD">Production</option>
												<option value="QA">Quality Assurance</option>
												<option value="RND">Research and Development</option>
											</select>
										</div>
										<div style="width:100%;float:left">
											<label style="width:90%;float:left;text-align:left;margin-top:10px; margin-right:10px;">Position*</label>
											<select id="position" name="position" style="width:90%;float:left;margin:5px 0px;padding:7px;border:1px solid #ccc;" type="text" name="dept">
												<option value="" selected disabled>-- Select Job Position --</option>
											</select>
										</div>
										<div style="width:100%;float:left">
											<label style="width:90%;float:left;text-align:left;margin-top:10px; margin-right:10px;">Location*</label>
											<input style="width:90%;float:left;margin:5px 0px;padding:7px;border:1px solid #ccc;" type="text" name="location"/>
										</div>
										<div style="width:100%;float:left">
											<label style="width:90%;float:left;text-align:left;margin-top:10px; margin-right:10px;">Latest Education*</label>
											<input style="width:90%;float:left;margin:5px 0px;padding:7px;border:1px solid #ccc;" type="text" name="edu"/>
										</div>
										<div style="width:100%;float:left">
											<label style="width:90%;float:left;text-align:left;margin-top:10px; margin-right:10px;">Work Experience*</label>
											<input style="width:90%;float:left;margin:5px 0px;padding:7px;border:1px solid #ccc;" type="text" name="experience"/>
										</div>
										<div style="width:100%;float:left">
											<label style="width:90%;float:left;text-align:left;margin-top:10px; margin-right:10px;">Expiration Date</label>
											<input style="width:90%;float:left;margin:5px 0px;padding:7px;border:1px solid #ccc;" type="text" name="exp" id="exp"/>
										</div>
										<div style="width:100%;float:left">
											<label style="width:90%;float:left;text-align:left;margin-top:10px; margin-right:10px;">Count Position</label>
											<input style="width:90%;float:left;margin:5px 0px;padding:7px;border:1px solid #ccc;" type="text" name="co" id="co"/>
										</div>
										<div style="width:100%;float:left">
											<label style="width:90%;float:left;text-align:left;margin-top:10px; margin-right:10px;">Status*</label>
											<select style="width:90%;float:left;margin:5px 0px;padding:7px;border:1px solid #ccc;" type="text" name="status">
												<option value="" selected disabled>-- Select Status --</option>
												<option value="draft">Draft</option>
												<option value="posting">Publish</option>
												<option value="trash">Trash</option>
											</select>
										</div>
										<div style="width:100%;float:left">
											<div style="margin:10px 0px;">
												<button style="cursor:pointer;font-size:14px;border:1px solid #ccc;list-style:none;color:#717171;margin:0px 2px;background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#f8f8f8), to(#e9e9e9));
    background: -moz-linear-gradient(0% 0% 270deg,#f8f8f8, #e9e9e9);border-radius:3px;box-shadow: inset 0px 1px 0px rgba(255,255,255, .8), 0px 1px 3px rgba(0,0,0, .1);padding:5px;" type="submit"><i class="fa fa-send" style="margin-right:5px;"></i>Submit</button>
												<a href="<?php echo base_url(); ?>index.php/backend/manage_career/" style="text-decoration:none;cursor:pointer;font-size:14px;border:1px solid #ccc;list-style:none;color:#717171;margin:0px 2px;background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#f8f8f8), to(#e9e9e9));
    background: -moz-linear-gradient(0% 0% 270deg,#f8f8f8, #e9e9e9);border-radius:3px;box-shadow: inset 0px 1px 0px rgba(255,255,255, .8), 0px 1px 3px rgba(0,0,0, .1);padding:5px;"><i class="fa fa-undo" style="margin-right:5px;"></i>Cancel</a>
											</div>
										</div>
								</div>
									<?php echo form_close();?>
							</div>
						</div>
					</div>
					<!-- End of sheet pertama -->
				</div>
				<!-- End of Worksheet -->
			</div>
			<!-- End of right side -->
					