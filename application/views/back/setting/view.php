 
 
				<!-- Header -->
				<div style="float:left;width:100%;height:11.5%;background:#fff;color:#787878;">
					<div style="margin:0px 20px;width:auto;">	
						<h2 style="text-transform:uppercase;"><i class="fa fa-gear" style="margin-right:10px"></i>Web Setting</h2>
					</div>
				</div>
				<!-- End of header -->
				<!-- Separator -->
				<div style="float:left;width:100%;height:0.5%;background:#64c0cc;color:#787878;">
				</div>
				<!-- End of separator -->
				<!-- Work Sheet -->
				<div style="float:left;width:100%;background:#f9f9f9;">
					<!-- Sheet Pertama -->
					<div style="float:left;margin:10px 20px;background-color:#fff; border-radius:3px; border:1px solid #f1f1f1">
						<div style="width:auto;color:#787878;padding:5px 20px;">
							<h2>Form Setting</h2>
							<hr style="border-color:#fff;"/>
							<div>
								<?php if(!validation_errors()){echo validation_errors();}else{ echo '<div style="margin:10px 20px;width:auto;background-color:#ffffbf;font-size:12px;border-radius:3px;color:red;padding:10px;"><i class="fa fa-exclamation-triangle" style="color:red;font-size:16px;margin-right:5px;"></i><strong style="font-size:16px;">Warning !</strong>'.validation_errors().'</div>';}?>
								<?php echo $this->session->flashdata('edit_result');?>
								<?php echo form_open_multipart('backend/setting/update_act/'); ?>
							</div>
							<div style="width:900px;float:left">
								<div style="width:100%">
									<label style="width:30%;float:left;text-align:right;margin-top:10px; margin-right:10px;">Company Name*</label>
									<input style="width:40%;float:left;margin:5px 0px;padding:7px;border:1px solid #ccc;" type="text" name="name" value="<?php echo $name;?>"/>
								</div>
								<div style="width:100%;float:left">
									<label style="width:30%;float:left;text-align:right;margin-top:10px; margin-right:10px;">Company Tagline*</label>
									<input style="width:60%;float:left;margin:5px 0px;padding:7px;border:1px solid #ccc;" type="text" name="tagline" value="<?php echo $tagline;?>"/>
								</div>
								<div style="width:100%;float:left">
									<label style="width:30%;float:left;text-align:right;margin-top:10px; margin-right:10px;">Company Description</label>
									<textarea style="height:100px;width:60%;float:left;margin:5px 0px;padding:7px;border:1px solid #ccc;" type="text" name="desc"><?php echo $desc;?></textarea>
								</div>
								<div style="width:100%;float:left">
									<label style="width:30%;float:left;text-align:right;margin-top:10px; margin-right:10px;">Company Logo</label>
									<input style="width:60%;float:left;margin:5px 0px;padding:7px;border:1px solid #ccc;" type="file" name="logo" id="logo"/>
									
									<?php
										if($logo != null or $logo != ''){
											echo '<div style="width:100%;text-align:center;"><img style="width:200px"src="'.base_url().$logo.'"/></div>';
										}
									?>
									
									<!--<img style="width:100%;margin:5px" src="<?php //echo base_url().'uploads/logo/thumb/'.$thumb; ?>"/>-->
								</div>
								<div style="width:100%;float:left">
									<label style="width:30%;float:left;text-align:right;margin-top:10px; margin-right:10px;">Company Vision</label>
									<textarea style="height:100px;width:60%;float:left;margin:5px 0px;padding:7px;border:1px solid #ccc;" type="text" name="visi"><?php echo $visi;?></textarea>
								</div>
								<div style="width:100%;float:left">
									<label style="width:30%;float:left;text-align:right;margin-top:10px; margin-right:10px;">Company Mission</label>
									<textarea style="height:100px;width:60%;float:left;margin:5px 0px;padding:7px;border:1px solid #ccc;" type="text" name="misi"><?php echo $misi;?></textarea>
								</div>
								<div style="width:100%;float:left">
									<label style="width:30%;float:left;text-align:right;margin-top:10px; margin-right:10px;">Company Value / Moto</label>
									<textarea style="height:100px;width:60%;float:left;margin:5px 0px;padding:7px;border:1px solid #ccc;" type="text" name="moto"><?php echo $moto;?></textarea>
								</div>
								
								
								
								<div style="width:100%;float:left;margin:20px 0px">
									<div style="margin-left:32.5%;">
										<button style="cursor:pointer;font-size:14px;border:1px solid #ccc;list-style:none;color:#717171;margin:0px 2px;background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#f8f8f8), to(#e9e9e9));
background: -moz-linear-gradient(0% 0% 270deg,#f8f8f8, #e9e9e9);border-radius:3px;box-shadow: inset 0px 1px 0px rgba(255,255,255, .8), 0px 1px 3px rgba(0,0,0, .1);padding:5px;" type="submit"><i class="fa fa-send" style="margin-right:5px;"></i>Submit</button>
										<a href="<?php echo base_url(); ?>index.php/backend/dashboard/" style="text-decoration:none;cursor:pointer;font-size:14px;border:1px solid #ccc;list-style:none;color:#717171;margin:0px 2px;background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#f8f8f8), to(#e9e9e9));
background: -moz-linear-gradient(0% 0% 270deg,#f8f8f8, #e9e9e9);border-radius:3px;box-shadow: inset 0px 1px 0px rgba(255,255,255, .8), 0px 1px 3px rgba(0,0,0, .1);padding:5px;"><i class="fa fa-undo" style="margin-right:5px;"></i>Cancel</a>
									</div>
								</div>
							</div>
						<?php echo form_close();?>
					</div>
					<!-- End of sheet pertama -->
				</div>
				<!-- End of Worksheet -->
			</div>
			<!-- End of right side -->
					