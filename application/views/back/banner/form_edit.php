
 
				<link id="base-style-responsive" href="<?php echo base_url().'assets/css/chosen.css';?>" rel="stylesheet" />
				<script src="<?php echo base_url().'assets/js/'; ?>jquery-1.7.2.min.js"></script>
				<!-- Header -->
				<div style="float:left;width:100%;height:11.5%;background:#fff;color:#787878;">
					<div style="margin:0px 20px;width:auto;">	
						<h2 style="text-transform:uppercase;"><i class="fa fa-photo" style="margin-right:10px"></i>Banner</h2>
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
							<h2>Form Edit</h2>
							<hr style="border-color:#fff;"/>
							<div style="background-color:#fff;border-radius:3px;padding:10px;margin:20px 0px;">
								<div>
									<?php if(!validation_errors()){echo validation_errors();}else{ echo '<div style="margin:10px 20px;width:auto;background-color:#ffffbf;font-size:12px;border-radius:3px;color:red;padding:10px;"><i class="fa fa-exclamation-triangle" style="color:red;font-size:16px;margin-right:5px;"></i><strong style="font-size:16px;">Warning !</strong>'.validation_errors().'</div>';}?>
									<?php echo $this->session->flashdata('add_result');?>
								</div>
								<?php echo form_open_multipart('backend/banner/edit/'.$id);?>
								<div style="width:800px;">
										<input style="width:60%;float:left;margin:5px 0px;padding:7px;border:1px solid #ccc;" type="hidden" name="id" value="<?php echo $id;?>"/>
										<div style="width:100%">
											<label style="width:30%;float:left;text-align:right;margin-top:10px; margin-right:10px;">Banner Title</label>
											<input style="width:60%;float:left;margin:5px 0px;padding:7px;border:1px solid #ccc;" type="text" name="title" value="<?php echo $title;?>"/>
										</div>
										<div style="width:100%">
											<label style="width:30%;float:left;text-align:right;margin-top:10px; margin-right:10px;">Description</label>
											<textarea style="width:60%;height:100px;float:left;margin:5px 0px;padding:7px;border:1px solid #ccc;" type="text" name="desc"><?php echo $desc;?></textarea>
										</div>
										<div style="width:100%;float:left;">
											<label style="width:30%;float:left;text-align:right;margin-top:10px; margin-right:10px;">Link Url : </label>
											<input style="width:50%;float:left;margin:5px 0px;padding:7px;border:1px solid #ccc;background-color:#e1e1e1;" type="text" name="url_old" value="<?php echo $url;?>" readonly/>
										</div>
										<div style="width:100%;float:left;">
										<label style="width:30%;float:left;text-align:right;margin-top:10px; margin-right:10px;">Type</label>
										<select class="chzn-select" name="kode_menu" id="kode_menu" style="width:20%;">
											<option value="" disabled selected>-- Select Page--</option>
											<option value="page">Page</option>
											<option value="page_category">Category Page</option>
											<option value="post">Post</option>
											<option value="post_category">Category Post</option>
											<option value="link">Link Custom</option>
										</select><br/>
										</div>
										<div id="data" style="float:left;width:100%"></div>
										<div style="width:100%;">
											<label style="width:30%;float:left;text-align:right;margin-top:10px; margin-right:10px;">Background Image</label>
											<img src="<?php echo base_url().'uploads/banner/original/'.$pict?>" style="width:65%;height:100px;border:1px solid #eee;padding:3px;"/>
										</div>
										<div style="width:100%">
											<label style="width:30%;float:left;text-align:right;margin-top:10px; margin-right:10px;">Background Image</label>
											<input style="width:60%;float:left;margin:5px 0px;padding:7px;border:1px solid #ccc;" type="file" name="pict"/>
										</div>
										<div style="width:100%;">
											<div style="margin-left:32.5%;">
												<button style="cursor:pointer;font-size:14px;border:1px solid #ccc;list-style:none;color:#717171;margin:0px 2px;background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#f8f8f8), to(#e9e9e9));
    background: -moz-linear-gradient(0% 0% 270deg,#f8f8f8, #e9e9e9);border-radius:3px;box-shadow: inset 0px 1px 0px rgba(255,255,255, .8), 0px 1px 3px rgba(0,0,0, .1);padding:5px;" type="submit"><i class="fa fa-send" style="margin-right:5px;"></i>Submit</button>
												<a href="<?php echo base_url(); ?>index.php/backend/banner/" style="text-decoration:none;cursor:pointer;font-size:14px;border:1px solid #ccc;list-style:none;color:#717171;margin:0px 2px;background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#f8f8f8), to(#e9e9e9));
    background: -moz-linear-gradient(0% 0% 270deg,#f8f8f8, #e9e9e9);border-radius:3px;box-shadow: inset 0px 1px 0px rgba(255,255,255, .8), 0px 1px 3px rgba(0,0,0, .1);padding:5px;"><i class="fa fa-undo" style="margin-right:5px;"></i>Cancel</a>
											</div>
										</div>
										<script src="<?php echo base_url(); ?>assets/js/chosen.jquery.js" type="text/javascript"></script>
										<script type="text/javascript"> $(".chzn-select").chosen().change(function(){ 
												var kode = $("#kode_menu").val(); 
												$.ajax({ 
												url: "<?php echo base_url(); ?>index.php/backend/banner/select_data_menu/", 
												data: "kode="+kode, 
												cache: false, 
												success: function(msg){ 
												$("#data").html(msg);
												//document.frm.add.disabled=false;
											} 
										})
										});
									</script>
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
					