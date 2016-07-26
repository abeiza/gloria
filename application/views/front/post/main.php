 <section class="mainContent">
        <div class="contentBgFull"></div>
        
        <!-- Tag Line
        ================================================== -->
        
        <div id="tagLineShadow" class="sixteen columns"></div>
        
        <!-- Blog items
        ================================================== -->
        
        <section class="sixteen columns left-twenty">
        
        
           
           <!-- Start Blog item
           ================================================== -->
           <article class="blog post">
				<?php 
					foreach($query->result() as $ct){
				?>
              <!--<img class="scale-with-grid" src="images/blog/large_image/1.jpg" alt="" />-->
              
              <!-- Title
              ================================================== -->
              <section class="title clearfix">
                  
                  <div class="blogDate">
                     <?php if(empty($ct->post_date_update)){
						$y = substr($ct->post_date_create,0,4);
						$m = substr(date('F', mktime(0, 0, 0, substr($ct->post_date_create,5,2), 10)),0,3);
						$d = substr($ct->post_date_create,8,2);
						echo "<p>".$d."</p>";
						echo "<span>".$m.' '.$y."</span>";
					}else{
						$y = substr($ct->post_date_update,0,4);
						$m = substr(date('F', mktime(0, 0, 0, substr($ct->post_date_update,5,2), 10)),0,3);
						$d = substr($ct->post_date_update,8,2);
						echo "<p>".$d."</p>";
						echo "<span>".$m.' '.$y."</span>";
					}?>
                     <div class="arrow-down"></div>
                  </div>
                  
                  <div class="titleText">
              <h2><?php echo $ct->post_title;?></h2>
                      
                      <div class="lineSeparator"></div>
                  </div><!-- End titleText-->
                  
               </section><!-- End title-->
               
               <!-- Blog content
              ================================================== -->
              <section class="content">
                  
                   <!-- Text
                   ================================================== -->
                   <?php echo $ct->post_desc;?>

             </section><!-- End Content -->
                   
                  
              <?php 
					}
			  ?>
              
           
           </article><!-- End Blog item -->
           
           
           <!-- separator
            ================================================== -->
            
            <div class="lineSeparator sixteen columns row"></div>
            
            
            <!-- Portfolio single navigation
            ================================================== --
            
            <section class="projectNav row" style="padding:10px 0px;">
               <ul>
                  <li class="projectName"><a href="#">previous post</a></li>
                  <ul>
                   <li class="projectPrev"><a href="#"></a></li>
           <li class="separator"></li>
                     <li class="projectNext"><a href="#"></a></li>
                  </ul>
                  <li class="projectName"><a href="#">next post</a></li>
               </ul>
            </section> 
            
            <!-- separator
            ================================================== -->
            
            <div class="lineSeparator sixteen columns row bottomY-49"></div>
            
        <!-- blog carousel small
        ================================================== -->

        <section class="sixteen columns remove-left">
           
           <div class="sectionHeader row">
           
                <div class="sectionHeadingWrap">
                    <span class="sectionHeading" style="font-family:'CabinSemiBold';font-size:14px">SIMILAR POSTS</span>
                </div>
                    
                    
                <div class="carouselNav">
                    <div class="carouselPrevious"></div>
                    <div class="carouselNext"></div>
                </div>
                       
           </div>
                
            <div class="carouselWrapper large" data-autoPlay="false" data-autoDelay="3000">
                <ul class="carousel blog">
                    <?php 
						$query = $this->db->query("select * from gocweb_post order by post_date_create LIMIT 6");
						foreach($query->result() as $ct1){
					?>
                    <li>
						<?php 
							if($ct1->post_pict == ''){
								echo '<img width="161" height="122" src="'.base_url().'uploads/post/thumb/thumb_default.jpg" alt="" />';
							}else{
								echo '<img width="161" height="122" src="'.base_url().'uploads/post/thumb/'.$ct1->post_pict.'" alt="" />';
							}
						  ?>
                        
                        <div class="blogDate">
                           <?php if(empty($ct1->post_date_update)){
								$y = substr($ct1->post_date_create,0,4);
								$m = substr(date('F', mktime(0, 0, 0, substr($ct1->post_date_create,5,2), 10)),0,3);
								$d = substr($ct1->post_date_create,8,2);
								echo "<p>".$d."</p>";
								echo "<span>".$m.' '.$y."</span>";
							}else{
								$y = substr($ct1->post_date_update,0,4);
								$m = substr(date('F', mktime(0, 0, 0, substr($ct1->post_date_update,5,2), 10)),0,3);
								$d = substr($ct1->post_date_update,8,2);
								echo "<p>".$d."</p>";
								echo "<span>".$m.' '.$y."</span>";
							}?>
                           <div class="arrow-down"></div>
                        </div>
                        
                        <article>
                           <a href="<?php echo base_url().'index.php/home/post/single/'.$ct1->post_id?>"><h4><?php echo $ct1->post_title;?></h4></a>
                           <!--<p class="blogMeta">in <a href="#">Animation</a>, 28 <a href="#">Comments</a></p>-->
                           <p><?php echo $ct1->post_short_desc;?></p>
                        </article>
                      
                    </li>
					<?php 
						}
					?>
                    
                </ul>
                <div class="clearfix"></div>
            </div>
          
        
        </section><!-- End // Latest Blog Posts -->
        
        <div class="clearfix"></div>
        <div class="separator large row-fifty"></div>
        <div class="clearfix row"></div>

        </section><!-- End twelve columns -->
        <div class="clearfix"></div> 
        </section><!-- End // main content -->

