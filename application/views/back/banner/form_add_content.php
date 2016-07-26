
				
				<!-- Header -->
				<div style="float:left;width:100%;height:11.5%;background:#fff;color:#787878;">
					<div style="margin:0px 20px;width:auto;">	
						<h2 style="text-transform:uppercase;"><i class="fa fa-gavel" style="margin-right:10px"></i>Banner Setting</h2>
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
							<h2>Content Banner</h2>
							<hr style="border-color:#fff;"/>
							<div style="background-color:#fff;border-radius:3px;padding:10px;margin:20px 0px;">
								<div>
									<?php if(!validation_errors()){echo validation_errors();}else{ echo '<div style="margin:10px 20px;width:auto;background-color:#ffffbf;font-size:12px;border-radius:3px;color:red;padding:10px;"><i class="fa fa-exclamation-triangle" style="color:red;font-size:16px;margin-right:5px;"></i><strong style="font-size:16px;">Warning !</strong>'.validation_errors().'</div>';}?>
									<?php echo $this->session->flashdata('add_result');?>
								</div>
								
									<?php 
										$query1 = $this->db->query("select banner_background from gocweb_banner where banner_id='".$this->uri->segment(4)."'");
										
										if($query1->num_rows() != 0){
											foreach($query1->result() as $db){
												?>
												<div style="width:100%;float:left;padding:30px 0px 50px 0px;">
												<span>Background :</span>
													<img src="<?php echo base_url().'uploads/banner/original/'.$db->banner_background;?>" style="z-index:0;width:100%;border:1px solid #eee;padding:3px;"/>
								
												</div>
											<?php
											}
										}
									?>
									
								<div style="width:90%;float:left;padding:30px 0px 50px 0px;">
									<div style="width:100%;float:left">
										<span>Form Content Animation :</span>
										<?php echo form_open_multipart('backend/banner/add_content/'.$kode); ?>
										
										<input style="width:60%;float:left;margin:5px 0px;padding:7px;border:1px solid #ccc;" type="hidden" name="id" value="<?php echo $kode;?>"/>
										
										<div style="width:100%;float:left;">
											<label style="width:30%;float:left;text-align:right;margin-top:10px; margin-right:10px;">Image Text</label>
											<input style="width:60%;float:left;margin:5px 0px;padding:7px;border:1px solid #ccc;" type="file" name="pict"/>
										</div>
										<div style="width:100%;float:left;">
											<label style="width:30%;float:left;text-align:right;margin-top:10px; margin-right:10px;">Animation Fade Position</label>
											<select name="position" style="width:60%;float:left;margin:5px 0px;padding:7px;border:1px solid #ccc;">
												<option value="caption lfl">Fade Left</option>
												<option value="caption lfr">Fade Right</option>
												<option value="caption lfb">Fade Bottom</option>
												<option value="caption lft">Fade Top</option>
											</select>
										</div>
										<div style="width:100%;float:left;">
											<label style="width:30%;float:left;text-align:right;margin-top:10px; margin-right:10px;">Coordinate x</label>
											<input style="width:60%;float:left;margin:5px 0px;padding:7px;border:1px solid #ccc;" type="number" name="x" value="500"/>
										</div>
										<div style="width:100%;float:left;">
											<label style="width:30%;float:left;text-align:right;margin-top:10px; margin-right:10px;">Coordinate y</label>
											<input style="width:60%;float:left;margin:5px 0px;padding:7px;border:1px solid #ccc;" type="number" name="y" value="200"/>
										</div>
										<div style="width:100%;float:left;">
											<label style="width:30%;float:left;text-align:right;margin-top:10px; margin-right:10px;">Speed</label>
											<input style="width:60%;float:left;margin:5px 0px;padding:7px;border:1px solid #ccc;" type="number" name="speed" value="900"/>
										</div>
										<div style="width:100%;float:left;">
											<label style="width:30%;float:left;text-align:right;margin-top:10px; margin-right:10px;">Start Position</label>
											<input style="width:60%;float:left;margin:5px 0px;padding:7px;border:1px solid #ccc;" type="number" name="start" value="900"/>
										</div>
										<div style="width:100%;float:left;">
											<label style="width:30%;float:left;text-align:right;margin-top:10px; margin-right:10px;">Type Animation</label>
											<select name="animation" style="width:60%;float:left;margin:5px 0px;padding:7px;border:1px solid #ccc;">
												<option value="easeOutExpo">Expo</option>
												<option value="easeOutElastic">Elastic</option>
												<option value="easeOutBounce">Bounce</option>
											</select>
										</div>
										
										<div style="width:100%;float:left;">
										<label style="width:30%;float:left;text-align:right;margin-top:10px; margin-right:10px;"></label>
										<div style="margin:5px;width:60%;">
											<button style="cursor:pointer;font-size:14px;border:1px solid #ccc;list-style:none;color:#717171;margin:0px 2px;background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#f8f8f8), to(#e9e9e9));
background: -moz-linear-gradient(0% 0% 270deg,#f8f8f8, #e9e9e9);border-radius:3px;box-shadow: inset 0px 1px 0px rgba(255,255,255, .8), 0px 1px 3px rgba(0,0,0, .1);padding:5px;" type="submit"><i class="fa fa-send" style="margin-right:5px;"></i>Submit</button>
											<a href="<?php echo base_url(); ?>index.php/backend/banner/" style="text-decoration:none;cursor:pointer;font-size:14px;border:1px solid #ccc;list-style:none;color:#717171;margin:0px 2px;background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#f8f8f8), to(#e9e9e9));
background: -moz-linear-gradient(0% 0% 270deg,#f8f8f8, #e9e9e9);border-radius:3px;box-shadow: inset 0px 1px 0px rgba(255,255,255, .8), 0px 1px 3px rgba(0,0,0, .1);padding:5px;"><i class="fa fa-undo" style="margin-right:5px;"></i>Cancel</a>
										</div>
									</div>
										<?php echo form_close();?>
									</div>
									
									<div style="width:100%;float:left">
										<table style="width:100%;border-collapse:collapse;border:1px solid transparent;border-radius:3px;color:#787878;">
											<thead>
												<tr style="background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#f8f8f8), to(#e9e9e9));
    background: -moz-linear-gradient(0% 0% 270deg,#f8f8f8, #e9e9e9);border-radius:3px;box-shadow: inset 0px 1px 0px rgba(255,255,255, .8), 0px 1px 3px rgba(0,0,0, .1);">
													<td style="border-bottom:1px solid #ccc;padding:10px;font-weight:bold">Banner Parent</td>
													<td style="border-bottom:1px solid #ccc;padding:10px;font-weight:bold">Content</td>
													<td style="border-bottom:1px solid #ccc;padding:10px;font-weight:bold">Caption Animation</td>
													<td style="border-bottom:1px solid #ccc;padding:10px;font-weight:bold">x</td>
													<td style="border-bottom:1px solid #ccc;padding:10px;font-weight:bold">y</td>
													<td style="border-bottom:1px solid #ccc;padding:10px;font-weight:bold">Speed</td>
													<td style="border-bottom:1px solid #ccc;padding:10px;font-weight:bold">Start</td>
													<td style="border-bottom:1px solid #ccc;padding:10px;font-weight:bold">Animation Content</td>
													<td style="border-bottom:1px solid #ccc;padding:10px;font-weight:bold"></td>
												</tr>
											</thead>
											<tbody>
												<?php if($sub_banner->num_rows() == 0){?>
													<tr>
														<td style="border-bottom:1px solid #ccc;padding:10px;text-align:center" colspan="9">Content Banner is Empty</td>
													</tr>
												<?php }else{
															foreach($sub_banner->result() as $db){?>
													<tr>
														<td style="border-bottom:1px solid #ccc;padding:10px;"><?php echo $db->banner_contect_parent;?></td>
														<td style="border-bottom:1px solid #ccc;padding:10px;"><img style="width:150px;" src="<?php echo base_url().'uploads/banner/content/'.$db->banner_pict;?>"/></td>
														<td style="border-bottom:1px solid #ccc;padding:10px;"><?php echo $db->banner_content_post_animation;?></td>
														<td style="border-bottom:1px solid #ccc;padding:10px;"><?php echo $db->banner_content_x;?></td>
														<td style="border-bottom:1px solid #ccc;padding:10px;"><?php echo $db->banner_content_y;?></td>
														<td style="border-bottom:1px solid #ccc;padding:10px;"><?php echo $db->banner_content_speed;?></td>
														<td style="border-bottom:1px solid #ccc;padding:10px;"><?php echo $db->banner_content_start;?></td>
														<td style="border-bottom:1px solid #ccc;padding:10px;"><?php echo $db->banner_content_animation;?></td>
														<td style="border-bottom:1px solid #ccc;padding:10px;"><a style="text-decoration:none;cursor:pointer;font-size:14px;border:1px solid #ccc;list-style:none;color:#717171;margin:0px;background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#f8f8f8), to(#e9e9e9));
background: -moz-linear-gradient(0% 0% 270deg,#f8f8f8, #e9e9e9);border-radius:3px;box-shadow: inset 0px 1px 0px rgba(255,255,255, .8), 0px 1px 3px rgba(0,0,0, .1);padding:5px;" href="<?php echo base_url().'index.php/backend/banner/delete_content/'.$db->banner_contect_parent.'/'.$db->banner_content_id;?>">Delete</a></td>
													</tr>
												<?php }
													}?>
												
											</tbody>
										</table>
									</div>
									
									
									
									<script src="<?php echo base_url(); ?>assets/js/chosen.jquery.js" type="text/javascript"></script>
									<script type="text/javascript"> $(".chzn-select").chosen().change(function(){ 
												var kode = $("#kode").val(); 
												$.ajax({ 
												url: "<?php echo base_url(); ?>index.php/backend/menu/select_data/", 
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
							</div>
						</div>
					</div>
					<!-- End of sheet pertama -->
				</div>
				<!-- End of Worksheet -->
			</div>
			<!-- End of right side -->
					