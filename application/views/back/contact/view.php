 
				<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
				<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>

				<script type="text/javascript">
				var peta;
				var koorAwal = new google.maps.LatLng(-6.257737483553622, 106.77751957671717);
				function peta_awal(){
					loadDataLokasiTersimpan();
					var settingpeta = {
						zoom:18,
						center: koorAwal,
						mapTypeId: google.maps.MapTypeId.ROADMAP 
						};
					peta = new google.maps.Map(document.getElementById("canvas-peta"),settingpeta);
					google.maps.event.addListener(peta,'click',function(event){
						tandai(event.latLng);
					});
				}

				function tandai(lokasi){
					$("#lat").val(lokasi.lat());
					$("#long").val(lokasi.lng());
					tanda = new google.maps.Marker({
						position: lokasi,
						map: peta
					});
				}

				$(document).ready(function(){
				   peta_awal();
				});


				function loadDataLokasiTersimpan(){
					$('#kordinattersimpan').load('tampilkan_lokasi_tersimpan.php');
				}
				setInterval (loadDataLokasiTersimpan, 3000);

				function carikordinat(lokasi){
					var settingpeta = {
						zoom: 10,
						center: lokasi,
						mapTypeId: google.maps.MapTypeId.ROADMAP 
						};
					peta = new google.maps.Map(document.getElementById("canvas-peta"),settingpeta);
					tanda = new google.maps.Marker({
						position: lokasi,
						map: peta
					});
					google.maps.event.addListener(tanda, 'click', function() {
					  infowindow.open(peta,tanda);
					});
					google.maps.event.addListener(peta,'click',function(event){
						tandai(event.latLng);
					});
				}


				function gantipeta(){
					loadDataLokasiTersimpan();
					var isi = document.getElementById('cmb').value;
					if(isi=='1')
					{
					var settingpeta = {
						zoom: 10,
						center: koorAwal,
						mapTypeId: google.maps.MapTypeId.ROADMAP
						};
					}
					else if(isi=='2')
					{
					var settingpeta = {
						zoom: 10,
						center: koorAwal,
						mapTypeId: google.maps.MapTypeId.TERRAIN 
						};
					}
					else if(isi=='3')
					{
					var settingpeta = {
						zoom: 10,
						center: koorAwal,
						mapTypeId: google.maps.MapTypeId.SATELLITE  
						};
					}
					else if(isi=='4')
					{
					var settingpeta = {
						zoom: 10,
						center: koorAwal,
						mapTypeId: google.maps.MapTypeId.HYBRID  
						};
					}
					peta = new google.maps.Map(document.getElementById("canvas-peta"),settingpeta);
					google.maps.event.addListener(peta,'click',function(event){
						tandai(event.latLng);
					});
				}

				</script>
				<!-- Header -->
				<div style="float:left;width:100%;height:11.5%;background:#fff;color:#787878;">
					<div style="margin:0px 20px;width:auto;">	
						<h2 style="text-transform:uppercase;"><i class="fa fa-phone" style="margin-right:10px"></i>Contact</h2>
					</div>
				</div>
				<!-- End of header -->
				<!-- Separator -->
				<div style="float:left;width:100%;height:0.5%;background:#64c0cc;color:#787878;">
				</div>
				<!-- End of separator -->
				<!-- Work Sheet -->
				<div style="float:left;width:100%;background:#f9f9f9;">
					<!-- Sheet Pertama -->
					<div style="float:left;margin:10px 20px;background-color:#fff; border-radius:3px; border:1px solid #f1f1f1">
						<div style="width:auto;color:#787878;padding:5px 20px;">
							<h2>Form Contact</h2>
							<hr style="border-color:#fff;"/>
							<div>
								<?php if(!validation_errors()){echo validation_errors();}else{ echo '<div style="margin:10px 20px;width:auto;background-color:#ffffbf;font-size:12px;border-radius:3px;color:red;padding:10px;"><i class="fa fa-exclamation-triangle" style="color:red;font-size:16px;margin-right:5px;"></i><strong style="font-size:16px;">Warning !</strong>'.validation_errors().'</div>';}?>
								<?php echo $this->session->flashdata('edit_result');?>
								<?php echo form_open('backend/contact/update_act/'); ?>
							</div>
							<div style="width:400px;float:left">
								<div style="width:100%">
									<label style="width:30%;float:left;text-align:right;margin-top:10px; margin-right:10px;">Email*</label>
									<input style="width:60%;float:left;margin:5px 0px;padding:7px;border:1px solid #ccc;" type="text" name="email" value="<?php echo $email;?>"/>
								</div>
								<div style="width:100%;float:left">
									<label style="width:30%;float:left;text-align:right;margin-top:10px; margin-right:10px;">Phone 1*</label>
									<input style="width:60%;float:left;margin:5px 0px;padding:7px;border:1px solid #ccc;" type="text" name="phone1" value="<?php echo $phone1;?>"/>
								</div>
								<div style="width:100%;float:left">
									<label style="width:30%;float:left;text-align:right;margin-top:10px; margin-right:10px;">Phone 2</label>
									<input style="width:60%;float:left;margin:5px 0px;padding:7px;border:1px solid #ccc;" type="text" name="phone2" value="<?php echo $phone2;?>"/>
								</div>
								<div style="width:100%;float:left">
									<label style="width:30%;float:left;text-align:right;margin-top:10px; margin-right:10px;">Fax</label>
									<input style="width:60%;float:left;margin:5px 0px;padding:7px;border:1px solid #ccc;" type="text" name="fax" value="<?php echo $fax;?>"/>
								</div>
								<div style="width:100%;float:left">
									<label style="width:30%;float:left;text-align:right;margin-top:10px; margin-right:10px;">Address</label>
									<textarea style="width:60%;height:100px;float:left;margin:5px 0px;padding:7px;border:1px solid #ccc;" type="text" name="address"><?php echo $address;?></textarea>
								</div>
								
								<div style="padding-left:20px;padding-top:20px;float:left">
									<h4 >List Social Media</h4>
								</div>
								<div style="width:100%;float:left">
									<label style="width:30%;float:left;text-align:right;margin-top:10px; margin-right:10px;"><i class="fa fa-facebook"></i></label>
									<input style="width:60%;float:left;margin:5px 0px;padding:7px;border:1px solid #ccc;" type="text" name="facebook" value="<?php echo $facebook;?>"/>
								</div>
								<div style="width:100%;float:left">
									<label style="width:30%;float:left;text-align:right;margin-top:10px; margin-right:10px;"><i class="fa fa-twitter"></i></label>
									<input style="width:60%;float:left;margin:5px 0px;padding:7px;border:1px solid #ccc;" type="text" name="twitter" value="<?php echo $twitter;?>"/>
								</div>
								<div style="width:100%;float:left">
									<label style="width:30%;float:left;text-align:right;margin-top:10px; margin-right:10px;"><i class="fa fa-youtube"></i></label>
									<input style="width:60%;float:left;margin:5px 0px;padding:7px;border:1px solid #ccc;" type="text" name="youtube" value="<?php echo $youtube;?>"/>
								</div>
								<div style="width:100%;float:left">
									<label style="width:30%;float:left;text-align:right;margin-top:10px; margin-right:10px;"><i class="fa fa-linkedin"></i></label>
									<input style="width:60%;float:left;margin:5px 0px;padding:7px;border:1px solid #ccc;" type="text" name="linkedin" value="<?php echo $linkedin;?>"/>
								</div>
								
								<div style="width:100%;float:left;margin:20px 0px">
									<div style="margin-left:32.5%;">
										<button style="cursor:pointer;font-size:14px;border:1px solid #ccc;list-style:none;color:#717171;margin:0px 2px;background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#f8f8f8), to(#e9e9e9));
background: -moz-linear-gradient(0% 0% 270deg,#f8f8f8, #e9e9e9);border-radius:3px;box-shadow: inset 0px 1px 0px rgba(255,255,255, .8), 0px 1px 3px rgba(0,0,0, .1);padding:5px;" type="submit"><i class="fa fa-send" style="margin-right:5px;"></i>Submit</button>
										<a href="<?php echo base_url(); ?>index.php/backend/dashboard/" style="text-decoration:none;cursor:pointer;font-size:14px;border:1px solid #ccc;list-style:none;color:#717171;margin:0px 2px;background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#f8f8f8), to(#e9e9e9));
background: -moz-linear-gradient(0% 0% 270deg,#f8f8f8, #e9e9e9);border-radius:3px;box-shadow: inset 0px 1px 0px rgba(255,255,255, .8), 0px 1px 3px rgba(0,0,0, .1);padding:5px;"><i class="fa fa-undo" style="margin-right:5px;"></i>Cancel</a>
									</div>
								</div>
							</div>
					</div>
					<!-- End of sheet pertama -->
				</div>
				<div style="width:570px;float:left;margin:10px 20px;background-color:#fff; border-radius:3px; border:1px solid #f1f1f1">
					<div style="width:auto;color:#787878;padding:5px 20px;">
						<div style="padding:20px 0px;">
							<h2 style="font-weight:bold; margin:10px 0px; color:#777;">Coordinate Location :</h2>
							<div id="canvas-peta" style="width:500px; float:left; margin:15px; height:242px;"></div>
							<div style="width:100%;float:left">
								<label style="width:30%;float:left;text-align:right;margin-top:10px; margin-right:10px;">Longitude :</label>
								<input style="width:60%;float:left;margin:5px 0px;padding:7px;border:1px solid #ccc;background-color:#e1e1e1" type="text" name="long" value="<?php echo $long;?>" id="long" placeholder="Longitude Point" readonly/>
							</div>
							<div style="width:100%;float:left;margin-bottom:20px;">
								<label style="width:30%;float:left;text-align:right;margin-top:10px; margin-right:10px;">Latitude :</label>
								<input style="width:60%;float:left;margin:5px 0px;padding:7px;border:1px solid #ccc;background-color:#e1e1e1" type="text" name="lat"  value="<?php echo $lat;?>" id="lat" placeholder="Latitude Point" readonly/>
							</div>
						</div>
					</div>
				</div>
				<?php echo form_close();?>
				<!-- End of Worksheet -->
			</div>
			<!-- End of right side -->
					