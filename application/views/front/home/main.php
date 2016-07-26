<section class="mainContent" style="padding-bottom:0px;">
		        <!-- contentBgFull
        ================================================== -->

        <div class="contentBgFull"></div>
        
        <!-- Tag Line
        ================================================== -->
        <section id="tagLine" class="sixteen columns row" style="color:#8dc43f;background-color:#fff;">
			<img src="<?php echo base_url().'assets/template/'; ?>images/icons/icon.png" style="width:75px;border-radius:100%; border:2px solid #81bd00; background:#fff;opacity:0.7;"/>
            <h1 style="color:#8dc43f;"><?php echo $tagline;?></h1>
        </section>
        
        <div id="tagLineShadow" class="sixteen columns"></div>
        
        <!-- Teasers
        ================================================== -->
        <section class="row offset-by-one">
        
                <div class="onethird" style="text-align:center;transition:all 0.3s ease-out 0s;">
					<i class="fa fa-eye fa-3x" style="width:100%; text-align:center;float:left;padding:10px 0px;color:#666;"></i>
                    <span style="width:100%; font-size:24px;float:left;margin-top:20px;color:#666;">Our Value</span>
                    <span style="padding:20px;float:left; text-align:center;"><?php echo $moto;?></span>
				</div>
                
                <div class="onethird" style="text-align:center;transition:all 0.3s ease-out 0s;">
                    <i class="fa fa-quote-right fa-3x" style="width:100%; text-align:center;color:#666;float:left;padding:10px 0px;"></i>
					<span style="width:100%; font-size:24px;float:left;margin-top:20px;color:#666;">Our Moto</span>
                    <span style="padding:20px;float:left; text-align:center;"><?php echo $visi;?></span>
                </div>
                
                <div class="onethird last" style="text-align:center;transition:all 0.3s ease-out 0s;">
					<i class="fa fa-rocket fa-3x" style="width:100%; text-align:center;color:#666;float:left;padding:10px 0px;"></i>
                    <span style="width:100%; font-size:24px;float:left;margin-top:20px;color:#666;">Vision and Mission</span>
                    <span style="padding:20px;float:left; text-align:center;"><?php echo $misi;?></span>
				</div>
				<span id="menuShadow-side" style="position:relative;margin-top:-16px;top:70px;"></span>
			<!--<div><img style="margin-top:40px; width:auto;" src="images/header_shadow.png"/></div>-->
        </section>
		<style>
			@keyframes move {
			   0% { transform: translateX(0%); }
			   20% { transform: translateX(0%); }
			   25% { transform: translateX(-25%); }
			   45% { transform: translateX(-25%); }
			   50% { transform: translateX(-50%); }
			   70% { transform: translateX(-50%); }
			   75% { transform: translateX(-75%); }
			   95% { transform: translateX(-75%); }
			}

			.slider {
			  height: 300px;
			  position: relative;
			  overflow: hidden;
			  display: -webkit-box;
			  display: -webkit-flex;
			  display: -ms-flexbox;
			  display: flex;
			  -webkit-flex-flow: row nowrap;
			  -ms-flex-flow: row nowrap;
			  flex-flow: row nowrap;
			  -webkit-box-align: end;
			  -webkit-align-items: flex-end;
			  -ms-flex-align: end;
			  align-items: flex-end;
			  -webkit-box-pack: center;
			  -webkit-justify-content: center;
			  -ms-flex-pack: center;
			  justify-content: center;
			}

			.slider__nav {
			  width: 2px;
			  height: 2px;
			  margin: 1rem 12px;
			  border-radius: 100%;
			  z-index: 10;
			  outline: 6px solid #ccc;
			  outline-offset: -6px;
			  box-shadow: 0 0 0 0 #333, 0 0 0 0 rgba(51, 51, 51, 0);
			  cursor: pointer;
			  -webkit-appearance: none;
			  -moz-appearance: none;
			  appearance: none;
			  -webkit-backface-visibility: hidden;
			  backface-visibility: hidden;
			}

			/*.slider__nav:checked {
			  -webkit-animation: check 0.5s linear forwards;
			  animation: check 0.5s linear forwards;
			}

			.slider__nav:checked:nth-of-type(1) ~ .slider__inner {
			  -webkit-transform: translateX(0%);
			  transform: translateX(0%);
			}

			.slider__nav:checked:nth-of-type(2) ~ .slider__inner {
			  -webkit-transform: translateX(-25%);
			  transform: translateX(-25%);
			}

			.slider__nav:checked:nth-of-type(3) ~ .slider__inner {
			  -webkit-transform: translateX(-50%);
			  transform: translateX(-50%);
			}

			.slider__nav:checked:nth-of-type(4) ~ .slider__inner {
			  -webkit-transform: translateX(-75%);
			  transform: translateX(-75%);
			}*/

			.slider__inner {
			  position: absolute;
			  top: 0;
			  left: 0;
			  width: 400%;
			  height: 100%;
			  -webkit-transition: all 1s ease-out;
			  transition: all 1s ease-out;
			  display: -webkit-box;
			  display: -webkit-flex;
			  display: -ms-flexbox;
			  display: flex;
			  -webkit-flex-flow: row nowrap;
			  -ms-flex-flow: row nowrap;
			  flex-flow: row nowrap;
			  animation: 20s move infinite; 
			}

			.slider__contents {
			  height: 100%;
			  padding: 2rem;
			  text-align: center;
			  display: -webkit-box;
			  display: -webkit-flex;
			  display: -ms-flexbox;
			  display: flex;
			  -webkit-box-flex: 1;
			  -webkit-flex: 1;
			  -ms-flex: 1;
			  flex: 1;
			  -webkit-flex-flow: column nowrap;
			  -ms-flex-flow: column nowrap;
			  flex-flow: column nowrap;
			  -webkit-box-align: center;
			  -webkit-align-items: center;
			  -ms-flex-align: center;
			  align-items: center;
			  -webkit-box-pack: center;
			  -webkit-justify-content: center;
			  -ms-flex-pack: center;
			  justify-content: center;
			}

			.slider__image { font-size: 2.7rem; }

			.slider__caption {
			  font-weight: 700;
			  margin: 2rem 0 1rem;
			  text-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
			  text-transform: uppercase;
			  color:#fff;
			}

			.slider__txt {
			  color: #fff;
			  margin-bottom: 3rem;
			  max-width: 400px;
			}
			
			@-webkit-keyframes 
			check {  50% {
			 outline-color: #fff;
			 box-shadow: 0 0 0 12px #333, 0 0 0 36px rgba(51, 51, 51, 0.2);
			}
			 100% {
			 outline-color: #fff;
			 box-shadow: 0 0 0 0 #333, 0 0 0 0 rgba(51, 51, 51, 0);
			}
			}

			@keyframes 
			check {  50% {
			 outline-color: #fff;
			 box-shadow: 0 0 0 12px #333, 0 0 0 36px rgba(51, 51, 51, 0.2);
			}
			 100% {
			 outline-color: #fff;
			 box-shadow: 0 0 0 0 #333, 0 0 0 0 rgba(51, 51, 51, 0);
			}
			}
			
			
		</style>
		<section class="row" style="margin-bottom:0px; margin-top:0px;">
			<div style="background:url(<?php echo base_url().'assets/template/'; ?>images/kecantikan.png) no-repeat fixed 20% #7fb332;background-position: center;text-align:center;padding:30px 20px;">
			<div class="slider">
			  <!--<input type="radio" name="slider" title="slide1" checked="checked" class="slider__nav"/>
			  <input type="radio" name="slider" title="slide2" class="slider__nav"/>
			  <input type="radio" name="slider" title="slide3" class="slider__nav"/>
			  <input type="radio" name="slider" title="slide4" class="slider__nav"/>-->
			  <div class="slider__inner">
				<div class="slider__contents">
				  <div><i style="color:#fff;" class="fa fa-firefox fa-4x"></i></div>
				  <h2 class="slider__caption">Purbasari</h2>
				  <p class="slider__txt">Etiam porttitor lectus in iaculis egestas. Pellentesque in neque sollicitudin, tempor quam vel, rhoncus felis. Integer bibendum posuere mauris id ultricies.</p>
				</div>
				<div class="slider__contents">
				  <div><i style="color:#fff;" class="fa fa-edge fa-4x"></i></div>
				  <h2 class="slider__caption">Kanna</h2>
				  <p class="slider__txt">Etiam porttitor lectus in iaculis egestas. Pellentesque in neque sollicitudin, tempor quam vel, rhoncus felis. Integer bibendum posuere mauris id ultricies.</p>
				</div>
				<div class="slider__contents">
				  <div><i style="color:#fff;" class="fa fa-chrome fa-4x"></i></div>
				  <h2 class="slider__caption">New Cell</h2>
				  <p class="slider__txt">Etiam porttitor lectus in iaculis egestas. Pellentesque in neque sollicitudin, tempor quam vel, rhoncus felis. Integer bibendum posuere mauris id ultricies.</p>
				</div>
				<div class="slider__contents">
				  <div><i style="color:#fff;" class="fa fa-opera fa-4x"></i></div>
				  <h2 class="slider__caption">Amara</h2>
				  <p class="slider__txt">Etiam porttitor lectus in iaculis egestas. Pellentesque in neque sollicitudin, tempor quam vel, rhoncus felis. Integer bibendum posuere mauris id ultricies.</p>
				</div>
			  </div>
			</div>
			<!--<div style="background:url(<?php //echo base_url().'assets/template/'; ?>images/kecantikan.png) no-repeat fixed 20% 0 #8dc43f;text-align:center;padding:30px 20px;">
				<img src="<?php //echo base_url().'assets/template/'; ?>images/icons/icon.png" style="width:100px;background:#fff;border-radius:100%;opacity:0.7;"/>
				<p style="text-align:center;color:#fff;"><?php// echo $desc;?></p>
			</div>
			<!---->
		</section>
        <span id="menuShadow-center" style="position:relative;margin-top:-16px;top:14px;"></span>
        <!--<div><img style="position:absolute;z-index:9999" src="images/header_shadow.png"/></div>-->
        </section><!-- End // main content -->
        
       