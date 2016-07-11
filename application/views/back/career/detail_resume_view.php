 
 
				<!-- Header -->
				<div style="float:left;width:100%;height:11.5%;background:#fff;color:#787878;">
					<div style="margin:0px 20px;width:auto;">	
						<h2 style="text-transform:uppercase;float:left;"><i class="fa fa-tasks" style="margin-right:10px"></i>Resume</h2>
						<div style="margin-top:25px;float:left;margin-left:10px;"><a href="<?php echo base_url().'index.php/backend/manage_career/grid_applying_application/'?>" style="color:#666;text-decoration:none;"><i class="fa fa-long-arrow-left"></i> Back to Grid</a></div>					
					</div>
				</div>
				<!-- End of header -->
				<!-- Separator -->
				<div style="float:left;width:100%;height:0.5%;background:#64c0cc;color:#787878;">
				</div>
				<!-- End of separator -->
				<?php 
					foreach($data_detail->result() as $detail){
				?>
				<!-- Work Sheet -->
				<div style="float:left;width:100%;height:auto;background:#f9f9f9;">
					<!-- Sheet Pertama -->
					<div style="float:left;margin:10px 2%;width:96%;background-color:#fff; border-radius:3px; border:1px solid #f1f1f1">
						<div style="width:90%;color:#787878;padding:5%;float:left;">
							<div style="text-align:center;width:100%;float:left;">
								<h3 style="margin-bottom:0;padding-bottom:0;">Form HRD 3 - DATA ISIAN PELAMAR</h3>
								<span>(diisi oleh setiap calon karyawan)</span>
							</div>
							<div style="width:100%;float:left;margin-top:50px;">
								<div style="width:30%;float:right;">
									<div style="width:180px;height:250px;background-color:#e1e1e1;float:right;">
										<?php echo $detail->pribadi_foto==''?'&nbsp;':'<img src="'.base_url().'apply/original/'.$detail->pribadi_foto.'" style="width:100%;"/>';?>
									</div>
								</div>
								<div style="width:70%;float:left">
									<div style="width:100%;float:left;">
										<div style="width:30%;float:left;">
											Kode lamaran
										</div>
										<div style="width:1%;float:left;">
											:
										</div>
										<div style="width:69%;float:left;">
											<?php echo $detail->resume_kode_lamaran;?>
										</div>
									</div>
									<div style="width:100%;float:left;">
										<div style="width:30%;float:left;">
											Jabatan yang dilamar
										</div>
										<div style="width:1%;float:left;">
											:
										</div>
										<div style="width:69%;float:left;">
											<?php echo $detail->Career_Title;?>
										</div>
									</div>
									<div style="width:100%;float:left;">
										<div style="width:30%;float:left;">
											Tanggal Mengisi Formulir
										</div>
										<div style="width:1%;float:left;">
											:
										</div>
										<div style="width:69%;float:left;">
											<?php echo $detail->resume_tgl_isi;?>
										</div>
									</div>
								</div>
								<div style="width:70%;float:left">
									<h4 style="border-bottom:1px dashed #999">I DATA PRIBADI</h4>
									
									<div style="width:100%;float:left;">
										<div style="width:30%;float:left;">
											Nama Lengkap
										</div>
										<div style="width:1%;float:left;">
											:
										</div>
										<div style="width:69%;float:left;">
											<?php echo $detail->pribadi_nama_lengkap;?>
										</div>
									</div>
									<div style="width:100%;float:left;">
										<div style="width:30%;float:left;">
											Nama Panggilan
										</div>
										<div style="width:1%;float:left;">
											:
										</div>
										<div style="width:69%;float:left;">
											<?php echo $detail->pribadi_nama_panggilan;?>
										</div>
									</div>
									<div style="width:100%;float:left;">
										<div style="width:30%;float:left;">
											Alamat
										</div>
										<div style="width:1%;float:left;">
											:
										</div>
										<div style="width:69%;float:left;">
											<?php echo $detail->pribadi_alamat;?>
										</div>
									</div>
									<div style="width:100%;float:left;">
										<div style="width:30%;float:left;">
											Jenis Kelamin
										</div>
										<div style="width:1%;float:left;">
											:
										</div>
										<div style="width:69%;float:left;">
											<?php 
												if($detail->pribadi_jk == 'L'){
													echo 'Laki-laki';
												}else if($detail->pribadi_jk == 'P'){
													echo 'Perempuan';
												}
											?>
										</div>
									</div>
									<div style="width:100%;float:left;">
										<div style="width:50%;float:left;">	
											<div style="width:60%;float:left;">
												No. Telp
											</div>
											<div style="width:1%;float:left;">
												:
											</div>
											<div style="width:39%;float:left;">
												<span style="margin-left:3px;"><?php echo $detail->pribadi_telp;?></span>
											</div>
										</div>
										<div style="width:50%;float:left;">
											<div style="width:60%;float:left;">
												No. Hp
											</div>
											<div style="width:1%;float:left;">
												:
											</div>
											<div style="width:39%;float:left;">
												<span style="margin-left:3px;"><?php echo $detail->pribadi_hp;?></span>
											</div>
										</div>
									</div>
									<div style="width:100%;float:left;">
										<div style="width:50%;float:left;">	
											<div style="width:60%;float:left;">
												Tempat / Tanggal Lahir
											</div>
											<div style="width:1%;float:left;">
												:
											</div>
											<div style="width:39%;float:left;">
												<span style="margin-left:3px;"><?php echo $detail->pribadi_tempat;?> ,<?php echo $detail->pribadi_tgl_lahir;?></span>
											</div>
										</div>
										<div style="width:50%;float:left;">
											<div style="width:60%;float:left;">
												Golongan Darah
											</div>
											<div style="width:1%;float:left;">
												:
											</div>
											<div style="width:39%;float:left;">
												<span style="margin-left:3px;"><?php echo $detail->pribadi_gol_dar;?></span>
											</div>
										</div>
									</div>
									<div style="width:100%;float:left;">
										<div style="width:50%;float:left;">	
											<div style="width:60%;float:left;">
												Pendidikan Terakhir
											</div>
											<div style="width:1%;float:left;">
												:
											</div>
											<div style="width:39%;float:left;">
												<span style="margin-left:3px;"><?php echo $detail->pribadi_pendidikan;?></span>
											</div>
										</div>
										<div style="width:50%;float:left;">
											<div style="width:60%;float:left;">
												Tahun Lulus
											</div>
											<div style="width:1%;float:left;">
												:
											</div>
											<div style="width:39%;float:left;">
												<span style="margin-left:3px;"><?php echo $detail->pribadi_tgl_lulus;?></span>
											</div>
										</div>
									</div>
									<div style="width:100%;float:left;">
										<div style="width:50%;float:left;">	
											<div style="width:60%;float:left;">
												Agama
											</div>
											<div style="width:1%;float:left;">
												:
											</div>
											<div style="width:39%;float:left;">
												<span style="margin-left:3px;"><?php echo $detail->pribadi_agama;?></span>
											</div>
										</div>
										<div style="width:50%;float:left;">
											<div style="width:60%;float:left;">
												Status
											</div>
											<div style="width:1%;float:left;">
												:
											</div>
											<div style="width:39%;float:left;">
												<span style="margin-left:3px;"><?php echo $detail->pribadi_status;?></span>
											</div>
										</div>
									</div>
									<div style="width:100%;float:left;">
										<div style="width:50%;float:left;">	
											<div style="width:60%;float:left;">
												Suku Bangsa
											</div>
											<div style="width:1%;float:left;">
												:
											</div>
											<div style="width:39%;float:left;">
												<span style="margin-left:3px;"><?php echo $detail->pribadi_suku;?></span>
											</div>
										</div>
										<div style="width:50%;float:left;">
											<div style="width:60%;float:left;">
												Kewarganegaraan
											</div>
											<div style="width:1%;float:left;">
												:
											</div>
											<div style="width:39%;float:left;">
												<span style="margin-left:3px;"><?php echo $detail->pribadi_warganegara;?></span>
											</div>
										</div>
									</div>
									<div style="width:100%;float:left;">
										<div style="width:50%;float:left;">	
											<div style="width:60%;float:left;">
												Berat & Tinggi Badan
											</div>
											<div style="width:1%;float:left;">
												:
											</div>
											<div style="width:39%;float:left;">
												<span style="margin-left:3px;"><?php echo $detail->pribadi_berat;?>kg</span> / <span style="margin-left:3px;"><?php echo $detail->pribadi_tinggi;?>cm</span>
											</div>
										</div>
										<div style="width:50%;float:left;">
											<div style="width:60%;float:left;">
												No. Identitas
											</div>
											<div style="width:1%;float:left;">
												:
											</div>
											<div style="width:39%;float:left;">
												<span style="margin-left:3px;">No. <?php echo $detail->pribadi_type_iden;?></span> <span style="margin-left:3px;"><?php echo $detail->pribadi_no_iden;?></span>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div style="width:100%;float:left">
								<h4 style="border-bottom:1px dashed #999">II DATA KELUARGA</h4>
								<style>
									ol.d {
										list-style-type: lower-alpha;
										margin-top:1px;
									}
									ol.d li{
										float:left;
										margin-left:50px;
									}
								</style>
								<div style="width:100%;float:left;">
									<div style="width:21%;float:left;">Saudara tinggal di rumah</div>
									<div style="width:1%;float:left;">:</div>
									<div style="width:78%;float:left;">
									<style>
										.check{
											border:1px solid #444;padding:4px 8px;border-radius:100%;
										}
									</style>
										<span style="margin-right:30px;"><span <?php if($detail->keluarga_rumah == 0){ echo "class='check'";}?>>a.</span> Sendiri</span>
										<span style="margin-right:30px;"><span <?php if($detail->keluarga_rumah == 1){ echo "class='check'";}?>>b.</span> Ortu</span>
										<span style="margin-right:30px;"><span <?php if($detail->keluarga_rumah == 2){ echo "class='check'";}?>>c.</span> Sewa</span>
										<span style="margin-right:30px;"><span <?php if($detail->keluarga_rumah == 3){ echo "class='check'";}?>>d.</span> Kost</span>
										<span style="margin-right:30px;"><span <?php if($detail->keluarga_rumah == 4){ echo "class='check'";}?>>e.</span> <?php if($detail->keluarga_rumah == 4){ echo $detail->keluarga_rumah_desc;}?></span>
									</div>
								</div>
								<div style="width:100%;float:left;">
									<div style="width:21%;float:left;">Saudara anak ke</div>
									<div style="width:1%;float:left;">:</div>
									<div style="width:78%;float:left;">
										 <?php echo $detail->keluarga_anak_ke; ?> dari <?php echo $detail->keluarga_dari_brp; ?> bersaudara 
									</div>
								</div>
								<div style="width:100%;float:left;">
								<style>
									table.detail_resume{
										border:1px solid #999;
										border-collapse:collapse;
										margin:10px 0px;
									}
									
									table.detail_resume tr td{
										border:1px solid #999;
										border-collapse:collapse;
									}
								</style>
									<table class="detail_resume" style="width:100%;">
										<thead>
											<tr>
												<td style="width:200px;">Orang Tua</td>
												<td>Nama</td>
												<td>Usia</td>
												<td>Pendidikan</td>
												<td>Pekerjaan</td>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>Ayah</td>
												<td><?php echo $detail->keluarga_ayah_nama;?></td>
												<td><?php echo $detail->keluarga_ayah_usia;?></td>
												<td><?php echo $detail->keluarga_ayah_pendidikan;?></td>
												<td><?php echo $detail->keluarga_ayah_pekerjaan;?></td>
											</tr>
											<tr>
												<td>Ibu</td>
												<td><?php echo $detail->keluarga_ibu_nama;?></td>
												<td><?php echo $detail->keluarga_ibu_usia;?></td>
												<td><?php echo $detail->keluarga_ibu_pendidikan;?></td>
												<td><?php echo $detail->keluarga_ibu_pekerjaan;?></td>
											</tr>
										</tbody>
									</table>
								</div>
								<div style="width:100%;float:left;">
									<div style="width:21%;float:left;">Alamat Orang Tua</div>
									<div style="width:1%;float:left;">:</div>
									<div style="width:78%;float:left;">
										<?php echo $detail->keluarga_alamat_ortu;?>
									</div>
								</div>
								<div style="width:100%;float:left;">
									<div style="width:21%;float:left;">Telp Orang Tua</div>
									<div style="width:1%;float:left;">:</div>
									<div style="width:78%;float:left;">
										<?php echo $detail->keluarga_telp_ortu;?>
									</div>
								</div>
								<div style="width:100%;float:left;">
									<table class="detail_resume" style="width:100%;">
										<thead>
											<tr>
												<td  style="width:200px;">Keluarga</td>
												<td>Nama</td>
												<td>Usia</td>
												<td>Pendidikan</td>
												<td>Pekerjaan</td>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>Suami/Istri</td>
												<td><?php echo $detail->keluarga_pasangan_nama;?></td>
												<td><?php echo $detail->keluarga_pasangan_usia;?></td>
												<td><?php echo $detail->keluarga_pasangan_pendidikan;?></td>
												<td><?php echo $detail->keluarga_pasangan_pekerjaan;?></td>
											</tr>
											<tr>
												<td>Anak</td>
												<td><?php echo $detail->keluarga_anak_satu_nama;?></td>
												<td><?php echo $detail->keluarga_anak_satu_usia;?></td>
												<td><?php echo $detail->keluarga_anak_satu_pendidikan;?></td>
												<td><?php echo $detail->keluarga_anak_satu_pekerjaan;?></td>
											</tr>
											<tr>
												<td>Anak</td>
												<td><?php echo $detail->keluarga_anak_dua_nama;?></td>
												<td><?php echo $detail->keluarga_anak_dua_usia;?></td>
												<td><?php echo $detail->keluarga_anak_dua_pendidikan;?></td>
												<td><?php echo $detail->keluarga_anak_dua_pekerjaan;?></td>
											</tr>
											<tr>
												<td>Anak</td>
												<td><?php echo $detail->keluarga_anak_tiga_nama;?></td>
												<td><?php echo $detail->keluarga_anak_tiga_usia;?></td>
												<td><?php echo $detail->keluarga_anak_tiga_pendidikan;?></td>
												<td><?php echo $detail->keluarga_anak_tiga_pekerjaan;?></td>
											</tr>
										</tbody>
									</table>
								</div>
								<div style="width:100%;float:left;">
									<table class="detail_resume" style="width:100%;">
										<thead>
											<tr>
												<td  style="width:200px;">Saudara Kandung</td>
												<td>Nama</td>
												<td>Usia</td>
												<td>Pendidikan</td>
												<td>Pekerjaan</td>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>
												<?php
													if($detail->keluarga_saudara_satu_status == 'K'){
														echo "<span>Kakak</span>/<span class='coret'>Adik</span>";
													}else if($detail->keluarga_saudara_satu_status == 'A'){
														echo "<span class='coret'>Kakak</span>/<span>Adik</span>";
													}else{
														echo "<span>Kakak</span>/<span>Adik</span>";
													}
												?>
												</td>
												<td><?php echo $detail->keluarga_saudara_satu_nama;?></td>
												<td><?php echo $detail->keluarga_saudara_satu_usia;?></td>
												<td><?php echo $detail->keluarga_saudara_satu_pendidikan;?></td>
												<td><?php echo $detail->keluarga_saudara_satu_pekerjaan;?></td>
											</tr>
											<tr>
												<td>
												<?php
													if($detail->keluarga_saudara_dua_status == 'K'){
														echo "<span>Kakak</span>/<span class='coret'>Adik</span>";
													}else if($detail->keluarga_saudara_dua_status == 'A'){
														echo "<span class='coret'>Kakak</span>/<span>Adik</span>";
													}else{
														echo "<span>Kakak</span>/<span>Adik</span>";
													}
												?>
												</td>
												<td><?php echo $detail->keluarga_saudara_dua_nama;?></td>
												<td><?php echo $detail->keluarga_saudara_dua_usia;?></td>
												<td><?php echo $detail->keluarga_saudara_dua_pendidikan;?></td>
												<td><?php echo $detail->keluarga_saudara_dua_pekerjaan;?></td>
											</tr>
											<tr>
												<td>
												<?php
													if($detail->keluarga_saudara_tiga_status == 'K'){
														echo "<span>Kakak</span>/<span class='coret'>Adik</span>";
													}else if($detail->keluarga_saudara_tiga_status == 'A'){
														echo "<span class='coret'>Kakak</span>/<span>Adik</span>";
													}else{
														echo "<span>Kakak</span>/<span>Adik</span>";
													}
												?>
												</td>
												<td><?php echo $detail->keluarga_saudara_tiga_nama;?></td>
												<td><?php echo $detail->keluarga_saudara_tiga_usia;?></td>
												<td><?php echo $detail->keluarga_saudara_tiga_pendidikan;?></td>
												<td><?php echo $detail->keluarga_saudara_tiga_pekerjaan;?></td>
											</tr>
											<tr>
												<td>
												<?php
													if($detail->keluarga_saudara_empat_status == 'K'){
														echo "<span>Kakak</span>/<span class='coret'>Adik</span>";
													}else if($detail->keluarga_saudara_empat_status == 'A'){
														echo "<span class='coret'>Kakak</span>/<span>Adik</span>";
													}else{
														echo "<span>Kakak</span>/<span>Adik</span>";
													}
												?>
												</td>
												<td><?php echo $detail->keluarga_saudara_empat_nama;?></td>
												<td><?php echo $detail->keluarga_saudara_empat_usia;?></td>
												<td><?php echo $detail->keluarga_saudara_empat_pendidikan;?></td>
												<td><?php echo $detail->keluarga_saudara_empat_pekerjaan;?></td>
											</tr>
											<tr>
												<td>
												<?php
													if($detail->keluarga_saudara_lima_status == 'K'){
														echo "<span>Kakak</span>/<span class='coret'>Adik</span>";
													}else if($detail->keluarga_saudara_lima_status == 'A'){
														echo "<span class='coret'>Kakak</span>/<span>Adik</span>";
													}else{
														echo "<span>Kakak</span>/<span>Adik</span>";
													}
												?>
												</td>
												<td><?php echo $detail->keluarga_saudara_lima_nama;?></td>
												<td><?php echo $detail->keluarga_saudara_lima_usia;?></td>
												<td><?php echo $detail->keluarga_saudara_lima_pendidikan;?></td>
												<td><?php echo $detail->keluarga_saudara_lima_pekerjaan;?></td>
											</tr>
										</tbody>
									</table>
								</div>
								<div style="width:100%;float:left;">
									Apabila terjadi kecelakaan / dalam keadaan darurat, siapakah yang bisa dihubungi
								</div>
								<div style="width:100%;float:left;">
									<div style="width:21%;float:left;">Nama</div>
									<div style="width:1%;float:left;">:</div>
									<div style="width:78%;float:left;">
										<?php echo $detail->keluarga_darurat_nama;?>
									</div>
									
									<div style="width:21%;float:left;">Hubungan</div>
									<div style="width:1%;float:left;">:</div>
									<div style="width:78%;float:left;">
										<?php echo $detail->keluarga_darurat_hubungan;?>
									</div>
									
									<div style="width:21%;float:left;">Alamat & Telp</div>
									<div style="width:1%;float:left;">:</div>
									<div style="width:78%;float:left;">
										<?php echo $detail->keluarga_darurat_alamat;?>
									</div>
								</div>
							</div>
							<div style="width:100%;float:left">
								<h4 style="border-bottom:1px dashed #999">III RIWAYAT PENDIDIKAN</h4>
								<div style="width:100%;float:left;">
									<table class="detail_resume" style="width:100%;">
										<thead>
											<tr>
												<td>Pendidikan</td>
												<td>Nama Sekolah</td>
												<td>Kota</td>
												<td>Tahun Masuk</td>
												<td>Tahun Lulus</td>
												<td>Jurusan</td>
												<td>NEM/IPK</td>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>SD</td>
												<td><?php echo $detail->pendidikan_nama_sekolah_sd;?></td>
												<td><?php echo $detail->pendidikan_kota_sekolah_sd;?></td>
												<td><?php echo $detail->pendidikan_tahun_masuk_sd;?></td>
												<td><?php echo $detail->pendidikan_tahun_keluar_sd;?></td>
												<td><?php echo $detail->pendidikan_jurusan_sd;?></td>
												<td><?php echo $detail->pendidikan_nem_ipk_sd;?></td>
											</tr>
											<tr>
												<td>SMP</td>
												<td><?php echo $detail->pendidikan_nama_sekolah_smp;?></td>
												<td><?php echo $detail->pendidikan_kota_sekolah_smp;?></td>
												<td><?php echo $detail->pendidikan_tahun_masuk_smp;?></td>
												<td><?php echo $detail->pendidikan_tahun_keluar_smp;?></td>
												<td><?php echo $detail->pendidikan_jurusan_smp;?></td>
												<td><?php echo $detail->pendidikan_nem_ipk_smp;?></td>
											</tr>
											<tr>
												<td>SMU</td>
												<td><?php echo $detail->pendidikan_nama_sekolah_smu;?></td>
												<td><?php echo $detail->pendidikan_kota_sekolah_smu;?></td>
												<td><?php echo $detail->pendidikan_tahun_masuk_smu;?></td>
												<td><?php echo $detail->pendidikan_tahun_keluar_smu;?></td>
												<td><?php echo $detail->pendidikan_jurusan_smu;?></td>
												<td><?php echo $detail->pendidikan_nem_ipk_smu;?></td>
											</tr>
											<tr>
												<td>AKADEMI / UNIV.</td>
												<td><?php echo $detail->pendidikan_nama_sekolah_univ;?></td>
												<td><?php echo $detail->pendidikan_kota_sekolah_univ;?></td>
												<td><?php echo $detail->pendidikan_tahun_masuk_univ;?></td>
												<td><?php echo $detail->pendidikan_tahun_keluar_univ;?></td>
												<td><?php echo $detail->pendidikan_jurusan_univ;?></td>
												<td><?php echo $detail->pendidikan_nem_ipk_univ;?></td>
											</tr>
											<tr>
												<td>PASCA SARJANA</td>
												<td><?php echo $detail->pendidikan_nama_sekolah_pasca;?></td>
												<td><?php echo $detail->pendidikan_kota_sekolah_pasca;?></td>
												<td><?php echo $detail->pendidikan_tahun_masuk_pasca;?></td>
												<td><?php echo $detail->pendidikan_tahun_keluar_pasca;?></td>
												<td><?php echo $detail->pendidikan_jurusan_pasca;?></td>
												<td><?php echo $detail->pendidikan_nem_ipk_pasca;?></td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
							<div style="width:100%;float:left">
								<h4 style="border-bottom:1px dashed #999">IV EKSTRAKURIKULER & AKTIVITAS SOSIAL</h4>
								<div style="width:100%;float:left;">
									<table class="detail_resume" style="width:100%;">
										<thead>
											<tr>
												<td>Nama Organisasi / Aktivitas</td>
												<td>Tahun</td>
												<td>Jabatan</td>
												<td>Sertifikat Ada/Tidak</td>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td><?php echo $detail->pendidikan_ekstra_satu_nama; ?></td>
												<td><?php echo $detail->pendidikan_ekstra_satu_tahun; ?></td>
												<td><?php echo $detail->pendidikan_ekstra_satu_tempat; ?></td>
												<td><?php 
													if($detail->pendidikan_ekstra_satu_sertifikat == 1)
													{ 
														echo 'Ya';
													}else if($detail->pendidikan_ekstra_satu_sertifikat == 0){
														echo 'Tidak';
													}else{
														echo '';
													} 
													?>
												</td>
											</tr>
											<tr>
												<td><?php echo $detail->pendidikan_ekstra_dua_nama; ?></td>
												<td><?php echo $detail->pendidikan_ekstra_dua_tahun; ?></td>
												<td><?php echo $detail->pendidikan_ekstra_dua_tempat; ?></td>
												<td><?php 
													if($detail->pendidikan_ekstra_dua_sertifikat == 1)
													{ 
														echo 'Ya';
													}else if($detail->pendidikan_ekstra_dua_sertifikat == 0){
														echo 'Tidak';
													}else{
														echo '';
													} 
													?>
												</td>
											</tr>
											<tr>
												<td><?php echo $detail->pendidikan_ekstra_tiga_nama; ?></td>
												<td><?php echo $detail->pendidikan_ekstra_tiga_tahun; ?></td>
												<td><?php echo $detail->pendidikan_ekstra_tiga_tempat; ?></td>
												<td><?php 
													if($detail->pendidikan_ekstra_tiga_sertifikat == 1)
													{ 
														echo 'Ya';
													}else if($detail->pendidikan_ekstra_tiga_sertifikat == 0){
														echo 'Tidak';
													}else{
														echo '';
													} 
													?>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
							<div style="width:100%;float:left">
								<h4 style="border-bottom:1px dashed #999">V KURSUS, SEMINAR, LOKAKARYA, PELATIHAN</h4>
								<div style="width:100%;float:left;">
									<table class="detail_resume" style="width:100%;">
										<thead>
											<tr>
												<td>Nama Organisasi / Aktivitas</td>
												<td>Tahun</td>
												<td>Jabatan</td>
												<td>Sertifikat Ada/Tidak</td>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td><?php echo $detail->pendidikan_aktivitas_satu_nama; ?></td>
												<td><?php echo $detail->pendidikan_aktivitas_satu_tahun; ?></td>
												<td><?php echo $detail->pendidikan_aktivitas_satu_tempat; ?></td>
												<td><?php 
													if($detail->pendidikan_aktivitas_satu_sertifikat == 1)
													{ 
														echo 'Ya';
													}else if($detail->pendidikan_aktivitas_satu_sertifikat == 0){
														echo 'Tidak';
													}else{
														echo '';
													} 
													?>
												</td>
											</tr>
											<tr>
												<td><?php echo $detail->pendidikan_aktivitas_dua_nama; ?></td>
												<td><?php echo $detail->pendidikan_aktivitas_dua_tahun; ?></td>
												<td><?php echo $detail->pendidikan_aktivitas_dua_tempat; ?></td>
												<td><?php 
													if($detail->pendidikan_aktivitas_dua_sertifikat == 1)
													{ 
														echo 'Ya';
													}else if($detail->pendidikan_aktivitas_dua_sertifikat == 0){
														echo 'Tidak';
													}else{
														echo '';
													} 
													?>
												</td>
											</tr>
											<tr>
												<td><?php echo $detail->pendidikan_aktivitas_tiga_nama; ?></td>
												<td><?php echo $detail->pendidikan_aktivitas_tiga_tahun; ?></td>
												<td><?php echo $detail->pendidikan_aktivitas_tiga_tempat; ?></td>
												<td><?php 
													if($detail->pendidikan_aktivitas_tiga_sertifikat == 1)
													{ 
														echo 'Ya';
													}else if($detail->pendidikan_aktivitas_tiga_sertifikat == 0){
														echo 'Tidak';
													}else{
														echo '';
													} 
													?>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
							<div style="width:100%;float:left">
								<h4 style="border-bottom:1px dashed #999">VI INFORMASI PENDIDIKAN</h4>
								<div style="width:100%;float:left;">
									Prestasi/Karya Luar Biasa yang pernah Saudara raih selama pendidikan (misalnya : juara kelas, juara lomba, cum-laude, siswa teladan, dsb.)
									<div style="width:80%;float:left;">
										a. <?php echo $detail->pendidikan_prestasi_satu_nama==''?'-':$detail->pendidikan_prestasi_satu_nama;?>
									</div>
									<div style="width:20%;float:left;">
										Tahun : <?php echo $detail->pendidikan_prestasi_satu_tahun==0?'-':$detail->pendidikan_prestasi_satu_tahun;?>
									</div>
									
									<div style="width:80%;float:left;">
										b. <?php echo $detail->pendidikan_prestasi_dua_nama==''?'-':$detail->pendidikan_prestasi_dua_nama;?>
									</div>
									<div style="width:20%;float:left;">
										Tahun : <?php echo $detail->pendidikan_prestasi_dua_tahun==0?'-':$detail->pendidikan_prestasi_dua_tahun;?>
									</div>
									
									<div style="width:80%;float:left;">
										c. <?php echo $detail->pendidikan_prestasi_tiga_nama==''?'-':$detail->pendidikan_prestasi_tiga_nama;?>
									</div>
									<div style="width:20%;float:left;">
										Tahun : <?php echo $detail->pendidikan_prestasi_tiga_tahun==0?'-':$detail->pendidikan_prestasi_tiga_tahun;?>
									</div>
								</div>
								<div style="width:100%;float:left;">
									Siapa yang membiayai pendidikan Saudara? <?php echo $detail->pendidikan_pertanyaan_satu;?>
								</div>
								<div style="width:100%;float:left;">
									Pelajaran apakah yang paling Saudara sukai? <?php echo $detail->pendidikan_pertanyaan_dua;?>
								</div>
								<div style="width:100%;float:left;">
									<div style="width:100%;float:left;">
									Tulisan/karya ilmiah yang pernah Saudara tulis (Skripsi, Artikel, Buku, dsb.)
									</div>
									<div style="width:18%;float:left;">Judul</div>
									<div style="width:1%;float:left;">:</div>
									<div style="width:81%;float:left;"><?php echo $detail->pendidikan_judul_karya;?></div>
									
									<div style="width:18%;float:left;">Tahun</div>
									<div style="width:1%;float:left;">:</div>
									<div style="width:81%;float:left;"><?php echo $detail->pendidikan_tahun_karya;?></div>
									
									<div style="width:18%;float:left;">Topik Bahasan</div>
									<div style="width:1%;float:left;">:</div>
									<div style="width:81%;float:left;"><?php echo $detail->pendidikan_topik_karya;?></div>
								</div>
								<div style="width:100%;float:left;">
									<div style="width:100%;float:left;">
									Bahasa asing/daerah yang dikuasai 
									</div>
									<style>
										.coret{
											text-decoration:line-through;
										}
									</style>
									<div style="width:100%;float:left;">
										<div style="width:25%;float:left;">
										Bahasa : <?php echo $detail->pendidikan_bahasa_satu;?>
										</div>
										<div style="width:25%;float:left;">
										Menulis 
											<?php 
												if($detail->pendidikan_bahasa_satu_menulis == 'B'){
													echo "<span>Baik</span>/<span class='coret'>Cukup</span>";					
												}else if($detail->pendidikan_bahasa_satu_menulis == 'C'){
													echo "<span class='coret'>Baik</span>/<span>Cukup</span>";					
												}else{
													echo "<span>Baik</span>/<span>Cukup</span>";	
												}
											?>
										</div>
										<div style="width:25%;float:left;">
										Membaca 
											<?php 
												if($detail->pendidikan_bahasa_satu_membaca == 'B'){
													echo "<span>Baik</span>/<span class='coret'>Cukup</span>";					
												}else if($detail->pendidikan_bahasa_satu_membaca == 'C'){
													echo "<span class='coret'>Baik</span>/<span>Cukup</span>";					
												}else{
													echo "<span>Baik</span>/<span>Cukup</span>";	
												}
											?>
										</div>
										<div style="width:25%;float:left;">
										Berbicara 
											<?php 
												if($detail->pendidikan_bahasa_satu_berbicara == 'B'){
													echo "<span>Baik</span>/<span class='coret'>Cukup</span>";					
												}else if($detail->pendidikan_bahasa_satu_berbicara == 'C'){
													echo "<span class='coret'>Baik</span>/<span>Cukup</span>";					
												}else{
													echo "<span>Baik</span>/<span>Cukup</span>";	
												}
											?>
										</div>
									</div>
									
									<div style="width:100%;float:left;">
										<div style="width:25%;float:left;">
										Bahasa : <?php echo $detail->pendidikan_bahasa_dua;?>
										</div>
										<div style="width:25%;float:left;">
										Menulis 
											<?php 
												if($detail->pendidikan_bahasa_dua_menulis == 'B'){
													echo "<span>Baik</span>/<span class='coret'>Cukup</span>";					
												}else if($detail->pendidikan_bahasa_dua_menulis == 'C'){
													echo "<span class='coret'>Baik</span>/<span>Cukup</span>";					
												}else{
													echo "<span>Baik</span>/<span>Cukup</span>";	
												}
											?>
										</div>
										<div style="width:25%;float:left;">
										Membaca 
											<?php 
												if($detail->pendidikan_bahasa_dua_membaca == 'B'){
													echo "<span>Baik</span>/<span class='coret'>Cukup</span>";					
												}else if($detail->pendidikan_bahasa_dua_membaca == 'C'){
													echo "<span class='coret'>Baik</span>/<span>Cukup</span>";					
												}else{
													echo "<span>Baik</span>/<span>Cukup</span>";	
												}
											?>
										</div>
										<div style="width:25%;float:left;">
										Berbicara 
											<?php 
												if($detail->pendidikan_bahasa_dua_berbicara == 'B'){
													echo "<span>Baik</span>/<span class='coret'>Cukup</span>";					
												}else if($detail->pendidikan_bahasa_dua_berbicara == 'C'){
													echo "<span class='coret'>Baik</span>/<span>Cukup</span>";					
												}else{
													echo "<span>Baik</span>/<span>Cukup</span>";	
												}
											?>
										</div>
									</div>
									
									<div style="width:100%;float:left;">
										<div style="width:25%;float:left;">
										Bahasa : <?php echo $detail->pendidikan_bahasa_tiga;?>
										</div>
										<div style="width:25%;float:left;">
										Menulis 
											<?php 
												if($detail->pendidikan_bahasa_tiga_menulis == 'B'){
													echo "<span>Baik</span>/<span class='coret'>Cukup</span>";					
												}else if($detail->pendidikan_bahasa_tiga_menulis == 'C'){
													echo "<span class='coret'>Baik</span>/<span>Cukup</span>";					
												}else{
													echo "<span>Baik</span>/<span>Cukup</span>";	
												}
											?>
										</div>
										<div style="width:25%;float:left;">
										Membaca 
											<?php 
												if($detail->pendidikan_bahasa_tiga_membaca == 'B'){
													echo "<span>Baik</span>/<span class='coret'>Cukup</span>";					
												}else if($detail->pendidikan_bahasa_tiga_membaca == 'C'){
													echo "<span class='coret'>Baik</span>/<span>Cukup</span>";					
												}else{
													echo "<span>Baik</span>/<span>Cukup</span>";	
												}
											?>
										</div>
										<div style="width:25%;float:left;">
										Berbicara 
											<?php 
												if($detail->pendidikan_bahasa_tiga_berbicara == 'B'){
													echo "<span>Baik</span>/<span class='coret'>Cukup</span>";					
												}else if($detail->pendidikan_bahasa_tiga_berbicara == 'C'){
													echo "<span class='coret'>Baik</span>/<span>Cukup</span>";					
												}else{
													echo "<span>Baik</span>/<span>Cukup</span>";	
												}
											?>
										</div>
									</div>
								</div>
							</div>
							<div style="width:100%;float:left">
								<h4 style="border-bottom:1px dashed #999">VII HAL-HAL YANG BERHUBUNGAN DENGAN DIRI PELAMAR</h4>
								<div style="width:100%;float:left;">
									Apa hobby Saudara? <b><?php echo $detail->other_pertanyaan_a;?></b>
								</div>
								<div style="width:100%;float:left;">
									Bagaimana cara Saudara mengisi waktu luang? <b><?php echo $detail->other_pertanyaan_b;?></b>
								</div>
								<div style="width:100%;float:left;">
									Majalah/Surat Kabar yang dibaca? <b><?php echo $detail->other_pertanyaan_c;?></b>
								</div>
								<div style="width:100%;float:left;">
									Masalah/Topik yang diminati? <b><?php echo $detail->other_pertanyaan_d;?></b>
								</div>
								<div style="width:100%;float:left;">
									Pernahkah Saudara menderita sakit keras? <b><?php echo $detail->other_pertanyaan_e;?></b>
								</div>
								<div style="width:100%;float:left;">
									Pernahkah Saudara dioperasi/dirawat di RS? <b><?php echo $detail->other_pertanyaan_f;?></b>
								</div>
								<div style="width:100%;float:left;">
									Pernahkah Saudara mengalami kecelakaan? <b><?php echo $detail->other_pertanyaan_g;?></b>
								</div>
								<div style="width:100%;float:left;">
									Apakah Saudara memakai kacamata? <b><?php echo $detail->other_pertanyaan_h;?></b>
								</div>
								<div style="width:100%;float:left;">
									Apakah Saudara merokok? <b><?php echo $detail->other_pertanyaan_i;?></b>
								</div>
							</div>
							<div style="width:100%;float:left">
								<h4 style="border-bottom:1px dashed #999">VIII RIWAYAT PEKERJAAN (Mulai dari yang terakhir / tempat sekarang bekerja)</h4>
								<div style="width:100%;float:left;">
									<table class="detail_resume" style="width:100%;">
										<tr>
											<td style="width:200px;">Lamanya bekerja</td>
											<td><?php echo $detail->pekerjaan_perusahaan_satu_lama;?></td>
											<td><?php echo $detail->pekerjaan_perusahaan_dua_lama;?></td>
											<td><?php echo $detail->pekerjaan_perusahaan_tiga_lama;?></td>
										</tr>
										<tr>
											<td>Nama Perusahaan</td>
											<td><?php echo $detail->pekerjaan_perusahaan_satu_nama;?></td>
											<td><?php echo $detail->pekerjaan_perusahaan_dua_nama;?></td>
											<td><?php echo $detail->pekerjaan_perusahaan_tiga_nama;?></td>
										</tr>
										<tr>
											<td>Alamat & Telp</td>
											<td><?php echo $detail->pekerjaan_perusahaan_satu_alamat_telp;?></td>
											<td><?php echo $detail->pekerjaan_perusahaan_dua_alamat_telp;?></td>
											<td><?php echo $detail->pekerjaan_perusahaan_tiga_alamat_telp;?></td>
										</tr>
										<tr>
											<td>Bergerak dalam bidang</td>
											<td><?php echo $detail->pekerjaan_perusahaan_satu_bidang;?></td>
											<td><?php echo $detail->pekerjaan_perusahaan_dua_bidang;?></td>
											<td><?php echo $detail->pekerjaan_perusahaan_tiga_bidang;?></td>
										</tr>
										<tr>
											<td>Jabatan terakhir</td>
											<td><?php echo $detail->pekerjaan_perusahaan_satu_jabatan;?></td>
											<td><?php echo $detail->pekerjaan_perusahaan_dua_jabatan;?></td>
											<td><?php echo $detail->pekerjaan_perusahaan_tiga_jabatan;?></td>
										</tr>
										<tr>
											<td>Nama atasan langsung</td>
											<td><?php echo $detail->pekerjaan_perusahaan_satu_nama_atasan;?></td>
											<td><?php echo $detail->pekerjaan_perusahaan_dua_nama_atasan;?></td>
											<td><?php echo $detail->pekerjaan_perusahaan_tiga_nama_atasan;?></td>
										</tr>
										<tr>
											<td>Gaji pokok</td>
											<td><?php echo $detail->pekerjaan_perusahaan_satu_gapok;?></td>
											<td><?php echo $detail->pekerjaan_perusahaan_dua_gapok;?></td>
											<td><?php echo $detail->pekerjaan_perusahaan_tiga_gapok;?></td>
										</tr>
										<tr>
											<td>Tunjangan</td>
											<td><?php echo $detail->pekerjaan_perusahaan_satu_tunjangan;?></td>
											<td><?php echo $detail->pekerjaan_perusahaan_dua_tunjangan;?></td>
											<td><?php echo $detail->pekerjaan_perusahaan_tiga_tunjangan;?></td>
										</tr>
										<tr>
											<td>Fasilitas</td>
											<td><?php echo $detail->pekerjaan_perusahaan_satu_fasilitas;?></td>
											<td><?php echo $detail->pekerjaan_perusahaan_dua_fasilitas;?></td>
											<td><?php echo $detail->pekerjaan_perusahaan_tiga_fasilitas;?></td>
										</tr>
										<tr>
											<td>Uraikan Tugas & Tanggung Jawab Saudara pada jabatan terakhir</td>
											<td><?php echo $detail->pekerjaan_perusahaan_satu_tugas;?></td>
											<td><?php echo $detail->pekerjaan_perusahaan_dua_tugas;?></td>
											<td><?php echo $detail->pekerjaan_perusahaan_tiga_tugas;?></td>
										</tr>
										<tr>
											<td>Alasan keluar</td>
											<td><?php echo $detail->pekerjaan_perusahaan_satu_alasan;?></td>
											<td><?php echo $detail->pekerjaan_perusahaan_dua_alasan;?></td>
											<td><?php echo $detail->pekerjaan_perusahaan_tiga_alasan;?></td>
										</tr>
									</table>
								</div>
								<div style="width:100%;float:left;">
									<div style="width:100%;float:left;">
									Apakah saat ini Saudara melamar pula pada perusahaan lain? <b><?php echo $detail->pekerjaan_pertanyaan_satu==1?'<span>Ya</span> / <span class="coret">Tidak</span>':'<span  class="coret">Ya</span> / <span>Tidak</span>';?></b>
									</div>
									<div  style="width:18%;float:left;">Nama Perusahaan</div>
									<div  style="width:1%;float:left;">:</div>
									<div  style="width:81%;float:left;"><?php echo $detail->pekerjaan_perusahaan_lain_nama==''?'-':$detail->pekerjaan_perusahaan_lain_nama;?></div>
									<div  style="width:18%;float:left;">Sebagai</div>
									<div  style="width:1%;float:left;">:</div>
									<div  style="width:81%;float:left;"><?php echo $detail->pekerjaan_lain_sebagai==''?'-':$detail->pekerjaan_lain_sebagai;?></div>
									<div  style="width:18%;float:left;">Kapan</div>
									<div  style="width:1%;float:left;">:</div>
									<div  style="width:81%;float:left;"><?php echo $detail->pekerjaan_lain_kapan==''?'-':$detail->pekerjaan_lain_kapan;?></div>
								</div>
								<div style="width:100%;float:left;">
									Berikan 3 nama referensi (orang yang dapat memberikan informasi mengenai karakter dan kemampuan Saudara)
								</div>
								<div style="width:100%;float:left;">
									<table class="detail_resume" style="width:100%;">
										<thead>
											<tr>
												<td>Nama</td>
												<td>Pekerjaan/Jabatan</td>
												<td>Alamat</td>
												<td>No. Telp</td>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td><?php echo $detail->pekerjaan_referensi_satu_nama;?></td>
												<td><?php echo $detail->pekerjaan_referensi_satu_jabatan?></td>
												<td><?php echo $detail->pekerjaan_referensi_satu_alamat?></td>
												<td><?php echo $detail->pekerjaan_referensi_satu_telp?></td>
											</tr>
											<tr>
												<td><?php echo $detail->pekerjaan_referensi_dua_nama;?></td>
												<td><?php echo $detail->pekerjaan_referensi_dua_jabatan;?></td>
												<td><?php echo $detail->pekerjaan_referensi_dua_alamat;?></td>
												<td><?php echo $detail->pekerjaan_referensi_dua_telp;?></td>
											</tr>
											<tr>
												<td><?php echo $detail->pekerjaan_referensi_tiga_nama;?></td>
												<td><?php echo $detail->pekerjaan_referensi_tiga_jabatan;?></td>
												<td><?php echo $detail->pekerjaan_referensi_tiga_alamat;?></td>
												<td><?php echo $detail->pekerjaan_referensi_tiga_telp;?></td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
							<div style="width:100%;float:left">
								<h4 style="border-bottom:1px dashed #999">IX HAL-HAL YANG BERHUBUNGAN DENGAN LAMARAN KERJA</h4>
								<div style="width:100%;float:left;">
									Apakah Saudara pernah melamar di PT Gloria Origita Cosmetic sebelumnya? <b><?php echo $detail->other_pertanyaan_j;?></b>
								</div>
								<div style="width:100%;float:left;">
									Darimana Saudara mengetahui adanya lowongan ini? <b><?php echo $detail->other_pertanyaan_k;?></b>
								</div>
								<div style="width:100%;float:left;">
									Adakah karyawan yang bekerja pada perusahaan ini yang Saudara kenal? <b><?php echo $detail->other_pertanyaan_l;?></b>
								</div>
								<div style="width:100%;float:left;">
									Alasan/Tujuan Saudara melamar di PT. Gloria Origita Cosmetic? <b><?php echo $detail->other_pertanyaan_m;?></b>
								</div>
								<div style="width:100%;float:left;">
									Apakah Saudara bersedia tugas di Luar Jam Kerja & Tugas Luar Kota? <b><?php echo $detail->other_pertanyaan_n;?></b>
								</div>
								<div style="width:100%;float:left;">
									Apakah Saudara bersedia ditempatkan di Luar Kota? <b><?php echo $detail->other_pertanyaan_o;?></b>
								</div>
								<div style="width:100%;float:left;">
									Gaji yang Saudara harapkan? <b><?php echo $detail->other_pertanyaan_p;?></b>
								</div>
								<div style="width:100%;float:left;">
									Jika Saudara diterima di PT. Gloria Origita Cosmetic, kapan Saudara siap untuk berkerja? <b><?php echo $detail->other_pertanyaan_q;?></b>
								</div>
							</div>
							<div style="width:100%;float:left">
								<div style="width:100%;Float:left;margin-top:20px;">
								Formulir Lamaran ini saya isi sendiri dengan sejujur-jujurnya sesuai dengan kenyataan sebenarnya, Apabila di kemudian hari terdapat keterangan yang tidak benar, saya bersedia dituntut sesuai hukum dan peraturan yang berlaku.
								</div>
								<div style="width:30%;Float:right;margin-top:20px;text-align:center;">
									...........................,......./....../.......
									<br/>
									Nama & Tanda Tangan Pelamar
									<br/>
									<br/>
									<br/>
									<br/>
									<br/>
									<br/>
									( <?php echo $detail->pribadi_nama_lengkap;?> )
								</div>
							</div>
						</div>
					</div>
					<!-- End of sheet pertama -->
				</div>
				<!-- End of Worksheet -->
				<?php 
					}
				?>
			</div>
			<!-- End of right side -->
					