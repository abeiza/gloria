			
			<!-- Left Side -->
			<div style="width:15%;height:100%;background:#666;float:left;position:fixed">
				<!-- Logo Side -->
				<div style="width:100%;height:20%;background:#343a3d;float:left;">
					<div style="width:100%;height:40%;float:left;text-align:center;background-color:#343a3d">
						<div style="width:100%;height:100%;">
							<div style="color:#ccc;margin-top:15px;">Gloria Origita Cosmetics</div>
						</div>
					</div>
					<div style="width:100%;height:60%;float:left;background-color:#293033">
						<div style="width:100%;height:100%;">
							<div style="width:50%;height:100%;float:left;"><i class="fa fa-user fa-4x" style="margin:7px 20px;color:#ccc"></i></div>
							<div style="width:50%;height:100%;color:#ddd;float:left;">
								<div style="margin-top:10px;">
									<span style="float:left;font-size:13px"><?php echo $this->session->userdata('user_nick'); ?><br/>(Administrator)</span>
									<div style="float:left;font-size:11px;">Online</div><div style="float:left;margin:5px;width:5px;height:5px;border-radius:100%;background-color:#8dc43f"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- End of logo side -->
				<!-- Menu Side -->
				<div style="width:100%;height:80%;background:#343a3d;float:left;color:#fff">
				<style>
					.transition, p,.submenu, .menu li i:before, .menu li i:after {
					  transition: all 0.25s ease-in-out;
					}

					.flipIn, h1, .menu li {
					  animation: flipdown 0.5s ease both;
					}
					.menu {
					  list-style: none;
					  perspective: 900;
					  padding: 0;
					  margin: 20px 0px;
					  background-color:#343a3d;
					}
					.menu li {
					  position: relative;
					  padding: 0;
					  padding-bottom: 5px;
					  padding-top: 5px;
					  //border-top: 1px dotted #dce7eb;
					  margin: 0px 20px;
					}
					//.menu li:nth-of-type(1) {
					//  animation-delay: 0.5s;
					//}
					//.menu li:nth-of-type(2) {
					//  animation-delay: 0.75s;
					//}
					//.menu li:nth-of-type(3) {
					//  animation-delay: 1s;
					//}
					//.menu li:nth-of-type(4) {
					//  animation-delay: 1.25s;
					//}
					//.menu li:nth-of-type(5) {
					//  animation-delay: 1.5s;
					//}
					//.menu li:nth-of-type(6) {
					//  animation-delay: 1.75s;
					//}
					//.menu li:last-of-type {
					//  padding-bottom: 0;
					//}
					.menu li i {
					  position: absolute;
					  transform: translate(-6px, 0);
					  margin-top: 0;
					  right: 0;
					}
					.menu li i:before, .menu li i:after {
					  content: "";
					  position: absolute;
					  background-color: #787878;
					  width: 3px;
					  height: 9px;
					  margin-top:5px;
					}
					.menu li i:before {
					  transform: translate(-2px, 0) rotate(45deg);
					}
					.menu li i:after {
					  transform: translate(2px, 0) rotate(-45deg);
					}
					.menu li input[type=checkbox] {
					  position: absolute;
					  cursor: pointer;
					  width: 30%;
					  height: auto;
					  z-index: 1;
					  opacity: 0;
					  margin-left:70%;
					}
					.menu li input[type=checkbox]:checked ~ .submenu {
					  margin-top: 0;
					  max-height: 0;
					  opacity: 0;
					  transform: translate(0, 50%);
					}
					.menu li input[type=checkbox]:checked ~ p {
					  margin-top: 0;
					  max-height: 0;
					  opacity: 0;
					  transform: translate(0, 50%);
					}
					.menu li input[type=checkbox]:checked ~ i:before {
					  transform: translate(2px, 0) rotate(45deg);
					}
					.menu li input[type=checkbox]:checked ~ i:after {
					  transform: translate(-2px, 0) rotate(-45deg);
					}

					@keyframes flipdown {
					  0% {
						opacity: 0;
						transform-origin: top center;
						transform: rotateX(-90deg);
					  }
					  5% {
						opacity: 1;
					  }
					  80% {
						transform: rotateX(8deg);
					  }
					  83% {
						transform: rotateX(6deg);
					  }
					  92% {
						transform: rotateX(-3deg);
					  }
					  100% {
						transform-origin: top center;
						transform: rotateX(0deg);
					  }
					}

				</style>
					<ul class="menu" style="font-size:14px;">
					  <li>
						<input type="checkbox" checked>
						<i></i>
						<span class="fa fa-dashboard" style="margin-right:10px;color:#fff"></span><span>Dashboard</span>
						<ul class="submenu menu" style="margin-bottom:14px;margin-left:-20px;margin-right:-20px; background:#8dc43f; color:#ededeb">
							<li style="padding:10px;"><a style="text-decoration:none;color:#ededeb" href="<?php echo base_url();?>index.php/backend/dashboard/"><span class="fa fa-home" style="margin-right:10px;"></span><span>Home</span></a></li>
							<li style="padding:10px;"><a style="text-decoration:none;color:#ededeb" href="#"><span class="fa fa-info-circle" style="margin-right:10px;"></span><span>Updates</span></a></li>
						</ul>
					  </li>
					  <hr style="border-color:#7f7f7f;"/>
					  <li>
						<input type="checkbox" checked>
						<i></i>
						<span class="fa fa-pencil-square-o" style="margin-right:10px;color:#fff"></span><span>Post</span>
						<ul class="submenu menu" style="margin-bottom:14px;margin-left:-20px;margin-right:-20px; background:#8dc43f; color:#ededeb">
							<li style="padding:10px;"><a style="text-decoration:none;color:#ededeb" href="<?php echo base_url();?>index.php/backend/manage_post"><span class="fa fa-file-text-o" style="margin-right:10px;"></span><span>All Post</span></a></li>
							<li style="padding:10px;"><a style="text-decoration:none;color:#ededeb" href="<?php echo base_url();?>index.php/backend/manage_category"><span class="fa fa-ticket" style="margin-right:10px;"></span><span>Category Post</span></a></li>
							<li style="padding:10px;"><a style="text-decoration:none;color:#ededeb" href="<?php echo base_url();?>index.php/backend/manage_tag"><span class="fa fa-tag" style="margin-right:10px;"></span><span>Tag Post</span></a></li>
						</ul>
					  </li>
					  <li>
						<input type="checkbox" checked>
						<i></i>
						<span class="fa fa-files-o" style="margin-right:10px;color:#fff"></span><span>Page</span>
						<ul class="submenu menu" style="margin-bottom:14px;margin-left:-20px;margin-right:-20px; background:#8dc43f; color:#ededeb">
							<li style="padding:10px;"><a style="text-decoration:none;color:#ededeb" href="<?php echo base_url();?>index.php/backend/manage_page"><span class="fa fa-file-text-o" style="margin-right:10px;"></span><span>All Page</span></a></li>
							<li style="padding:10px;"><a style="text-decoration:none;color:#ededeb" href="<?php echo base_url();?>index.php/backend/manage_category_page"><span class="fa fa-ticket" style="margin-right:10px;"></span><span>Category Page</span></a></li>
						</ul>
					  </li>
					  <li>
						<input type="checkbox" checked>
						<i></i>
						<span class="fa fa-newspaper-o" style="margin-right:10px;color:#fff"></span><span>Appearance</span>
						<ul class="submenu menu" style="margin-bottom:14px;margin-left:-20px;margin-right:-20px; background:#8dc43f; color:#ededeb">
							<li style="padding:10px;"><a style="text-decoration:none;color:#ededeb" href="<?php echo base_url();?>index.php/backend/banner"><span class="fa fa-photo" style="margin-right:10px;"></span><span>Banners</span></a></li>
							<!--<li style="padding:10px;"><a style="text-decoration:none;color:#ededeb" href="#"><span class="fa fa-header" style="margin-right:10px;"></span><span>Header</span></a></li>-->
							<li style="padding:10px;"><a style="text-decoration:none;color:#ededeb" href="<?php echo base_url();?>index.php/backend/menu"><span class="fa fa-gavel" style="margin-right:10px;"></span><span>Menus</span></a></li>
						</ul>
					  </li>
					  <hr style="border-color:#7f7f7f;"/>
					  <li>
						<input type="checkbox" checked>
						<i></i>
						<span class="fa fa-gears" style="margin-right:10px;color:#fff"></span><span>Settings</span>
						<ul class="submenu menu" style="margin-bottom:14px;margin-left:-20px;margin-right:-20px; background:#8dc43f; color:#ededeb">
							<li style="padding:10px;"><a style="text-decoration:none;color:#ededeb" href="<?php echo base_url();?>index.php/backend/setting"><span class="fa fa-gear" style="margin-right:10px;"></span><span>Web Identity</span></a></li>
							<li style="padding:10px;"><a style="text-decoration:none;color:#ededeb" href="<?php echo base_url();?>index.php/backend/contact"><span class="fa fa-phone" style="margin-right:10px;"></span><span>Contact</span></a></li>
						</ul>
					  </li>
					  <li>
						<!--<input type="checkbox" checked>--
						<i></i>-->
						<a style="text-decoration:none;color:#fff" href="<?php echo base_url();?>index.php/backend/manage_user"><span class="fa fa-users" style="margin-right:10px;color:#fff"></span><span>Users</span></a>
						<!--<p>By making the open state default for when :schecked isn't detected, we can make this system accessable for browsers that don't recognize :checked. The fallback is simply an open accordion. The accordion can be manipulated with Javascript (if needed) by changing the "checked" property of the input element.</p>-->
					  </li>
					</ul>
				</div>
				<!-- End of menu -->
			</div>
			<!-- End of left side-->