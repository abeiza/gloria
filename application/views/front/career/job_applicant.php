<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>-->
<script src="<?php echo base_url();?>assets/js/jquery.masked.js" type="text/javascript"></script>
<!--<script>
$(document).ready(function(){
	$(function(){
        $("#family").css("display", "none");
		$("#education").css("display", "none");
		$("#experience").css("display", "none");
		$("#other").css("display", "none");
		
		$("#tgl_lulus").mask("99/99/9999",{placeholder:"dd/mm/yyyy"});
		$("#tgl_lahir").mask("99/99/9999",{placeholder:"dd/mm/yyyy"});
		$("#hp").mask("999-999-999-999");
		$("#telp").mask("(999) 999-9999");
	});
    $("#prs_fil").click(function(){
		$("#icon-prs").css({"background":"#fff","color":"#ccc","border-radius":"50%","border":"2px solid #8dc43f"});
		$("#icon-fmy").css({"background":"#ccc","color":"#fff","border-radius":"50%","border":"2px solid #8dc43f"});
		$("#icon-edu").css({"background":"#ccc","color":"#fff","border-radius":"50%","border":"2px solid #8dc43f"});
		$("#icon-exp").css({"background":"#ccc","color":"#fff","border-radius":"50%","border":"2px solid #8dc43f"});
		$("#icon-oth").css({"background":"#ccc","color":"#fff","border-radius":"50%","border":"2px solid #8dc43f"});
		
		
        $("#family").css("display", "none");
		$("#personal").css("display", "block");
		$("#education").css("display", "none");
		$("#experience").css("display", "none");
		$("#other").css("display", "none");
    });
	$("#fmy_fil").click(function(){
		$("#icon-prs").css({"background":"#8dc43f","color":"#fff","border-radius":"50%"});
		$("#icon-fmy").css({"background":"#fff","color":"#ccc","border-radius":"50%","border":"2px solid #8dc43f"});
		$("#icon-edu").css({"background":"#ccc","color":"#fff","border-radius":"50%","border":"2px solid #8dc43f"});
		$("#icon-exp").css({"background":"#ccc","color":"#fff","border-radius":"50%","border":"2px solid #8dc43f"});
		$("#icon-oth").css({"background":"#ccc","color":"#fff","border-radius":"50%","border":"2px solid #8dc43f"});
		
        $("#personal").css("display", "none");
		$("#family").css("display", "block");
		$("#education").css("display", "none");
		$("#experience").css("display", "none");
		$("#other").css("display", "none");
    });
	$("#edu_fil").click(function(){
		$("#icon-prs").css({"background":"#8dc43f","color":"#fff","border-radius":"50%"});
		$("#icon-fmy").css({"background":"#8dc43f","color":"#fff","border-radius":"50%"});
		$("#icon-edu").css({"background":"#fff","color":"#ccc","border-radius":"50%","border":"2px solid #8dc43f"});
		$("#icon-exp").css({"background":"#ccc","color":"#fff","border-radius":"50%","border":"2px solid #8dc43f"});
		$("#icon-oth").css({"background":"#ccc","color":"#fff","border-radius":"50%","border":"2px solid #8dc43f"});
		
        $("#personal").css("display", "none");
		$("#family").css("display", "none");
		$("#education").css("display", "block");
		$("#experience").css("display", "none");
		$("#other").css("display", "none");
    });
	$("#exp_fil").click(function(){
		$("#icon-prs").css({"background":"#8dc43f","color":"#fff","border-radius":"50%"});
		$("#icon-fmy").css({"background":"#8dc43f","color":"#fff","border-radius":"50%"});
		$("#icon-edu").css({"background":"#8dc43f","color":"#fff","border-radius":"50%"});
		$("#icon-exp").css({"background":"#fff","color":"#ccc","border-radius":"50%","border":"2px solid #8dc43f"});
		$("#icon-oth").css({"background":"#ccc","color":"#fff","border-radius":"50%","border":"2px solid #8dc43f"});
		
        $("#personal").css("display", "none");
		$("#family").css("display", "none");
		$("#education").css("display", "none");
		$("#experience").css("display", "block");
		$("#other").css("display", "none");
    });
	$("#oth_fil").click(function(){
		$("#icon-prs").css({"background":"#8dc43f","color":"#fff","border-radius":"50%"});
		$("#icon-fmy").css({"background":"#8dc43f","color":"#fff","border-radius":"50%"});
		$("#icon-edu").css({"background":"#8dc43f","color":"#fff","border-radius":"50%"});
		$("#icon-exp").css({"background":"#8dc43f","color":"#fff","border-radius":"50%"});
		$("#icon-oth").css({"background":"#fff","color":"#ccc","border-radius":"50%","border":"2px solid #8dc43f"});
		
        $("#personal").css("display", "none");
		$("#family").css("display", "none");
		$("#education").css("display", "none");
		$("#experience").css("display", "none");
		$("#other").css("display", "block");
    });
	$("#pekerjaan_pertanyaan_satu").click(function(){
		var q = $("#pekerjaan_pertanyaan_satu").val;
		if(q == '1'){
			$("#form_perusahaan_lain").css("display", "block");
		}else if(q == '0'){
			$("#form_perusahaan_lain").css("display", "none");
		}
	});
});
</script>-->
<body style="overflow-x: hidden;" onload="mylinkfunction('prs_fil','personal')">

	<!--//headerBg-->
    <div class="headerBg"></div>
    

	<!-- Primary Page Layout
	================================================== -->

	<div class="container home" data-backgroundImage="<?php echo base_url().'assets/template/'; ?>images/backgrounds/home.jpg">
	<div class="sixteen columns" style="width:100%;height:3px;background-color:#8dc43f;color:#fff;padding:">
</div>
<header class="sixteen columns" style="height:80px;">
        
        <a href="index.html" style="background-color:transparent;"><div style="position:absolute;width: 156px;height:133px;margin-left:20px;float:left;z-index: 100;"><img style="width:130px;margin-top:10px;" src="<?php echo base_url().'uploads/logo/'.$logo;?>"/></div></a>
        
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
										if($nav_sub->menu_content_label == 'PURBASARI'){
											echo "<li><a style='text-transform:uppercase;' href='".$nav_sub->menu_content_url."' target='_blank'>".$nav_sub->menu_content_label."</a></li>";
										}else{
											echo "<li><a style='text-transform:uppercase;' href='".$nav_sub->menu_content_url."'>".$nav_sub->menu_content_label."</a></li>";
										}
									}
									echo "</ul>";
								}
							?>
							</li>
					<?php	}
					?>
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

        
<section class="mainContent">
        <div class="contentBgFull"></div>
        <?php date_default_timezone_set('Asia/Jakarta')?>
        <div id="tagLineShadow" class="sixteen columns"></div>
			<!--<div class="row">
		        <div style="text-align:center;height:180px;">
					<h1>Form Biodata Applicant</h1>
					<span>Come explore the endless opportunities in an environment where we support you and your professional success.If you're looking to not just start your career, but want to accelerate it, consider our internships and entry-level positions.</span>
				</div>
			</div>-->
			<style>
				.group-text{
					width:100%;
					float:left;
				}

				.label-text{
					width:18%;
					float:left;
					text-align:right;
					margin-right:2%;
				}
				
				.input-text{
					width:60%;
					float:left;
				}
				
				.input-radio{
					float:left;
				}
				
				ul.tab {
					list-style-type: none;
				}
				
				.tabcontent {
					display: none;
					padding: 6px 12px;
					//border: 1px solid #ccc;
					//border-top: none;
					-webkit-animation: fadeEffect 1s;
					animation: fadeEffect 1s; /* Fading effect takes 1 second */
				}
				
				.tablinks:hover{
					background:transparent;
					color:#444;
				}
				
				.tablinks:hover .icon{
					color:#fff;
					background:#8dc43f;
					transition:all 0.5s ease-in;
				}
				
				.tablinks .icon{
					background:#fff;
					color:#8dc43f;
					transition:all 0.5s ease-out;
				}
				
				.active .icon{
					background:#f1f1f1;
					color:#444;
				}

				@-webkit-keyframes fadeEffect {
					from {opacity: 0;}
					to {opacity: 1;}
				}

				@keyframes fadeEffect {
					from {opacity: 0;}
					to {opacity: 1;}
				}
			</style>
			<script>
				function openCity(event, cityName) {
					// Declare all variables
					var i, tabcontent, tablinks;

					// Get all elements with class="tabcontent" and hide them
					
					tabcontent = document.getElementsByClassName("tabcontent");
					for (i = 0; i < tabcontent.length; i++) {
						tabcontent[i].style.display = "none";
					}

					// Get all elements with class="tablinks" and remove the class "active"
					tablinks = document.getElementsByClassName("tablinks");
					for (i = 0; i < tablinks.length; i++) {
						tablinks[i].className = tablinks[i].className.replace(" active", "");
					}
					var event = window.event || event;
					// Show the current tab, and add an "active" class to the link that opened the tab
					document.getElementById(cityName).style.display = "block";
					event.currentTarget.className += " active";
				}
				
				function test(cityName) {
					// Declare all variables
					var i, tabcontent, tablinks;

					// Get all elements with class="tabcontent" and hide them
					
					tabcontent = document.getElementsByClassName("tabcontent");
					for (i = 0; i < tabcontent.length; i++) {
						tabcontent[i].style.display = "none";
					}

					// Get all elements with class="tablinks" and remove the class "active"
					tablinks = document.getElementsByClassName("tablinks");
					for (i = 0; i < tablinks.length; i++) {
						tablinks[i].className = tablinks[i].className.replace(" active", "");
					}
					//var event = window.event || event;
					// Show the current tab, and add an "active" class to the link that opened the tab
					document.getElementById(cityName).style.display = "block";
					//event.currentTarget.className += " active";
				}
				
				function mylinkfunction(id, cityName) {
				   var event = window.event || event;
				   document.getElementById(id).addEventListener("click", test(cityName));
				   document.getElementById(id).className += " active";
				}
				
				//document.getElementById(MainContent).onload = function() {mylinkfunction('prs_fil','personal')};
			</script>
			<div class="row">
				<div style="margin:2%;width:98%;float:left;">
					<ul style="float:left;width:100%;" class="tab">
						<div style="position:absolute;width:80%;height:2px;background:#8dc43f;margin-left:10%;margin-top: 25px;z-index: -1;"></div>
						<li style="text-align:center;width:20%;float:left;">
							<a href="#" class="tablinks" onclick="openCity(event, 'personal')" id="prs_fil">
								<i class="fa fa-user icon" id="icon" style="padding:20px 22px;border-radius:50%;border:2px solid #8dc43f"></i>
								<h3 style="margin-bottom:0px;margin-top:5px;">Data Pribadi</h3>
								<span>Step 1</span>
							</a>
						</li>
						<li style="text-align:center;width:20%;float:left;">
							<a href="#" class="tablinks" onclick="openCity(event, 'family')" id="fmy_fil">
								<i class="fa fa-group icon" id="icon" style="padding:20px;border-radius:50%;border:2px solid #8dc43f"></i>
								<h3 style="margin-bottom:0px;margin-top:5px;">Data Keluarga</h3>
								<span>Step 2</span>
							</a>
						</li>
						<li style="text-align:center;width:20%;float:left;">
							<a href="#" class="tablinks" onclick="openCity(event, 'education')" id="edu_fil">
								<i class="fa fa-mortar-board icon" id="icon" style="padding:20px 18px;border-radius:50%;border:2px solid #8dc43f"></i>
								<h3 style="margin-bottom:0px;margin-top:5px;">Riwayat Pendidikan</h3>
								<span>Step 3</span>
							</a>
						</li>
						<li style="text-align:center;width:20%;float:left;">
							<a href="#" class="tablinks" onclick="openCity(event, 'experience')" id="exp_fil">
								<i class="fa fa-briefcase icon" id="icon" style="padding:20px 21px;border-radius:50%;border:2px solid #8dc43f"></i>
								<h3 style="margin-bottom:0px;margin-top:5px;">Riwayat Pekerjaan</h3>
								<span>Step 4</span>
							</a>
						</li>
						<li style="text-align:center;width:20%;float:left;">
							<a href="#" class="tablinks" onclick="openCity(event, 'other')" id="oth_fil">
								<i class="fa fa-file-o icon" id="icon" style="padding:20px 21px;border-radius:50%;border:2px solid #8dc43f"></i>
								<h3 style="margin-bottom:0px;margin-top:5px;">Info Lain</h3>
								<span>Step 5</span>
							</a>
						</li>
					</ul>
				</div>
				<?php echo form_open_multipart('home/career/proses_upload/'.$this->uri->segment(4));?>
				<div style="margin:20px;float:left;" id="personal" class="tabcontent">
					<h2>Data Pribadi</h2>
					<h4>#Step 1</h4>
					<hr/>
					
					<div style="float:left;width:20%;">
						<div style="background:#f5f5f5 url('<?php echo base_url();?>/assets/icon-user.png') no-repeat;background-size:80%;background-position:center;width:100%;height:250px;"></div>
						<input type="file" style="margin-top:10px;float:left" name="pict" value="<?php echo set_value('pict')?>"/>
						<span <?php echo (form_error('pict') == '') ? '' : ' class="fa fa-exclamation-circle" style="color:#D84417;margin-left:5px;"'; ?>></span>
					</div>
	
					<div style="float:left;width:80%;">
						<div class="group-text">
							<input type="hidden" name="career_id" value="<?php echo $id_career;?>"/>
						</div>
						<div class="group-text">
							<label for="pribadi_nama_lengkap" class="label-text">Posisi Dilamar</label>
							<i class="fa fa-asterisk" style="font-size:6px;float:left;margin-left:-15px;color:red;"></i> 
							<input type="text" name="pribadi_nama_lengkap" class="input-text" style="width:60%;background-color:#e1e1e1;" value="<?php echo $nama_career;?>" readonly/>
						</div>
						<div class="group-text">
							<label for="pribadi_nama_lengkap" class="label-text">Nama Lengkap</label>
							<i class="fa fa-asterisk" style="font-size:6px;float:left;margin-left:-15px;color:red;"></i> 
							<input type="text" name="pribadi_nama_lengkap" class="input-text" style="width:60%;"  value="<?php echo set_value('pribadi_nama_lengkap')?>"/>
							<span <?php echo (form_error('pribadi_nama_lengkap') == '') ? '' : ' class="fa fa-exclamation-circle" style="color:#D84417;margin-left:5px;"'; ?>></span>
						</div>
						
						<div class="group-text">
							<label for="pribadi_nama_panggilan" class="label-text">Nama Panggilan</label>
							<i class="fa fa-asterisk" style="font-size:6px;float:left;margin-left:-15px;color:red;"></i>
							<input type="text" name="pribadi_nama_panggilan" class="input-text" value="<?php echo set_value('pribadi_nama_panggilan')?>"/>
							<span <?php echo (form_error('pribadi_nama_panggilan') == '') ? '' : ' class="fa fa-exclamation-circle" style="color:#D84417;margin-left:5px;"'; ?>></span>
						</div>
						
						<div class="group-text" style="padding-bottom:20px">
							<label for="pribadi_jk" class="label-text">Jenis Kelamin</label>
							<i class="fa fa-asterisk" style="font-size:6px;float:left;margin-left:-15px;color:red;"></i>
							<div style="width:60%;float:left;">
								<input type="radio" name="pribadi_jk" value="L" <?php echo set_radio('pribadi_jk','L');?>/>Laki-laki
								<input type="radio" name="pribadi_jk" value="P" <?php echo set_radio('pribadi_jk','P');?>/>Perempuan
								<span <?php echo (form_error('pribadi_jk') == '') ? '' : ' class="fa fa-exclamation-circle" style="color:#D84417;margin-left:5px;"'; ?>></span>
							</div>
						</div>
						
						<div class="group-text">
							<label for="pribadi_alamat" class="label-text">Alamat</label>
							<i class="fa fa-asterisk" style="font-size:6px;float:left;margin-left:-15px;color:red;"></i>
							<textarea name="pribadi_alamat" class="input-text"><?php echo set_value('pribadi_alamat');?></textarea>
							<span <?php echo (form_error('pribadi_alamat') == '') ? '' : ' class="fa fa-exclamation-circle" style="color:#D84417;margin-left:5px;"'; ?>></span>
						</div>
						
						<div class="group-text">
							<label for="pribadi_telp" class="label-text">Telp Rumah / Kantor </label>
							<input type="text" name="pribadi_telp" id="telp" class="input-radio" style="width:22%;" value="<?php echo set_value('pribadi_telp');?>"/>
							<label for="pribadi_hp" class="label-text" style="margin-left:2%;width:13%;margin-right:0px;text-align:left;">Hp</label>
							<i class="fa fa-asterisk" style="font-size:6px;float:left;margin-left:-15px;color:red;"></i> 
							<input type="text" name="pribadi_hp" id="hp" class="input-radio" style="width:22%;" value="<?php echo set_value('pribadi_hp');?>"/>
							<span <?php echo (form_error('pribadi_hp') == '') ? '' : ' class="fa fa-exclamation-circle" style="color:#D84417;margin-left:5px;"'; ?>></span>
						</div>
						
						<div class="group-text">
							<label for="pribadi_email" class="label-text">Email</label>
							<i class="fa fa-asterisk" style="font-size:6px;float:left;margin-left:-15px;color:red;"></i>
							<input type="text" name="pribadi_email" class="input-text" value="<?php echo set_value('pribadi_email');?>"/>
							<span <?php echo (form_error('pribadi_email') == '') ? '' : ' class="fa fa-exclamation-circle" style="color:#D84417;margin-left:5px;"'; ?>></span>
						</div>
						
						<div class="group-text">
							<label for="pribadi_tempat" class="label-text">Tempat / Tanggal Lahir</label>
							<i class="fa fa-asterisk" style="font-size:6px;float:left;margin-left:-15px;color:red;"></i>
							<input type="text" style="width:15%;float:left;" name="pribadi_tempat" value="<?php echo set_value("pribadi_tempat");?>"/> 
							<label class="fa fa-calendar" style="width:3%;float:left;text-align:center;margin-top:10px;"></label>
							<input type="text" style="width:19%;float:left;" name="pribadi_tgl_lahir" id="pribadi_tgl_lahir" value="<?php echo set_value('pribadi_tgl_lahir');?>"/>
							<span <?php echo (form_error('pribadi_tempat') == '') ? '' : ' class="fa fa-exclamation-circle" style="color:#D84417;margin-left:5px;float:left;padding-top:5px;"'; ?>></span>
							
							<label for="pribadi_gol_dar" class="label-text" style="margin-left:2%;width:10%;margin-right:0px;text-align:left;">Gol. Darah</label>
							<select name="pribadi_gol_dar" class="input-radio" style="width:8.5%;">
								<option value="" disabled selected> -- </option>
								<option value="A" <?php echo set_select('pribadi_gol_dar','A'); ?>>A</option>
								<option value="B" <?php echo set_select('pribadi_gol_dar','B'); ?>>B</option>
								<option value="AB" <?php echo set_select('pribadi_gol_dar','AB'); ?>>AB</option>
								<option value="O" <?php echo set_select('pribadi_gol_dar','O'); ?>>O</option>
							</select>
						</div>
						
						<div class="group-text">
							<label for="pribadi_pendidikan" class="label-text">Pendidikan Terakhir</label>
							<i class="fa fa-asterisk" style="font-size:6px;float:left;margin-left:-15px;color:red;"></i>
							<select name="pribadi_pendidikan" class="input-radio" style="width:23.3%;">
								<option value="" disabled selected> -- Pilih Pendidikan -- </option>
								<option value="SMU" <?php echo set_select('pribadi_pendidikan','SMU'); ?>>SMA/SMK</option>
								<option value="D3" <?php echo set_select('pribadi_pendidikan','D3'); ?>>Diploma/D3</option>
								<option value="S1" <?php echo set_select('pribadi_pendidikan','S1'); ?>>Strata 1/S1</option>
								<option value="S2" <?php echo set_select('pribadi_pendidikan','S2'); ?>>Strata 2/S2</option>
							</select>
							<span <?php echo (form_error('pribadi_pendidikan') == '') ? '' : ' class="fa fa-exclamation-circle" style="color:#D84417;margin-left:5px;padding:top:5px;float:left;"'; ?>></span>
							<label for="pribadi_tgl_lulus" class="label-text" style="margin-left:2%;width:13%;margin-right:0px;text-align:left;">Tanggal Kelulusan </label>
							<input type="text" name="pribadi_tgl_lulus" id="pribadi_tgl_lulus" class="input-radio" style="width:22%;" value="<?php echo set_value("pribadi_tgl_lulus");?>"/>
						</div>
						
						<div class="group-text">
							<label for="pribadi_agama" class="label-text">Agama</label>
							<i class="fa fa-asterisk" style="font-size:6px;float:left;margin-left:-15px;color:red;"></i>
							<input type="text" name="pribadi_agama" class="input-radio" style="width:22%;" value="<?php echo set_value('pribadi_agama');?>"/>
							<span <?php echo (form_error('pribadi_agama') == '') ? '' : ' class="fa fa-exclamation-circle" style="color:#D84417;margin-left:5px;float:left;padding-top:5px;"'; ?>></span>
							<label for="pribadi_suku" class="label-text" style="margin-left:2%;width:13%;margin-right:0px;text-align:left;">Suku Bangsa</label>
							<i class="fa fa-asterisk" style="font-size:6px;float:left;margin-left:-15px;color:red;"></i>
							<input type="text" name="pribadi_suku" class="input-radio" style="width:22%;" value="<?php echo set_value('pribadi_suku');?>"/>
							<span <?php echo (form_error('pribadi_suku') == '') ? '' : ' class="fa fa-exclamation-circle" style="color:#D84417;margin-left:5px;float:left;padding-top:5px;"'; ?>></span>
						</div>
						
						<div class="group-text">
							<label for="pribadi_status" class="label-text">Status</label>
							<i class="fa fa-asterisk" style="font-size:6px;float:left;margin-left:-15px;color:red;"></i>
							<select name="pribadi_status" class="input-radio" style="width:23.3%;">
								<option value="" disabled selected> -- Pilih Status -- </option>
								<option value="lajang" <?php echo set_select('pribadi_status','lajang');?>>Lajang</option>
								<option value="menikah"  <?php echo set_select('pribadi_status','menikah');?>>Menikah</option>
								<option value="cerai"  <?php echo set_select('pribadi_status','cerai');?>>Duda / Janda</option>
							</select>
							<span <?php echo (form_error('pribadi_status') == '') ? '' : ' class="fa fa-exclamation-circle" style="color:#D84417;margin-left:5px;"'; ?>></span>
						</div>
						
						<div class="group-text">
							<label for="pribadi_warganegara" class="label-text">Kewarganegaraan</label>
							<i class="fa fa-asterisk" style="font-size:6px;float:left;margin-left:-15px;color:red;"></i>
							<input type="text" name="pribadi_warganegara" class="input-radio" style="width:22%;" value="<?php echo set_value('pribadi_warganegara');?>"/>
							<span <?php echo (form_error('pribadi_warganegara') == '') ? '' : ' class="fa fa-exclamation-circle" style="color:#D84417;margin-left:5px;"'; ?>></span>
						</div>
						
						<div class="group-text">
							<label for="pribadi_berat" class="label-text">Berat Badan</label>
							<i class="fa fa-asterisk" style="font-size:6px;float:left;margin-left:-15px;color:red;"></i>
							<input type="text" name="pribadi_berat" class="input-radio" style="width:22%;" value="<?php echo set_value('pribadi_berat');?>"/>
							<span <?php echo (form_error('pribadi_berat') == '') ? '' : ' class="fa fa-exclamation-circle" style="color:#D84417;margin-left:5px;padding-top:5px;float:left;"'; ?>></span>
							
							<label for="pribadi_tinggi" class="label-text" style="margin-left:2%;width:13%;margin-right:0px;text-align:left;">Tinggi Badan</label>
							<i class="fa fa-asterisk" style="font-size:6px;float:left;margin-left:-15px;color:red;"></i>
							<input type="text" name="pribadi_tinggi" class="input-radio" style="width:22%;" value="<?php echo set_value('pribadi_tinggi');?>"/>
							<span <?php echo (form_error('pribadi_tinggi') == '') ? '' : ' class="fa fa-exclamation-circle" style="color:#D84417;margin-left:5px;padding-top:5px;float:left;"'; ?>></span>
						</div>
						
						<div class="group-text">
							<label for="pribadi_type_iden" class="label-text">Tipe Identitas.</label>
							<i class="fa fa-asterisk" style="font-size:6px;float:left;margin-left:-15px;color:red;"></i>
							<select name="pribadi_type_iden" class="input-radio" style="width:23.3%;">
								<option value="" disabled selected> -- Pilih Tipe Identitas -- </option>
								<option value="ktp" <?php echo set_select('pribadi_type_iden','ktp');?>>Identity No. / No. KTP</option>
								<option value="passpor" <?php echo set_select('pribadi_type_iden','passpor');?>>Passport No.</option>
								<option value="sim" <?php echo set_select('pribadi_type_iden','sim');?>>SIM No.</option>
							</select>
							<span <?php echo (form_error('pribadi_type_iden') == '') ? '' : ' class="fa fa-exclamation-circle" style="color:#D84417;margin-left:5px;padding-top:5px;float:left;"'; ?>></span>
							
							<label for="pribadi_no_iden" class="label-text" style="margin-left:2%;width:13%;margin-right:0px;text-align:left;">No. Identitas</label>
							<i class="fa fa-asterisk" style="font-size:6px;float:left;margin-left:-15px;color:red;"></i>
							<input type="text" name="pribadi_no_iden" class="input-radio" style="width:22%;" vaue="<?php echo set_value('pribadi_no_iden');?>"/>
							<span <?php echo (form_error('pribadi_no_iden') == '') ? '' : ' class="fa fa-exclamation-circle" style="color:#D84417;margin-left:5px;padding-top:5px;float:left;"'; ?>></span>
						</div>
						
						<a href="#" class="tablinks" onclick="mylinkfunction('fmy_fil','family')" style="padding: 15px;color: #fff;background-color: #8dc43f;border: 1px solid #8dc43f;cursor: pointer;float:right;">Next<i class="fa fa-angle-right" style="margin-left:10px;"></i></a>
					</div>
				</div>
				<div style="margin:20px;float:left;" id="family" class="tabcontent">
					<h2>Data Keluarga</h2>
					<h4>#Step 2</h4>
					<hr/>
					<div style="float:left;width:100%;">
						<div class="group-text" style="padding-bottom:20px">
							<label for="keluarga_rumah" class="label-text">Saudara tinggal di rumah</label>
							<div style="width:70%;float:left;">
								<div style="width:50%;float:left;">
									<div style="width:100%;float:left;">
										<input type="radio" name="keluarga_rumah" value="0" <?php echo set_radio('keluarga_rumah','0'); ?>/>Sendiri
									</div>
									<div style="width:100%;float:left;">
										<input type="radio" name="keluarga_rumah" value="1" <?php echo set_radio('keluarga_rumah','1'); ?>/>Orang Tua
									</div>
									<div style="width:100%;float:left;">
										<input type="radio" name="keluarga_rumah" value="2" <?php echo set_radio('keluarga_rumah','2'); ?>/>Sewa
									</div>
								</div>
								<div style="width:50%;float:left;">
									<div style="width:100%;float:left;">
										<input type="radio" name="keluarga_rumah" value="3" <?php echo set_radio('keluarga_rumah','3'); ?>/>Kost
									</div>
									<div style="width:100%;float:left;">
										<input type="radio" style="float:left;" name="keluarga_rumah" value="4" <?php echo set_radio('keluarga_rumah','4'); ?>/><span style="float:left;">Lain-lain</span>
										<input type="text" name="keluarga_rumah_desc" style="float:left;margin-left:10px;"/>
										<span <?php echo (form_error('keluarga_rumah_desc') == '') ? '' : ' class="fa fa-exclamation-circle" style="color:#D84417;margin-left:5px;"'; ?>></span>
									</div>
								</div>
							</div>
						</div>
						
						<div class="group-text">
							<label for="keluarga_anak_ke" class="label-text">Saudara anak ke </label>
							<input type="number" name="keluarga_anak_ke" class="input-radio" style="width:5%;outline:none;" value="<?php echo set_value('keluarga_anak_ke');?>"/>
							<label for="keluarga_dari_brp" class="label-text" style="margin-left:2%;width:3%;margin-right:0px;text-align:left;">dari </label>
							<input type="number" name="keluarga_dari_brp" class="input-radio" style="width:5%;outline:none;" value="<?php echo set_value('keluarga_dari_brp');?>"/>
							<span style="margin-left:5px;">Bersaudara</span>
							<span <?php echo (form_error('keluarga_dari_brp') == '') ? '' : ' class="fa fa-exclamation-circle" style="color:#D84417;margin-left:5px;"'; ?>></span>
						</div>
						<h4>Parent Data</h4>
						<style>
							table{
								width:100%;
								border:1px solid #ccc;
								margin:20px 0px;
							}
							
							table thead tr td, table tbody tr td{
								border:1px solid #ccc;
								padding:3px;
								text-align:center;
							}
							
							table thead tr td{
								background:#eee;
							}
						</style>
						<table>
							<thead>
								<tr>
									<td>Orang Tua</td>
									<td>Nama Lengkap</td>
									<td>Usia</td>
									<td>Pendidikan</td>
									<td>Pekerjaan</td>
								</tr>
							</thead>
							<tbody>
								<tr>
										<td>Ayah</td>
										<td><input type='text' style="margin:0;width:100%;padding:0;height:100%;border:none;" name="keluarga_ayah_nama" value="<?php echo set_value('keluarga_ayah_nama');?>"/></td>
										<td><input type='number' style="outline:none;margin:0;width:100%;padding:0;height:100%;border:none;text-align:center" name="keluarga_ayah_usia" value="<?php echo set_value('keluarga_ayah_usia');?>"/></td>
										<td>
											<select type='text' style="margin:0;width:100%;padding:0;height:100%;border:none;" name="keluarga_ayah_pendidikan">
												<option disabled selected>-- Pilih Pendidikan --</option>
												<option value="NT" <?php echo set_select('keluarga_ayah_pendidikan','NT');?>>Tidak Sekolah</option>
												<option value="SD" <?php echo set_select('keluarga_ayah_pendidikan','SD');?>>SD</option>
												<option value="SMP" <?php echo set_select('keluarga_ayah_pendidikan','SMP');?>>SMP</option>
												<option value="SMU" <?php echo set_select('keluarga_ayah_pendidikan','SMU');?>>SMA/SMK</option>
												<option value="D3" <?php echo set_select('keluarga_ayah_pendidikan','D3');?>>D3</option>
												<option value="S1" <?php echo set_select('keluarga_ayah_pendidikan','S1');?>>S1</option>
												<option value="S2" <?php echo set_select('keluarga_ayah_pendidikan','S2');?>>S2</option>
												<option value="S3" <?php echo set_select('keluarga_ayah_pendidikan','S3');?>>S3</option>
											</select>
										</td>
										<td><input type='text' style="margin:0;width:100%;padding:0;height:100%;border:none;" name="keluarga_ayah_pekerjaan" value="<?php echo set_value('keluarga_ayah_pekerjaan');?>"/></td>
								</tr>
								<tr>
										<td>Ibu</td>
										<td><input type='text' style="margin:0;width:100%;padding:0;height:100%;border:none;" name="keluarga_ibu_nama" value="<?php echo set_value('keluarga_ibu_nama');?>"/></td>
										<td><input type='number' style="outline:none;margin:0;width:100%;padding:0;height:100%;border:none;text-align:center" name="keluarga_ibu_usia" value="<?php echo set_value('keluarga_ibu_usia');?>"/></td>
										<td>
											<select type='text' style="margin:0;width:100%;padding:0;height:100%;border:none;" name="keluarga_ibu_pendidikan">
												<option disabled selected>-- Pilih Pendidikan --</option>
												<option value="NT" <?php echo set_select('keluarga_ibu_pendidikan','NT');?>>Tidak Sekolah</option>
												<option value="SD" <?php echo set_select('keluarga_ibu_pendidikan','SD');?>>SD</option>
												<option value="SMP" <?php echo set_select('keluarga_ibu_pendidikan','SMP');?>>SMP</option>
												<option value="SMU" <?php echo set_select('keluarga_ibu_pendidikan','SMU');?>>SMA/SMK</option>
												<option value="D3" <?php echo set_select('keluarga_ibu_pendidikan','D3');?>>D3</option>
												<option value="S1" <?php echo set_select('keluarga_ibu_pendidikan','S1');?>>S1</option>
												<option value="S2" <?php echo set_select('keluarga_ibu_pendidikan','S2');?>>S2</option>
												<option value="S3" <?php echo set_select('keluarga_ibu_pendidikan','S3');?>>S3</option>
											</select>
										</td>
										<td><input type='text' style="margin:0;width:100%;padding:0;height:100%;border:none;" name="keluarga_ibu_pekerjaan" value="<?php echo set_value('keluarga_ibu_pekerjaan');?>"/></td>
								</tr>
							</tbody>
						</table>
						
						<div class="group-text">
							<label for="keluarga_alamat_ortu" class="label-text">Alamat Orang Tua</label>
							<textarea name="keluarga_alamat_ortu" class="input-text"><?php echo set_value('keluarga_alamat_ortu');?></textarea>
						</div>
						
						<div class="group-text">
							<label for="keluarga_telp_ortu" class="label-text">Telp Orang Tua</label>
							<input type="text" name="keluarga_telp_ortu" class="input-radio" style="width:22%;" value="<?php echo set_value('keluarga_telp_ortu');?>"/>
						</div>
						
						<table>
							<thead>
								<tr>
									<td>Saudara Kandung</td>
									<td>Nama Lengkap</td>
									<td>Usia</td>
									<td>Pendidikan</td>
									<td>Pekerjaan</td>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>
										<select type='text' style="margin:0;width:100%;padding:0;height:100%;border:none;" name="keluarga_saudara_satu_status">
											<option disabled selected>-- Pilih --</option>
											<option value="K" <?php echo set_select('keluarga_saudara_satu_status','K');?>>Kakak</option>
											<option value="A" <?php echo set_select('keluarga_saudara_satu_status','A');?>>Adik</option>
										</select>
									</td>
									<td><input type='text' style="margin:0;width:100%;padding:0;height:100%;border:none;" name="keluarga_saudara_satu_nama" value="<?php echo set_value('keluarga_saudara_satu_nama');?>"/></td>
									<td><input type='text' style="margin:0;width:100%;padding:0;height:100%;border:none;" name="keluarga_saudara_satu_usia" value="<?php echo set_value('keluarga_saudara_satu_usia');?>"/></td>
									<td>
										<select type='text' style="margin:0;width:100%;padding:0;height:100%;border:none;" name="keluarga_saudara_satu_pendidikan">
											<option disabled selected>-- Pilih Pendidikan--</option>
											<option value="NT" <?php echo set_select('keluarga_saudara_satu_pendidikan','NT');?>>Tidak Sekolah</option>
											<option value="SD" <?php echo set_select('keluarga_saudara_satu_pendidikan','SD');?>>SD</option>
											<option value="SMP" <?php echo set_select('keluarga_saudara_satu_pendidikan','SMP');?>>SMP</option>
											<option value="SMU" <?php echo set_select('keluarga_saudara_satu_pendidikan','SMU');?>>SMA/SMK</option>
											<option value="D3" <?php echo set_select('keluarga_saudara_satu_pendidikan','D3');?>>D3</option>
											<option value="S1" <?php echo set_select('keluarga_saudara_satu_pendidikan','S1');?>>S1</option>
											<option value="S2" <?php echo set_select('keluarga_saudara_satu_pendidikan','S2');?>>S2</option>
											<option value="S3" <?php echo set_select('keluarga_saudara_satu_pendidikan','S3');?>>S3</option>
										</select>
									</td>
									<td><input type='text' style="margin:0;width:100%;padding:0;height:100%;border:none;" name="keluarga_saudara_satu_pekerjaan" value="<?php echo set_value('keluarga_saudara_satu_pekerjaan');?>"/></td>
								</tr>
								<tr>
									<td>
										<select type='text' style="margin:0;width:100%;padding:0;height:100%;border:none;" name="keluarga_saudara_dua_status">
											<option disabled selected>-- Pilih --</option>
											<option value="K" <?php echo set_select('keluarga_saudara_dua_status','K');?>>Kakak</option>
											<option value="A" <?php echo set_select('keluarga_saudara_dua_status','A');?>>Adik</option>
										</select>
									</td>
									<td><input type='text' style="margin:0;width:100%;padding:0;height:100%;border:none;" name="keluarga_saudara_dua_nama" value="<?php echo set_value('keluarga_saudara_dua_nama');?>"/></td>
									<td><input type='text' style="margin:0;width:100%;padding:0;height:100%;border:none;" name="keluarga_saudara_dua_usia" value="<?php echo set_value('keluarga_saudara_dua_usia');?>"/></td>
									<td>
										<select type='text' style="margin:0;width:100%;padding:0;height:100%;border:none;" name="keluarga_saudara_dua_pendidikan">
											<option disabled selected>-- Pilih Pendidikan --</option>
											<option value="NT" <?php echo set_select('keluarga_saudara_dua_pendidikan','NT');?>>Tidak Sekolah</option>
											<option value="SD" <?php echo set_select('keluarga_saudara_dua_pendidikan','SD');?>>SD</option>
											<option value="SMP" <?php echo set_select('keluarga_saudara_dua_pendidikan','SMP');?>>SMP</option>
											<option value="SMU" <?php echo set_select('keluarga_saudara_dua_pendidikan','SMU');?>>SMA/SMK</option>
											<option value="D3" <?php echo set_select('keluarga_saudara_dua_pendidikan','D3');?>>D3</option>
											<option value="S1" <?php echo set_select('keluarga_saudara_dua_pendidikan','S1');?>>S1</option>
											<option value="S2" <?php echo set_select('keluarga_saudara_dua_pendidikan','S2');?>>S2</option>
											<option value="S3" <?php echo set_select('keluarga_saudara_dua_pendidikan','S3');?>>S3</option>
										</select>
									</td>
									<td><input type='text' style="margin:0;width:100%;padding:0;height:100%;border:none;" name="keluarga_saudara_dua_pekerjaan" value="<?php echo set_value('keluarga_saudara_dua_pekerjaan');?>"/></td>
								</tr>
								<tr>
									<td>
										<select type='text' style="margin:0;width:100%;padding:0;height:100%;border:none;" name="keluarga_saudara_tiga_status">
											<option disabled selected>-- Pilih --</option>
											<option value="K" <?php echo set_select('keluarga_saudara_tiga_status','K');?>>Kakak</option>
											<option value="A" <?php echo set_select('keluarga_saudara_tiga_status','A')?>>Adik</option>
										</select>
									</td>
									<td><input type='text' style="margin:0;width:100%;padding:0;height:100%;border:none;" name="keluarga_saudara_tiga_nama" value="<?php echo set_value('keluarga_saudara_tiga_nama');?>"/></td>
									<td><input type='text' style="margin:0;width:100%;padding:0;height:100%;border:none;" name="keluarga_saudara_tiga_usia" value="<?php echo set_value('keluarga_saudara_tiga_usia');?>"/></td>
									<td>
										<select type='text' style="margin:0;width:100%;padding:0;height:100%;border:none;" name="keluarga_saudara_tiga_pendidikan">
											<option disabled selected>-- Pilih Pendidikan --</option>
											<option value="NT" <?php echo set_select('keluarga_saudara_tiga_pendidikan','NT');?>>Tidak Sekolah</option>
											<option value="SD" <?php echo set_select('keluarga_saudara_tiga_pendidikan','SD');?>>SD</option>
											<option value="SMP" <?php echo set_select('keluarga_saudara_tiga_pendidikan','SMP');?>>SMP</option>
											<option value="SMU" <?php echo set_select('keluarga_saudara_tiga_pendidikan','SMU');?>>SMA/SMK</option>
											<option value="D3" <?php echo set_select('keluarga_saudara_tiga_pendidikan','D3');?>>D3</option>
											<option value="S1" <?php echo set_select('keluarga_saudara_tiga_pendidikan','S1');?>>S1</option>
											<option value="S2" <?php echo set_select('keluarga_saudara_tiga_pendidikan','S2');?>>S2</option>
											<option value="S3" <?php echo set_select('keluarga_saudara_tiga_pendidikan','S3');?>>S3</option>
										</select>
									</td>
									<td><input type='text' style="margin:0;width:100%;padding:0;height:100%;border:none;" name="keluarga_saudara_tiga_pekerjaan" value="<?php echo set_value('keluarga_saudara_tiga_pekerjaan');?>"/></td>
								</tr>
								<tr>
									<td>
										<select type='text' style="margin:0;width:100%;padding:0;height:100%;border:none;" name="keluarga_saudara_empat_status">
											<option disabled selected>-- Pilih --</option>
											<option value="K" <?php echo set_select('keluarga_saudara_empat_status','K');?>>Kakak</option>
											<option value="A" <?php echo set_select('keluarga_saudara_empat_status','A');?>>Adik</option>
										</select>
									</td>
									<td><input type='text' style="margin:0;width:100%;padding:0;height:100%;border:none;" name="keluarga_saudara_empat_nama" value="<?php echo set_value('keluarga_saudara_empat_nama');?>"/></td>
									<td><input type='text' style="margin:0;width:100%;padding:0;height:100%;border:none;" name="keluarga_saudara_empat_usia" value="<?php echo set_value('keluarga_saudara_empat_usia');?>"/></td>
									<td>
										<select type='text' style="margin:0;width:100%;padding:0;height:100%;border:none;" name="keluarga_saudara_empat_pendidikan">
											<option disabled selected>-- Pilih Pendidikan --</option>
											<option value="NT" <?php echo set_select('keluarga_saudara_empat_pendidikan','NT');?>>Tidak Sekolah</option>
											<option value="SD" <?php echo set_select('keluarga_saudara_empat_pendidikan','SD');?>>SD</option>
											<option value="SMP" <?php echo set_select('keluarga_saudara_empat_pendidikan','SMP');?>>SMP</option>
											<option value="SMU" <?php echo set_select('keluarga_saudara_empat_pendidikan','SMU');?>>SMA/SMK</option>
											<option value="D3" <?php echo set_select('keluarga_saudara_empat_pendidikan','D3');?>>D3</option>
											<option value="S1" <?php echo set_select('keluarga_saudara_empat_pendidikan','S1');?>>S1</option>
											<option value="S2" <?php echo set_select('keluarga_saudara_empat_pendidikan','S2');?>>S2</option>
											<option value="S3" <?php echo set_select('keluarga_saudara_empat_pendidikan','S3');?>>S3</option>
										</select>
									</td>
									<td><input type='text' style="margin:0;width:100%;padding:0;height:100%;border:none;" name="keluarga_saudara_empat_pekerjaan" value="<?php echo set_value('keluarga_saudara_empat_pekerjaan');?>"/></td>
								</tr>
								<tr>
									<td>
										<select type='text' style="margin:0;width:100%;padding:0;height:100%;border:none;" name="keluarga_saudara_lima_status">
											<option disabled selected>-- Pilih --</option>
											<option disabled selected>-- Pilih --</option>
											<option value="K" <?php echo set_select('keluarga_saudara_lima_status','K');?>>Kakak</option>
											<option value="A" <?php echo set_select('keluarga_saudara_lima_status','A');?>>Adik</option>
										</select>
									</td>
									<td><input type='text' style="margin:0;width:100%;padding:0;height:100%;border:none;" name="keluarga_saudara_lima_nama" value="<?php echo set_value('keluarga_saudara_lima_nama');?>"/></td>
									<td><input type='text' style="margin:0;width:100%;padding:0;height:100%;border:none;" name="keluarga_saudara_lima_usia" value="<?php echo set_value('keluarga_saudara_lima_usia');?>"/></td>
									<td>
										<select type='text' style="margin:0;width:100%;padding:0;height:100%;border:none;" name="keluarga_saudara_lima_pendidikan">
											<option disabled selected>-- Pilih Pendidikan --</option>
											<option value="NT" <?php echo set_select('keluarga_saudara_lima_pendidikan','NT');?>>Tidak Sekolah</option>
											<option value="SD" <?php echo set_select('keluarga_saudara_lima_pendidikan','SD');?>>SD</option>
											<option value="SMP" <?php echo set_select('keluarga_saudara_lima_pendidikan','SMP');?>>SMP</option>
											<option value="SMU" <?php echo set_select('keluarga_saudara_lima_pendidikan','SMU');?>>SMA/SMK</option>
											<option value="D3" <?php echo set_select('keluarga_saudara_lima_pendidikan','D3');?>>D3</option>
											<option value="S1" <?php echo set_select('keluarga_saudara_lima_pendidikan','S1');?>>S1</option>
											<option value="S2" <?php echo set_select('keluarga_saudara_lima_pendidikan','S2');?>>S2</option>
											<option value="S3" <?php echo set_select('keluarga_saudara_lima_pendidikan','S3');?>>S3</option>
										</select>
									</td>
									<td><input type='text' style="margin:0;width:100%;padding:0;height:100%;border:none;" name="keluarga_saudara_lima_pekerjaan" value="<?php echo set_value('keluarga_saudara_lima_pekerjaan');?>"/></td>
								</tr>
							</tbody>
						</table>
						
						<table>
							<thead>
								<tr>
									<td>Suami Istri</td>
									<td>Nama Lengkap</td>
									<td>Usia</td>
									<td>Pendidikan</td>
									<td>Pekerjaan</td>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>Suami / Istri</td>
									<td><input type='text' style="margin:0;width:100%;padding:0;height:100%;border:none;" name="keluarga_pasangan_nama" value="<?php echo set_value('keluarga_pasangan_nama'); ?>"/></td>
									<td><input type='number' style="outline:none;margin:0;width:100%;padding:0;height:100%;border:none;text-align:center" name="keluarga_pasangan_usia" value="<?php echo set_value('keluarga_pasangan_usia');?>"/></td>
									<td>
										<select type='text' style="margin:0;width:100%;padding:0;height:100%;border:none;" name="keluarga_pasangan_pendidikan">
											<option disabled selected>-- Pilih Pendidikan --</option>
											<option value="NT" <?php echo set_select('keluarga_pasangan_pendidikan','NT');?>>Tidak Sekolah</option>
											<option value="SD" <?php echo set_select('keluarga_pasangan_pendidikan','SD');?>>SD</option>
											<option value="SMP" <?php echo set_select('keluarga_pasangan_pendidikan','SMP');?>>SMP</option>
											<option value="SMU" <?php echo set_select('keluarga_pasangan_pendidikan','SMU');?>>SMA/SMK</option>
											<option value="D3" <?php echo set_select('keluarga_pasangan_pendidikan','D3');?>>D3</option>
											<option value="S1" <?php echo set_select('keluarga_pasangan_pendidikan','S1');?>>S1</option>
											<option value="S2" <?php echo set_select('keluarga_pasangan_pendidikan','S2');?>>S2</option>
											<option value="S3" <?php echo set_select('keluarga_pasangan_pendidikan','S3');?>>S3</option>
										</select>
									</td>
									<td><input type='text' style="margin:0;width:100%;padding:0;height:100%;border:none;" name="keluarga_pasangan_pekerjaan" value="<?php echo set_value('keluarga_pasangan_pekerjaan');?>"/></td>
								</tr>
							</tbody>
						</table>
						
						<table>
							<thead>
								<tr>
									<td>Anak</td>
									<td>Nama Lengkap</td>
									<td>Usia</td>
									<td>Pendidikan</td>
									<td>Pekerjaan</td>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>Anak</td>
									<td><input type='text' style="margin:0;width:100%;padding:0;height:100%;border:none;" name="keluarga_anak_satu_nama" value="<?php echo set_value('keluarga_anak_satu_nama');?>"/></td>
									<td><input type='text' style="margin:0;width:100%;padding:0;height:100%;border:none;" name="keluarga_anak_satu_usia" value="<?php echo set_value('keluarga_anak_satu_usia');?>"/></td>
									<td>
										<select type='text' style="margin:0;width:100%;padding:0;height:100%;border:none;" name="keluarga_anak_satu_pendidikan">
											<option disabled selected>-- Pilih Pendidikan --</option>
											<option value="NT" <?php echo set_select('keluarga_anak_satu_pendidikan','NT');?>>Tidak Sekolah</option>
											<option value="SD" <?php echo set_select('keluarga_anak_satu_pendidikan','SD');?>>SD</option>
											<option value="SMP" <?php echo set_select('keluarga_anak_satu_pendidikan','SMP');?>>SMP</option>
											<option value="SMU" <?php echo set_select('keluarga_anak_satu_pendidikan','SMU');?>>SMA/SMK</option>
											<option value="D3" <?php echo set_select('keluarga_anak_satu_pendidikan','D3');?>>D3</option>
											<option value="S1" <?php echo set_select('keluarga_anak_satu_pendidikan','S1');?>>S1</option>
											<option value="S2" <?php echo set_select('keluarga_anak_satu_pendidikan','S2');?>>S2</option>
											<option value="S3" <?php echo set_select('keluarga_anak_satu_pendidikan','S3');?>>S3</option>
										</select>
									</td>
									<td><input type='text' style="margin:0;width:100%;padding:0;height:100%;border:none;" name="keluarga_anak_satu_pekerjaan" value="<?php echo set_value('keluarga_anak_satu_pekerjaan');?>"/></td>
								</tr>
								<tr>
									<td>Anak</td>
									<td><input type='text' style="margin:0;width:100%;padding:0;height:100%;border:none;" name="keluarga_anak_dua_nama" value="<?php echo set_value('keluarga_anak_dua_nama');?>"/></td>
									<td><input type='text' style="margin:0;width:100%;padding:0;height:100%;border:none;" name="keluarga_anak_dua_usia" value="<?php echo set_value('keluarga_anak_dua_usia');?>"/></td>
									<td>
										<select type='text' style="margin:0;width:100%;padding:0;height:100%;border:none;" name="keluarga_anak_dua_pendidikan">
											<option disabled selected>-- Pilih Pendidikan --</option>
											<option value="NT" <?php echo set_select('keluarga_anak_dua_pendidikan','NT');?>>Tidak Sekolah</option>
											<option value="SD" <?php echo set_select('keluarga_anak_dua_pendidikan','SD');?>>SD</option>
											<option value="SMP" <?php echo set_select('keluarga_anak_dua_pendidikan','SMP');?>>SMP</option>
											<option value="SMU" <?php echo set_select('keluarga_anak_dua_pendidikan','SMU');?>>SMA/SMK</option>
											<option value="D3" <?php echo set_select('keluarga_anak_dua_pendidikan','D3');?>>D3</option>
											<option value="S1" <?php echo set_select('keluarga_anak_dua_pendidikan','S1');?>>S1</option>
											<option value="S2" <?php echo set_select('keluarga_anak_dua_pendidikan','S2');?>>S2</option>
											<option value="S3" <?php echo set_select('keluarga_anak_dua_pendidikan','S3');?>>S3</option>
										</select>
									</td>
									<td><input type='text' style="margin:0;width:100%;padding:0;height:100%;border:none;" name="keluarga_anak_dua_pekerjaan" value="<?php echo set_value('keluarga_anak_dua_pekerjaan');?>"/></td>
								</tr>
								<tr>
									<td>Anak</td>
									<td><input type='text' style="margin:0;width:100%;padding:0;height:100%;border:none;" name="keluarga_anak_tiga_nama" value="<?php echo set_value('keluarga_anak_tiga_nama');?>"/></td>
									<td><input type='text' style="margin:0;width:100%;padding:0;height:100%;border:none;" name="keluarga_anak_tiga_usia" value="<?php echo set_value('keluarga_anak_tiga_usia');?>"/></td>
									<td>
										<select type='text' style="margin:0;width:100%;padding:0;height:100%;border:none;" name="keluarga_anak_tiga_pendidikan">
											<option disabled selected>-- Pilih Pendidikan --</option>
											<option value="NT" <?php echo set_select('keluarga_anak_tiga_pendidikan','NT');?>>Tidak Sekolah</option>
											<option value="SD" <?php echo set_select('keluarga_anak_tiga_pendidikan','SD');?>>SD</option>
											<option value="SMP" <?php echo set_select('keluarga_anak_tiga_pendidikan','SMP');?>>SMP</option>
											<option value="SMU" <?php echo set_select('keluarga_anak_tiga_pendidikan','SMU');?>>SMA/SMK</option>
											<option value="D3" <?php echo set_select('keluarga_anak_tiga_pendidikan','D3');?>>D3</option>
											<option value="S1" <?php echo set_select('keluarga_anak_tiga_pendidikan','S1');?>>S1</option>
											<option value="S2" <?php echo set_select('keluarga_anak_tiga_pendidikan','S2');?>>S2</option>
											<option value="S3" <?php echo set_select('keluarga_anak_tiga_pendidikan','S3');?>>S3</option>
										</select>
									</td>
									<td><input type='text' style="margin:0;width:100%;padding:0;height:100%;border:none;" name="keluarga_anak_tiga_pekerjaan" value="<?php echo set_value('keluarga_anak_tiga_pekerjaan');?>"/></td>
								</tr>
							</tbody>
						</table>
						
						<p>Apabila terjadi kecelakaan / dalam keadaan darurat, siapakah yang bisa dihubungi</p>
						<div class="group-text">	
							<label for="keluarga_darurat_nama" class="label-text">Nama</label>
							<input type="text" name="keluarga_darurat_nama" class="input-radio" style="width:22%;" value="<?php echo set_value('keluarga_darurat_nama');?>"/>
							<label for="keluarga_darurat_hubungan" class="label-text" style="margin-left:2%;width:13%;margin-right:0px;text-align:left;">Hubungan</label>
							<input type="text" name="keluarga_darurat_hubungan" class="input-radio" style="width:22%;" value="<?php echo set_value('keluarga_darurat_hubungan');?>"/>
						</div>
						<div class="group-text">	
							<label for="keluarga_darurat_alamat" class="label-text">Alamat & Telp</label>
							<textarea name="keluarga_darurat_alamat" class="input-text"><?php echo set_value('keluarga_darurat_alamat');?></textarea>
						</div>
						<a href="#" class="tablinks" onclick="mylinkfunction('edu_fil','education')" style="padding: 15px;color: #fff;background-color: #8dc43f;border: 1px solid #8dc43f;cursor: pointer;float:right;">Next<i class="fa fa-angle-right" style="margin-left:10px;"></i></a>
						<a href="#" class="tablinks" onclick="mylinkfunction('prs_fil','personal')" style="padding: 15px;color: #fff;background-color: #8dc43f;border: 1px solid #8dc43f;cursor: pointer;float:right;margin-right:10px;"><i class="fa fa-angle-left" style="margin-right:10px;"></i>Previous</a>
					</div>
				</div>
				<div style="margin:20px;float:left;" id="education" class="tabcontent">
					<h2>Riwayat Pendidikan</h2>
					<h4>#Step 3</h4>
					<hr/>
					<div style="float:left;width:100%;">
						<table>
							<thead>
								<tr>
									<td>Pendidikan</td>
									<td>Nama Sekolah</td>
									<td>Kota</td>
									<td>Tahun Masuk</td>
									<td>Tahun Lulus</td>
									<td>Jurusan</td>
									<td>NEM / IPK</td>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>SD</td>
									<td><input type='text' style="margin:0;width:100%;padding:0;height:100%;border:none;" name="pendidikan_nama_sekolah_sd" value="<?php echo set_value('pendidikan_nama_sekolah_sd');?>"/></td>
									<td><input type='text' style="margin:0;width:100%;padding:0;height:100%;border:none;" name="pendidikan_kota_sekolah_sd" value="<?php echo set_value('pendidikan_kota_sekolah_sd');?>"/></td>
									<td><input type='text' style="margin:0;width:100%;padding:0;height:100%;border:none;text-align:center;" name="pendidikan_tahun_masuk_sd" value="<?php echo set_value('pendidikan_tahun_masuk_sd');?>"/></td>
									<td><input type='text' style="margin:0;width:100%;padding:0;height:100%;border:none;text-align:center;" name="pendidikan_tahun_keluar_sd" value="<?php echo set_value('pendidikan_tahun_keluar_sd');?>"/></td>
									<td><input type='text' style="margin:0;width:100%;padding:0;height:100%;border:none;" name="pendidikan_jurusan_sd" value="<?php echo set_value('pendidikan_jurusan_sd');?>"/></td>
									<td><input type='text' style="margin:0;width:100%;padding:0;height:100%;border:none;text-align:center;" name="pendidikan_nem_ipk_sd" value="<?php echo set_value('pendidikan_nem_ipk_sd');?>"/></td>
								</tr>
								<tr>
									<td>SMP</td>
									<td><input type='text' style="margin:0;width:100%;padding:0;height:100%;border:none;" name="pendidikan_nama_sekolah_smp" value="<?php echo set_value('pendidikan_nama_sekolah_smp');?>"/></td>
									<td><input type='text' style="margin:0;width:100%;padding:0;height:100%;border:none;" name="pendidikan_kota_sekolah_smp" value="<?php echo set_value('pendidikan_kota_sekolah_smp');?>"/></td>
									<td><input type='text' style="margin:0;width:100%;padding:0;height:100%;border:none;text-align:center;" name="pendidikan_tahun_masuk_smp" value="<?php echo set_value('pendidikan_tahun_masuk_smp');?>"/></td>
									<td><input type='text' style="margin:0;width:100%;padding:0;height:100%;border:none;text-align:center;" name="pendidikan_tahun_keluar_smp" value="<?php echo set_value('pendidikan_tahun_keluar_smp');?>"/></td>
									<td><input type='text' style="margin:0;width:100%;padding:0;height:100%;border:none;" name="pendidikan_jurusan_smp" value="<?php echo set_value('pendidikan_jurusan_smp');?>"/></td>
									<td><input type='text' style="margin:0;width:100%;padding:0;height:100%;border:none;text-align:center;" name="pendidikan_nem_ipk_smp" value="<?php echo set_value('pendidikan_nem_ipk_smp');?>"/></td>
								</tr>
								<tr>
									<td>SMA/SMK</td>
									<td><input type='text' style="margin:0;width:100%;padding:0;height:100%;border:none;" name="pendidikan_nama_sekolah_smu" value="<?php echo set_value('pendidikan_nama_sekolah_smu');?>"/></td>
									<td><input type='text' style="margin:0;width:100%;padding:0;height:100%;border:none;" name="pendidikan_kota_sekolah_smu" value="<?php echo set_value('pendidikan_kota_sekolah_smu');?>"/></td>
									<td><input type='text' style="margin:0;width:100%;padding:0;height:100%;border:none;text-align:center;" name="pendidikan_tahun_masuk_smu" value="<?php echo set_value('pendidikan_tahun_masuk_smu');?>"/></td>
									<td><input type='text' style="margin:0;width:100%;padding:0;height:100%;border:none;text-align:center;" name="pendidikan_tahun_keluar_smu" value="<?php echo set_value('pendidikan_tahun_keluar_smu');?>"/></td>
									<td><input type='text' style="margin:0;width:100%;padding:0;height:100%;border:none;" name="pendidikan_jurusan_smu" value="<?php echo set_value('pendidikan_jurusan_smu');?>"/></td>
									<td><input type='text' style="margin:0;width:100%;padding:0;height:100%;border:none;text-align:center;" name="pendidikan_nem_ipk_smu" value="<?php echo set_value('pendidikan_nem_ipk_smu');?>"/></td>
								</tr>
								<tr>
									<td>Akademi / Univ.</td>
									<td><input type='text' style="margin:0;width:100%;padding:0;height:100%;border:none;" name="pendidikan_nama_sekolah_univ" value="<?php echo set_value('pendidikan_nama_sekolah_univ');?>"/></td>
									<td><input type='text' style="margin:0;width:100%;padding:0;height:100%;border:none;" name="pendidikan_kota_sekolah_univ" value="<?php echo set_value('pendidikan_kota_sekolah_univ');?>"/></td>
									<td><input type='text' style="margin:0;width:100%;padding:0;height:100%;border:none;text-align:center;" name="pendidikan_tahun_masuk_univ" value="<?php echo set_value('pendidikan_tahun_masuk_univ');?>"/></td>
									<td><input type='text' style="margin:0;width:100%;padding:0;height:100%;border:none;text-align:center;" name="pendidikan_tahun_keluar_univ" value="<?php echo set_value('pendidikan_tahun_keluar_univ');?>"/></td>
									<td><input type='text' style="margin:0;width:100%;padding:0;height:100%;border:none;" name="pendidikan_jurusan_univ" value="<?php echo set_value('pendidikan_jurusan_univ');?>"/></td>
									<td><input type='text' style="margin:0;width:100%;padding:0;height:100%;border:none;text-align:center;" name="pendidikan_nem_ipk_univ" value="<?php echo set_value('pendidikan_nem_ipk_univ');?>"/></td>
								</tr>
								<tr>
									<td>Pasca Sarjana</td>
									<td><input type='text' style="margin:0;width:100%;padding:0;height:100%;border:none;" name="pendidikan_nama_sekolah_pasca" value="<?php echo set_value('pendidikan_nama_sekolah_pasca');?>"/></td>
									<td><input type='text' style="margin:0;width:100%;padding:0;height:100%;border:none;" name="pendidikan_kota_sekolah_pasca" value="<?php echo set_value('pendidikan_kota_sekolah_pasca');?>"/></td>
									<td><input type='text' style="margin:0;width:100%;padding:0;height:100%;border:none;text-align:center;" name="pendidikan_tahun_masuk_pasca" value="<?php echo set_value('pendidikan_tahun_masuk_pasca');?>"/></td>
									<td><input type='text' style="margin:0;width:100%;padding:0;height:100%;border:none;text-align:center;" name="pendidikan_tahun_keluar_pasca" value="<?php echo set_value('pendidikan_tahun_keluar_pasca');?>"/></td>
									<td><input type='text' style="margin:0;width:100%;padding:0;height:100%;border:none;" name="pendidikan_jurusan_pasca" value="<?php echo set_value('pendidikan_jurusan_pasca');?>"/></td>
									<td><input type='text' style="margin:0;width:100%;padding:0;height:100%;border:none;text-align:center;" name="pendidikan_nem_ipk_pasca" value="<?php echo set_value('pendidikan_nem_ipk_pasca');?>"/></td>
								</tr>
							</tbody>
						</table>
						
						<h2>Ekstrakuikuler & Aktivitas Sosial</h2>
						<hr/>
						
						<table>
							<thead>
								<tr>
									<td>Organisasi</td>
									<td>Tahun</td>
									<td>Jabatan</td>
									<td>Sertifikat Ada/Tidak</td>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td><input type='text' style="margin:0;width:100%;padding:0;height:100%;border:none;" name="pendidikan_ekstra_satu_nama" value="<?php echo set_value('pendidikan_ekstra_satu_nama');?>"/></td>
									<td><input type='text' style="margin:0;width:100%;padding:0;height:100%;border:none;text-align:center" name="pendidikan_ekstra_satu_tahun" value="<?php echo set_value('pendidikan_ekstra_satu_tahun');?>"/></td>
									<td><input type='text' style="margin:0;width:100%;padding:0;height:100%;border:none;" name="pendidikan_ekstra_satu_tempat" value="<?php echo set_value('pendidikan_ekstra_satu_tempat');?>"/></td>
									<td>
										<select type='text' style="margin:0;width:100%;padding:0;height:100%;border:none;" name="pendidikan_ekstra_satu_sertifikat">
											<option value="" disabled selected> -- Pilih -- </option>
											<option value="1" <?php echo set_select('pendidikan_ekstra_satu_sertifikat','1');?>>Ya</option>
											<option value="0" <?php echo set_select('pendidikan_ekstra_satu_sertifikat','0');?>>Tidak</option>
										</select>
									</td>
								</tr>
								<tr>
									<td><input type='text' style="margin:0;width:100%;padding:0;height:100%;border:none;" name="pendidikan_ekstra_dua_nama" value="<?php echo set_value('pendidikan_ekstra_dua_nama');?>"/></td>
									<td><input type='text' style="margin:0;width:100%;padding:0;height:100%;border:none;text-align:center" name="pendidikan_ekstra_dua_tahun" value="<?php echo set_value('pendidikan_ekstra_dua_tahun');?>"/></td>
									<td><input type='text' style="margin:0;width:100%;padding:0;height:100%;border:none;" name="pendidikan_ekstra_dua_tempat" value="<?php echo set_value('pendidikan_ekstra_dua_tempat');?>"/></td>
									<td>
										<select type='text' style="margin:0;width:100%;padding:0;height:100%;border:none;" name="pendidikan_ekstra_dua_sertifikat">
											<option value="" disabled selected> -- Pilih -- </option>
											<option value="1" <?php echo set_select('pendidikan_ekstra_dua_sertifikat','1');?>>Ya</option>
											<option value="0" <?php echo set_select('pendidikan_ekstra_dua_sertifikat','0');?>>Tidak</option>
										</select>
									</td>
								</tr>
								<tr>
									<td><input type='text' style="margin:0;width:100%;padding:0;height:100%;border:none;" name="pendidikan_ekstra_tiga_nama" value="<?php echo set_value('pendidikan_ekstra_tiga_nama');?>"/></td>
									<td><input type='text' style="margin:0;width:100%;padding:0;height:100%;border:none;text-align:center" name="pendidikan_ekstra_tiga_tahun" value="<?php echo set_value('pendidikan_ekstra_tiga_tahun');?>"/></td>
									<td><input type='text' style="margin:0;width:100%;padding:0;height:100%;border:none;" name="pendidikan_ekstra_tiga_tempat" value="<?php echo set_value('pendidikan_ekstra_tiga_tempat');?>"/></td>
									<td>
										<select type='text' style="margin:0;width:100%;padding:0;height:100%;border:none;" name="pendidikan_ekstra_tiga_sertifikat">
											<option value="" disabled selected> -- Pilih -- </option>
											<option value="1" <?php echo set_select('pendidikan_ekstra_tiga_sertifikat','1');?>>Ya</option>
											<option value="0" <?php echo set_select('pendidikan_ekstra_tiga_sertifikat','0');?>>Tidak</option>
										</select>
									</td>
								</tr>
							</tbody>
						</table>
						
						<h2>Kursus, Seminar, Lokakarya, Pelatihan</h2>
						<hr/>
						
						<table>
							<thead>
								<tr>
									<td>Organisasi</td>
									<td>Tahun</td>
									<td>Jabatan</td>
									<td>Sertifikat Ada/Tidak</td>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td><input type='text' style="margin:0;width:100%;padding:0;height:100%;border:none;" name="pendidikan_aktivitas_satu_nama" value="<?php echo set_value('pendidikan_aktivitas_satu_nama');?>"/></td>
									<td><input type='text' style="margin:0;width:100%;padding:0;height:100%;border:none;text-align:center" name="pendidikan_aktivitas_satu_tahun" value="<?php echo set_value('pendidikan_aktivitas_satu_tahun');?>"/></td>
									<td><input type='text' style="margin:0;width:100%;padding:0;height:100%;border:none;" name="pendidikan_aktivitas_satu_tempat" value="<?php echo set_value('pendidikan_aktivitas_satu_tempat');?>"/></td>
									<td>
										<select type='text' style="margin:0;width:100%;padding:0;height:100%;border:none;" name="pendidikan_aktivitas_satu_sertifikat">
											<option value="" disabled selected> -- Pilih -- </option>
											<option value="1" <?php echo set_select('pendidikan_aktivitas_satu_sertifikat','1');?>>Ya</option>
											<option value="0" <?php echo set_select('pendidikan_aktivitas_satu_sertifikat','0');?>>Tidak</option>
										</select>
									</td>
								</tr>
								<tr>
									<td><input type='text' style="margin:0;width:100%;padding:0;height:100%;border:none;" name="pendidikan_aktivitas_dua_nama" value="<?php echo set_value('pendidikan_aktivitas_dua_nama');?>"/></td>
									<td><input type='text' style="margin:0;width:100%;padding:0;height:100%;border:none;text-align:center" name="pendidikan_aktivitas_dua_tahun" value="<?php echo set_value('pendidikan_aktivitas_dua_tahun');?>"/></td>
									<td><input type='text' style="margin:0;width:100%;padding:0;height:100%;border:none;" name="pendidikan_aktivitas_dua_tempat" value="<?php echo set_value('pendidikan_aktivitas_dua_tempat');?>"/></td>
									<td>
										<select type='text' style="margin:0;width:100%;padding:0;height:100%;border:none;" name="pendidikan_aktivitas_dua_sertifikat">
											<option value="" disabled selected> -- Pilih -- </option>
											<option value="1" <?php echo set_select('pendidikan_aktivitas_dua_sertifikat','1');?>>Ya</option>
											<option value="0" <?php echo set_select('pendidikan_aktivitas_dua_sertifikat','0');?>>Tidak</option>
										</select>
									</td>
								</tr>
								<tr>
									<td><input type='text' style="margin:0;width:100%;padding:0;height:100%;border:none;" name="pendidikan_aktivitas_tiga_nama" value="<?php echo set_value('pendidikan_aktivitas_tiga_nama');?>"/></td>
									<td><input type='text' style="margin:0;width:100%;padding:0;height:100%;border:none;text-align:center" name="pendidikan_aktivitas_tiga_tahun" value="<?php echo set_value('pendidikan_aktivitas_tiga_tahun');?>"/></td>
									<td><input type='text' style="margin:0;width:100%;padding:0;height:100%;border:none;" name="pendidikan_aktivitas_tiga_tempat" value="<?php echo set_value('pendidikan_aktivitas_tiga_tempat');?>"/></td>
									<td>
										<select type='text' style="margin:0;width:100%;padding:0;height:100%;border:none;" name="pendidikan_aktivitas_tiga_sertifikat">
											<option value="" disabled selected> -- Pilih -- </option>
											<option value="1" <?php echo set_select('pendidikan_aktivitas_tiga_sertifikat','1');?>>Ya</option>
											<option value="0" <?php echo set_select('pendidikan_aktivitas_tiga_sertifikat','0');?>>Tidak</option>
										</select>
									</td>
								</tr>
							</tbody>
						</table>
						
						<p>Prestasi/Karya Luar Biasa yang pernah Saudara raih selama pendidikan (misalnya : juara kelas, juara lomba, cum-lauds, siswa teladan dsb.)</p>
						<div class="group-text">	
							<label for="pendidikan_prestasi_satu_nama" class="label-text">Prestasi :</label>
							<input type="text" name="pendidikan_prestasi_satu_nama" class="input-radio" style="width:22%;" value="<?php echo set_value('pendidikan_prestasi_satu_nama');?>"/>
							<label for="pendidikan_prestasi_satu_tahun" class="label-text" style="margin-left:2%;width:13%;margin-right:0px;text-align:left;">Tahun :</label>
							<input type="text" name="pendidikan_prestasi_satu_tahun" class="input-radio" style="width:22%;" value="<?php echo set_value('pendidikan_prestasi_satu_tahun');?>"/>
							
							<label for="pendidikan_prestasi_dua_nama" class="label-text">Prestasi :</label>
							<input type="text" name="pendidikan_prestasi_dua_nama" class="input-radio" style="width:22%;" value="<?php echo set_value('pendidikan_prestasi_dua_nama');?>"/>
							<label for="pendidikan_prestasi_dua_tahun" class="label-text" style="margin-left:2%;width:13%;margin-right:0px;text-align:left;">Tahun :</label>
							<input type="text" name="pendidikan_prestasi_dua_tahun" class="input-radio" style="width:22%;" value="<?php echo set_value('pendidikan_prestasi_dua_tahun');?>"/>
							
							<label for="pendidikan_prestasi_tiga_nama" class="label-text">Prestasi :</label>
							<input type="text" name="pendidikan_prestasi_tiga_nama" class="input-radio" style="width:22%;" value="<?php echo set_value('pendidikan_prestasi_tiga_nama');?>"/>
							<label for="pendidikan_prestasi_tiga_tahun" class="label-text" style="margin-left:2%;width:13%;margin-right:0px;text-align:left;">Tahun :</label>
							<input type="text" name="pendidikan_prestasi_tiga_tahun" class="input-radio" style="width:22%;" value="<?php echo set_value('pendidikan_prestasi_tiga_tahun');?>"/>
						</div>
						<p>Siapa yang membiayai pendidikan Saudara?</p>
						<div class="group-text">	
							<textarea name="pendidikan_pertanyaan_satu" class="input-text" style="width:100%;"><?php echo set_value('pendidikan_pertanyaan_satu');?></textarea>
						</div>
						<p>Pelajaran apakah yang paling Saudara sukai?</p>
						<div class="group-text">	
							<textarea name="pendidikan_pertanyaan_dua" class="input-text" style="width:100%;"><?php echo set_value('pendidikan_pertanyaan_dua');?></textarea>
						</div>
						<p>Tulisan / karya ilmiah yang pernah Saudara tulis (Skripsi, artikel, buku dsb.)</p>
						<div class="group-text">	
							<div style="width:100%;float:left;">
								<label for="pendidikan_judul_karya" class="label-text">Judul :</label>
								<input type="text" name="pendidikan_judul_karya" class="input-radio" style="width:50%;" value="<?php echo set_value('pendidikan_judul_karya');?>"/>
							</div>
							<div style="width:100%;float:left;">
								<label for="pendidikan_tahun_karya" class="label-text">Tahun :</label>
								<input type="text" name="pendidikan_tahun_karya" class="input-radio" style="width:50%;" value="<?php echo set_value('pendidikan_tahun_karya');?>"/>
							</div>
							<div style="width:100%;float:left;">
								<label for="pendidikan_topik_karya" class="label-text">Topik Pembahasan :</label>
								<input type="text" name="pendidikan_topik_karya" class="input-radio" style="width:50%;" value="<?php echo set_value('pendidikan_topik_karya');?>"/>
							</div>
						</div>
						<p>Bahasa Asing/Daerah yang Saudara kuasai</p>
						<div class="group-text">	
							<div style="width:100%;float:left;">
								<div style="margin:20px 0px;float:left;width:100%;">
									<label for="pendidikan_bahasa_satu" class="label-text">Bahasa :</label>
									<input type="text" name="pendidikan_bahasa_satu" class="input-radio" style="width:50%;" value="<?php echo set_value('pendidikan_bahasa_satu');?>"/>
									
									<div style="width:100%;float:left;">
										<div style="width:33%;float:left;">
											<span>Menulis : </span>
											<input type="radio" name="pendidikan_bahasa_satu_menulis" value="B" <?php echo set_radio('pendidikan_bahasa_satu_menulis','baik');?>/>Baik
											<input type="radio" name="pendidikan_bahasa_satu_menulis" value="C" <?php echo set_radio('pendidikan_bahasa_satu_menulis','cukup');?>/>Cukup
										</div>
										<div style="width:33%;float:left;">
											<span>Membaca : </span>
											<input type="radio" name="pendidikan_bahasa_satu_membaca" value="B" <?php echo set_radio('pendidikan_bahasa_satu_membaca','baik');?>/>Baik
											<input type="radio" name="pendidikan_bahasa_satu_membaca" value="C" <?php echo set_radio('pendidikan_bahasa_satu_membaca','cukup');?>/>Cukup
										</div>
										<div style="width:33%;float:left;">
											<span>Berbicara : </span>
											<input type="radio" name="pendidikan_bahasa_satu_berbicara" value="B" <?php echo set_radio('pendidikan_bahasa_satu_berbicara','baik');?>/>Baik
											<input type="radio" name="pendidikan_bahasa_satu_berbicara" value="C" <?php echo set_radio('pendidikan_bahasa_satu_berbicara','cukup');?>/>Cukup
										</div>
									</div>
								</div>
								
								<div style="margin:20px 0px;float:left;width:100%;">
									<label for="pendidikan_bahasa_dua" class="label-text">Bahasa :</label>
									<input type="text" name="pendidikan_bahasa_dua" class="input-radio" style="width:50%;" value="<?php echo set_value('pendidikan_bahasa_dua');?>"/>
									
									<div style="width:100%;float:left;">
										<div style="width:33%;float:left;">
											<span>Menulis : </span>
											<input type="radio" name="pendidikan_bahasa_dua_menulis" value="B" <?php echo set_radio('pendidikan_bahasa_dua_menulis','B');?>/>Baik
											<input type="radio" name="pendidikan_bahasa_dua_menulis" value="C" <?php echo set_radio('pendidikan_bahasa_dua_menulis','C');?>/>Cukup
										</div>
										<div style="width:33%;float:left;">
											<span>Membaca : </span>
											<input type="radio" name="pendidikan_bahasa_dua_membaca" value="B" <?php echo set_radio('pendidikan_bahasa_dua_membaca','B');?>/>Baik
											<input type="radio" name="pendidikan_bahasa_dua_membaca" value="C" <?php echo set_radio('pendidikan_bahasa_dua_membaca','C');?>/>Cukup
										</div>
										<div style="width:33%;float:left;">
											<span>Berbicara : </span>
											<input type="radio" name="pendidikan_bahasa_dua_berbicara" value="B" <?php echo set_radio('pendidikan_bahasa_dua_berbicara','B');?>/>Baik
											<input type="radio" name="pendidikan_bahasa_dua_berbicara" value="C" <?php echo set_radio('pendidikan_bahasa_dua_berbicara','C');?>/>Cukup
										</div>
									</div>
								</div>
								<div style="margin:20px 0px;float:left;width:100%;">
									<label for="pendidikan_bahasa_tiga" class="label-text">Bahasa :</label>
									<input type="text" name="pendidikan_bahasa_tiga" class="input-radio" style="width:50%;" value="<?php echo set_value('pendidikan_bahasa_tiga');?>"/>
									
									<div style="width:100%;float:left;">
										<div style="width:33%;float:left;">
											<span>Menulis : </span>
											<input type="radio" name="pendidikan_bahasa_tiga_menulis" value="B" <?php echo set_radio('pendidikan_bahasa_tiga_menulis','B');?>/>Baik
											<input type="radio" name="pendidikan_bahasa_tiga_menulis" value="C" <?php echo set_radio('pendidikan_bahasa_tiga_menulis','C');?>/>Cukup
										</div>
										<div style="width:33%;float:left;">
											<span>Membaca : </span>
											<input type="radio" name="pendidikan_bahasa_tiga_membaca" value="B" <?php echo set_radio('pendidikan_bahasa_tiga_membaca','B');?>/>Baik
											<input type="radio" name="pendidikan_bahasa_tiga_membaca" value="C" <?php echo set_radio('pendidikan_bahasa_tiga_membaca','C');?>/>Cukup
										</div>
										<div style="width:33%;float:left;">
											<span>Berbicara : </span>
											<input type="radio" name="pendidikan_bahasa_tiga_berbicara" value="B" <?php echo set_radio('pendidikan_bahasa_tiga_berbicara','B');?>/>Baik
											<input type="radio" name="pendidikan_bahasa_tiga_berbicara" value="C" <?php echo set_radio('pendidikan_bahasa_tiga_berbicara','C');?>/>Cukup
										</div>
									</div>
								</div>
							</div>
						<a href="#" class="tablinks" onclick="mylinkfunction('exp_fil','experience')" style="padding: 15px;color: #fff;background-color: #8dc43f;border: 1px solid #8dc43f;cursor: pointer;float:right;">Next<i class="fa fa-angle-right" style="margin-left:10px;"></i></a>
						<a href="#" class="tablinks" onclick="mylinkfunction('fmy_fil','family')" style="padding: 15px;color: #fff;background-color: #8dc43f;border: 1px solid #8dc43f;cursor: pointer;float:right;margin-right:10px;"><i class="fa fa-angle-left" style="margin-right:10px;"></i>Previous</a>
					</div>
				</div>

			</div>
				<style>
					.table-career thead tr td{
						width:24%;
					}
				</style>
				<div style="margin:20px;float:left;" id="experience" class="tabcontent">
					<h2>Riwayat Pekerjaan</h2>
					<h4>#Step 4</h4>
					<hr/>
					<div style="float:left;width:100%;">
						<table class="table-career">
							<thead>
								<tr>
									<td style="text-align:left;">Lama Bekerja</td>
									<td><input type='text' style="margin:0;background:transparent;width:100%;padding:0;height:100%;border:none;" name="pekerjaan_perusahaan_satu_lama"/></td>
									<td><input type='text' style="margin:0;background:transparent;width:100%;padding:0;height:100%;border:none;" name="pekerjaan_perusahaan_dua_lama"/></td>
									<td><input type='text' style="margin:0;background:transparent;width:100%;padding:0;height:100%;border:none;" name="pekerjaan_perusahaan_tiga_lama"/></td>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td style="text-align:left;">Nama Perusahaan</td>
									<td><input type='text' style="margin:0;width:100%;padding:0;height:100%;border:none;" name="pekerjaan_perusahaan_satu_nama"/></td>
									<td><input type='text' style="margin:0;width:100%;padding:0;height:100%;border:none;" name="pekerjaan_perusahaan_dua_nama"/></td>
									<td><input type='text' style="margin:0;width:100%;padding:0;height:100%;border:none;" name="pekerjaan_perusahaan_tiga_nama"/></td>
								</tr>
								<tr>
									<td style="text-align:left;">Alamat & Telp</td>
									<td><textarea type='text' style="margin:0;width:100%;padding:0;height:100%;border:none;" name="pekerjaan_perusahaan_satu_alamat_telp"></textarea></td>
									<td><textarea type='text' style="margin:0;width:100%;padding:0;height:100%;border:none;" name="pekerjaan_perusahaan_dua_alamat_telp"></textarea></td>
									<td><textarea type='text' style="margin:0;width:100%;padding:0;height:100%;border:none;" name="pekerjaan_perusahaan_tiga_alamat_telp"></textarea></td>
								</tr>
								<tr>
									<td style="text-align:left;">Bergerak di Bidang</td>
									<td><input type='text' style="margin:0;width:100%;padding:0;height:100%;border:none;" name="pekerjaan_perusahaan_satu_bidang"/></td>
									<td><input type='text' style="margin:0;width:100%;padding:0;height:100%;border:none;" name="pekerjaan_perusahaan_dua_bidang"/></td>
									<td><input type='text' style="margin:0;width:100%;padding:0;height:100%;border:none;" name="pekerjaan_perusahaan_tiga_bidang"/></td>
								</tr>
								<tr>
									<td style="text-align:left;">Jabatan Terakhir</td>
									<td><input type='text' style="margin:0;width:100%;padding:0;height:100%;border:none;" name="pekerjaan_perusahaan_satu_jabatan"/></td>
									<td><input type='text' style="margin:0;width:100%;padding:0;height:100%;border:none;" name="pekerjaan_perusahaan_dua_jabatan"/></td>
									<td><input type='text' style="margin:0;width:100%;padding:0;height:100%;border:none;" name="pekerjaan_perusahaan_tiga_jabatan"/></td>
								</tr>
								<tr>
									<td style="text-align:left;">Nama Atasan Langsung</td>
									<td><input type='text' style="margin:0;width:100%;padding:0;height:100%;border:none;" name="pekerjaan_perusahaan_satu_nama_atasan"/></td>
									<td><input type='text' style="margin:0;width:100%;padding:0;height:100%;border:none;" name="pekerjaan_perusahaan_dua_nama_atasan"/></td>
									<td><input type='text' style="margin:0;width:100%;padding:0;height:100%;border:none;" name="pekerjaan_perusahaan_tiga_nama_atasan"/></td>
								</tr>
								<tr>
									<td style="text-align:left;">Gaji Pokok</td>
									<td><input type='text' style="margin:0;width:100%;padding:0;height:100%;border:none;" name="pekerjaan_perusahaan_satu_gapok"/></td>
									<td><input type='text' style="margin:0;width:100%;padding:0;height:100%;border:none;" name="pekerjaan_perusahaan_dua_gapok"/></td>
									<td><input type='text' style="margin:0;width:100%;padding:0;height:100%;border:none;" name="pekerjaan_perusahaan_tiga_gapok"/></td>
								</tr>
								<tr>
									<td style="text-align:left;">Tunjangan</td>
									<td><input type='text' style="margin:0;width:100%;padding:0;height:100%;border:none;" name="pekerjaan_perusahaan_satu_tunjangan"/></td>
									<td><input type='text' style="margin:0;width:100%;padding:0;height:100%;border:none;" name="pekerjaan_perusahaan_dua_tunjangan"/></td>
									<td><input type='text' style="margin:0;width:100%;padding:0;height:100%;border:none;" name="pekerjaan_perusahaan_tiga_tunjangan"/></td>
								</tr>
								<tr>
									<td style="text-align:left;">Fasilitas</td>
									<td><input type='text' style="margin:0;width:100%;padding:0;height:100%;border:none;" name="pekerjaan_perusahaan_satu_fasilitas"/></td>
									<td><input type='text' style="margin:0;width:100%;padding:0;height:100%;border:none;" name="pekerjaan_perusahaan_dua_fasilitas"/></td>
									<td><input type='text' style="margin:0;width:100%;padding:0;height:100%;border:none;" name="pekerjaan_perusahaan_tiga_fasilitas"/></td>
								</tr>
								<tr>
									<td style="text-align:left;">Uraikan Tugas & Tanggung Jawab Saudara pada Jabata Terakhir</td>
									<td><textarea style="margin:0;width:100%;padding:0;height:100%;border:none;" name="pekerjaan_perusahaan_satu_tugas"></textarea></td>
									<td><textarea style="margin:0;width:100%;padding:0;height:100%;border:none;" name="pekerjaan_perusahaan_dua_tugas"></textarea></td>
									<td><textarea style="margin:0;width:100%;padding:0;height:100%;border:none;" name="pekerjaan_perusahaan_tiga_tugas"></textarea></td>
								</tr>
								<tr>
									<td style="text-align:left;">Alasan Keluar</td>
									<td><textarea style="margin:0;width:100%;padding:0;height:100%;border:none;" name="pekerjaan_perusahaan_satu_alasan"></textarea></td>
									<td><textarea style="margin:0;width:100%;padding:0;height:100%;border:none;" name="pekerjaan_perusahaan_dua_alasan"></textarea></td>
									<td><textarea style="margin:0;width:100%;padding:0;height:100%;border:none;" name="pekerjaan_perusahaan_tiga_alasan"></textarea></td>
								</tr>
							</tbody>
						</table>
						
						<span>Apakah saat ini Saudara melamar pula di perusahaan lain?</span>
						<input name="pekerjaan_pertanyaan_satu" id="pekerjaan_pertanyaan_satu" type="radio" value='1'/>Ya / <input name="pekerjaan_pertanyaan_satu" id="pekerjaan_pertanyaan_satu" type="radio" value="0"/>Tidak
						<span>Jika Ya, Perusahaan apa</span>
						<div class="group-text" id="form_perusahaan_lain">	
							<div class="group-text">
							<label for="pekerjaan_perusahaan_lain_nama" class="label-text">Nama Perusahaan</label>
							<input type="text" name="pekerjaan_perusahaan_lain_nama" class="input-text" style="width:60%;"/>
							<div class="group-text">
							<label for="pekerjaan_lain_sebagai" class="label-text">Sebagai</label>
							<input type="text" name="pekerjaan_lain_sebagai" class="input-text" style="width:60%;"/>
						</div>
						<div class="group-text">
							<label for="pekerjaan_lain_kapan" class="label-text">Kapan</label>
							<input type="text" name="pekerjaan_lain_kapan" class="input-text" style="width:60%;"/>
						</div>
						</div>
						</div>
						
						<h2>Berikan 3 nama referensi (orang yang dapat memberikan informasi mengenai karakter dan kemampuan Saudara)</h2>
						<hr/>
						
						<table>
							<thead>
								<tr>
									<td>Nama</td>
									<td>Pekerjaan/Jabatan</td>
									<td>Alamat</td>
									<td>Telp</td>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td><input type='text' style="margin:0;width:100%;padding:0;height:100%;border:none;" name="pekerjaan_referensi_satu_nama"/></td>
									<td><input type='text' style="margin:0;width:100%;padding:0;height:100%;border:none;" name="pekerjaan_referensi_satu_jabatan"/></td>
									<td><input type='text' style="margin:0;width:100%;padding:0;height:100%;border:none;" name="pekerjaan_referensi_satu_alamat"/></td>
									<td><input type='text' style="margin:0;width:100%;padding:0;height:100%;border:none;" name="pekerjaan_referensi_satu_telp"/></td>
								</tr>
								<tr>
									<td><input type='text' style="margin:0;width:100%;padding:0;height:100%;border:none;" name="pekerjaan_referensi_dua_nama"/></td>
									<td><input type='text' style="margin:0;width:100%;padding:0;height:100%;border:none;" name="pekerjaan_referensi_dua_jabatan"/></td>
									<td><input type='text' style="margin:0;width:100%;padding:0;height:100%;border:none;" name="pekerjaan_referensi_dua_alamat"/></td>
									<td><input type='text' style="margin:0;width:100%;padding:0;height:100%;border:none;" name="pekerjaan_referensi_dua_telp"/></td>
								</tr>
								<tr>
									<td><input type='text' style="margin:0;width:100%;padding:0;height:100%;border:none;" name="pekerjaan_referensi_tiga_nama"/></td>
									<td><input type='text' style="margin:0;width:100%;padding:0;height:100%;border:none;" name="pekerjaan_referensi_tiga_jabatan"/></td>
									<td><input type='text' style="margin:0;width:100%;padding:0;height:100%;border:none;" name="pekerjaan_referensi_tiga_alamat"/></td>
									<td><input type='text' style="margin:0;width:100%;padding:0;height:100%;border:none;" name="pekerjaan_referensi_tiga_telp"/></td>
								</tr>
							</tbody>
						</table>
						<a href="#" class="tablinks" onclick="mylinkfunction('oth_fil','other')" style="padding: 15px;color: #fff;background-color: #8dc43f;border: 1px solid #8dc43f;cursor: pointer;float:right;">Next<i class="fa fa-angle-right" style="margin-left:10px;"></i></a>
						<a href="#" class="tablinks" onclick="mylinkfunction('edu_fil','education')" style="padding: 15px;color: #fff;background-color: #8dc43f;border: 1px solid #8dc43f;cursor: pointer;float:right;margin-right:10px;"><i class="fa fa-angle-left" style="margin-right:10px;"></i>Previous</a>
					</div>
				</div>
				<div style="margin:20px;float:left;" id="other" class="tabcontent">
					<h2>Hal-hal yang berhubungan dengan diri pelamar</h2>
					<h4>#Step 5</h4>
					<hr/>
					<div style="float:left;width:100%;">
						<p>Apa hobby saudara?</p>
						<div class="group-text">	
							<input name="other_pertanyaan_a" type="text" class="input-text" style="width:100%;"/>
						</div>	
						<p>Bagaimana cara saudara mengisi waktu luang?</p>
						<div class="group-text">	
							<input name="other_pertanyaan_b" type="text" class="input-text" style="width:100%;"/>
						</div>
						<p>Majalah / Surat Kabar apa yang dibaca?</p>
						<div class="group-text">	
							<input name="other_pertanyaan_c" type="text" class="input-text" style="width:100%;"/>
						</div>
						
						<p>Masalah / Topik yang diminati?</p>
						<div class="group-text">	
							<input name="other_pertanyaan_d" type="text" class="input-text" style="width:100%;"/>
						</div>
						
						<p>Pernahkah saudara sakit keras? Jika ya, sertakan nama penyakitnya dan pada tahun berapa.</p>
						<div class="group-text">	
							<input name="other_pertanyaan_e" type="text" class="input-text" style="width:100%;"/>
						</div>
						
						<p>Pernahkah saudara dioperasi/dirawat di RS? Jika ya, sertakan nama penyakitnya dan pada tahun berapa.</p>
						<div class="group-text">	
							<input name="other_pertanyaan_f" type="text" class="input-text" style="width:100%;"/>
						</div>
						
						<p>Pernahkan saudara mengalami kecelakaan? Jika ya, sertakan kecelakaan apa dan pada tahun berapa.</p>
						<div class="group-text">	
							<input name="other_pertanyaan_g" type="text" class="input-text" style="width:100%;"/>
						</div>
						
						<p>Apakah saudara memakai kacamata? Jika ya, Min/Plus?</p>
						<div class="group-text">	
							<input name="other_pertanyaan_h" type="text" class="input-text" style="width:100%;"/>
						</div>
						
						<p>Apakah saudara merokok? Jika ya, sejak kapan?</p>
						<div class="group-text">	
							<input name="other_pertanyaan_i" type="text" class="input-text" style="width:100%;"/>
						</div>
					</div>
					
					
					<h2>Hal-hal yang berhubungan dengan lamaran kerja</h2>
					<hr/>
					<div style="float:left;width:100%;">
						<p>Apakah saudara pernah melamar di PT Gloria Origita Cosmetics sebelumnya? Jika ya, kapan dan posisi apa yang dilamar?</p>
						<div class="group-text">	
							<input name="other_pertanyaan_j" type="text" class="input-text" style="width:100%;"/>
						</div>	
						<p>Darimana saudara mengetahui adanya lowongan ini?</p>
						<div class="group-text">	
							<input name="other_pertanyaan_k" type="text" class="input-text" style="width:100%;"/>
						</div>
						<p>Adakah karyawan yang bekerja pada perusahaan ini yang saudara kenal? Jika ada, sertakan nama, jabatan karyawan tersebut dan sertakan pula apa hubungankaryawan tersebut dengan saudara?</p>
						<div class="group-text">	
							<input name="other_pertanyaan_l" type="text" class="input-text" style="width:100%;"/>
						</div>
						
						<p>Alasan / Tujuan saudara melamar di PT Gloria Origita Cosmetics?</p>
						<div class="group-text">	
							<textarea name="other_pertanyaan_m" class="input-text" style="width:100%;"></textarea>
						</div>
						
						<p>Apakah saudara bersedia tugas di luar jam kerja & tugas di luar kota?</p>
						<div class="group-text">	
							<input name="other_pertanyaan_n" type="text" class="input-text" style="width:100%;"/>
						</div>
						
						<p>Apakah saudara bersedia ditempatkan di luar kota? Jika tidak, sertakan alasannya.</p>
						<div class="group-text">	
							<textarea name="other_pertanyaan_o" class="input-text" style="width:100%;"></textarea>
						</div>
						
						<p>Gaji yang saudara harapkan?</p>
						<div class="group-text">	
							<input name="other_pertanyaan_p" type="text" class="input-text" style="width:100%;"/>
						</div>
						
						<p>Jika saudara diterima di PT Gloria Origita Cosmetics, Kapan saudara siap untuk bekerja?</p>
						<div class="group-text">	
							<input name="other_pertanyaan_q" type="text" class="input-text" style="width:100%;"/>
						</div>
						<div class="group-text">	
							<input name="agree" type="checkbox" class="input-text" style="width:100%;"/> Dengan ini saya telah memberikan informasi dengan sebenarnya.
						</div>
					</div>
						<button type="submit" style="padding:20px 15px;color: #fff;background-color: #8dc43f;border: 1px solid #8dc43f;cursor: pointer;float:right;">Send<i class="fa fa-send" style="margin-left:10px;"></i></button>
						<a href="#" class="tablinks" onclick="mylinkfunction('exp_fil','experience')" style="padding:15px;color: #fff;background-color: #8dc43f;border: 1px solid #8dc43f;cursor: pointer;float:right;margin-right:10px;"><i class="fa fa-angle-left" style="margin-right:10px;"></i>Previous</a>
				</div>						
				<?php echo form_close();?>
			</div>
			<div class="clearfix"></div>
</section>
			