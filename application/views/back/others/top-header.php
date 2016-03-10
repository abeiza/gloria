			
			<style>
			.dropbtn {
				background-color: transparent;
				color: white;
				padding: 16px;
				font-size: 14px;
				border: none;
				cursor: pointer;
			}

			.dropdown {
				position: relative;
				display: inline-block;
			}

			.dropdown-content {
				display: none;
				position: absolute;
				right: 0;
				background-color: #f9f9f9;
				min-width: 160px;
				box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
			}

			.dropdown-content a {
				color: #787878;
				padding: 12px 16px;
				text-decoration: none;
				display: block;
			}

			.dropdown-content a:hover {background-color: #f1f1f1}

			.dropdown:hover .dropdown-content {
				display: block;
			}

			.dropdown:hover .dropbtn {
				background-color:#8dc43f;
			}
			</style>
			<!-- Right Side -->
			<div style="width:85%;height:100%;background:#222;float:left;margin-left:15%;">
				<!-- Top -->
				<div style="float:left;width:100%;height:8%;background:#343a3d">
					<div style="margin:0px 20px;width:auto;">
						<div style="float:left;">
							<i class="fa fa-search" style="color:#6e6e6e;margin-top:15px;margin-left:-20px"></i><input style="float:left;padding:5px 30px 5px 5px;width:300px;border:1px solid transparent;border-radius:3px;margin:10px 0px;color:#6e6e6e;background:#404b4d" type="text" placeholder="Search"/>
						</div>
						<div style="float:left">
							<div style="color:#8dc43f;font-size:14px;margin:7px ;">
								<i class="fa fa-desktop" style="margin-right:5px;color:#fff;background-color:#8dc43f; padding:10px; border-radius:100%"></i>View Website
							</div>
						</div>
						<div style="float:right">
							<div style="color:#fff;font-size:14px;">
								<div class="dropdown" style="float:right;">
								  <button class="dropbtn"><i class="fa fa-user" style="margin-right:5px;"></i><?php echo $this->session->userdata('user_nick');?>  <i class="fa fa-angle-down"></i></button>
								  <div class="dropdown-content" style="font-weight:normal">
									<a href="<?php echo base_url()?>index.php/backend/manage_user/form_edit/<?php echo $this->session->userdata('user_id');?>">My Profile</a>
									<a href="<?php echo base_url(); ?>index.php/backend/login/logout_act"><i class="fa fa-sign-out" style="margin-right:5px;"></i>Logout</a>
								  </div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- End of top -->