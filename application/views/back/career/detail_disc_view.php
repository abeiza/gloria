
 
				<!-- Header -->
				<div style="float:left;width:100%;height:11.5%;background:#fff;color:#787878;">
					<div style="margin:0px 20px;width:auto;">	
						<h2 style="text-transform:uppercase;float:left;"><i class="fa fa-tasks" style="margin-right:10px"></i>Test Disc</h2>
						<div style="margin-top:25px;float:left;margin-left:10px;"><a href="<?php echo base_url().'index.php/backend/manage_career/grid_applying_application/'?>" style="color:#666;text-decoration:none;"><i class="fa fa-long-arrow-left"></i> Back to Grid</a></div>
					</div>
				</div>
				<!-- End of header -->
				<!-- Separator -->
				<div style="float:left;width:100%;height:0.5%;background:#64c0cc;color:#787878;">
				</div>
				<!-- End of separator -->
				<?php 
					foreach($data_disc->result() as $disc){
				?>
				<!-- Work Sheet -->
				<div style="float:left;width:100%;height:auto;background:#f9f9f9;">
					<!-- Sheet Pertama -->
					<div style="float:left;margin:10px 2%;width:96%;background-color:#fff; border-radius:3px; border:1px solid #f1f1f1;color:rgb(120, 120, 120)">
						<div style="width:90%;float:left; padding:5%;">
							<div style="width:100%;float:left;">
								<h3>DISC Profile Test</h3>
								<div style="width:100%;float:left;">
									<div style="width:18%;float:left;">Nama Lengkap</div>
									<div style="width:1%;float:left;">:</div>
									<div style="width:79%;float:left;"><?php echo $disc->pribadi_nama_lengkap;?></div>
									
									<div style="width:18%;float:left;">No. Pelamar</div>
									<div style="width:1%;float:left;">:</div>
									<div style="width:79%;float:left;"><?php echo $disc->resume_kode_lamaran;?></div>
									
									<div style="width:18%;float:left;">Posisi</div>
									<div style="width:1%;float:left;">:</div>
									<div style="width:79%;float:left;"><?php echo $disc->Career_Title;?></div>
								</div>
							</div>
							<div style="width:100%;float:left;margin-top:20px;">
								<div style="width:50%;float:left;">
									<div style="width:99%;float:left;padding:5px 0px;">
										<div style="width:100%;float:left;">
											<div style="width:10%;float:left;text-align:center;">
												M
											</div>
											<div style="width:10%;float:left;text-align:center;">
												L
											</div>
											<div style="width:80%;float:left;">
												&nbsp;
											</div>
										</div>
									</div>
									<!-- No. 1 -->
									<div style="width:99%;float:left;border:1px solid #eee;border-radius:3px;padding:5px 0px;margin:3px 0px;">
										<div style="width:100%;text-align:right"><div style="padding:10px 15.5px;background-color:#8dc43f;color:#fff;width:auto;float:right;border-radius:100%;margin:0px 10px;">1</div></div>
										<div style="width:100%;float:left;">
											<div style="width:10%;float:left;text-align:center;padding:5px 0px;">
												<?php echo $disc->disc_statement1_m==1?'<span class="fa fa-check"></span>':'&nbsp;'?>
											</div>
											<div style="width:10%;float:left;text-align:center;padding:5px 0px;">
												<?php echo $disc->disc_statement1_l==1?'<span class="fa fa-check"></span>':'&nbsp;'?>
											</div>
											<div style="width:80%;float:left;padding:5px 0px;">
												Lembut, Ramah
											</div>
										</div>
										<div style="width:100%;float:left;">
											<div style="width:10%;float:left;text-align:center;padding:5px 0px;">
												<?php echo $disc->disc_statement1_m==2?'<span class="fa fa-check"></span>':'&nbsp;'?>
											</div>
											<div style="width:10%;float:left;text-align:center;padding:5px 0px;">
												<?php echo $disc->disc_statement1_l==2?'<span class="fa fa-check"></span>':'&nbsp;'?>
											</div>
											<div style="width:80%;float:left;padding:5px 0px;">
												Membujuk, Meyakinkan
											</div>
										</div>
										<div style="width:100%;float:left;">
											<div style="width:10%;float:left;text-align:center;padding:5px 0px;">
												<?php echo $disc->disc_statement1_m==3?'<span class="fa fa-check"></span>':'&nbsp;'?>
											</div>
											<div style="width:10%;float:left;text-align:center;padding:5px 0px;">
												<?php echo $disc->disc_statement1_l==3?'<span class="fa fa-check"></span>':'&nbsp;'?>
											</div>
											<div style="width:80%;float:left;padding:5px 0px;">
												Sederhana, Mudah Menerima, Rendah Hati
											</div>
										</div>
										<div style="width:100%;float:left;">
											<div style="width:10%;float:left;text-align:center;padding:5px 0px;">
												<?php echo $disc->disc_statement1_m==4?'<span class="fa fa-check"></span>':'&nbsp;'?>
											</div>
											<div style="width:10%;float:left;text-align:center;padding:5px 0px;">
												<?php echo $disc->disc_statement1_l==4?'<span class="fa fa-check"></span>':'&nbsp;'?>
											</div>
											<div style="width:80%;float:left;padding:5px 0px;">
												Asli, Berdayacipta, Individualis
											</div>
										</div>
									</div>
									<!-- No. 2 -->
									<div style="width:99%;float:left;border:1px solid #eee;border-radius:3px;padding:5px 0px;margin:3px 0px;">
										<div style="width:100%;text-align:right"><div style="padding:10px 15.5px;background-color:#8dc43f;color:#fff;width:auto;float:right;border-radius:100%;margin:0px 10px;">2</div></div>
										<div style="width:100%;float:left;">
											<div style="width:10%;float:left;text-align:center;padding:5px 0px;">
												<?php echo $disc->disc_statement2_m==1?'<span class="fa fa-check"></span>':'&nbsp;'?>
											</div>
											<div style="width:10%;float:left;text-align:center;padding:5px 0px;">
												<?php echo $disc->disc_statement2_l==1?'<span class="fa fa-check"></span>':'&nbsp;'?>
											</div>
											<div style="width:80%;float:left;padding:5px 0px;">
												Menarik, Mempesona, Menarik bagi orang lain
											</div>
										</div>
										<div style="width:100%;float:left;">
											<div style="width:10%;float:left;text-align:center;padding:5px 0px;">
												<?php echo $disc->disc_statement2_m==2?'<span class="fa fa-check"></span>':'&nbsp;'?>
											</div>
											<div style="width:10%;float:left;text-align:center;padding:5px 0px;">
												<?php echo $disc->disc_statement2_l==2?'<span class="fa fa-check"></span>':'&nbsp;'?>
											</div>
											<div style="width:80%;float:left;padding:5px 0px;">
												Dapat bekerja sama, mudah menyetujui
											</div>
										</div>
										<div style="width:100%;float:left;">
											<div style="width:10%;float:left;text-align:center;padding:5px 0px;">
												<?php echo $disc->disc_statement2_m==3?'<span class="fa fa-check"></span>':'&nbsp;'?>
											</div>
											<div style="width:10%;float:left;text-align:center;padding:5px 0px;">
												<?php echo $disc->disc_statement2_l==3?'<span class="fa fa-check"></span>':'&nbsp;'?>
											</div>
											<div style="width:80%;float:left;padding:5px 0px;">
												Keras kepala, tidak mudah menyerah
											</div>
										</div>
										<div style="width:100%;float:left;">
											<div style="width:10%;float:left;text-align:center;padding:5px 0px;">
												<?php echo $disc->disc_statement2_m==4?'<span class="fa fa-check"></span>':'&nbsp;'?>
											</div>
											<div style="width:10%;float:left;text-align:center;padding:5px 0px;">
												<?php echo $disc->disc_statement2_l==4?'<span class="fa fa-check"></span>':'&nbsp;'?>
											</div>
											<div style="width:80%;float:left;padding:5px 0px;">
												Manis, memuaskan/menyenangkan
											</div>
										</div>
									</div>
									<!-- No. 3 -->
									<div style="width:99%;float:left;border:1px solid #eee;border-radius:3px;padding:5px 0px;margin:3px 0px;">
										<div style="width:100%;text-align:right"><div style="padding:10px 15.5px;background-color:#8dc43f;color:#fff;width:auto;float:right;border-radius:100%;margin:0px 10px;">3</div></div>
										<div style="width:100%;float:left;">
											<div style="width:10%;float:left;text-align:center;padding:5px 0px;">
												<?php echo $disc->disc_statement3_m==1?'<span class="fa fa-check"></span>':'&nbsp;'?>
											</div>
											<div style="width:10%;float:left;text-align:center;padding:5px 0px;">
												<?php echo $disc->disc_statement3_l==1?'<span class="fa fa-check"></span>':'&nbsp;'?>
											</div>
											<div style="width:80%;float:left;padding:5px 0px;">
												Mau dipimpin, cenderung mengikuti/pengikut
											</div>
										</div>
										<div style="width:100%;float:left;">
											<div style="width:10%;float:left;text-align:center;padding:5px 0px;">
												<?php echo $disc->disc_statement3_m==2?'<span class="fa fa-check"></span>':'&nbsp;'?>
											</div>
											<div style="width:10%;float:left;text-align:center;padding:5px 0px;">
												<?php echo $disc->disc_statement3_l==2?'<span class="fa fa-check"></span>':'&nbsp;'?>
											</div>
											<div style="width:80%;float:left;padding:5px 0px;">
												Tangguh, berani
											</div>
										</div>
										<div style="width:100%;float:left;">
											<div style="width:10%;float:left;text-align:center;padding:5px 0px;">
												<?php echo $disc->disc_statement3_m==3?'<span class="fa fa-check"></span>':'&nbsp;'?>
											</div>
											<div style="width:10%;float:left;text-align:center;padding:5px 0px;">
												<?php echo $disc->disc_statement3_l==3?'<span class="fa fa-check"></span>':'&nbsp;'?>
											</div>
											<div style="width:80%;float:left;padding:5px 0px;">
												Loyal, setia, mengabdi
											</div>
										</div>
										<div style="width:100%;float:left;">
											<div style="width:10%;float:left;text-align:center;padding:5px 0px;">
												<?php echo $disc->disc_statement3_m==4?'<span class="fa fa-check"></span>':'&nbsp;'?>
											</div>
											<div style="width:10%;float:left;text-align:center;padding:5px 0px;">
												<?php echo $disc->disc_statement3_l==4?'<span class="fa fa-check"></span>':'&nbsp;'?>
											</div>
											<div style="width:80%;float:left;padding:5px 0px;">
												Mempesona, menyenangkan
											</div>
										</div>
									</div>
									<!-- No. 4 -->
									<div style="width:99%;float:left;border:1px solid #eee;border-radius:3px;padding:5px 0px;margin:3px 0px;">
										<div style="width:100%;text-align:right"><div style="padding:10px 15.5px;background-color:#8dc43f;color:#fff;width:auto;float:right;border-radius:100%;margin:0px 10px;">4</div></div>
										<div style="width:100%;float:left;">
											<div style="width:10%;float:left;text-align:center;padding:5px 0px;">
												<?php echo $disc->disc_statement4_m==1?'<span class="fa fa-check"></span>':'&nbsp;'?>
											</div>
											<div style="width:10%;float:left;text-align:center;padding:5px 0px;">
												<?php echo $disc->disc_statement4_l==1?'<span class="fa fa-check"></span>':'&nbsp;'?>
											</div>
											<div style="width:80%;float:left;padding:5px 0px;">
												Berpandangan terbuka, mau menerima
											</div>
										</div>
										<div style="width:100%;float:left;">
											<div style="width:10%;float:left;text-align:center;padding:5px 0px;">
												<?php echo $disc->disc_statement4_m==2?'<span class="fa fa-check"></span>':'&nbsp;'?>
											</div>
											<div style="width:10%;float:left;text-align:center;padding:5px 0px;">
												<?php echo $disc->disc_statement4_l==2?'<span class="fa fa-check"></span>':'&nbsp;'?>
											</div>
											<div style="width:80%;float:left;padding:5px 0px;">
												Tegar, suka menolong
											</div>
										</div>
										<div style="width:100%;float:left;">
											<div style="width:10%;float:left;text-align:center;padding:5px 0px;">
												<?php echo $disc->disc_statement4_m==3?'<span class="fa fa-check"></span>':'&nbsp;'?>
											</div>
											<div style="width:10%;float:left;text-align:center;padding:5px 0px;">
												<?php echo $disc->disc_statement4_l==3?'<span class="fa fa-check"></span>':'&nbsp;'?>
											</div>
											<div style="width:80%;float:left;padding:5px 0px;">
												Tekun, berkemauan keras
											</div>
										</div>
										<div style="width:100%;float:left;">
											<div style="width:10%;float:left;text-align:center;padding:5px 0px;">
												<?php echo $disc->disc_statement4_m==4?'<span class="fa fa-check"></span>':'&nbsp;'?>
											</div>
											<div style="width:10%;float:left;text-align:center;padding:5px 0px;">
												<?php echo $disc->disc_statement4_l==4?'<span class="fa fa-check"></span>':'&nbsp;'?>
											</div>
											<div style="width:80%;float:left;padding:5px 0px;">
												Periang, selalu bergembira
											</div>
										</div>
									</div>
									<!-- No. 5 -->
									<div style="width:99%;float:left;border:1px solid #eee;border-radius:3px;padding:5px 0px;margin:3px 0px;">
										<div style="width:100%;text-align:right"><div style="padding:10px 15.5px;background-color:#8dc43f;color:#fff;width:auto;float:right;border-radius:100%;margin:0px 10px;">5</div></div>
										<div style="width:100%;float:left;">
											<div style="width:10%;float:left;text-align:center;padding:5px 0px;">
												<?php echo $disc->disc_statement5_m==1?'<span class="fa fa-check"></span>':'&nbsp;'?>
											</div>
											<div style="width:10%;float:left;text-align:center;padding:5px 0px;">
												<?php echo $disc->disc_statement5_l==1?'<span class="fa fa-check"></span>':'&nbsp;'?>
											</div>
											<div style="width:80%;float:left;padding:5px 0px;">
												Periang, suka bergurau
											</div>
										</div>
										<div style="width:100%;float:left;">
											<div style="width:10%;float:left;text-align:center;padding:5px 0px;">
												<?php echo $disc->disc_statement5_m==2?'<span class="fa fa-check"></span>':'&nbsp;'?>
											</div>
											<div style="width:10%;float:left;text-align:center;padding:5px 0px;">
												<?php echo $disc->disc_statement5_l==2?'<span class="fa fa-check"></span>':'&nbsp;'?>
											</div>
											<div style="width:80%;float:left;padding:5px 0px;">
												Teliti, tepat
											</div>
										</div>
										<div style="width:100%;float:left;">
											<div style="width:10%;float:left;text-align:center;padding:5px 0px;">
												<?php echo $disc->disc_statement5_m==3?'<span class="fa fa-check"></span>':'&nbsp;'?>
											</div>
											<div style="width:10%;float:left;text-align:center;padding:5px 0px;">
												<?php echo $disc->disc_statement5_l==3?'<span class="fa fa-check"></span>':'&nbsp;'?>
											</div>
											<div style="width:80%;float:left;padding:5px 0px;">
												Kasar, berani, kurang sopan, tidak mudah malu
											</div>
										</div>
										<div style="width:100%;float:left;">
											<div style="width:10%;float:left;text-align:center;padding:5px 0px;">
												<?php echo $disc->disc_statement5_m==4?'<span class="fa fa-check"></span>':'&nbsp;'?>
											</div>
											<div style="width:10%;float:left;text-align:center;padding:5px 0px;">
												<?php echo $disc->disc_statement5_l==4?'<span class="fa fa-check"></span>':'&nbsp;'?>
											</div>
											<div style="width:80%;float:left;padding:5px 0px;">
												Tenang, emosi yang terkendali, tidak mudah heboh
											</div>
										</div>
									</div>
									<!-- No. 6 -->
									<div style="width:99%;float:left;border:1px solid #eee;border-radius:3px;padding:5px 0px;margin:3px 0px;">
										<div style="width:100%;text-align:right"><div style="padding:10px 15.5px;background-color:#8dc43f;color:#fff;width:auto;float:right;border-radius:100%;margin:0px 10px;">6</div></div>
										<div style="width:100%;float:left;">
											<div style="width:10%;float:left;text-align:center;padding:5px 0px;">
												<?php echo $disc->disc_statement6_m==1?'<span class="fa fa-check"></span>':'&nbsp;'?>
											</div>
											<div style="width:10%;float:left;text-align:center;padding:5px 0px;">
												<?php echo $disc->disc_statement6_l==1?'<span class="fa fa-check"></span>':'&nbsp;'?>
											</div>
											<div style="width:80%;float:left;padding:5px 0px;">
												Kompetitif, selalu ingin berhasil
											</div>
										</div>
										<div style="width:100%;float:left;">
											<div style="width:10%;float:left;text-align:center;padding:5px 0px;">
												<?php echo $disc->disc_statement6_m==2?'<span class="fa fa-check"></span>':'&nbsp;'?>
											</div>
											<div style="width:10%;float:left;text-align:center;padding:5px 0px;">
												<?php echo $disc->disc_statement6_l==2?'<span class="fa fa-check"></span>':'&nbsp;'?>
											</div>
											<div style="width:80%;float:left;padding:5px 0px;">
												Timbang rasa, peduli, bijaksana
											</div>
										</div>
										<div style="width:100%;float:left;">
											<div style="width:10%;float:left;text-align:center;padding:5px 0px;">
												<?php echo $disc->disc_statement6_m==3?'<span class="fa fa-check"></span>':'&nbsp;'?>
											</div>
											<div style="width:10%;float:left;text-align:center;padding:5px 0px;">
												<?php echo $disc->disc_statement6_l==3?'<span class="fa fa-check"></span>':'&nbsp;'?>
											</div>
											<div style="width:80%;float:left;padding:5px 0px;">
												Terbuka, ramah, suka senang-senang
											</div>
										</div>
										<div style="width:100%;float:left;">
											<div style="width:10%;float:left;text-align:center;padding:5px 0px;">
												<?php echo $disc->disc_statement6_m==4?'<span class="fa fa-check"></span>':'&nbsp;'?>
											</div>
											<div style="width:10%;float:left;text-align:center;padding:5px 0px;">
												<?php echo $disc->disc_statement6_l==4?'<span class="fa fa-check"></span>':'&nbsp;'?>
											</div>
											<div style="width:80%;float:left;padding:5px 0px;">
												Harmonis, mudah menyetujui
											</div>
										</div>
									</div>
									<!-- No. 7 -->
									<div style="width:99%;float:left;border:1px solid #eee;border-radius:3px;padding:5px 0px;margin:3px 0px;">
										<div style="width:100%;text-align:right"><div style="padding:10px 15.5px;background-color:#8dc43f;color:#fff;width:auto;float:right;border-radius:100%;margin:0px 10px;">7</div></div>
										<div style="width:100%;float:left;">
											<div style="width:10%;float:left;text-align:center;padding:5px 0px;">
												<?php echo $disc->disc_statement7_m==1?'<span class="fa fa-check"></span>':'&nbsp;'?>
											</div>
											<div style="width:10%;float:left;text-align:center;padding:5px 0px;">
												<?php echo $disc->disc_statement7_l==1?'<span class="fa fa-check"></span>':'&nbsp;'?>
											</div>
											<div style="width:80%;float:left;padding:5px 0px;">
												Rewel, cerewet, sulit untuk dipuaskan hatinya
											</div>
										</div>
										<div style="width:100%;float:left;">
											<div style="width:10%;float:left;text-align:center;padding:5px 0px;">
												<?php echo $disc->disc_statement7_m==2?'<span class="fa fa-check"></span>':'&nbsp;'?>
											</div>
											<div style="width:10%;float:left;text-align:center;padding:5px 0px;">
												<?php echo $disc->disc_statement7_l==2?'<span class="fa fa-check"></span>':'&nbsp;'?>
											</div>
											<div style="width:80%;float:left;padding:5px 0px;">
												Taat, melakukan apa yang diperintahkan patuh
											</div>
										</div>
										<div style="width:100%;float:left;">
											<div style="width:10%;float:left;text-align:center;padding:5px 0px;">
												<?php echo $disc->disc_statement7_m==3?'<span class="fa fa-check"></span>':'&nbsp;'?>
											</div>
											<div style="width:10%;float:left;text-align:center;padding:5px 0px;">
												<?php echo $disc->disc_statement7_l==3?'<span class="fa fa-check"></span>':'&nbsp;'?>
											</div>
											<div style="width:80%;float:left;padding:5px 0px;">
												Tidak mudah mundur, fokus akan satu hal, ulet
											</div>
										</div>
										<div style="width:100%;float:left;">
											<div style="width:10%;float:left;text-align:center;padding:5px 0px;">
												<?php echo $disc->disc_statement7_m==4?'<span class="fa fa-check"></span>':'&nbsp;'?>
											</div>
											<div style="width:10%;float:left;text-align:center;padding:5px 0px;">
												<?php echo $disc->disc_statement7_l==4?'<span class="fa fa-check"></span>':'&nbsp;'?>
											</div>
											<div style="width:80%;float:left;padding:5px 0px;">
												Suka melucu, lincah, periang
											</div>
										</div>
									</div>
									<!-- No. 8 -->
									<div style="width:99%;float:left;border:1px solid #eee;border-radius:3px;padding:5px 0px;margin:3px 0px;">
										<div style="width:100%;text-align:right"><div style="padding:10px 15.5px;background-color:#8dc43f;color:#fff;width:auto;float:right;border-radius:100%;margin:0px 10px;">8</div></div>
										<div style="width:100%;float:left;">
											<div style="width:10%;float:left;text-align:center;padding:5px 0px;">
												<?php echo $disc->disc_statement8_m==1?'<span class="fa fa-check"></span>':'&nbsp;'?>
											</div>
											<div style="width:10%;float:left;text-align:center;padding:5px 0px;">
												<?php echo $disc->disc_statement8_l==1?'<span class="fa fa-check"></span>':'&nbsp;'?>
											</div>
											<div style="width:80%;float:left;padding:5px 0px;">
												Berani, tidak gentar, tangguh
											</div>
										</div>
										<div style="width:100%;float:left;">
											<div style="width:10%;float:left;text-align:center;padding:5px 0px;">
												<?php echo $disc->disc_statement8_m==2?'<span class="fa fa-check"></span>':'&nbsp;'?>
											</div>
											<div style="width:10%;float:left;text-align:center;padding:5px 0px;">
												<?php echo $disc->disc_statement8_l==2?'<span class="fa fa-check"></span>':'&nbsp;'?>
											</div>
											<div style="width:80%;float:left;padding:5px 0px;">
												Membangkitkan semangat, memotivasi
											</div>
										</div>
										<div style="width:100%;float:left;">
											<div style="width:10%;float:left;text-align:center;padding:5px 0px;">
												<?php echo $disc->disc_statement8_m==3?'<span class="fa fa-check"></span>':'&nbsp;'?>
											</div>
											<div style="width:10%;float:left;text-align:center;padding:5px 0px;">
												<?php echo $disc->disc_statement8_l==3?'<span class="fa fa-check"></span>':'&nbsp;'?>
											</div>
											<div style="width:80%;float:left;padding:5px 0px;">
												Patuh, berhasil, menyerah
											</div>
										</div>
										<div style="width:100%;float:left;">
											<div style="width:10%;float:left;text-align:center;padding:5px 0px;">
												<?php echo $disc->disc_statement8_m==4?'<span class="fa fa-check"></span>':'&nbsp;'?>
											</div>
											<div style="width:10%;float:left;text-align:center;padding:5px 0px;">
												<?php echo $disc->disc_statement8_l==4?'<span class="fa fa-check"></span>':'&nbsp;'?>
											</div>
											<div style="width:80%;float:left;padding:5px 0px;">
												Takut-takut, malu, pendiam
											</div>
										</div>
									</div>
									<!-- No. 9 -->
									<div style="width:99%;float:left;border:1px solid #eee;border-radius:3px;padding:5px 0px;margin:3px 0px;">
										<div style="width:100%;text-align:right"><div style="padding:10px 15.5px;background-color:#8dc43f;color:#fff;width:auto;float:right;border-radius:100%;margin:0px 10px;">9</div></div>
										<div style="width:100%;float:left;">
											<div style="width:10%;float:left;text-align:center;padding:5px 0px;">
												<?php echo $disc->disc_statement9_m==1?'<span class="fa fa-check"></span>':'&nbsp;'?>
											</div>
											<div style="width:10%;float:left;text-align:center;padding:5px 0px;">
												<?php echo $disc->disc_statement9_l==1?'<span class="fa fa-check"></span>':'&nbsp;'?>
											</div>
											<div style="width:80%;float:left;padding:5px 0px;">
												Suka bergaul dan bersosialisasi
											</div>
										</div>
										<div style="width:100%;float:left;">
											<div style="width:10%;float:left;text-align:center;padding:5px 0px;">
												<?php echo $disc->disc_statement9_m==2?'<span class="fa fa-check"></span>':'&nbsp;'?>
											</div>
											<div style="width:10%;float:left;text-align:center;padding:5px 0px;">
												<?php echo $disc->disc_statement9_l==2?'<span class="fa fa-check"></span>':'&nbsp;'?>
											</div>
											<div style="width:80%;float:left;padding:5px 0px;">
												Sabar, penuh keyakinan, bersikap toleransi
											</div>
										</div>
										<div style="width:100%;float:left;">
											<div style="width:10%;float:left;text-align:center;padding:5px 0px;">
												<?php echo $disc->disc_statement9_m==3?'<span class="fa fa-check"></span>':'&nbsp;'?>
											</div>
											<div style="width:10%;float:left;text-align:center;padding:5px 0px;">
												<?php echo $disc->disc_statement9_l==3?'<span class="fa fa-check"></span>':'&nbsp;'?>
											</div>
											<div style="width:80%;float:left;padding:5px 0px;">
												Percaya diri, mandiri
											</div>
										</div>
										<div style="width:100%;float:left;">
											<div style="width:10%;float:left;text-align:center;padding:5px 0px;">
												<?php echo $disc->disc_statement9_m==4?'<span class="fa fa-check"></span>':'&nbsp;'?>
											</div>
											<div style="width:10%;float:left;text-align:center;padding:5px 0px;">
												<?php echo $disc->disc_statement9_l==4?'<span class="fa fa-check"></span>':'&nbsp;'?>
											</div>
											<div style="width:80%;float:left;padding:5px 0px;">
												Berwatak halus/lembut, pendiam, suka menyendiri
											</div>
										</div>
									</div>
									<!-- No. 10 -->
									<div style="width:99%;float:left;border:1px solid #eee;border-radius:3px;padding:5px 0px;margin:3px 0px;">
										<div style="width:100%;text-align:right"><div style="padding:10px 11px;background-color:#8dc43f;color:#fff;width:auto;float:right;border-radius:100%;margin:0px 10px;">10</div></div>
										<div style="width:100%;float:left;">
											<div style="width:10%;float:left;text-align:center;padding:5px 0px;">
												<?php echo $disc->disc_statement10_m==1?'<span class="fa fa-check"></span>':'&nbsp;'?>
											</div>
											<div style="width:10%;float:left;text-align:center;padding:5px 0px;">
												<?php echo $disc->disc_statement10_l==1?'<span class="fa fa-check"></span>':'&nbsp;'?>
											</div>
											<div style="width:80%;float:left;padding:5px 0px;">
												Menyukai hal-hal baru, suka tantangan
											</div>
										</div>
										<div style="width:100%;float:left;">
											<div style="width:10%;float:left;text-align:center;padding:5px 0px;">
												<?php echo $disc->disc_statement10_m==2?'<span class="fa fa-check"></span>':'&nbsp;'?>
											</div>
											<div style="width:10%;float:left;text-align:center;padding:5px 0px;">
												<?php echo $disc->disc_statement10_l==2?'<span class="fa fa-check"></span>':'&nbsp;'?>
											</div>
											<div style="width:80%;float:left;padding:5px 0px;">
												Terbuka dan mau menerima ide-ide baru dan saran
											</div>
										</div>
										<div style="width:100%;float:left;">
											<div style="width:10%;float:left;text-align:center;padding:5px 0px;">
												<?php echo $disc->disc_statement10_m==3?'<span class="fa fa-check"></span>':'&nbsp;'?>
											</div>
											<div style="width:10%;float:left;text-align:center;padding:5px 0px;">
												<?php echo $disc->disc_statement10_l==3?'<span class="fa fa-check"></span>':'&nbsp;'?>
											</div>
											<div style="width:80%;float:left;padding:5px 0px;">
												Ramah, hangat, bersahabat
											</div>
										</div>
										<div style="width:100%;float:left;">
											<div style="width:10%;float:left;text-align:center;padding:5px 0px;">
												<?php echo $disc->disc_statement10_m==4?'<span class="fa fa-check"></span>':'&nbsp;'?>
											</div>
											<div style="width:10%;float:left;text-align:center;padding:5px 0px;">
												<?php echo $disc->disc_statement10_l==4?'<span class="fa fa-check"></span>':'&nbsp;'?>
											</div>
											<div style="width:80%;float:left;padding:5px 0px;">
												Moderat, menghindari hal-hal yang ekstrim atau aneh
											</div>
										</div>
									</div>
									<!-- No. 11 -->
									<div style="width:99%;float:left;border:1px solid #eee;border-radius:3px;padding:5px 0px;margin:3px 0px;">
										<div style="width:100%;text-align:right"><div style="padding:10px 11px;background-color:#8dc43f;color:#fff;width:auto;float:right;border-radius:100%;margin:0px 10px;">11</div></div>
										<div style="width:100%;float:left;">
											<div style="width:10%;float:left;text-align:center;padding:5px 0px;">
												<?php echo $disc->disc_statement11_m==1?'<span class="fa fa-check"></span>':'&nbsp;'?>
											</div>
											<div style="width:10%;float:left;text-align:center;padding:5px 0px;">
												<?php echo $disc->disc_statement11_l==1?'<span class="fa fa-check"></span>':'&nbsp;'?>
											</div>
											<div style="width:80%;float:left;padding:5px 0px;">
												Banyak bicara, cerewet
											</div>
										</div>
										<div style="width:100%;float:left;">
											<div style="width:10%;float:left;text-align:center;padding:5px 0px;">
												<?php echo $disc->disc_statement11_m==2?'<span class="fa fa-check"></span>':'&nbsp;'?>
											</div>
											<div style="width:10%;float:left;text-align:center;padding:5px 0px;">
												<?php echo $disc->disc_statement11_l==2?'<span class="fa fa-check"></span>':'&nbsp;'?>
											</div>
											<div style="width:80%;float:left;padding:5px 0px;">
												Terkendali, mudah diatur
											</div>
										</div>
										<div style="width:100%;float:left;">
											<div style="width:10%;float:left;text-align:center;padding:5px 0px;">
												<?php echo $disc->disc_statement11_m==3?'<span class="fa fa-check"></span>':'&nbsp;'?>
											</div>
											<div style="width:10%;float:left;text-align:center;padding:5px 0px;">
												<?php echo $disc->disc_statement11_l==3?'<span class="fa fa-check"></span>':'&nbsp;'?>
											</div>
											<div style="width:80%;float:left;padding:5px 0px;">
												Melakukan hal-hal yang sudah biasa, tidak berlebihan
											</div>
										</div>
										<div style="width:100%;float:left;">
											<div style="width:10%;float:left;text-align:center;padding:5px 0px;">
												<?php echo $disc->disc_statement11_m==4?'<span class="fa fa-check"></span>':'&nbsp;'?>
											</div>
											<div style="width:10%;float:left;text-align:center;padding:5px 0px;">
												<?php echo $disc->disc_statement11_l==4?'<span class="fa fa-check"></span>':'&nbsp;'?>
											</div>
											<div style="width:80%;float:left;padding:5px 0px;">
												Tegas, cepat dalam membuat keputusan
											</div>
										</div>
									</div>
									<!-- No. 12 -->
									<div style="width:99%;float:left;border:1px solid #eee;border-radius:3px;padding:5px 0px;margin:3px 0px;">
										<div style="width:100%;text-align:right"><div style="padding:10px 11px;background-color:#8dc43f;color:#fff;width:auto;float:right;border-radius:100%;margin:0px 10px;">12</div></div>
										<div style="width:100%;float:left;">
											<div style="width:10%;float:left;text-align:center;padding:5px 0px;">
												<?php echo $disc->disc_statement12_m==1?'<span class="fa fa-check"></span>':'&nbsp;'?>
											</div>
											<div style="width:10%;float:left;text-align:center;padding:5px 0px;">
												<?php echo $disc->disc_statement12_l==1?'<span class="fa fa-check"></span>':'&nbsp;'?>
											</div>
											<div style="width:80%;float:left;padding:5px 0px;">
												Berbudi bahasa halus, tingkah laku yang halus
											</div>
										</div>
										<div style="width:100%;float:left;">
											<div style="width:10%;float:left;text-align:center;padding:5px 0px;">
												<?php echo $disc->disc_statement12_m==2?'<span class="fa fa-check"></span>':'&nbsp;'?>
											</div>
											<div style="width:10%;float:left;text-align:center;padding:5px 0px;">
												<?php echo $disc->disc_statement12_l==2?'<span class="fa fa-check"></span>':'&nbsp;'?>
											</div>
											<div style="width:80%;float:left;padding:5px 0px;">
												Berani, suka mengambil resiko
											</div>
										</div>
										<div style="width:100%;float:left;">
											<div style="width:10%;float:left;text-align:center;padding:5px 0px;">
												<?php echo $disc->disc_statement12_m==3?'<span class="fa fa-check"></span>':'&nbsp;'?>
											</div>
											<div style="width:10%;float:left;text-align:center;padding:5px 0px;">
												<?php echo $disc->disc_statement12_l==3?'<span class="fa fa-check"></span>':'&nbsp;'?>
											</div>
											<div style="width:80%;float:left;padding:5px 0px;">
												Diplomatik, bijaksana
											</div>
										</div>
										<div style="width:100%;float:left;">
											<div style="width:10%;float:left;text-align:center;padding:5px 0px;">
												<?php echo $disc->disc_statement12_m==4?'<span class="fa fa-check"></span>':'&nbsp;'?>
											</div>
											<div style="width:10%;float:left;text-align:center;padding:5px 0px;">
												<?php echo $disc->disc_statement12_l==4?'<span class="fa fa-check"></span>':'&nbsp;'?>
											</div>
											<div style="width:80%;float:left;padding:5px 0px;">
												Mudah puas atau senang
											</div>
										</div>
									</div>

								</div>
								<div style="width:50%;float:left;">
									<div style="width:99%;float:left;padding:5px 0px;">
										<div style="width:100%;float:left;">
											<div style="width:10%;float:left;text-align:center;">
												M
											</div>
											<div style="width:10%;float:left;text-align:center;">
												L
											</div>
											<div style="width:80%;float:left;">
												&nbsp;
											</div>
										</div>
									</div>
									<!-- No. 13 -->
									<div style="width:99%;float:left;border:1px solid #eee;border-radius:3px;padding:5px 0px;margin:3px 0px;">
										<div style="width:100%;text-align:right"><div style="padding:10px 11px;background-color:#8dc43f;color:#fff;width:auto;float:right;border-radius:100%;margin:0px 10px;">13</div></div>
										<div style="width:100%;float:left;">
											<div style="width:10%;float:left;text-align:center;padding:5px 0px;">
												<?php echo $disc->disc_statement13_m==1?'<span class="fa fa-check"></span>':'&nbsp;'?>
											</div>
											<div style="width:10%;float:left;text-align:center;padding:5px 0px;">
												<?php echo $disc->disc_statement13_l==1?'<span class="fa fa-check"></span>':'&nbsp;'?>
											</div>
											<div style="width:80%;float:left;padding:5px 0px;">
												Agresif, suka tantangan, penuh inisiatif
											</div>
										</div>
										<div style="width:100%;float:left;">
											<div style="width:10%;float:left;text-align:center;padding:5px 0px;">
												<?php echo $disc->disc_statement13_m==2?'<span class="fa fa-check"></span>':'&nbsp;'?>
											</div>
											<div style="width:10%;float:left;text-align:center;padding:5px 0px;">
												<?php echo $disc->disc_statement13_l==2?'<span class="fa fa-check"></span>':'&nbsp;'?>
											</div>
											<div style="width:80%;float:left;padding:5px 0px;">
												Menyukai hiburan, ramah, suka pesta/acara kumpul
											</div>
										</div>
										<div style="width:100%;float:left;">
											<div style="width:10%;float:left;text-align:center;padding:5px 0px;">
												<?php echo $disc->disc_statement13_m==3?'<span class="fa fa-check"></span>':'&nbsp;'?>
											</div>
											<div style="width:10%;float:left;text-align:center;padding:5px 0px;">
												<?php echo $disc->disc_statement13_l==3?'<span class="fa fa-check"></span>':'&nbsp;'?>
											</div>
											<div style="width:80%;float:left;padding:5px 0px;">
												Pengikut, mudah digunadayakan oleh orang lain
											</div>
										</div>
										<div style="width:100%;float:left;">
											<div style="width:10%;float:left;text-align:center;padding:5px 0px;">
												<?php echo $disc->disc_statement13_m==4?'<span class="fa fa-check"></span>':'&nbsp;'?>
											</div>
											<div style="width:10%;float:left;text-align:center;padding:5px 0px;">
												<?php echo $disc->disc_statement13_l==4?'<span class="fa fa-check"></span>':'&nbsp;'?>
											</div>
											<div style="width:80%;float:left;padding:5px 0px;">
												Gelisah, khawatir
											</div>
										</div>
									</div>
									<!-- No. 14 -->
									<div style="width:99%;float:left;border:1px solid #eee;border-radius:3px;padding:5px 0px;margin:3px 0px;">
										<div style="width:100%;text-align:right"><div style="padding:10px 11px;background-color:#8dc43f;color:#fff;width:auto;float:right;border-radius:100%;margin:0px 10px;">14</div></div>
										<div style="width:100%;float:left;">
											<div style="width:10%;float:left;text-align:center;padding:5px 0px;">
												<?php echo $disc->disc_statement14_m==1?'<span class="fa fa-check"></span>':'&nbsp;'?>
											</div>
											<div style="width:10%;float:left;text-align:center;padding:5px 0px;">
												<?php echo $disc->disc_statement14_l==1?'<span class="fa fa-check"></span>':'&nbsp;'?>
											</div>
											<div style="width:80%;float:left;padding:5px 0px;">
												Berhati-hati
											</div>
										</div>
										<div style="width:100%;float:left;">
											<div style="width:10%;float:left;text-align:center;padding:5px 0px;">
												<?php echo $disc->disc_statement14_m==2?'<span class="fa fa-check"></span>':'&nbsp;'?>
											</div>
											<div style="width:10%;float:left;text-align:center;padding:5px 0px;">
												<?php echo $disc->disc_statement14_l==2?'<span class="fa fa-check"></span>':'&nbsp;'?>
											</div>
											<div style="width:80%;float:left;padding:5px 0px;">
												Fokus pada hal tertentu, tidak mudah goyah 
											</div>
										</div>
										<div style="width:100%;float:left;">
											<div style="width:10%;float:left;text-align:center;padding:5px 0px;">
												<?php echo $disc->disc_statement14_m==3?'<span class="fa fa-check"></span>':'&nbsp;'?>
											</div>
											<div style="width:10%;float:left;text-align:center;padding:5px 0px;">
												<?php echo $disc->disc_statement14_l==3?'<span class="fa fa-check"></span>':'&nbsp;'?>
											</div>
											<div style="width:80%;float:left;padding:5px 0px;">
												Meyakinkan
											</div>
										</div>
										<div style="width:100%;float:left;">
											<div style="width:10%;float:left;text-align:center;padding:5px 0px;">
												<?php echo $disc->disc_statement14_m==4?'<span class="fa fa-check"></span>':'&nbsp;'?>
											</div>
											<div style="width:10%;float:left;text-align:center;padding:5px 0px;">
												<?php echo $disc->disc_statement14_l==4?'<span class="fa fa-check"></span>':'&nbsp;'?>
											</div>
											<div style="width:80%;float:left;padding:5px 0px;">
												Baik hati, menyenangkan
											</div>
										</div>
									</div>
									<!-- No. 15 -->
									<div style="width:99%;float:left;border:1px solid #eee;border-radius:3px;padding:5px 0px;margin:3px 0px;">
										<div style="width:100%;text-align:right"><div style="padding:10px 11px;background-color:#8dc43f;color:#fff;width:auto;float:right;border-radius:100%;margin:0px 10px;">15</div></div>
										<div style="width:100%;float:left;">
											<div style="width:10%;float:left;text-align:center;padding:5px 0px;">
												<?php echo $disc->disc_statement15_m==1?'<span class="fa fa-check"></span>':'&nbsp;'?>
											</div>
											<div style="width:10%;float:left;text-align:center;padding:5px 0px;">
												<?php echo $disc->disc_statement15_l==1?'<span class="fa fa-check"></span>':'&nbsp;'?>
											</div>
											<div style="width:80%;float:left;padding:5px 0px;">
												Rela berkorban, mengikuti arus
											</div>
										</div>
										<div style="width:100%;float:left;">
											<div style="width:10%;float:left;text-align:center;padding:5px 0px;">
												<?php echo $disc->disc_statement15_m==2?'<span class="fa fa-check"></span>':'&nbsp;'?>
											</div>
											<div style="width:10%;float:left;text-align:center;padding:5px 0px;">
												<?php echo $disc->disc_statement15_l==2?'<span class="fa fa-check"></span>':'&nbsp;'?>
											</div>
											<div style="width:80%;float:left;padding:5px 0px;">
												Antusias, selalu ingin tahu
											</div>
										</div>
										<div style="width:100%;float:left;">
											<div style="width:10%;float:left;text-align:center;padding:5px 0px;">
												<?php echo $disc->disc_statement15_m==3?'<span class="fa fa-check"></span>':'&nbsp;'?>
											</div>
											<div style="width:10%;float:left;text-align:center;padding:5px 0px;">
												<?php echo $disc->disc_statement15_l==3?'<span class="fa fa-check"></span>':'&nbsp;'?>
											</div>
											<div style="width:80%;float:left;padding:5px 0px;">
												Mudah menyetujui
											</div>
										</div>
										<div style="width:100%;float:left;">
											<div style="width:10%;float:left;text-align:center;padding:5px 0px;">
												<?php echo $disc->disc_statement15_m==4?'<span class="fa fa-check"></span>':'&nbsp;'?>
											</div>
											<div style="width:10%;float:left;text-align:center;padding:5px 0px;">
												<?php echo $disc->disc_statement15_l==4?'<span class="fa fa-check"></span>':'&nbsp;'?>
											</div>
											<div style="width:80%;float:left;padding:5px 0px;">
												Lincah, antusiasi
											</div>
										</div>
									</div>
									<!-- No. 16 -->
									<div style="width:99%;float:left;border:1px solid #eee;border-radius:3px;padding:5px 0px;margin:3px 0px;">
										<div style="width:100%;text-align:right"><div style="padding:10px 11px;background-color:#8dc43f;color:#fff;width:auto;float:right;border-radius:100%;margin:0px 10px;">16</div></div>
										<div style="width:100%;float:left;">
											<div style="width:10%;float:left;text-align:center;padding:5px 0px;">
												<?php echo $disc->disc_statement16_m==1?'<span class="fa fa-check"></span>':'&nbsp;'?>
											</div>
											<div style="width:10%;float:left;text-align:center;padding:5px 0px;">
												<?php echo $disc->disc_statement16_l==1?'<span class="fa fa-check"></span>':'&nbsp;'?>
											</div>
											<div style="width:80%;float:left;padding:5px 0px;">
												Percaya diri, yakin pada diri sendiri
											</div>
										</div>
										<div style="width:100%;float:left;">
											<div style="width:10%;float:left;text-align:center;padding:5px 0px;">
												<?php echo $disc->disc_statement16_m==2?'<span class="fa fa-check"></span>':'&nbsp;'?>
											</div>
											<div style="width:10%;float:left;text-align:center;padding:5px 0px;">
												<?php echo $disc->disc_statement16_l==2?'<span class="fa fa-check"></span>':'&nbsp;'?>
											</div>
											<div style="width:80%;float:left;padding:5px 0px;">
												Simpatik, orang yang pengertian
											</div>
										</div>
										<div style="width:100%;float:left;">
											<div style="width:10%;float:left;text-align:center;padding:5px 0px;">
												<?php echo $disc->disc_statement16_m==3?'<span class="fa fa-check"></span>':'&nbsp;'?>
											</div>
											<div style="width:10%;float:left;text-align:center;padding:5px 0px;">
												<?php echo $disc->disc_statement16_l==3?'<span class="fa fa-check"></span>':'&nbsp;'?>
											</div>
											<div style="width:80%;float:left;padding:5px 0px;">
												Toleran
											</div>
										</div>
										<div style="width:100%;float:left;">
											<div style="width:10%;float:left;text-align:center;padding:5px 0px;">
												<?php echo $disc->disc_statement16_m==4?'<span class="fa fa-check"></span>':'&nbsp;'?>
											</div>
											<div style="width:10%;float:left;text-align:center;padding:5px 0px;">
												<?php echo $disc->disc_statement16_l==4?'<span class="fa fa-check"></span>':'&nbsp;'?>
											</div>
											<div style="width:80%;float:left;padding:5px 0px;">
												Tegas, agresif
											</div>
										</div>
									</div>
									<!-- No. 17 -->
									<div style="width:99%;float:left;border:1px solid #eee;border-radius:3px;padding:5px 0px;margin:3px 0px;">
										<div style="width:100%;text-align:right"><div style="padding:10px 11px;background-color:#8dc43f;color:#fff;width:auto;float:right;border-radius:100%;margin:0px 10px;">17</div></div>
										<div style="width:100%;float:left;">
											<div style="width:10%;float:left;text-align:center;padding:5px 0px;">
												<?php echo $disc->disc_statement17_m==1?'<span class="fa fa-check"></span>':'&nbsp;'?>
											</div>
											<div style="width:10%;float:left;text-align:center;padding:5px 0px;">
												<?php echo $disc->disc_statement17_l==1?'<span class="fa fa-check"></span>':'&nbsp;'?>
											</div>
											<div style="width:80%;float:left;padding:5px 0px;">
												Disiplin, terkendali
											</div>
										</div>
										<div style="width:100%;float:left;">
											<div style="width:10%;float:left;text-align:center;padding:5px 0px;">
												<?php echo $disc->disc_statement17_m==2?'<span class="fa fa-check"></span>':'&nbsp;'?>
											</div>
											<div style="width:10%;float:left;text-align:center;padding:5px 0px;">
												<?php echo $disc->disc_statement17_l==2?'<span class="fa fa-check"></span>':'&nbsp;'?>
											</div>
											<div style="width:80%;float:left;padding:5px 0px;">
												Dermawan, suka berbagi
											</div>
										</div>
										<div style="width:100%;float:left;">
											<div style="width:10%;float:left;text-align:center;padding:5px 0px;">
												<?php echo $disc->disc_statement17_m==3?'<span class="fa fa-check"></span>':'&nbsp;'?>
											</div>
											<div style="width:10%;float:left;text-align:center;padding:5px 0px;">
												<?php echo $disc->disc_statement17_l==3?'<span class="fa fa-check"></span>':'&nbsp;'?>
											</div>
											<div style="width:80%;float:left;padding:5px 0px;">
												Suka berekspresi
											</div>
										</div>
										<div style="width:100%;float:left;">
											<div style="width:10%;float:left;text-align:center;padding:5px 0px;">
												<?php echo $disc->disc_statement17_m==4?'<span class="fa fa-check"></span>':'&nbsp;'?>
											</div>
											<div style="width:10%;float:left;text-align:center;padding:5px 0px;">
												<?php echo $disc->disc_statement17_l==4?'<span class="fa fa-check"></span>':'&nbsp;'?>
											</div>
											<div style="width:80%;float:left;padding:5px 0px;">
												Gigih, tidak mudah menyerah
											</div>
										</div>
									</div>
									<!-- No. 18 -->
									<div style="width:99%;float:left;border:1px solid #eee;border-radius:3px;padding:5px 0px;margin:3px 0px;">
										<div style="width:100%;text-align:right"><div style="padding:10px 11px;background-color:#8dc43f;color:#fff;width:auto;float:right;border-radius:100%;margin:0px 10px;">18</div></div>
										<div style="width:100%;float:left;">
											<div style="width:10%;float:left;text-align:center;padding:5px 0px;">
												<?php echo $disc->disc_statement18_m==1?'<span class="fa fa-check"></span>':'&nbsp;'?>
											</div>
											<div style="width:10%;float:left;text-align:center;padding:5px 0px;">
												<?php echo $disc->disc_statement18_l==1?'<span class="fa fa-check"></span>':'&nbsp;'?>
											</div>
											<div style="width:80%;float:left;padding:5px 0px;">
												Terpuji, dapat dikagumi, patut dipuji
											</div>
										</div>
										<div style="width:100%;float:left;">
											<div style="width:10%;float:left;text-align:center;padding:5px 0px;">
												<?php echo $disc->disc_statement18_m==2?'<span class="fa fa-check"></span>':'&nbsp;'?>
											</div>
											<div style="width:10%;float:left;text-align:center;padding:5px 0px;">
												<?php echo $disc->disc_statement18_l==2?'<span class="fa fa-check"></span>':'&nbsp;'?>
											</div>
											<div style="width:80%;float:left;padding:5px 0px;">
												Ramah, Senang menolong
											</div>
										</div>
										<div style="width:100%;float:left;">
											<div style="width:10%;float:left;text-align:center;padding:5px 0px;">
												<?php echo $disc->disc_statement18_m==3?'<span class="fa fa-check"></span>':'&nbsp;'?>
											</div>
											<div style="width:10%;float:left;text-align:center;padding:5px 0px;">
												<?php echo $disc->disc_statement18_l==3?'<span class="fa fa-check"></span>':'&nbsp;'?>
											</div>
											<div style="width:80%;float:left;padding:5px 0px;">
												Mudah menyerah/menerima pendapat yang lain
											</div>
										</div>
										<div style="width:100%;float:left;">
											<div style="width:10%;float:left;text-align:center;padding:5px 0px;">
												<?php echo $disc->disc_statement18_m==4?'<span class="fa fa-check"></span>':'&nbsp;'?>
											</div>
											<div style="width:10%;float:left;text-align:center;padding:5px 0px;">
												<?php echo $disc->disc_statement18_l==4?'<span class="fa fa-check"></span>':'&nbsp;'?>
											</div>
											<div style="width:80%;float:left;padding:5px 0px;">
												Memiliki karakter kuat, tangguh
											</div>
										</div>
									</div>
									<!-- No. 19 -->
									<div style="width:99%;float:left;border:1px solid #eee;border-radius:3px;padding:5px 0px;margin:3px 0px;">
										<div style="width:100%;text-align:right"><div style="padding:10px 11px;background-color:#8dc43f;color:#fff;width:auto;float:right;border-radius:100%;margin:0px 10px;">19</div></div>
										<div style="width:100%;float:left;">
											<div style="width:10%;float:left;text-align:center;padding:5px 0px;">
												<?php echo $disc->disc_statement19_m==1?'<span class="fa fa-check"></span>':'&nbsp;'?>
											</div>
											<div style="width:10%;float:left;text-align:center;padding:5px 0px;">
												<?php echo $disc->disc_statement19_l==1?'<span class="fa fa-check"></span>':'&nbsp;'?>
											</div>
											<div style="width:80%;float:left;padding:5px 0px;">
												Menunjukkan rasa hormat
											</div>
										</div>
										<div style="width:100%;float:left;">
											<div style="width:10%;float:left;text-align:center;padding:5px 0px;">
												<?php echo $disc->disc_statement19_m==2?'<span class="fa fa-check"></span>':'&nbsp;'?>
											</div>
											<div style="width:10%;float:left;text-align:center;padding:5px 0px;">
												<?php echo $disc->disc_statement19_l==2?'<span class="fa fa-check"></span>':'&nbsp;'?>
											</div>
											<div style="width:80%;float:left;padding:5px 0px;">
												Pelopor, perintis, giat, mau berusaha
											</div>
										</div>
										<div style="width:100%;float:left;">
											<div style="width:10%;float:left;text-align:center;padding:5px 0px;">
												<?php echo $disc->disc_statement19_m==3?'<span class="fa fa-check"></span>':'&nbsp;'?>
											</div>
											<div style="width:10%;float:left;text-align:center;padding:5px 0px;">
												<?php echo $disc->disc_statement19_l==3?'<span class="fa fa-check"></span>':'&nbsp;'?>
											</div>
											<div style="width:80%;float:left;padding:5px 0px;">
												Optimis, pandangan positif
											</div>
										</div>
										<div style="width:100%;float:left;">
											<div style="width:10%;float:left;text-align:center;padding:5px 0px;">
												<?php echo $disc->disc_statement19_m==4?'<span class="fa fa-check"></span>':'&nbsp;'?>
											</div>
											<div style="width:10%;float:left;text-align:center;padding:5px 0px;">
												<?php echo $disc->disc_statement19_l==4?'<span class="fa fa-check"></span>':'&nbsp;'?>
											</div>
											<div style="width:80%;float:left;padding:5px 0px;">
												Selalu siap untuk membantu
											</div>
										</div>
									</div>
									<!-- No. 20 -->
									<div style="width:99%;float:left;border:1px solid #eee;border-radius:3px;padding:5px 0px;margin:3px 0px;">
										<div style="width:100%;text-align:right"><div style="padding:10px 11px;background-color:#8dc43f;color:#fff;width:auto;float:right;border-radius:100%;margin:0px 10px;">20</div></div>
										<div style="width:100%;float:left;">
											<div style="width:10%;float:left;text-align:center;padding:5px 0px;">
												<?php echo $disc->disc_statement20_m==1?'<span class="fa fa-check"></span>':'&nbsp;'?>
											</div>
											<div style="width:10%;float:left;text-align:center;padding:5px 0px;">
												<?php echo $disc->disc_statement20_l==1?'<span class="fa fa-check"></span>':'&nbsp;'?>
											</div>
											<div style="width:80%;float:left;padding:5px 0px;">
												Dapat berargumentasi
											</div>
										</div>
										<div style="width:100%;float:left;">
											<div style="width:10%;float:left;text-align:center;padding:5px 0px;">
												<?php echo $disc->disc_statement20_m==2?'<span class="fa fa-check"></span>':'&nbsp;'?>
											</div>
											<div style="width:10%;float:left;text-align:center;padding:5px 0px;">
												<?php echo $disc->disc_statement20_l==2?'<span class="fa fa-check"></span>':'&nbsp;'?>
											</div>
											<div style="width:80%;float:left;padding:5px 0px;">
												Fleksibel, mudah beradaptasi
											</div>
										</div>
										<div style="width:100%;float:left;">
											<div style="width:10%;float:left;text-align:center;padding:5px 0px;">
												<?php echo $disc->disc_statement20_m==3?'<span class="fa fa-check"></span>':'&nbsp;'?>
											</div>
											<div style="width:10%;float:left;text-align:center;padding:5px 0px;">
												<?php echo $disc->disc_statement20_l==3?'<span class="fa fa-check"></span>':'&nbsp;'?>
											</div>
											<div style="width:80%;float:left;padding:5px 0px;">
												Tak peduli, acuh tak acuh, tidak perhatian
											</div>
										</div>
										<div style="width:100%;float:left;">
											<div style="width:10%;float:left;text-align:center;padding:5px 0px;">
												<?php echo $disc->disc_statement20_m==4?'<span class="fa fa-check"></span>':'&nbsp;'?>
											</div>
											<div style="width:10%;float:left;text-align:center;padding:5px 0px;">
												<?php echo $disc->disc_statement20_l==4?'<span class="fa fa-check"></span>':'&nbsp;'?>
											</div>
											<div style="width:80%;float:left;padding:5px 0px;">
												Riang, tiada yang difikirkan sama sekali
											</div>
										</div>
									</div>
									<!-- No. 21 -->
									<div style="width:99%;float:left;border:1px solid #eee;border-radius:3px;padding:5px 0px;margin:3px 0px;">
										<div style="width:100%;text-align:right"><div style="padding:10px 11px;background-color:#8dc43f;color:#fff;width:auto;float:right;border-radius:100%;margin:0px 10px;">21</div></div>
										<div style="width:100%;float:left;">
											<div style="width:10%;float:left;text-align:center;padding:5px 0px;">
												<?php echo $disc->disc_statement21_m==1?'<span class="fa fa-check"></span>':'&nbsp;'?>
											</div>
											<div style="width:10%;float:left;text-align:center;padding:5px 0px;">
												<?php echo $disc->disc_statement21_l==1?'<span class="fa fa-check"></span>':'&nbsp;'?>
											</div>
											<div style="width:80%;float:left;padding:5px 0px;">
												Dapat dipercaya, percaya kepada orang lain
											</div>
										</div>
										<div style="width:100%;float:left;">
											<div style="width:10%;float:left;text-align:center;padding:5px 0px;">
												<?php echo $disc->disc_statement21_m==2?'<span class="fa fa-check"></span>':'&nbsp;'?>
											</div>
											<div style="width:10%;float:left;text-align:center;padding:5px 0px;">
												<?php echo $disc->disc_statement21_l==2?'<span class="fa fa-check"></span>':'&nbsp;'?>
											</div>
											<div style="width:80%;float:left;padding:5px 0px;">
												Mudah puas, selalu merasa cukup
											</div>
										</div>
										<div style="width:100%;float:left;">
											<div style="width:10%;float:left;text-align:center;padding:5px 0px;">
												<?php echo $disc->disc_statement21_m==3?'<span class="fa fa-check"></span>':'&nbsp;'?>
											</div>
											<div style="width:10%;float:left;text-align:center;padding:5px 0px;">
												<?php echo $disc->disc_statement21_l==3?'<span class="fa fa-check"></span>':'&nbsp;'?>
											</div>
											<div style="width:80%;float:left;padding:5px 0px;">
												Selalu positif, tidak diragukan
											</div>
										</div>
										<div style="width:100%;float:left;">
											<div style="width:10%;float:left;text-align:center;padding:5px 0px;">
												<?php echo $disc->disc_statement21_m==4?'<span class="fa fa-check"></span>':'&nbsp;'?>
											</div>
											<div style="width:10%;float:left;text-align:center;padding:5px 0px;">
												<?php echo $disc->disc_statement21_l==4?'<span class="fa fa-check"></span>':'&nbsp;'?>
											</div>
											<div style="width:80%;float:left;padding:5px 0px;">
												Tenang, pendiam
											</div>
										</div>
									</div>
									<!-- No. 22 -->
									<div style="width:99%;float:left;border:1px solid #eee;border-radius:3px;padding:5px 0px;margin:3px 0px;">
										<div style="width:100%;text-align:right"><div style="padding:10px 11px;background-color:#8dc43f;color:#fff;width:auto;float:right;border-radius:100%;margin:0px 10px;">22</div></div>
										<div style="width:100%;float:left;">
											<div style="width:10%;float:left;text-align:center;padding:5px 0px;">
												<?php echo $disc->disc_statement22_m==1?'<span class="fa fa-check"></span>':'&nbsp;'?>
											</div>
											<div style="width:10%;float:left;text-align:center;padding:5px 0px;">
												<?php echo $disc->disc_statement22_l==1?'<span class="fa fa-check"></span>':'&nbsp;'?>
											</div>
											<div style="width:80%;float:left;padding:5px 0px;">
												Mudah bergaul, suka berteman
											</div>
										</div>
										<div style="width:100%;float:left;">
											<div style="width:10%;float:left;text-align:center;padding:5px 0px;">
												<?php echo $disc->disc_statement22_m==2?'<span class="fa fa-check"></span>':'&nbsp;'?>
											</div>
											<div style="width:10%;float:left;text-align:center;padding:5px 0px;">
												<?php echo $disc->disc_statement22_l==2?'<span class="fa fa-check"></span>':'&nbsp;'?>
											</div>
											<div style="width:80%;float:left;padding:5px 0px;">
												Berbudaya, memiliki banyak pengetahuan
											</div>
										</div>
										<div style="width:100%;float:left;">
											<div style="width:10%;float:left;text-align:center;padding:5px 0px;">
												<?php echo $disc->disc_statement22_m==3?'<span class="fa fa-check"></span>':'&nbsp;'?>
											</div>
											<div style="width:10%;float:left;text-align:center;padding:5px 0px;">
												<?php echo $disc->disc_statement22_l==3?'<span class="fa fa-check"></span>':'&nbsp;'?>
											</div>
											<div style="width:80%;float:left;padding:5px 0px;">
												Bersemangat, Giat
											</div>
										</div>
										<div style="width:100%;float:left;">
											<div style="width:10%;float:left;text-align:center;padding:5px 0px;">
												<?php echo $disc->disc_statement22_m==4?'<span class="fa fa-check"></span>':'&nbsp;'?>
											</div>
											<div style="width:10%;float:left;text-align:center;padding:5px 0px;">
												<?php echo $disc->disc_statement22_l==4?'<span class="fa fa-check"></span>':'&nbsp;'?>
											</div>
											<div style="width:80%;float:left;padding:5px 0px;">
												Toleransi, tidak tegas
											</div>
										</div>
									</div>
									<!-- No. 23 -->
									<div style="width:99%;float:left;border:1px solid #eee;border-radius:3px;padding:5px 0px;margin:3px 0px;">
										<div style="width:100%;text-align:right"><div style="padding:10px 11px;background-color:#8dc43f;color:#fff;width:auto;float:right;border-radius:100%;margin:0px 10px;">23</div></div>
										<div style="width:100%;float:left;">
											<div style="width:10%;float:left;text-align:center;padding:5px 0px;">
												<?php echo $disc->disc_statement23_m==1?'<span class="fa fa-check"></span>':'&nbsp;'?>
											</div>
											<div style="width:10%;float:left;text-align:center;padding:5px 0px;">
												<?php echo $disc->disc_statement23_l==1?'<span class="fa fa-check"></span>':'&nbsp;'?>
											</div>
											<div style="width:80%;float:left;padding:5px 0px;">
												Menyenangkan, ramah
											</div>
										</div>
										<div style="width:100%;float:left;">
											<div style="width:10%;float:left;text-align:center;padding:5px 0px;">
												<?php echo $disc->disc_statement23_m==2?'<span class="fa fa-check"></span>':'&nbsp;'?>
											</div>
											<div style="width:10%;float:left;text-align:center;padding:5px 0px;">
												<?php echo $disc->disc_statement23_l==2?'<span class="fa fa-check"></span>':'&nbsp;'?>
											</div>
											<div style="width:80%;float:left;padding:5px 0px;">
												Teliti, akurat
											</div>
										</div>
										<div style="width:100%;float:left;">
											<div style="width:10%;float:left;text-align:center;padding:5px 0px;">
												<?php echo $disc->disc_statement23_m==3?'<span class="fa fa-check"></span>':'&nbsp;'?>
											</div>
											<div style="width:10%;float:left;text-align:center;padding:5px 0px;">
												<?php echo $disc->disc_statement23_l==3?'<span class="fa fa-check"></span>':'&nbsp;'?>
											</div>
											<div style="width:80%;float:left;padding:5px 0px;">
												Terus terang, bicara bebas
											</div>
										</div>
										<div style="width:100%;float:left;">
											<div style="width:10%;float:left;text-align:center;padding:5px 0px;">
												<?php echo $disc->disc_statement23_m==4?'<span class="fa fa-check"></span>':'&nbsp;'?>
											</div>
											<div style="width:10%;float:left;text-align:center;padding:5px 0px;">
												<?php echo $disc->disc_statement23_l==4?'<span class="fa fa-check"></span>':'&nbsp;'?>
											</div>
											<div style="width:80%;float:left;padding:5px 0px;">
												Terkendali, emosi yang terkendali
											</div>
										</div>
									</div>
									<!-- No. 24 -->
									<div style="width:99%;float:left;border:1px solid #eee;border-radius:3px;padding:5px 0px;margin:3px 0px;">
										<div style="width:100%;text-align:right"><div style="padding:10px 11px;background-color:#8dc43f;color:#fff;width:auto;float:right;border-radius:100%;margin:0px 10px;">24</div></div>
										<div style="width:100%;float:left;">
											<div style="width:10%;float:left;text-align:center;padding:5px 0px;">
												<?php echo $disc->disc_statement24_m==1?'<span class="fa fa-check"></span>':'&nbsp;'?>
											</div>
											<div style="width:10%;float:left;text-align:center;padding:5px 0px;">
												<?php echo $disc->disc_statement24_l==1?'<span class="fa fa-check"></span>':'&nbsp;'?>
											</div>
											<div style="width:80%;float:left;padding:5px 0px;">
												Resah, tidak biasa santai
											</div>
										</div>
										<div style="width:100%;float:left;">
											<div style="width:10%;float:left;text-align:center;padding:5px 0px;">
												<?php echo $disc->disc_statement24_m==2?'<span class="fa fa-check"></span>':'&nbsp;'?>
											</div>
											<div style="width:10%;float:left;text-align:center;padding:5px 0px;">
												<?php echo $disc->disc_statement24_l==2?'<span class="fa fa-check"></span>':'&nbsp;'?>
											</div>
											<div style="width:80%;float:left;padding:5px 0px;">
												Baik hati, ramah
											</div>
										</div>
										<div style="width:100%;float:left;">
											<div style="width:10%;float:left;text-align:center;padding:5px 0px;">
												<?php echo $disc->disc_statement24_m==3?'<span class="fa fa-check"></span>':'&nbsp;'?>
											</div>
											<div style="width:10%;float:left;text-align:center;padding:5px 0px;">
												<?php echo $disc->disc_statement24_l==3?'<span class="fa fa-check"></span>':'&nbsp;'?>
											</div>
											<div style="width:80%;float:left;padding:5px 0px;">
												Populer, disukai banyak orang
											</div>
										</div>
										<div style="width:100%;float:left;">
											<div style="width:10%;float:left;text-align:center;padding:5px 0px;">
												<?php echo $disc->disc_statement24_m==4?'<span class="fa fa-check"></span>':'&nbsp;'?>
											</div>
											<div style="width:10%;float:left;text-align:center;padding:5px 0px;">
												<?php echo $disc->disc_statement24_l==4?'<span class="fa fa-check"></span>':'&nbsp;'?>
											</div>
											<div style="width:80%;float:left;padding:5px 0px;">
												Rapi, teratur
											</div>
										</div>
									</div>

								</div>
							</div>
						</div>
					</div>
				</div>
				<?php
					}
				?>