<!-- Slider
        ================================================== -->
        <section id="slider" class="sixteen columns headerContent" style="">
        
            
            <div class="bannercontainer">					
					<div class="banner">
						<ul>
						<!-- SLIDE -->
							<?php 
								foreach($slide->result() as $db){
							?>
							<li data-transition="boxfade" data-slotamount="5"  data-thumb="<?php echo base_url();?>assets/template/images/other_images/img53.jpg"> 		
								<img src="<?php echo base_url().'uploads/banner/original/'.$db->banner_background;?>" alt="">	
                                <?php 
									$content = $this->db->query("select * from gocweb_banner_content where banner_contect_parent='".$db->banner_id."'");
									if($content->num_rows() != 0){
										
										foreach($content->result() as $ct){
											?>
												 <div class="<?php echo $ct->banner_content_post_animation;?>" data-x="<?php echo $ct->banner_content_x;?>" data-y="<?php echo $ct->banner_content_y;?>" data-speed="<?php echo $ct->banner_content_speed;?>" data-start="<?php echo $ct->banner_content_start;?>" data-easing="<?php echo $ct->banner_content_animation;?>"><img src="<?php echo base_url().'uploads/banner/content/'.$ct->banner_pict;?>" alt=""></div>	
											<?php
										}
										
									}
								?> 						
							</li>
								<?php }?>
						<!-- END OF SLIDE -->
						</ul>	
						<div class="tp-bannertimer"></div>												
					</div>					
				</div>
            
        </section>
		<span id="menuShadow-center" style="position:relative;margin-top:-17px;top:16px;"></span>
        