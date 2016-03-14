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
				<?php foreach($query->result() as $db){?>
              <!--<img class="scale-with-grid" src="images/blog/large_image/1.jpg" alt="" />-->
              
              <!-- Title
              ================================================== -->
              <section class="title clearfix">
                  
                  <!--<div class="blogDate">
                     <?php 
					/*if(empty($ct->page_date_update)){
						$y = substr($db->page_date_create,0,4);
						$m = substr(date('F', mktime(0, 0, 0, substr($db->page_date_create,5,2), 10)),0,3);
						$d = substr($db->page_date_create,8,2);
						echo "<p>".$d."</p>";
						echo "<span>".$m.' '.$y."</span>";
					}else{
						$y = substr($db->page_date_update,0,4);
						$m = substr(date('F', mktime(0, 0, 0, substr($db->page_date_update,5,2), 10)),0,3);
						$d = substr($db->page_date_update,8,2);
						echo "<p>".$d."</p>";
						echo "<span>".$m.' '.$y."</span>";
					}*/
				?>
                     <div class="arrow-down"></div>
                  </div>-->
                  
                  <div style="margin:0px;" class="titleText">
              <h2><?php echo $db->page_title;?></h2>
                      <!--<p class="blogMeta">Posted by <a href="#">Admin</a> / in <a href="#">Animation</a> / 285 <a href="#commentSection">Comments</a></p>-->
                      <div class="lineSeparator"></div>
                  </div><!-- End titleText-->
                  
               </section><!-- End title-->
               
               <!-- Blog content
              ================================================== -->
              <section class="content">
                  
                   <!-- Text
                   ================================================== -->
                   <?php echo $db->page_desc;?>

             </section><!-- End Content -->
                   
                  
              
              
				<?php } ?>
           </article><!-- End Blog item -->
           
           
           <!-- separator
            ================================================== -->
            
            <div class="lineSeparator sixteen columns row"></div>
            
            <!-- separator
            ================================================== -->
            
            <div class="lineSeparator sixteen columns row bottomY-49"></div>
            
        <!-- blog carousel small
        ================================================== -->

        <div class="clearfix"></div>
        <div class="separator large row-fifty"></div>
        <div class="clearfix row"></div>

        </section><!-- End twelve columns -->
        <div class="clearfix"></div> 
        </section><!-- End // main content -->

