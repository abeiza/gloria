
 
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
					});
				</script>
				<script type="text/javascript" src="<?php echo base_url(); ?>assets/ckeditor/ckeditor.js"></script>
				<!-- Header -->
				<div style="float:left;width:100%;height:11.5%;background:#fff;color:#787878;">
					<div style="margin:0px 20px;width:auto;">	
						<h2 style="text-transform:uppercase;"><i class="fa fa-briefcase" style="margin-right:10px"></i>Post Career</h2>
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
							<h2>Form edit</h2>
							<hr style="border-color:#fff;"/>
							<div style="background-color:#fff;border-radius:3px;padding:10px;margin:20px 0px;">
								<div>
									<?php if(!validation_errors()){echo validation_errors();}else{ echo '<div style="margin:10px 20px;width:auto;background-color:#ffffbf;font-size:12px;border-radius:3px;color:red;padding:10px;"><i class="fa fa-exclamation-triangle" style="color:red;font-size:16px;margin-right:5px;"></i><strong style="font-size:16px;">Warning !</strong>'.validation_errors().'</div>';}?>
									<?php echo $this->session->flashdata('add_result');?>
								</div>
								<?php echo form_open('backend/manage_career/edit/'.$id);?>
								<div style="width:80%;float:left;padding:30px 0px 50px 0px;">
										<div style="width:100%">
											<label style="width:90%;float:left;text-align:left;margin-top:10px; margin-right:10px;">Job Title*</label>
											<input value="<?php echo $title;?>" style="width:90%;float:left;margin:5px 0px;padding:7px;border:1px solid #ccc;" type="text" name="title"/>
										</div>
										<label style="width:90%;float:left;text-align:left;margin-top:10px; margin-right:10px;">Job Description*:</label>
										<div style="width:90%;float:left;margin-top:5px;">
											<textarea name="desc" style="height:500px;" id="desc"><?php echo $desc;?></textarea>
											<script>CKEDITOR.replace('desc');</script>
										</div>
										<label style="width:90%;float:left;text-align:left;margin-top:10px; margin-right:10px;">Requirement*:</label>
										<div style="width:90%;float:left;margin-top:5px;">
											<textarea name="req" style="height:500px;" id="req"><?php echo $req;?></textarea>
											<script>CKEDITOR.replace('req');</script>
										</div>
								</div>
								<div style="width:20%;float:left;background:transparent;padding:30px 0px 50px 0px;">
										<div style="width:100%;float:left">
											<label style="width:90%;float:left;text-align:left;margin-top:10px; margin-right:10px;">Department*</label>
											<select style="width:90%;float:left;margin:5px 0px;padding:7px;border:1px solid #ccc;" type="text" name="dept">
												<option value="" selected disabled>-- Select Dept --</option>
												<option value="IT Department" <?php if($dept == 'IT Department'){echo 'selected'; }?>>IT Dept</option>
												<option value="Finance & Accounting Department" <?php if($dept == 'Finance & Accounting Department'){echo 'selected'; }?>>Finance & Acc Dept</option>
												<option value="HR Department" <?php if($dept == 'HR Department'){echo 'selected'; }?>>HR Dept</option>
												<option value="Marketing Department" <?php if($dept == 'Marketing Department'){echo 'selected'; }?>>Marketing Dept</option>
												<option value="Production Department" <?php if($dept == 'Production Department'){echo 'selected'; }?>>Production Dept</option>
												<option value="R n D Department" <?php if($dept == 'R n D Department'){echo 'selected'; }?>>R&D Dept</option>
												<option value="QA Department" <?php if($dept == 'QA Department'){echo 'selected'; }?>>QA Dept</option>
												<option value="SCM Department" <?php if($dept == 'SCM Department'){echo 'selected'; }?>>SCM Dept</option>
												<option value="General" <?php if($dept == 'General'){echo 'selected'; }?>>General</option>
											</select>
										</div>
										<div style="width:100%;float:left">
											<label style="width:90%;float:left;text-align:left;margin-top:10px; margin-right:10px;">Location*</label>
											<input value="<?php echo $location;?>" style="width:90%;float:left;margin:5px 0px;padding:7px;border:1px solid #ccc;" type="text" name="location"/>
										</div>
										<div style="width:100%;float:left">
											<label style="width:90%;float:left;text-align:left;margin-top:10px; margin-right:10px;">Latest Education*</label>
											<input value="<?php echo $edu;?>" style="width:90%;float:left;margin:5px 0px;padding:7px;border:1px solid #ccc;" type="text" name="edu"/>
										</div>
										<div style="width:100%;float:left">
											<label style="width:90%;float:left;text-align:left;margin-top:10px; margin-right:10px;">Work Experience*</label>
											<input value="<?php echo $experience;?>" style="width:90%;float:left;margin:5px 0px;padding:7px;border:1px solid #ccc;" type="text" name="experience"/>
										</div>
										<div style="width:100%;float:left">
											<label style="width:90%;float:left;text-align:left;margin-top:10px; margin-right:10px;">Expiration Date</label>
											<input value="<?php echo $exp;?>" style="width:90%;float:left;margin:5px 0px;padding:7px;border:1px solid #ccc;" type="text" name="exp" id="exp"/>
										</div>
										<div style="width:100%;float:left">
											<label style="width:90%;float:left;text-align:left;margin-top:10px; margin-right:10px;">Count Position</label>
											<input value="<?php echo $co;?>" style="width:90%;float:left;margin:5px 0px;padding:7px;border:1px solid #ccc;" type="text" name="co" id="co"/>
										</div>
										<div style="width:100%;float:left">
											<label style="width:90%;float:left;text-align:left;margin-top:10px; margin-right:10px;">Status*</label>
											<select style="width:90%;float:left;margin:5px 0px;padding:7px;border:1px solid #ccc;" type="text" name="status">
												<option value="" selected disabled>-- Select Status --</option>
												<option value="draft" <?php if($status == 'draft'){echo 'selected'; }?>>Draft</option>
												<option value="posting" <?php if($status == 'posting'){echo 'selected'; }?>>Publish</option>
												<option value="trash" <?php if($status == 'trash'){echo 'selected'; }?>>Trash</option>
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
					