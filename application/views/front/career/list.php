	<section class="mainContent">
        <div class="contentBgFull"></div>
        
        <div id="tagLineShadow" class="sixteen columns"></div>
         <style>
			.info{
				visibility:hidden;
				position:fixed;
				background:rgba(0,0,0,0.5);
				z-index:99999;
				opacity:0;
				width:100%;
				height:100%;
				left:0;
				top:0;
			}
			
			.info2{
				display:block;
				width:400px;
				height:0px;
				position:fixed;
				margin-top:-320px;
				margin-left:-220px;
				background:#fff;
				z-index:99999;
				border: 1px solid #eeeeee; 
				padding:20px;
				border-radius:3px;
				top:50%;
				left:50%;
				transition:all 0.3s ease;
				box-shadow:rgba(0, 0, 0, 0.14902) 0px 1px 2px;
				opacity:0;
			}
			
			.click{
				cursor:pointer;
			}
			
			.click:focus .info{
				visibility:visible;
				transition: 0.3s ease-in;
				opacity:1;
			}
			
			.click:focus .info2{
				visibility:visible;
				transition: 0.5s ease-in;
				//width:100%;
				height:600px;
				opacity:1;
			}
			
			#close:focus .info{
				display:none;
				transition: 0.5s ease;
				opacity:0;
			}
			
			#close:focus .info2{
				display:none;
				transition: 0.5s ease;
				opacity:0;
			}
			
		 </style>
         <!-- accordion widget
           ================================================== -->
           <div class="row">
		        <div style="text-align:center;height:180px;">
					<h1>Job Vacancy</h1>
					<span>Come explore the endless opportunities in an environment where we support you and your professional success.If you're looking to not just start your career, but want to accelerate it, consider our internships and entry-level positions.</span>
				</div>
   			<ul>
                <?php 
					if($career->num_rows() == 0){
						
					}else{
						foreach($career->result() as $db){?>
							<li tabindex="0" class="click" style="display:block;float:left;height:200px;width:240px;left;margin:1.5%;border: 1px solid #eeeeee; padding:3%;border-radius:3px;">
							<h2 style="color:#8dc43f"><span><?php echo $db->Career_Title; ?></span></h2>
							<div class="lineSeparator"></div>
							<div style="margin-top:20px;">
								<h4>Other Information</h4>
								<span style="font-size:12px;font-weight:bold;">Department : </span><?php echo $db->Career_Departmen; ?><br/>
								<span style="font-size:12px;font-weight:bold;">Latest Education : </span><?php echo $db->Career_Education; ?><br/>
								<span style="font-size:12px;font-weight:bold;">Work Experience : </span><?php echo $db->Career_Work_Experience; ?><br/>
								<span style="font-size:12px;font-weight:bold;">Date Expired : </span><?php echo $db->Career_Job_Expired; ?><br/>
								<span style="font-size:12px;font-weight:bold;">Location : </span><?php echo $db->Career_Location; ?>
							</div>
							<div class="info">
							<div class="info2">
								<a style="text-align:right;float:right;background:transparent;color:#8dc43f" id="close" tabindex="0"><i class="fa fa-close"></i></a>
								<h2 style="color:#8dc43f"><span><?php echo $db->Career_Title; ?></span></h2>
								<div class="lineSeparator"></div>
								<div>
									<h4>Requirement</h4>
									<?php echo $db->Career_Requrement; ?>
								</div>
								<div>
									<h4>Job Desc</h4>
									<?php echo $db->Career_Requrement; ?>
								</div>
								<div class="lineSeparator"></div>
								<div style="margin-top:20px;">
									<h4>Other Information</h4>
									<span style="font-size:12px;font-weight:bold;">Department : </span><?php echo $db->Career_Departmen; ?><br/>
									<span style="font-size:12px;font-weight:bold;">Latest Education : </span><?php echo $db->Career_Education; ?><br/>
									<span style="font-size:12px;font-weight:bold;">Work Experience : </span><?php echo $db->Career_Work_Experience; ?><br/>
									<span style="font-size:12px;font-weight:bold;">Date Expired : </span><?php echo $db->Career_Job_Expired; ?><br/>
									<span style="font-size:12px;font-weight:bold;">Location : </span><?php echo $db->Career_Location; ?>
								</div>
								<div style="text-align:center;padding:20px 0px">
									<h5>Send your CV to <strong style="color:red">hr@goc.co.id</strong></h5>
								</div>
							</div>
							</div>
							</li>
						<?php
						}
					}
				?>
            </ul>
           
            </div>
            
        
        <div class="clearfix"></div>
		<?php echo $paging;?>
        
	</section><!-- End // main content -->

