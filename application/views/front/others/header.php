<div class="sixteen columns" style="width:100%;height:3px;background-color:#8dc43f;color:#fff;padding:">
</div>
<header class="sixteen columns" style="height:60px;">
        
        <a href="index.html" style="background-color:transparent;"><div style="position:absolute;width: 156px;height:133px;margin-left:20px;float:left;z-index: 100;"><img style="width:130px;margin-top:5px;" src="<?php echo base_url().'uploads/logo/'.$logo;?>"/></div></a>
        
                <nav class="mainmenu">
            
                <div id="smoothmenu" class="ddsmoothmenu">
                
                    <ul>
					<?php 
						foreach($menu->result() as $nav){?>
							<li><a href="<?php echo $nav->menu_url;?>" style="text-transform:uppercase;"><?php echo $nav->menu_name;?><span></span></a>
							<?php 
								$query = $this->db->query("select menu_content_label, menu_content_url from gocweb_menu_content where menu_refparent='".$nav->menu_id."' order by menu_content_id");
								if($query->num_rows() != 0){
									echo "<ul>";
									foreach($query->result() as $nav_sub){
										echo "<li><a style='text-transform:uppercase;' href='".$nav_sub->menu_content_url."'>".$nav_sub->menu_content_label."</a></li>";
									}
									echo "</ul>";
								}
							?>
							</li>
					<?php	}
					?>
                    <!--<li><a href="#" class="current">HOME<span></span></a></li>
                    
                    <li><a href="#">COMPANY<span></span></a>
                      <ul>
                          <li><a href="gallery-filter-3columns.html">OUR VALUE</a></li>
                          <li><a href="gallery-pagination-3columns.html">VISION AND MISSION</a></li>
                          <li><a href="gallery-both-3columns.html">OUR HISTORY</a></li>
                      </ul>
                    </li>
                    
                    <li><a href="#">OUR BRAND<span></span></a>
                      <ul>
                          <li><a href="#">Purbasari</a></li>
                          <li><a href="#">Kanna</a></li>
                          <li><a href="#">New Cell</a></li>
                          <li><a href="#">Amara</a></li>
                      </ul>
                      
                    </li>
                    
                    <li><a href="#">NEWS<span></span></a></li>
                    
                    <li><a href="#">CAREER<span></span></a></li>
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">CONTACT US<span></span></a></li>-->
                    </ul>
                    <br style="clear: left" />
                </div><!-- end ddsmoothmenu -->
                
                <!-- Responsive Menu
                ================================================== -->
                
				<form action="#" method="post">
                    <select>
                        <option value="">Navigation</option>
                    </select>
				</form>
				
            </nav>
            
            <span id="menuShadow"></span>
            <span id="submenuArrow"><span class="arrow-up"></span></span>
        
		</header>

        