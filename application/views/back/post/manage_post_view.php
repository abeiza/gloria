 
 
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
				<div style="float:left;width:100%;height:80%;background:#f9f9f9;">
					<!-- Sheet Pertama -->
					<div style="float:left;margin:10px 20px;width:96%;background-color:#fff; border-radius:3px; border:1px solid #f1f1f1">
						<div style="width:auto;color:#787878;padding:5px 20px;">
							<h2>All Data Article</h2>
							<hr style="border-color:#fff;"/>
							<div style="background-color:#fff;border-radius:3px;padding:10px;margin:20px 0px;">
								<div style="margin-bottom:20px">
									<?php echo $this->session->flashdata('modify_result');?>
									<div style="float:left;margin:10px 0px;">
										<a href="<?php echo base_url();?>index.php/backend/manage_post/add/"><button style="font-size:14px;padding:5px 10px;border:1px solid #ccc;list-style:none;color:#717171;margin:0px 2px;background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#f8f8f8), to(#e9e9e9));
    background: -moz-linear-gradient(0% 0% 270deg,#f8f8f8, #e9e9e9);border-radius:3px;box-shadow: inset 0px 1px 0px rgba(255,255,255, .8), 0px 1px 3px rgba(0,0,0, .1);"><i class="fa fa-plus" style="margin-right:5px;"></i>Add New</button></a>
									</div>
									<div style="float:left;margin:10px 0px;">
										<a href="<?php echo base_url();?>index.php/backend/manage_post"><button style="font-size:14px;padding:5px 10px;border:1px solid #ccc;list-style:none;color:#717171;margin:0px 2px;background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#f8f8f8), to(#e9e9e9));
    background: -moz-linear-gradient(0% 0% 270deg,#f8f8f8, #e9e9e9);border-radius:3px;box-shadow: inset 0px 1px 0px rgba(255,255,255, .8), 0px 1px 3px rgba(0,0,0, .1);"><i class="fa fa-refresh" style="margin-right:5px;"></i>Refresh</button></a>
									</div>
									<div style="float:right;margin:10px 0px;">
									<?php echo form_open('backend/manage_post/search/');?>
										<input type="text" style="border:1px solid #ccc; border-radius:3px;padding:5px;" name="search" placeholder="Search"/><button type="submit" style="padding:5px;font-size:14px;border:1px solid #ccc;list-style:none;color:#717171;margin:0px 2px;background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#f8f8f8), to(#e9e9e9));
    background: -moz-linear-gradient(0% 0% 270deg,#f8f8f8, #e9e9e9);border-radius:3px;box-shadow: inset 0px 1px 0px rgba(255,255,255, .8), 0px 1px 3px rgba(0,0,0, .1);"><i class="fa fa-search"></i></button>
									<?php echo form_close();?>
									</div>
								</div>
								<table style="width:100%;border-collapse:collapse;border:1px solid transparent;border-radius:3px;color:#787878;">
									<thead>
										<tr style="background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#f8f8f8), to(#e9e9e9));
    background: -moz-linear-gradient(0% 0% 270deg,#f8f8f8, #e9e9e9);border-radius:3px;box-shadow: inset 0px 1px 0px rgba(255,255,255, .8), 0px 1px 3px rgba(0,0,0, .1);">
											<td style="border-bottom:1px solid #ccc;padding:10px;font-weight:bold">Title</td>
											<td style="border-bottom:1px solid #ccc;padding:10px;font-weight:bold">Author</td>
											<td style="border-bottom:1px solid #ccc;padding:10px;font-weight:bold">Categories</td>
											<td style="border-bottom:1px solid #ccc;padding:10px;font-weight:bold">Tags</td>
											<td style="border-bottom:1px solid #ccc;padding:10px;font-weight:bold">Status</td>
											<td style="border-bottom:1px solid #ccc;padding:10px;font-weight:bold">Date Modify</td>
										</tr>
									</thead>
									<tbody>
										<?php if($post_grid->num_rows() == 0){?>
											<tr>
												<td colspan="3">Data Publish Article is Empty</td>
											</tr>
										<?php }else{ 
												foreach($post_grid->result() as $db){
													echo "<tr>";
													echo "<td style='border-bottom:1px solid #ccc;padding:10px;'>
													<div style='width:200px'>
															<div style='float:left;width:100%'>
																<span style='width:100%;float:left'>".$db->post_title."</span>
																<span style='width:100%;float:left'><a style='margin-right:15px;font-size:12px;text-decoration:none;color:#666;' href='".base_url()."index.php/backend/manage_post/form_edit/".$db->post_id."'><i class='fa fa-edit' style='margin-right:5px;'></i>Edit</a> <a style='margin-right:15px;font-size:12px;text-decoration:none;color:#666;' href='".base_url()."index.php/backend/manage_post/delete/".$db->post_id."'><i class='fa fa-trash-o' style='margin-right:5px;'></i>Delete</a></span>
															</div>
													</div>
														</td>";
													echo "<td style='border-bottom:1px solid #ccc;padding:10px;'>".$db->author."</td>";
													$category = $this->db->query("select gocweb_post_category.post_ref_category, gocweb_category.category_name from gocweb_post_category, gocweb_category where gocweb_category.category_id=gocweb_post_category.post_ref_category and gocweb_post_category.post_ref_post='".$db->post_id."'");
													echo "<td style='border-bottom:1px solid #ccc;padding:10px;'>";
													foreach($category->result() as $db1){
														echo "<span style='border-radius:3px;font-size:12px;padding:5px;background:#64c0cc;color:#fff;margin:3px;'>".$db1->category_name."</span>";
													}
													echo "</td>";
													$tag = $this->db->query("select gocweb_post_tag.post_ref_tag, gocweb_tag.tag_name from gocweb_post_tag, gocweb_tag where gocweb_tag.tag_id=gocweb_post_tag.post_ref_tag and gocweb_post_tag.post_ref_post='".$db->post_id."'");
													echo "<td style='border-bottom:1px solid #ccc;padding:10px;'>";
													foreach($tag->result() as $db2){
														echo "<span style='border-radius:3px;font-size:12px;padding:5px;background:#64c0cc;color:#fff;margin:3px;'>".$db2->tag_name."</span>";
													}
													echo "</td>";
													echo "<td style='border-bottom:1px solid #ccc;padding:10px;'>".$db->post_status."</td>";
													echo "<td style='border-bottom:1px solid #ccc;padding:10px;'>";
													if(empty($db->post_date_update)){
														echo "<span style='font-size:14px;'><i class='fa fa-clock-o'>".$db->post_date_create."</i><br>Create Date</span>";
													}else{
														echo "<span style='font-size:14px;'><i class='fa fa-clock-o'>".$db->post_date_update."</i><br>Last Modified</span>";
													}
													echo "</td>";
													echo "</tr>";
													
												}
										 }?>
									</tbody>
								</table>
								<style>
									.pagination ul {
										display: inline-block;
										padding: 0;
										margin: 10px 0px;
										border-radius:3px;
									}

									.pagination ul li {float:left;font-size:14px;border:1px solid #ccc;list-style:none;color:#717171;margin:0px 2px;background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#f8f8f8), to(#e9e9e9));
    background: -moz-linear-gradient(0% 0% 270deg,#f8f8f8, #e9e9e9);border-radius:3px;box-shadow: inset 0px 1px 0px rgba(255,255,255, .8), 0px 1px 3px rgba(0,0,0, .1);}

									.pagination ul li a, .pagination ul li .active {
										color: #717171;
										float: left;
										padding: 5px 9px;
										text-decoration: none;
									}
								</style>
								<div style="float:left;"><?php echo $paging;?></div>
								<div style="float:right;padding:10px;margin-top:10px;font-size:12px;text-align:right;"><?php echo $of." items";?> </div>
							</div>
						</div>
					</div>
					<!-- End of sheet pertama -->
				</div>
				<!-- End of Worksheet -->
			</div>
			<!-- End of right side -->
					