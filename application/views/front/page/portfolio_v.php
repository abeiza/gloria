	<section class="mainContent">
        <div class="contentBgFull"></div>
        
        <!-- Tag Line
        ================================================== -->
        <section id="tagLine" style="margin-bottom:0px" class="sixteen columns row">
           
        </section>
        
        <div id="tagLineShadow" class="sixteen columns"></div>
        <div style="text-align:center;height:180px;">
			<h1>Product Catalogue</h1>
			<span>Check the best product avaialable in our directory.</span>
		</div>
        <!-- Isotope container
        ================================================== -->

        <section class="isotopeContainer portfolio left-twenty">
					<?php if($query->num_rows() == 0) {?>
					
					<h3>No Result</h3>
					
					<?php }else{
					foreach($query->result() as $db){
					?>
					
                    <div class="element onefourth">
                      
                        <div class="portfolioImage">
							<?php 
								/*if($db->page_pict == ''){
									echo "<a class='jackbox' data-group='work1' data-thumbTooltip='Image Title' data-title='".$db->page_title."'  data-description='#pages_".$db->page_id."' href='".base_url().'index.php/home/page/single/'.$db->page_id;."'>";
								}else{
									echo "<a class='jackbox' data-group='work1' data-thumbTooltip='Image Title' data-title='".$db->page_title."'  data-description='#pages_".$db->page_id."' href='".base_url().'uploads/page/original/'.$db->page_pict."'>";
								}*/
							  ?>
                               <!--<div class="jackbox-hover jackbox-hover-blur jackbox-hover-magnify"></div>-->
                               
							   <?php 
								if($db->page_pict == ''){
									echo '<a href="'.base_url().'index.php/home/page/single/'.$db->page_id.'"><img width="225" height="170" src="'.base_url().'uploads/page/thumb/thumb_default.jpg" alt="" /></a>';
								}else{
									echo '<a href="'.base_url().'index.php/home/page/single/'.$db->page_id.'"><img width="225" height="170" src="'.base_url().'uploads/page/original/'.$db->page_pict.'" alt="" /></a>';
								}
							  ?>
                               <span class="portfolioImageOver transparent"></span>
                           </a>
                        </div>
						
                        
                        <div class="portfolioText" data-targetURL="<?php echo base_url().'index.php/home/page/single/'.$db->page_id;?>">
                           <span class="portfolioTextOver transparent"></span>
                           <p><?php echo $db->page_title;?></p>
                           <span>- <?php echo $db->page_category_name;?> -</span>
                        </div>
                        
                        <span class="portfolioArrow"></span>
						
						
						<!-- Sample div used as an item's description, will only appear inside JackBox --
                        <div class="jackbox-description" id="<?php //echo 'pages_'.$db->page_id;?>">
                            <h3><?php //echo $db->page_title;?></h3>
                             
                        </div>-->
						

                        
                    </div>
                    <?php 
						}
					} ?>
                    
        </section><!-- end isotope container -->
        <?php echo $paging;?>
        
        <div class="clearfix"></div>
        
	</section><!-- End // main content -->

