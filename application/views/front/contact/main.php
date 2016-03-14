 <?php echo $map['js']; ?>
 <section class="mainContent" style="width:100%">
        <div class="contentBgFull"></div>
        
        <!-- Tag Line
        ================================================== -->
        
        <div id="menuShadow-center" class="sixteen columns" style="position:absolute;z-index:9;margin-top:-61px;"></div>
		
        <!-- Map items
        ================================================== -->
		<section>
		<div style="margin-bottom:20px;float:left;width:100%;background:#ddd;margin-top:0px">
			<div id="canvas-peta">
				<?php echo $map['html']; ?>
				<!--<iframe style="width:100%; height:270px; margin:0; border:0; overflow:hidden;" src="http://maps.google.com/maps?q=<?php //echo $db['comp_lat']; ?>,<?php //echo $db['comp_long']; ?>&z=15&output=embed"></iframe>-->
			  </div>							  
		</div>
		</section>
		<section class="sixteen columns row left-twenty" style="margin-top:20px;">
			<div style="width:35%;float:left;">
				<div style="margin:10px;">
					<h3 style="text-align:left">CONTACT US</h3>
					<p style="font-size:14px;font-family:'LoraRegular';padding:10px 0px;border-bottom:1px solid #e1e1e1"><?php echo $address;?></p>
					
					<div style="width:100%;float:left;font-family:'LoraRegular';padding:5px 0px;"><i class="fa fa-phone" style="color:#8dc43f;margin-right:10px;"></i><span style="font-size:14px;"><span style="font-weight:bold;font-size:12px;">Phone : </span><?php echo $phone1;?> , <?php echo $phone2;?></span></div>
					<div style="width:100%;float:left;font-family:'LoraRegular';padding:5px 0px;"><i class="fa fa-fax" style="color:#8dc43f;margin-right:10px;"></i><span style="font-size:14px;"><span style="font-weight:bold;font-size:12px;">Fax : </span><?php echo $fax;?></span></div>
					<div style="width:100%;float:left;font-family:'LoraRegular';padding:5px 0px;border-bottom:1px solid #e1e1e1;padding-bottom:25px;"><i class="fa fa-envelope" style="color:#8dc43f;margin-right:10px;"></i><span style="font-size:14px;"><span style="font-weight:bold;font-size:12px;">Email : </span><?php echo $email;?></span></div>
					<div style="width:100%;float:left;">
					<style>
						.sosmed li{
							margin:20px 5px;
							float:left;
							width:20%;
							text-align:center;
							height:60px;
							
						}
						
						.sosmed li a i{
							padding-top:30%;
							font-size:20px;
							width:100%;
							height:100%;
						}
						
						.sosmed li a{
							background:#fff;
							color:#ccc;
							width:100%;
							height:100%;
							float:left;
							border:1px solid #e1e1e1;
							transition: all 0.5s ease-out;
						}
						
						.sosmed li a:hover{
							border:1px solid #8dc43f;
							color:#8dc43f;
							transition: all 0.5s ease-in;
						}
					</style>
						<ul class="sosmed">
							<li><a href="<?php echo $facebook;?>"><i class="fa fa-facebook"></i></a></li>
							<li><a href="<?php echo $facebook;?>"><i class="fa fa-twitter"></i></a></li>
							<li><a href="<?php echo $facebook;?>"><i class="fa fa-youtube"></i></a></li>
							<li><a href="<?php echo $facebook;?>"><i class="fa fa-linkedin"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
			<div style="width:65%;float:left;">
				<div style="margin:10px;">
					<h3 style="text-align:left;padding-bottom:20px">SEND YOUR MESSAGE</h3>
					<?php echo form_open();?>
					<input style="width:100%;border:none;border-bottom:1px solid #e1e1e1;float:left;" type="text" placeholder="Your Name . . ."/>
					<input style="width:100%;border:none;border-bottom:1px solid #e1e1e1;float:left;" type="text" placeholder="Your Email . . ."/>
					<input style="width:100%;border:none;border-bottom:1px solid #e1e1e1;float:left;" type="text" placeholder="Subject . . ."/>
					<label style="width:100%;text-align:left;float:left;padding:5px;font-size:14px;font-family:'LoraRegular';">Your Message :</label>
					<textarea style="width:100%;border:none;background-color:#e1e1e1;float:left;" placeholder=""></textarea>
					<button style="padding:15px;color:#fff;background-color:#8dc43f;border:1px solid #8dc43f;cursor:pointer;float:left;font-family:'CabinRegular'"><i class="fa fa-send" style="margin-right:5px;"></i>SEND MESSAGE</button>
					<?php echo form_close();?>
				</div>
			</div>
			<!--<img src="<?php //echo base_url().'assets/icon/mapicon.png';?>"/>
			<div style="width:100%;float:left;">
				<h3>Get In Touch With Us</h3>
			</div>
			<div style="width:100%;float:left;">
				<div style="width:50%;margin:auto;font-size:24px;font-family:'hevaticaneu', sans-serif">
					<!--<i class="fa fa-phone" style="color:#8dc43f;"></i><span><?php //echo $phone1;?></span> | <i class="fa fa-send" style="color:#8dc43f;"></i><span><?php //echo $email;?></span>-->
					<!--<h2><?php //echo $address;?></h2>
				</div>
			</div>-->
		</section>
		
		<!-- Contact items
        ================================================== -->
		
		
        <div class="clearfix"></div> 
        </section><!-- End // main content -->

