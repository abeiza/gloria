<script src="<?php echo base_url();?>assets/js/jquery.masked.js" type="text/javascript"></script>
<script>
	jQuery(function($){
		$("#tgl_lulus").mask("99/99/9999",{placeholder:"dd/mm/yyyy"});
		$("#tgl_lahir").mask("99/99/9999",{placeholder:"dd/mm/yyyy"});
	});
</script>
<section class="mainContent">
        <div class="contentBgFull"></div>
        <?php date_default_timezone_set('Asia/Jakarta')?>
        <div id="tagLineShadow" class="sixteen columns"></div>
			<div class="row">
		        <div style="text-align:center;height:180px;">
					<h1>Form Biodata Applicant</h1>
					<span>Come explore the endless opportunities in an environment where we support you and your professional success.If you're looking to not just start your career, but want to accelerate it, consider our internships and entry-level positions.</span>
				</div>
			</div>
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
			</style>
			<div class="row">
				<div style="margin:2%;width:98%;float:left;">
					<div style="float:left;width:100%;">
						<div style="position:absolute;width:80%;height:2px;background:#8dc43f;margin-left:10%;margin-top: 25px;z-index: -1;"></div>
						<div style="text-align:center;width:20%;float:left;">
							<i class="fa fa-user" style="padding:20px 22px;background:#8dc43f;color:#fff;border-radius:50%;"></i>
							<h3 style="margin-bottom:0px;margin-top:5px;">Personal Data</h3>
							<span>Step 1</span>
						</div>
						<div style="text-align:center;width:20%;float:left;">
							<i class="fa fa-group" style="padding:20px 21px;background:#8dc43f;color:#fff;border-radius:50%;"></i>
							<h3 style="margin-bottom:0px;margin-top:5px;">Family Data</h3>
							<span>Step 2</span>
						</div>
						<div style="text-align:center;width:20%;float:left;">
							<i class="fa fa-mortar-board" style="padding:20px 18px;background:#8dc43f;color:#fff;border-radius:50%;"></i>
							<h3 style="margin-bottom:0px;margin-top:5px;">Education Info</h3>
							<span>Step 3</span>
						</div>
						<div style="text-align:center;width:20%;float:left;">
							<i class="fa fa-briefcase" style="padding:20px 21px;background:#fff;color:#ccc;border-radius:50%;border:2px solid #8dc43f"></i>
							<h3 style="margin-bottom:0px;margin-top:5px;">Experience Info</h3>
							<span>Step 4</span>
						</div>
						<div style="text-align:center;width:20%;float:left;">
							<i class="fa fa-file-o" style="padding:20px 21px;background:#ccc;color:#fff;border-radius:50%;"></i>
							<h3 style="margin-bottom:0px;margin-top:5px;">Other Info</h3>
							<span>Step 5</span>
						</div>
					</div>
				</div>
				<div style="margin:20px;float:left;">
					<h2>Personal Data</h2>
					<div style="float:left;width:20%;">
						<div style="background-color:#f5f5f5;width:100%;height:250px;"></div>
						<input type="file" style="margin-top:10px;float:left"/>
					</div>
	
					<div style="float:left;width:80%;">
						<div class="group-text">
							<label for="nama_lengkap" class="label-text">Full Name</label>
							<i class="fa fa-asterisk" style="font-size:6px;float:left;margin-left:-15px;color:red;"></i> 
							<input type="text" name="nama_lengkap" class="input-text" style="width:60%;"/>
						</div>
						
						<div class="group-text">
							<label for="panggilan" class="label-text">Nick Name</label>
							<i class="fa fa-asterisk" style="font-size:6px;float:left;margin-left:-15px;color:red;"></i>
							<input type="text" name="panggilan" class="input-text"/>
						</div>
						
						<div class="group-text" style="padding-bottom:20px">
							<label for="jk" class="label-text">Gender</label>
							<i class="fa fa-asterisk" style="font-size:6px;float:left;margin-left:-15px;color:red;"></i>
							<div style="width:60%;float:left;">
								<input type="radio" name="jk" value="male"/>Male
								<input type="radio" name="jk" value="female"/>Female
							</div>
						</div>
						
						<div class="group-text">
							<label for="alamat" class="label-text">Address</label>
							<i class="fa fa-asterisk" style="font-size:6px;float:left;margin-left:-15px;color:red;"></i>
							<textarea name="alamat" class="input-text"></textarea>
						</div>
						
						<div class="group-text">
							<label for="telp" class="label-text">Phone Home / Work </label>
							<input type="text" name="telp" class="input-radio" style="width:22%;"/>
							<label for="hp" class="label-text" style="margin-left:2%;width:13%;margin-right:0px;text-align:left;">Handphone</label>
							<i class="fa fa-asterisk" style="font-size:6px;float:left;margin-left:-15px;color:red;"></i> 
							<input type="text" name="hp" class="input-radio" style="width:22%;"/>
						</div>
						
						<div class="group-text">
							<label for="ttl" class="label-text">Born/Birthday</label>
							<i class="fa fa-asterisk" style="font-size:6px;float:left;margin-left:-15px;color:red;"></i>
							<input type="text" style="width:15%;float:left;" name="tempat"/> 
							<label class="fa fa-calendar" style="width:3%;float:left;text-align:center;margin-top:10px;"></label>
							<input type="text" style="width:19%;float:left;" name="tgl_lahir" id="tgl_lahir"/>
							<label for="gol_dar" class="label-text" style="margin-left:2%;width:10%;margin-right:0px;text-align:left;">Blood Type </label>
							<input type="text" style="width:8.5%;" name="gol_dar"/>
						</div>
						
						<div class="group-text">
							<label for="pendidikan" class="label-text">Latest Education</label>
							<i class="fa fa-asterisk" style="font-size:6px;float:left;margin-left:-15px;color:red;"></i>
							<select name="pendidikan" class="input-radio" style="width:23.3%;">
								<option value="" disabled selected> -- select education -- </option>
								<option value="HS">High School / (SMA/SMK)</option>
								<option value="D3">Diploma / D3</option>
								<option value="AD">Associate Degree</option>
								<option value="BD">Bachelor Degree / S1</option>
								<option value="MD">Master Degree / S2</option>
							</select>
							<label for="tgl_lulus" class="label-text" style="margin-left:2%;width:13%;margin-right:0px;text-align:left;">Graduate Date </label>
							<input type="text" name="tgl_lulus" id="tgl_lulus" class="input-radio" style="width:22%;"/>
						</div>
						
						<div class="group-text">
							<label for="agama" class="label-text">Religion</label>
							<i class="fa fa-asterisk" style="font-size:6px;float:left;margin-left:-15px;color:red;"></i>
							<input type="text" name="agama" class="input-radio" style="width:22%;"/>
							<label for="suku" class="label-text" style="margin-left:2%;width:13%;margin-right:0px;text-align:left;">Culture / Suku</label>
							<i class="fa fa-asterisk" style="font-size:6px;float:left;margin-left:-15px;color:red;"></i>
							<input type="text" name="suku" class="input-radio" style="width:22%;"/>
						</div>
						
						<div class="group-text">
							<label for="status" class="label-text">Status</label>
							<i class="fa fa-asterisk" style="font-size:6px;float:left;margin-left:-15px;color:red;"></i>
							<select name="status" class="input-radio" style="width:23.3%;">
								<option value="" disabled selected> -- select status -- </option>
								<option value="single">Single</option>
								<option value="married">Married</option>
								<option value="divorced">Divorced</option>
							</select>
						</div>
						
						<div class="group-text">
							<label for="warganegara" class="label-text">Nationalism</label>
							<i class="fa fa-asterisk" style="font-size:6px;float:left;margin-left:-15px;color:red;"></i>
							<input type="text" name="warganegara" class="input-radio" style="width:22%;"/>
						</div>
						
						<div class="group-text">
							<label for="berat_tinggi" class="label-text">Weight</label>
							<i class="fa fa-asterisk" style="font-size:6px;float:left;margin-left:-15px;color:red;"></i>
							<input type="text" name="berat" class="input-radio" style="width:22%;"/>
							<label for="berat_tinggi" class="label-text" style="margin-left:2%;width:13%;margin-right:0px;text-align:left;">Height</label>
							<i class="fa fa-asterisk" style="font-size:6px;float:left;margin-left:-15px;color:red;"></i>
							<input type="text" name="tinggi" class="input-radio" style="width:22%;"/>
						</div>
						
						<div class="group-text">
							<label for="type_iden" class="label-text">Identity Type.</label>
							<i class="fa fa-asterisk" style="font-size:6px;float:left;margin-left:-15px;color:red;"></i>
							<select name="type_iden" class="input-radio" style="width:23.3%;">
								<option value="" disabled selected> -- select identity type -- </option>
								<option value="">Identity No. / No. KTP</option>
								<option value="">Passport No.</option>
								<option value="">SIM No.</option>
							</select>
							<label for="no_iden" class="label-text" style="margin-left:2%;width:13%;margin-right:0px;text-align:left;">Identity No.</label>
							<i class="fa fa-asterisk" style="font-size:6px;float:left;margin-left:-15px;color:red;"></i>
							<input type="text" name="no_iden" class="input-radio" style="width:22%;"/>
						</div>
						
						<button style="padding: 15px;color: #fff;background-color: #8dc43f;border: 1px solid #8dc43f;cursor: pointer;float:right;">Next<i class="fa fa-angle-right" style="margin-left:10px;"></i></button>
					</div>
				</div>
			</div>
			
			<div class="clearfix"></div>
</section>
			