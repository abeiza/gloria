		<!-- Header content
        ================================================== -->
        <!-- For data-layout, you can choose between a color background like that "#aaa", "blur" or "image" -->
        <section id="noslider" class="sixteen columns headerContent" data-layout="blur">
        
            <div id="blurMask">
                <canvas id="blurCanvas"></canvas>
            </div>
            <?php 
				foreach($query->result() as $tt){
					if($tt->page_category_header == '' or $tt->page_category_header == null){
						?>
						<div class="headerContentContainer">
						   <div class="pageTitle"><span class="highlight"><?php echo $tt->page_title?></span></div>
						   <!--<div class="breadCrumbs"><a href="index.html">Home</a> / <a href="#">Latest news</a>  / <a href="#">Blog</a>  / <span class="highlight">Lorem ipsum</span></div>-->
						</div>
						<?php
					}else{
						?>
						<div class="headerContentContainer1">
							<img src='<?php echo base_url();?>uploads/header/<?php echo $tt->page_category_header; ?>' style="width:100%;height:100%;"/>
						</div>
						<?php
					}
				}
			?>
            
        </section>