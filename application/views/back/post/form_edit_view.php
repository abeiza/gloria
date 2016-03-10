
 
				<script type="text/javascript" src="<?php echo base_url(); ?>assets/ckeditor/ckeditor.js"></script>
				<!-- Header -->
				<div style="float:left;width:100%;height:11.5%;background:#fff;color:#787878;">
					<div style="margin:0px 20px;width:auto;">	
						<h2 style="text-transform:uppercase;"><i class="fa fa-pencil-square-o" style="margin-right:10px"></i>Post Data</h2>
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
									<?php echo form_open_multipart('backend/manage_post/edit/'.$id);?>
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
											echo "<img style='padding-top:4px;' src='".base_url().'uploads/post/thumb/'.$pict."'/>";
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
											<label style="width:90%;float:left;text-align:left;margin-top:10px; margin-right:10px; margin-bottom:10px;">Category</label>
											<div style="width:85%; height:100px;overflow:auto;background:#fff;border:1px solid #ccc;padding:10px 5px;">
												<?php 
													foreach($category->result() as $db){
														$cat_sel = $this->db->query("select post_ref_category, post_ref_post from gocweb_post_category where post_ref_post='".$id."'");
											
															echo "<input type='checkbox' name='category[]' value='".$db->category_id."' "; 
															foreach($cat_sel->result() as $db1){
															if($db->category_id == $db1->post_ref_category)echo "checked"; 
															}
															echo "/>".$db->category_name."<br/>";
														
													}
													
												?>
											</div>
										</div>
										<div style="width:100%;float:left">
											<label style="width:90%;float:left;text-align:left;margin-top:10px; margin-right:10px; margin-bottom:10px;">Tag</label>
											<div style="width:85%; height:100px;overflow:auto;background:#fff;border:1px solid #ccc;padding:10px 5px;">
												<?php 
													foreach($tag->result() as $db){
														$tag_sel = $this->db->query("select post_ref_tag, post_ref_post from gocweb_post_tag where post_ref_post='".$id."'");
											
														echo "<input type='checkbox' name='tag[]' value='".$db->tag_id."' "; 
														foreach($tag_sel->result() as $db1){
															if($db->tag_id == $db1->post_ref_tag)echo "checked"; 
														}
														echo "/>".$db->tag_name."<br/>";
													}
												?>
											</div>
										</div>
										<div style="width:100%;float:left">
											<div style="margin:10px 0px;">
												<button style="cursor:pointer;font-size:14px;border:1px solid #ccc;list-style:none;color:#717171;margin:0px 2px;background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#f8f8f8), to(#e9e9e9));
    background: -moz-linear-gradient(0% 0% 270deg,#f8f8f8, #e9e9e9);border-radius:3px;box-shadow: inset 0px 1px 0px rgba(255,255,255, .8), 0px 1px 3px rgba(0,0,0, .1);padding:5px;" type="submit"><i class="fa fa-send" style="margin-right:5px;"></i>Submit</button>
												<a href="<?php echo base_url(); ?>index.php/backend/manage_post/" style="text-decoration:none;cursor:pointer;font-size:14px;border:1px solid #ccc;list-style:none;color:#717171;margin:0px 2px;background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#f8f8f8), to(#e9e9e9));
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
					