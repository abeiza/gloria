		<!-- Header content
        ================================================== -->
        <!-- For data-layout, you can choose between a color background like that "#aaa", "blur" or "image" -->
        <section id="noslider" class="sixteen columns headerContent" data-layout="blur">
        
            <div id="blurMask">
                <canvas id="blurCanvas"></canvas>
            </div>
			<div class="headerContentContainer">
            <?php 
				foreach($query->result() as $tt){?>
					<div class="pageTitle"><span class="highlight" style="color:#fff;"><?php echo $tt->page_category_name?></span></div>
					<!--<div class="breadCrumbs"><a href="index.html">Home</a> / <a href="#">Latest news</a>  / <a href="#">Blog</a>  / <span class="highlight">Lorem ipsum</span></div>-->
				<?php
				}
			?>
			</div>
            
        </section>