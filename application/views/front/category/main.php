<section class="mainContent">
        <div class="contentBgFull"></div>
        
        <!-- Tag Line
        ================================================== --
        <section id="tagLine" class="sixteen columns row">
            <h1>The most <span class="highlight">innovative designers</span> consciously reject the standard option box and <span class="highlight">cultivate</span> an appetite for <span class="highlight">thinking</span> wrong.</h1>
        </section>-->
        
        <div id="tagLineShadow" class="sixteen columns"></div>
        
        <!-- Blog items - Medium
        ================================================== -->
        
        <section class="sixteen columns row left-twenty">
        
			<?php 
				foreach($query->result() as $ct){?>
           
           <!-- Start Blog item
           ================================================== -->
           <article class="blog medium row">
              <?php 
				if($ct->post_pict == ''){
					echo '<img src="'.base_url().'uploads/post/thumb/thumb_default.jpg" alt="" />';
				}else{
					echo '<img src="'.base_url().'uploads/post/thumb/'.$ct->post_pict.'" alt="" />';
				}
			  ?>
              
                            
              <div class="blogDate">
				<?php 
					if(empty($ct->post_date_update)){
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
					}
				?>
                 <div class="arrow-down"></div>
              </div>
              
              <!-- Excerpt
              ================================================== -->
              <section class="excerpt">
              
              <div class="excerptText">
                 <a href="<?php echo base_url().'index.php/home/post/single/'.$ct->post_id;?>"><h2><?php echo $ct->post_title;?></h2></a>
                 <p class="blogMeta">by <a href="#"><?php echo $ct->user_nick; ?></a></p>
                 <?php echo $ct->post_short_desc;?>
              </div>
              
                   <!-- buttons
                   ================================================== -->
                   <section class="buttons">
                
                     <ul class="customButtons">
                       <li class="button readmore"><a class="highlight" href="<?php echo base_url().'index.php/home/post/single/'.$ct->post_id;?>">Read more</a></li>
                     </ul>
                     
                  </section><!-- End buttons-->
                  
               </section><!-- End Excerpt-->
            
            </article><!-- End Blog item -->
           
           
            <?php	}
			?>
           
		   <?php echo $paging;?>
           
        </section><!-- End twelve columns -->

        
       
        <div class="clearfix"></div>
        
        </section><!-- End // main content -->

