 
 
				<!-- Header -->
				<div style="float:left;width:100%;height:11.5%;background:#fff;color:#787878;">
					<div style="margin:0px 20px;width:auto;">	
						<h2 style="text-transform:uppercase;"><i class="fa fa-tasks" style="margin-right:10px"></i>Job Seeker</h2>
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
							<h2>Job Seeker List</h2>
							<hr style="border-color:#fff;"/>
							<div style="background-color:#fff;border-radius:3px;padding:10px;margin:20px 0px;">
								<div style="margin-bottom:20px">
									<?php echo $this->session->flashdata('modify_result');?>
									
									<div style="float:left;margin:10px 0px;">
										<a href="<?php echo base_url();?>index.php/backend/manage_career/grid_position/"><button style="font-size:14px;padding:5px 10px;border:1px solid #ccc;list-style:none;color:#717171;margin:0px 2px;background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#f8f8f8), to(#e9e9e9));
    background: -moz-linear-gradient(0% 0% 270deg,#f8f8f8, #e9e9e9);border-radius:3px;box-shadow: inset 0px 1px 0px rgba(255,255,255, .8), 0px 1px 3px rgba(0,0,0, .1);"><i class="fa fa-refresh" style="margin-right:5px;"></i>Refresh</button></a>
									</div>
									<div style="float:right;margin:10px 0px;">
									<?php echo form_open('backend/manage_career/search_position/');?>
										<input type="text" style="border:1px solid #ccc; border-radius:3px;padding:5px;" name="search" placeholder="Search"/><button type="submit" style="padding:5px;font-size:14px;border:1px solid #ccc;list-style:none;color:#717171;margin:0px 2px;background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#f8f8f8), to(#e9e9e9));
    background: -moz-linear-gradient(0% 0% 270deg,#f8f8f8, #e9e9e9);border-radius:3px;box-shadow: inset 0px 1px 0px rgba(255,255,255, .8), 0px 1px 3px rgba(0,0,0, .1);"><i class="fa fa-search"></i></button>
									<?php echo form_close();?>
									</div>
								</div>
								<table style="width:100%;border-collapse:collapse;border:1px solid transparent;border-radius:3px;color:#787878;">
									<thead>
										<tr style="background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#f8f8f8), to(#e9e9e9));
    background: -moz-linear-gradient(0% 0% 270deg,#f8f8f8, #e9e9e9);border-radius:3px;box-shadow: inset 0px 1px 0px rgba(255,255,255, .8), 0px 1px 3px rgba(0,0,0, .1);">
											<td style="border-bottom:1px solid #ccc;padding:10px;font-weight:bold">Resume Code</td>
											<td style="border-bottom:1px solid #ccc;padding:10px;font-weight:bold">Job Seeker</td>
											<td style="border-bottom:1px solid #ccc;padding:10px;font-weight:bold">Applying Date</td>
											<td style="border-bottom:1px solid #ccc;padding:10px;font-weight:bold">Position</td>
										</tr>
									</thead>
									<tbody>
										<?php if($career->num_rows() == 0){?>
											<tr>
												<td colspan="3">Data Position is Not Available</td>
											</tr>
										<?php }else{ 
												foreach($career->result() as $db){
													echo "<tr>";
													echo "<td style='border-bottom:1px solid #ccc;padding:10px;'>
															<div style='width:300px'>
																<div style='float:left;width:30%'>
																	<span class='fa fa-tasks fa-3x'></span>
																</div>
																<div style='float:left;width:70%'>
																	<span style='width:100%;float:left'>".$db->kode_lamaran."</span>
																</div>
																<div style='float:left;width:70%;margin-top:5px;'>
																	<a href='".base_url()."index.php/backend/manage_career/get_detail_resume/".$db->resume_kode_lamaran."' style='color:#666;font-size:12px;border:1px solid #999;padding:3px 7px;text-decoration:none;border-radius:15px;'>Resume</a>
																	<a href='".base_url()."index.php/backend/manage_career/get_detail_disc/".$db->resume_kode_lamaran."' style='color:#666;font-size:12px;border:1px solid #999;padding:3px 7px;text-decoration:none;border-radius:15px;'>Test Disc</a>
																	<a href='".base_url()."index.php/backend/manage_career/get_detail_desc/".$db->resume_kode_lamaran."' style='color:#666;font-size:12px;border:1px solid #999;padding:3px 7px;text-decoration:none;border-radius:15px;'>Test Desc</a>
																</div>
															</div>
														</td>";
													echo "<td style='border-bottom:1px solid #ccc;padding:10px;'>".$db->pribadi_nama_lengkap."</td>";
													echo "<td style='border-bottom:1px solid #ccc;padding:10px;'>".$db->resume_tgl_isi."</td>";
													echo "<td style='border-bottom:1px solid #ccc;padding:10px;'>".$db->Career_Title."</td>";
													
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
					