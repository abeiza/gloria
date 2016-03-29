
 
				<script type="text/javascript" src="<?php echo base_url(); ?>assets/ckeditor/ckeditor.js"></script>
				<!-- Header -->
				<div style="float:left;width:100%;height:11.5%;background:#fff;color:#787878;">
					<div style="margin:0px 20px;width:auto;">	
						<h2 style="text-transform:uppercase;"><i class="fa fa-files-o" style="margin-right:10px"></i>Pages</h2>
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
					<div style="float:left;margin:10px 20px;width:96%;background-color:#fff; border-radius:3px; border:1px solid #f1f1f1">
						<div style="width:auto;color:#787878;padding:5px 20px;">
							<h2>Form Edit</h2>
							<hr style="border-color:#fff;"/>
							<div style="background-color:#fff;border-radius:3px;padding:10px;margin:20px 0px;">
								<div>
									<?php if(!validation_errors()){echo validation_errors();}else{ echo '<div style="margin:10px 20px;width:auto;background-color:#ffffbf;font-size:12px;border-radius:3px;color:red;padding:10px;"><i class="fa fa-exclamation-triangle" style="color:red;font-size:16px;margin-right:5px;"></i><strong style="font-size:16px;">Warning !</strong>'.validation_errors().'</div>';}?>
									<?php echo $this->session->flashdata('edit_result');?>
									<?php echo form_open_multipart('backend/manage_page/edit/'.$id);?>
								</div>
								<div style="width:80%;float:left;padding:30px 0px 50px 0px;">
										<div style="width:100%">
											<label style="width:90%;float:left;text-align:left;margin-top:10px; margin-right:10px;">Title*</label>
											<input style="width:90%;float:left;margin:5px 0px;padding:7px;border:1px solid #ccc;" type="text" name="title" value="<?php echo $title;?>"/>
										</div>
										<div style="width:100%">
											<label style="width:90%;float:left;text-align:left;margin-top:10px; margin-right:10px;">Short Desc*</label>
											<textarea style="height:100px;width:60%;float:left;margin:5px 0px;padding:7px;border:1px solid #ccc;" type="text" name="short"><?php echo $short;?></textarea>
										</div>
										<div style="width:100%">
											<label style="width:90%;float:left;text-align:left;margin-top:10px; margin-right:10px;">Image Post*</label>
											<input style="width:40%;float:left;margin:5px 0px;padding:7px;border:1px solid #ccc;" type="file" name="pict"/>
										</div>
										<?php if($pict){
											echo "<div style='margin-top:60px;float:left;border:1px solid #ccc;padding:2px 5px;text-align:left;'>";
											echo "<img style='padding-top:4px;' src='".base_url().'uploads/page/thumb/'.$pict."'/>";
											echo "</div>";
										} ?>
										<div style="width:800px;float:left;margin-top:20px;">
											<textarea name="desc" id="desc"><?php echo $desc; ?></textarea>
											<script>CKEDITOR.replace('desc');</script>
										</div>
								</div>
								<div style="width:20%;float:left;background:transparent;padding:30px 0px 50px 0px;">
										<div style="width:100%;float:left">
											<label style="width:90%;float:left;text-align:left;margin-top:10px; margin-right:10px;">Status*</label>
											<select style="width:90%;float:left;margin:5px 0px;padding:7px;border:1px solid #ccc;" type="text" name="status">
												<?php 
													if($status == "draft"){
														echo '<option value="draft" selected>Draft</option>
												<option value="posting">Publish</option>
												<option value="trash">Trash</option>';
													}else if($status == "posting"){
														echo '<option value="draft">Draft</option>
												<option value="posting" selected>Publish</option>
												<option value="trash">Trash</option>';
													}else{
														echo '<option value="draft">Draft</option>
												<option value="posting">Publish</option>
												<option value="trash" selected>Trash</option>';
													}
												?>
											</select>
										</div>
										<div style="width:100%;float:left">
											<label style="width:90%;float:left;text-align:left;margin-top:10px; margin-right:10px;">Type Page*</label>
											<select style="width:90%;float:left;margin:5px 0px;padding:7px;border:1px solid #ccc;" type="text" name="type">
												<option value="" selected disabled>-- Select Type --</option>
												<option value="regular" <?php if($type == 'regular'){echo 'selected';}?>>Regular</option>
												<option value="product" <?php if($type == 'product'){echo 'selected';}?>>Product</option>
											</select>
										</div>
										<div style="width:100%;float:left">
											<label style="width:90%;float:left;text-align:left;margin-top:10px; margin-right:10px;">Category*</label>
											<select style="width:90%;float:left;margin:5px 0px;padding:7px;border:1px solid #ccc;" type="text" name="category">
												<?php 
													foreach($category->result() as $db){
														echo "<option value='".$db->page_category_id."'";
														if($categoryz == $db->page_category_id){
															echo "selected";
														}
														echo ">".$db->page_category_name."</option>";
													}
												?>
											</select>
										</div>
										<div style="width:100%;float:left">
											<div style="margin:10px 0px;">
												<button style="cursor:pointer;font-size:14px;border:1px solid #ccc;list-style:none;color:#717171;margin:0px 2px;background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#f8f8f8), to(#e9e9e9));
    background: -moz-linear-gradient(0% 0% 270deg,#f8f8f8, #e9e9e9);border-radius:3px;box-shadow: inset 0px 1px 0px rgba(255,255,255, .8), 0px 1px 3px rgba(0,0,0, .1);padding:5px;" type="submit"><i class="fa fa-send" style="margin-right:5px;"></i>Submit</button>
												<a href="<?php echo base_url(); ?>index.php/backend/manage_page/" style="text-decoration:none;cursor:pointer;font-size:14px;border:1px solid #ccc;list-style:none;color:#717171;margin:0px 2px;background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#f8f8f8), to(#e9e9e9));
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
					