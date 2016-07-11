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
							<i class="fa fa-group" style="padding:20px;background:#fff;color:#ccc;border-radius:50%;border:2px solid #8dc43f"></i>
							<h3 style="margin-bottom:0px;margin-top:5px;">Family Data</h3>
							<span>Step 2</span>
						</div>
						<div style="text-align:center;width:20%;float:left;">
							<i class="fa fa-mortar-board" style="padding:20px 18px;background:#ccc;color:#fff;border-radius:50%;border:2px solid #8dc43f"></i>
							<h3 style="margin-bottom:0px;margin-top:5px;">Education Info</h3>
							<span>Step 3</span>
						</div>
						<div style="text-align:center;width:20%;float:left;">
							<i class="fa fa-briefcase" style="padding:20px 21px;background:#ccc;color:#fff;border-radius:50%;border:2px solid #8dc43f"></i>
							<h3 style="margin-bottom:0px;margin-top:5px;">Experience Info</h3>
							<span>Step 4</span>
						</div>
						<div style="text-align:center;width:20%;float:left;">
							<i class="fa fa-file-o" style="padding:20px 21px;background:#ccc;color:#fff;border-radius:50%;border:2px solid #8dc43f"></i>
							<h3 style="margin-bottom:0px;margin-top:5px;">Other Info</h3>
							<span>Step 5</span>
						</div>
					</div>
				</div>
				<div style="margin:20px;float:left;">
					<h2>Your Family Data</h2>
					<div style="float:left;width:100%;">
						<div class="group-text" style="padding-bottom:20px">
							<label for="nama_lengkap" class="label-text">House of Residence</label>
							<i class="fa fa-asterisk" style="font-size:6px;float:left;margin-left:-15px;color:red;"></i> 
							<div style="width:70%;float:left;">
								<div style="width:50%;float:left;">
									<div style="width:100%;float:left;">
										<input type="radio" name="jk" value="sendiri"/>Own (Rumah Pribadi)
									</div>
									<div style="width:100%;float:left;">
										<input type="radio" name="jk" value="ortu"/>Family Owned (Rumah Orang Tua)
									</div>
									<div style="width:100%;float:left;">
										<input type="radio" name="jk" value="kost"/>Rental (Kost / Kontrak)
									</div>
								</div>
								<div style="width:50%;float:left;">
									<div style="width:100%;float:left;">
										<input type="radio" name="jk" value="istri_suami"/>Spouse Owned (Rumah Istri / Suami)
									</div>
									<div style="width:100%;float:left;">
										<input type="radio" name="jk" value="others"/>Other (Lain-lain)
									</div>
								</div>
							</div>
						</div>
						
						<div class="group-text">
							<label for="agama" class="label-text">Number Child</label>
							<i class="fa fa-asterisk" style="font-size:6px;float:left;margin-left:-15px;color:red;"></i>
							<input type="text" name="agama" class="input-radio" style="width:5%;"/>
							<label for="suku" class="label-text" style="margin-left:2%;width:3%;margin-right:0px;text-align:left;">of</label>
							<i class="fa fa-asterisk" style="font-size:6px;float:left;margin-left:-15px;color:red;"></i>
							<input type="text" name="suku" class="input-radio" style="width:5%;"/>
							<span style="margin-left:5px;">Siblings</span>
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
									<td>Parent / Orang Tua</td>
									<td>Full Name / Nama Lengkap</td>
									<td>Age / Usia</td>
									<td>Latest Education / Pendidikan</td>
									<td>Work / Pekerjaan</td>
								</tr>
							</thead>
							<tbody>
								<tr>
										<td>Father / Ayah</td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
								</tr>
								<tr>
										<td>Mother / Ibu</td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
								</tr>
							</tbody>
						</table>
						
						<div class="group-text">
							<label for="alamat" class="label-text">Parent Address</label>
							<i class="fa fa-asterisk" style="font-size:6px;float:left;margin-left:-15px;color:red;"></i>
							<textarea name="alamat" class="input-text"></textarea>
						</div>
						
						<div class="group-text">
							<label for="telp" class="label-text">Phone Parent</label>
							<input type="text" name="telp" class="input-radio" style="width:22%;"/>
						</div>
						
						<table>
							<thead>
								<tr>
									<td>Brother / Sister</td>
									<td>Full Name / Nama Lengkap</td>
									<td>Age / Usia</td>
									<td>Latest Education / Pendidikan</td>
									<td>Work / Pekerjaan</td>
								</tr>
							</thead>
							<tbody>
							</tbody>
						</table>
						
						<table>
							<thead>
								<tr>
									<td>Spouse / Suami Istri</td>
									<td>Full Name / Nama Lengkap</td>
									<td>Age / Usia</td>
									<td>Latest Education / Pendidikan</td>
									<td>Work / Pekerjaan</td>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>Suami / Istri</td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
								</tr>
							</tbody>
						</table>
						
						<table>
							<thead>
								<tr>
									<td>Daughter</td>
									<td>Full Name / Nama Lengkap</td>
									<td>Age / Usia</td>
									<td>Latest Education / Pendidikan</td>
									<td>Work / Pekerjaan</td>
								</tr>
							</thead>
							<tbody>
							</tbody>
						</table>
						
						<button style="padding: 15px;color: #fff;background-color: #8dc43f;border: 1px solid #8dc43f;cursor: pointer;float:right;">Next<i class="fa fa-angle-right" style="margin-left:10px;"></i></button>
					</div>
				</div>
			</div>
			
			<div class="clearfix"></div>
</section>
			