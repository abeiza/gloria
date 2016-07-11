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
				.tabcontent1 {
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
					background:#FFBA00;
					color:#fff;
					display:block;
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
			<script type="text/javascript">
				function showStuff(id, text1, text2, text3, text4, text5, text6, text7, text8) {
					document.getElementById(id).style.display = 'block';
					document.getElementById(text1).style.display = 'none';
					document.getElementById(text2).style.display = 'none';
					document.getElementById(text3).style.display = 'none';
					document.getElementById(text4).style.display = 'none';
					document.getElementById(text5).style.display = 'none';
					document.getElementById(text6).style.display = 'none';
					document.getElementById(text7).style.display = 'none';
					document.getElementById(text8).style.display = 'none';
				}
			</script>
			<div class="row">
				<?php echo form_open('home/career/proses_upload_test/'.$this->uri->segment(4));?>
				<div style="margin:20px;" id="sheet1" class="tabcontent1">
					<h2>DISC Personality Test</h2>
					<div>
						<h5>Instruction :</h5>
						<p>
							This test contains 24 groups of four statements. Answer honestly and spontaneously. It should take you only 5 to 10 minutes to complete.
							<ul style="	list-style-position: inside;">
								<li>Study all the descriptions in each group of four</li>
								<li>Select the one description that you consider most like you (most like you)</li>
								<li>Study the remaining three choices in the same group</li>
								<li>Select the one description you consider least like you (least like you)</li>
								<li>For each group of four descriptions you should have one most like you and only one least like you.</li>
							</ul>
							Sometimes it may be difficult to decide which description to select. Remember there are no right or wrong answers in this DISC personality test, so just make the best decision you can.
						</p>
					</div>
					<hr/>
					<style>
						.test tr td{
							padding:3px 10px;
						}
						
						.test .header td{
							text-align:center;
							font-weight:bold;
						}
						
						.tabcontent div, .tabcontent1 div{
							margin:5px 0px;
						}
					</style>
					<div style="text-align:right">Pernyataan No. 1 - 3</div>
					<div style="border:1px solid #e1e1e1;border-radius:5px;">
						<div style="position:absolute;text-align:right;width: 92%;padding:top:5px;"><span style="padding:10px;background-color:#8dc43f;color:#fff;">#1</span></div>
						<table class="test">
							<tr class="header">
								<td>M</td>
								<td>L</td>
								<td>&nbsp;</td>
							</tr>
							<tr>
								<td><input name="disc_statement1_l" type="radio" value="1"/></td>
								<td><input name="disc_statement1_m" type="radio" value="1"/></td>
								<td>Lembut, Ramah</td>
							</tr>
							<tr>
								<td><input name="disc_statement1_l" type="radio" value="2"/></td>
								<td><input name="disc_statement1_m" type="radio" value="2"/></td>
								<td>Membujuk, Meyakinkan</td>
							</tr>
							<tr>
								<td><input name="disc_statement1_l" type="radio" value="3"/></td>
								<td><input name="disc_statement1_m" type="radio" value="3"/></td>
								<td>Sederhana, Mudah Menerima, Rendah Hati</td>
							</tr>
							<tr>
								<td><input name="disc_statement1_l" type="radio" value="4"/></td>
								<td><input name="disc_statement1_m" type="radio" value="4"/></td>
								<td>Asli, Berdaya Cipta, Individualis</td>
							</tr>
						</table>
					</div>
					<div style="border:1px solid #e1e1e1;border-radius:5px;">
						<div style="position:absolute;text-align:right;width: 92%;padding:top:5px;"><span style="padding:10px;background-color:#8dc43f;color:#fff;">#2</span></div>
						<table class="test">
							<tr class="header">
								<td>M</td>
								<td>L</td>
								<td>&nbsp;</td>
							</tr>
							<tr>
								<td><input name="disc_statement2_l" type="radio" value="1"/></td>
								<td><input name="disc_statement2_m" type="radio" value="1"/></td>
								<td>Menarik, Mempesona, Menarik Bagi Orang Lain</td>
							</tr>
							<tr>
								<td><input name="disc_statement2_l" type="radio" value="2"/></td>
								<td><input name="disc_statement2_m" type="radio" value="2"/></td>
								<td>Dapat Bekerja Sama, Mudah Menyetujui</td>
							</tr>
							<tr>
								<td><input name="disc_statement2_l" type="radio" value="3"/></td>
								<td><input name="disc_statement2_m" type="radio" value="3"/></td>
								<td>Keras Kepala, Tidak Mudah Menyerah</td>
							</tr>
							<tr>
								<td><input name="disc_statement2_l" type="radio" value="4"/></td>
								<td><input name="disc_statement2_m" type="radio" value="4"/></td>
								<td>Manis, Memuaskan / Menyegarkan</td>
							</tr>
						</table>
					</div>
					<div style="border:1px solid #e1e1e1;border-radius:5px;">
						<div style="position:absolute;text-align:right;width: 92%;padding:top:5px;"><span style="padding:10px;background-color:#8dc43f;color:#fff;">#3</span></div>
						<table class="test">
							<tr class="header">
								<td>M</td>
								<td>L</td>
								<td>&nbsp;</td>
							</tr>
							<tr>
								<td><input name="disc_statement3_l" type="radio" value="1"/></td>
								<td><input name="disc_statement3_m" type="radio" value="1"/></td>
								<td>Mau Dipimpin, Cenderung Mengikuti / Pengikut</td>
							</tr>
							<tr>
								<td><input name="disc_statement3_l" type="radio" value="2"/></td>
								<td><input name="disc_statement3_m" type="radio" value="2"/></td>
								<td>Tangguh, Berani</td>
							</tr>
							<tr>
								<td><input name="disc_statement3_l" type="radio" value="3"/></td>
								<td><input name="disc_statement3_m" type="radio" value="3"/></td>
								<td>Loyal, Setia, Mengabdi</td>
							</tr>
							<tr>
								<td><input name="disc_statement3_l" type="radio" value="4"/></td>
								<td><input name="disc_statement3_m" type="radio" value="4"/></td>
								<td>Mempesona, Menyenangkan</td>
							</tr>
						</table>
					</div>
					<a href="#" class="tablinks" onclick="showStuff('sheet2', 'sheet1', 'sheet3', 'sheet4', 'sheet5', 'sheet6', 'sheet7', 'sheet8', 'sheet9')" style="padding: 11px;color: #fff;background-color: #8dc43f;border: 1px solid #8dc43f;cursor: pointer;float:right;">Next<i class="fa fa-angle-right" style="margin-left:10px;"></i></a>
				</div>
				<div style="margin:20px;" id="sheet2" class="tabcontent">
					<div style="text-align:right">Pernyataan No. 4 - 6</div>
					<div style="border:1px solid #e1e1e1;border-radius:5px;">
						<div style="position:absolute;text-align:right;width: 92%;padding:top:5px;"><span style="padding:10px;background-color:#8dc43f;color:#fff;">#4</span></div>
						<table class="test">
							<tr class="header">
								<td>M</td>
								<td>L</td>
								<td>&nbsp;</td>
							</tr>
							<tr>
								<td><input name="disc_statement4_l" type="radio" value="1"/></td>
								<td><input name="disc_statement4_m" type="radio" value="1"/></td>
								<td>Berpandangan Terbuka, Mau Menerima</td>
							</tr>
							<tr>
								<td><input name="disc_statement4_l" type="radio" value="2"/></td>
								<td><input name="disc_statement4_m" type="radio" value="2"/></td>
								<td>Tegar, Suka Menolong</td>
							</tr>
							<tr>
								<td><input name="disc_statement4_l" type="radio" value="3"/></td>
								<td><input name="disc_statement4_m" type="radio" value="3"/></td>
								<td>Tekun, Berkemauan Keras</td>
							</tr>
							<tr>
								<td><input name="disc_statement4_l" type="radio" value="4"/></td>
								<td><input name="disc_statement4_m" type="radio" value="4"/></td>
								<td>Periang, Selalu Bergembira</td>
							</tr>
						</table>
					</div>
					<div style="border:1px solid #e1e1e1;border-radius:5px;">
						<div style="position:absolute;text-align:right;width: 92%;padding:top:5px;"><span style="padding:10px;background-color:#8dc43f;color:#fff;">#5</span></div>
						<table class="test">
							<tr class="header">
								<td>M</td>
								<td>L</td>
								<td>&nbsp;</td>
							</tr>
							<tr>
								<td><input name="disc_statement5_l" type="radio" value="1"/></td>
								<td><input name="disc_statement5_m" type="radio" value="1"/></td>
								<td>Periang, Suka Bergurau</td>
							</tr>
							<tr>
								<td><input name="disc_statement5_l" type="radio" value="2"/></td>
								<td><input name="disc_statement5_m" type="radio" value="2"/></td>
								<td>Teliti, Tepat</td>
							</tr>
							<tr>
								<td><input name="disc_statement5_l" type="radio" value="3"/></td>
								<td><input name="disc_statement5_m" type="radio" value="3"/></td>
								<td>Kasar, Berani, Kurang Sopan, Tidak Mudah Malu</td>
							</tr>
							<tr>
								<td><input name="disc_statement5_l" type="radio" value="4"/></td>
								<td><input name="disc_statement5_m" type="radio" value="4"/></td>
								<td>Tenang, Emosi yang Terkendali, Tidak Mudah Heboh</td>
							</tr>
						</table>
					</div>
					<div style="border:1px solid #e1e1e1;border-radius:5px;">
						<div style="position:absolute;text-align:right;width: 92%;padding:top:5px;"><span style="padding:10px;background-color:#8dc43f;color:#fff;">#6</span></div>
						<table class="test">
							<tr class="header">
								<td>M</td>
								<td>L</td>
								<td>&nbsp;</td>
							</tr>
							<tr>
								<td><input name="disc_statement6_l" type="radio" value="1"/></td>
								<td><input name="disc_statement6_m" type="radio" value="1"/></td>
								<td>Kompetitif, Selalu Ingin Berhasil</td>
							</tr>
							<tr>
								<td><input name="disc_statement6_l" type="radio" value="2"/></td>
								<td><input name="disc_statement6_m" type="radio" value="2"/></td>
								<td>Timbang Rasa, Peduli, Bijaksana</td>
							</tr>
							<tr>
								<td><input name="disc_statement6_l" type="radio" value="3"/></td>
								<td><input name="disc_statement6_m" type="radio" value="3"/></td>
								<td>Terbuka, Ramah, Suka Senang-senang</td>
							</tr>
							<tr>
								<td><input name="disc_statement6_l" type="radio" value="4"/></td>
								<td><input name="disc_statement6_m" type="radio" value="4"/></td>
								<td>Harmonis, Mudah Menyutujui</td>
							</tr>
						</table>
					</div>
					<a href="#" class="tablinks" onclick="showStuff('sheet3', 'sheet1', 'sheet2', 'sheet4', 'sheet5', 'sheet6', 'sheet7', 'sheet8', 'sheet9')" style="margin:3px;padding: 11px;color: #fff;background-color: #8dc43f;border: 1px solid #8dc43f;cursor: pointer;float:right;">Next<i class="fa fa-angle-right" style="margin-left:10px;"></i></a>
					<a href="#" class="tablinks" onclick="showStuff('sheet1', 'sheet2', 'sheet3', 'sheet4', 'sheet5', 'sheet6', 'sheet7', 'sheet8', 'sheet9')" style="margin:3px;padding: 11px;color: #fff;background-color: #8dc43f;border: 1px solid #8dc43f;cursor: pointer;float:right;"><i class="fa fa-angle-left" style="margin-right:10px;"></i>Prev</a>			
					
				</div>
				<div style="margin:20px;" id="sheet3" class="tabcontent">
					<div style="text-align:right">Pernyataan No. 7 - 9</div>
					<div style="border:1px solid #e1e1e1;border-radius:5px;">
						<div style="position:absolute;text-align:right;width: 92%;padding:top:5px;"><span style="padding:10px;background-color:#8dc43f;color:#fff;">#7</span></div>
						<table class="test">
							<tr class="header">
								<td>M</td>
								<td>L</td>
								<td>&nbsp;</td>
							</tr>
							<tr>
								<td><input name="disc_statement7_l" type="radio" value="1"/></td>
								<td><input name="disc_statement7_m" type="radio" value="1"/></td>
								<td>Rewel, Cerewet, Sulit Untuk Dipuaskan Hatinya</td>
							</tr>
							<tr>
								<td><input name="disc_statement7_l" type="radio" value="2"/></td>
								<td><input name="disc_statement7_m" type="radio" value="2"/></td>
								<td>Taat, Melakukan Apa Yang Diperintahkan, Patuh</td>
							</tr>
							<tr>
								<td><input name="disc_statement7_l" type="radio" value="3"/></td>
								<td><input name="disc_statement7_m" type="radio" value="3"/></td>
								<td>Tidak Mudah Mundur, Fokus Akan Satu Hal, Ulet</td>
							</tr>
							<tr>
								<td><input name="disc_statement7_l" type="radio" value="4"/></td>
								<td><input name="disc_statement7_m" type="radio" value="4"/></td>
								<td>Suka Melucu, Lincah, Periang</td>
							</tr>
						</table>
					</div>
					<div style="border:1px solid #e1e1e1;border-radius:5px;">
						<div style="position:absolute;text-align:right;width: 92%;padding:top:5px;"><span style="padding:10px;background-color:#8dc43f;color:#fff;">#8</span></div>
						<table class="test">
							<tr class="header">
								<td>M</td>
								<td>L</td>
								<td>&nbsp;</td>
							</tr>
							<tr>
								<td><input name="disc_statement8_l" type="radio" value="1"/></td>
								<td><input name="disc_statement8_m" type="radio" value="1"/></td>
								<td>Berani, Tidak Gentar, Tangguh</td>
							</tr>
							<tr>
								<td><input name="disc_statement8_l" type="radio" value="2"/></td>
								<td><input name="disc_statement8_m" type="radio" value="2"/></td>
								<td>Membangkitkan Semangat, Memotivasi</td>
							</tr>
							<tr>
								<td><input name="disc_statement8_l" type="radio" value="3"/></td>
								<td><input name="disc_statement8_m" type="radio" value="3"/></td>
								<td>Patuh, Berhasil, Menyerah</td>
							</tr>
							<tr>
								<td><input name="disc_statement8_l" type="radio" value="4"/></td>
								<td><input name="disc_statement8_m" type="radio" value="4"/></td>
								<td>Takut-takut, Malu, Pendiam</td>
							</tr>
						</table>
					</div>
					<div style="border:1px solid #e1e1e1;border-radius:5px;">
						<div style="position:absolute;text-align:right;width: 92%;padding:top:5px;"><span style="padding:10px;background-color:#8dc43f;color:#fff;">#9</span></div>
						<table class="test">
							<tr class="header">
								<td>M</td>
								<td>L</td>
								<td>&nbsp;</td>
							</tr>
							<tr>
								<td><input name="disc_statement9_l" type="radio" value="1"/></td>
								<td><input name="disc_statement9_m" type="radio" value="1"/></td>
								<td>Suka Bergaul dan Bersosialisasi</td>
							</tr>
							<tr>
								<td><input name="disc_statement9_l" type="radio" value="2"/></td>
								<td><input name="disc_statement9_m" type="radio" value="2"/></td>
								<td>Sabar, Penuh Keyakinan, Bersikap Toleransi</td>
							</tr>
							<tr>
								<td><input name="disc_statement9_l" type="radio" value="3"/></td>
								<td><input name="disc_statement9_m" type="radio" value="3"/></td>
								<td>Percaya Diri, Mandiri</td>
							</tr>
							<tr>
								<td><input name="disc_statement9_l" type="radio" value="4"/></td>
								<td><input name="disc_statement9_m" type="radio" value="4"/></td>
								<td>Berwatak Halus/Lembut, Pendiam, Suka Menyendiri</td>
							</tr>
						</table>
					</div>
					<a href="#" class="tablinks" onclick="showStuff('sheet4', 'sheet1', 'sheet2', 'sheet3', 'sheet5', 'sheet6', 'sheet7', 'sheet8', 'sheet9')" style="margin:3px;padding: 11px;color: #fff;background-color: #8dc43f;border: 1px solid #8dc43f;cursor: pointer;float:right;">Next<i class="fa fa-angle-right" style="margin-left:10px;"></i></a>
					<a href="#" class="tablinks" onclick="showStuff('sheet2', 'sheet1', 'sheet3', 'sheet4', 'sheet5', 'sheet6', 'sheet7', 'sheet8', 'sheet9')" style="margin:3px;padding: 11px;color: #fff;background-color: #8dc43f;border: 1px solid #8dc43f;cursor: pointer;float:right;"><i class="fa fa-angle-left" style="margin-right:10px;"></i>Prev</a>										
				</div>
				<div style="margin:20px;" id="sheet4" class="tabcontent">
					<div style="text-align:right">Pernyataan No. 10 - 12</div>	
					<div style="border:1px solid #e1e1e1;border-radius:5px;">
						<div style="position:absolute;text-align:right;width: 92%;padding:top:5px;"><span style="padding:10px;background-color:#8dc43f;color:#fff;">#10</span></div>
						<table class="test">
							<tr class="header">
								<td>M</td>
								<td>L</td>
								<td>&nbsp;</td>
							</tr>
							<tr>
								<td><input name="disc_statement10_l" type="radio" value="1"/></td>
								<td><input name="disc_statement10_m" type="radio" value="1"/></td>
								<td>Menyukai Hal-Hal Baru, Suka Tantangan</td>
							</tr>
							<tr>
								<td><input name="disc_statement10_l" type="radio" value="2"/></td>
								<td><input name="disc_statement10_m" type="radio" value="2"/></td>
								<td>Terbuka dan Mau Menerima Ide-Ide Baru dan Saran</td>
							</tr>
							<tr>
								<td><input name="disc_statement10_l" type="radio" value="3"/></td>
								<td><input name="disc_statement10_m" type="radio" value="3"/></td>
								<td>Ramah, Hangat, Bersahabat</td>
							</tr>
							<tr>
								<td><input name="disc_statement10_l" type="radio" value="4"/></td>
								<td><input name="disc_statement10_m" type="radio" value="4"/></td>
								<td>Moderat, Menghindari Hal-Hal Yang Ekstrim atau Aneh</td>
							</tr>
						</table>
					</div>
					<div style="border:1px solid #e1e1e1;border-radius:5px;">
						<div style="position:absolute;text-align:right;width: 92%;padding:top:5px;"><span style="padding:10px;background-color:#8dc43f;color:#fff;">#11</span></div>
						<table class="test">
							<tr class="header">
								<td>M</td>
								<td>L</td>
								<td>&nbsp;</td>
							</tr>
							<tr>
								<td><input name="disc_statement11_l" type="radio" value="1"/></td>
								<td><input name="disc_statement11_m" type="radio" value="1"/></td>
								<td>Banyak Bicara, Cerewet</td>
							</tr>
							<tr>
								<td><input name="disc_statement11_l" type="radio" value="2"/></td>
								<td><input name="disc_statement11_m" type="radio" value="2"/></td>
								<td>Terkendali, Mudah Diatur</td>
							</tr>
							<tr>
								<td><input name="disc_statement11_l" type="radio" value="3"/></td>
								<td><input name="disc_statement11_m" type="radio" value="3"/></td>
								<td>Melakukan Hal-Hal Yang Sudah Biasa, Tidak Berlebihan</td>
							</tr>
							<tr>
								<td><input name="disc_statement11_l" type="radio" value="4"/></td>
								<td><input name="disc_statement11_m" type="radio" value="4"/></td>
								<td>Tegas, Cepat Dalam Membuat Keputusan</td>
							</tr>
						</table>
					</div>
					<div style="border:1px solid #e1e1e1;border-radius:5px;">
						<div style="position:absolute;text-align:right;width: 92%;padding:top:5px;"><span style="padding:10px;background-color:#8dc43f;color:#fff;">#12</span></div>
						<table class="test">
							<tr class="header">
								<td>M</td>
								<td>L</td>
								<td>&nbsp;</td>
							</tr>
							<tr>
								<td><input name="disc_statement12_l" type="radio" value="1"/></td>
								<td><input name="disc_statement12_m" type="radio" value="1"/></td>
								<td>Berbudi Bahasa Halus, Tingkah Laku Yang Halus</td>
							</tr>
							<tr>
								<td><input name="disc_statement12_l" type="radio" value="2"/></td>
								<td><input name="disc_statement12_m" type="radio" value="2"/></td>
								<td>Berani, Suka Mengambil Resiko</td>
							</tr>
							<tr>
								<td><input name="disc_statement12_l" type="radio" value="3"/></td>
								<td><input name="disc_statement12_m" type="radio" value="3"/></td>
								<td>Diplomatik, Bijaksana</td>
							</tr>
							<tr>
								<td><input name="disc_statement12_l" type="radio" value="4"/></td>
								<td><input name="disc_statement12_m" type="radio" value="4"/></td>
								<td>Mudah Puas atau Senang</td>
							</tr>
						</table>
					</div>
					
					<a href="#" class="tablinks" onclick="showStuff('sheet5', 'sheet1', 'sheet2', 'sheet4', 'sheet3', 'sheet6', 'sheet7', 'sheet8', 'sheet9')" style="margin:3px;padding: 11px;color: #fff;background-color: #8dc43f;border: 1px solid #8dc43f;cursor: pointer;float:right;">Next<i class="fa fa-angle-right" style="margin-left:10px;"></i></a>
					<a href="#" class="tablinks" onclick="showStuff('sheet3', 'sheet2', 'sheet1', 'sheet4', 'sheet5', 'sheet6', 'sheet7', 'sheet8', 'sheet9')" style="margin:3px;padding: 11px;color: #fff;background-color: #8dc43f;border: 1px solid #8dc43f;cursor: pointer;float:right;"><i class="fa fa-angle-left" style="margin-right:10px;"></i>Prev</a>			
				</div>
				<div style="margin:20px;" id="sheet5" class="tabcontent">
					<div style="text-align:right">Pernyataan No. 13 - 15</div>			
					<div style="border:1px solid #e1e1e1;border-radius:5px;">
						<div style="position:absolute;text-align:right;width: 92%;padding:top:5px;"><span style="padding:10px;background-color:#8dc43f;color:#fff;">#13</span></div>
						<table class="test">
							<tr class="header">
								<td>M</td>
								<td>L</td>
								<td>&nbsp;</td>
							</tr>
							<tr>
								<td><input name="disc_statement13_l" type="radio" value="1"/></td>
								<td><input name="disc_statement13_m" type="radio" value="1"/></td>
								<td>Agresif, Suka Tantangan, Penuh Inisiatif</td>
							</tr>
							<tr>
								<td><input name="disc_statement13_l" type="radio" value="2"/></td>
								<td><input name="disc_statement13_m" type="radio" value="2"/></td>
								<td>Menyukai Hiburan, Ramah, Suka Peta / Acara Kumpul</td>
							</tr>
							<tr>
								<td><input name="disc_statement13_l" type="radio" value="3"/></td>
								<td><input name="disc_statement13_m" type="radio" value="3"/></td>
								<td>Pengikut, Mudah Didayagunakan oleh Orang Lain</td>
							</tr>
							<tr>
								<td><input name="disc_statement13_l" type="radio" value="4"/></td>
								<td><input name="disc_statement13_m" type="radio" value="4"/></td>
								<td>Gelisah, Khawatir</td>
							</tr>
						</table>
					</div>
					<div style="border:1px solid #e1e1e1;border-radius:5px;">
						<div style="position:absolute;text-align:right;width: 92%;padding:top:5px;"><span style="padding:10px;background-color:#8dc43f;color:#fff;">#14</span></div>
						<table class="test">
							<tr class="header">
								<td>M</td>
								<td>L</td>
								<td>&nbsp;</td>
							</tr>
							<tr>
								<td><input name="disc_statement14_l" type="radio" value="1"/></td>
								<td><input name="disc_statement14_m" type="radio" value="1"/></td>
								<td>Berhati-hati</td>
							</tr>
							<tr>
								<td><input name="disc_statement14_l" type="radio" value="2"/></td>
								<td><input name="disc_statement14_m" type="radio" value="2"/></td>
								<td>Fokus Pasa Satu Hal Tertentu, Tidak Mudah Goyah</td>
							</tr>
							<tr>
								<td><input name="disc_statement14_l" type="radio" value="3"/></td>
								<td><input name="disc_statement14_m" type="radio" value="3"/></td>
								<td>Meyakinkan</td>
							</tr>
							<tr>
								<td><input name="disc_statement14_l" type="radio" value="4"/></td>
								<td><input name="disc_statement14_m" type="radio" value="4"/></td>
								<td>Baik Hati, Menyenangkan</td>
							</tr>
						</table>
					</div>
					<div style="border:1px solid #e1e1e1;border-radius:5px;">
						<div style="position:absolute;text-align:right;width: 92%;padding:top:5px;"><span style="padding:10px;background-color:#8dc43f;color:#fff;">#15</span></div>
						<table class="test">
							<tr class="header">
								<td>M</td>
								<td>L</td>
								<td>&nbsp;</td>
							</tr>
							<tr>
								<td><input name="disc_statement15_l" type="radio" value="1"/></td>
								<td><input name="disc_statement15_m" type="radio" value="1"/></td>
								<td>Rela Berkorban, Mengikuti Arus</td>
							</tr>
							<tr>
								<td><input name="disc_statement15_l" type="radio" value="2"/></td>
								<td><input name="disc_statement15_m" type="radio" value="2"/></td>
								<td>Antusias</td>
							</tr>
							<tr>
								<td><input name="disc_statement15_l" type="radio" value="3"/></td>
								<td><input name="disc_statement15_m" type="radio" value="3"/></td>
								<td>Mudah Menyetujui</td>
							</tr>
							<tr>
								<td><input name="disc_statement15_l" type="radio" value="4"/></td>
								<td><input name="disc_statement15_m" type="radio" value="4"/></td>
								<td>Licah, Antusias</td>
							</tr>
						</table>
					</div>
					
					<a href="#" class="tablinks" onclick="showStuff('sheet6', 'sheet1', 'sheet2', 'sheet4', 'sheet3', 'sheet5', 'sheet7', 'sheet8', 'sheet9')" style="margin:3px;padding: 11px;color: #fff;background-color: #8dc43f;border: 1px solid #8dc43f;cursor: pointer;float:right;">Next<i class="fa fa-angle-right" style="margin-left:10px;"></i></a>
					<a href="#" class="tablinks" onclick="showStuff('sheet4', 'sheet2', 'sheet1', 'sheet3', 'sheet5', 'sheet6', 'sheet7', 'sheet8', 'sheet9')" style="margin:3px;padding: 11px;color: #fff;background-color: #8dc43f;border: 1px solid #8dc43f;cursor: pointer;float:right;"><i class="fa fa-angle-left" style="margin-right:10px;"></i>Prev</a>			
				</div>
				<div style="margin:20px;" id="sheet6" class="tabcontent">
					<div style="text-align:right">Pernyataan No. 16 - 18</div>	
					<div style="border:1px solid #e1e1e1;border-radius:5px;">
						<div style="position:absolute;text-align:right;width: 92%;padding:top:5px;"><span style="padding:10px;background-color:#8dc43f;color:#fff;">#16</span></div>
						<table class="test">
							<tr class="header">
								<td>M</td>
								<td>L</td>
								<td>&nbsp;</td>
							</tr>
							<tr>
								<td><input name="disc_statement16_l" type="radio" value="1"/></td>
								<td><input name="disc_statement16_m" type="radio" value="1"/></td>
								<td>Percaya Diri, Yakin pada Diri Sendiri</td>
							</tr>
							<tr>
								<td><input name="disc_statement16_l" type="radio" value="2"/></td>
								<td><input name="disc_statement16_m" type="radio" value="2"/></td>
								<td>Simpati, Orang yang Pengertian</td>
							</tr>
							<tr>
								<td><input name="disc_statement16_l" type="radio" value="3"/></td>
								<td><input name="disc_statement16_m" type="radio" value="3"/></td>
								<td>Toleran</td>
							</tr>
							<tr>
								<td><input name="disc_statement16_l" type="radio" value="4"/></td>
								<td><input name="disc_statement16_m" type="radio" value="4"/></td>
								<td>Tegas, Agresif</td>
							</tr>
						</table>
					</div>
					<div style="border:1px solid #e1e1e1;border-radius:5px;">
						<div style="position:absolute;text-align:right;width: 92%;padding:top:5px;"><span style="padding:10px;background-color:#8dc43f;color:#fff;">#17</span></div>
						<table class="test">
							<tr class="header">
								<td>M</td>
								<td>L</td>
								<td>&nbsp;</td>
							</tr>
							<tr>
								<td><input name="disc_statement17_l" type="radio" value="1"/></td>
								<td><input name="disc_statement17_m" type="radio" value="1"/></td>
								<td>Disiplin, Terkendali</td>
							</tr>
							<tr>
								<td><input name="disc_statement17_l" type="radio" value="2"/></td>
								<td><input name="disc_statement17_m" type="radio" value="2"/></td>
								<td>Dermawan, Suka Berbagi</td>
							</tr>
							<tr>
								<td><input name="disc_statement17_l" type="radio" value="3"/></td>
								<td><input name="disc_statement17_m" type="radio" value="3"/></td>
								<td>Suka Berekspresi, Banyak Menggerakkan Tubuh Dalam Berekspresi</td>
							</tr>
							<tr>
								<td><input name="disc_statement17_l" type="radio" value="4"/></td>
								<td><input name="disc_statement17_m" type="radio" value="4"/></td>
								<td>Gigih, Tidak Mudah Menyerah</td>
							</tr>
						</table>
					</div>
					<div style="border:1px solid #e1e1e1;border-radius:5px;">
						<div style="position:absolute;text-align:right;width: 92%;padding:top:5px;"><span style="padding:10px;background-color:#8dc43f;color:#fff;">#18</span></div>
						<table class="test">
							<tr class="header">
								<td>M</td>
								<td>L</td>
								<td>&nbsp;</td>
							</tr>
							<tr>
								<td><input name="disc_statement18_l" type="radio" value="1"/></td>
								<td><input name="disc_statement18_m" type="radio" value="1"/></td>
								<td>Terpuji, Dapat Dikagumi, Patut Dipuji</td>
							</tr>
							<tr>
								<td><input name="disc_statement18_l" type="radio" value="2"/></td>
								<td><input name="disc_statement18_m" type="radio" value="2"/></td>
								<td>Ramah, Senang Menolong</td>
							</tr>
							<tr>
								<td><input name="disc_statement18_l" type="radio" value="3"/></td>
								<td><input name="disc_statement18_m" type="radio" value="3"/></td>
								<td>Mudah Menyerah/Menerima Pendapat yang Lain</td>
							</tr>
							<tr>
								<td><input name="disc_statement18_l" type="radio" value="4"/></td>
								<td><input name="disc_statement18_m" type="radio" value="4"/></td>
								<td>Memiliki Karakter Kuat, Tangguh</td>
							</tr>
						</table>
					</div>
					
					<a href="#" class="tablinks" onclick="showStuff('sheet7', 'sheet1', 'sheet2', 'sheet3', 'sheet4', 'sheet5', 'sheet6', 'sheet8', 'sheet9')" style="margin:3px;padding: 11px;color: #fff;background-color: #8dc43f;border: 1px solid #8dc43f;cursor: pointer;float:right;">Next<i class="fa fa-angle-right" style="margin-left:10px;"></i></a>
					<a href="#" class="tablinks" onclick="showStuff('sheet5', 'sheet1', 'sheet2', 'sheet3', 'sheet4', 'sheet6', 'sheet7', 'sheet8', 'sheet9')" style="margin:3px;padding: 11px;color: #fff;background-color: #8dc43f;border: 1px solid #8dc43f;cursor: pointer;float:right;"><i class="fa fa-angle-left" style="margin-right:10px;"></i>Prev</a>			
				</div>
				<div style="margin:20px;" id="sheet7" class="tabcontent">
					<div style="text-align:right">Pernyataan No. 19 - 21</div>		
					<div style="border:1px solid #e1e1e1;border-radius:5px;">
						<div style="position:absolute;text-align:right;width: 92%;padding:top:5px;"><span style="padding:10px;background-color:#8dc43f;color:#fff;">#19</span></div>
						<table class="test">
							<tr class="header">
								<td>M</td>
								<td>L</td>
								<td>&nbsp;</td>
							</tr>
							<tr>
								<td><input name="disc_statement19_l" type="radio" value="1"/></td>
								<td><input name="disc_statement19_m" type="radio" value="1"/></td>
								<td>Menunjukkan Rasa Hormat</td>
							</tr>
							<tr>
								<td><input name="disc_statement19_l" type="radio" value="2"/></td>
								<td><input name="disc_statement19_m" type="radio" value="2"/></td>
								<td>Pelopor, Perintis, Giat, Mau Berusaha</td>
							</tr>
							<tr>
								<td><input name="disc_statement19_l" type="radio" value="3"/></td>
								<td><input name="disc_statement19_m" type="radio" value="3"/></td>
								<td>Optimis, Pandangan Positif</td>
							</tr>
							<tr>
								<td><input name="disc_statement19_l" type="radio" value="4"/></td>
								<td><input name="disc_statement19_m" type="radio" value="4"/></td>
								<td>Selalu Siap Untuk Membantu</td>
							</tr>
						</table>
					</div>
					<div style="border:1px solid #e1e1e1;border-radius:5px;">
						<div style="position:absolute;text-align:right;width: 92%;padding:top:5px;"><span style="padding:10px;background-color:#8dc43f;color:#fff;">#20</span></div>
						<table class="test">
							<tr class="header">
								<td>M</td>
								<td>L</td>
								<td>&nbsp;</td>
							</tr>
							<tr>
								<td><input name="disc_statement20_l" type="radio" value="1"/></td>
								<td><input name="disc_statement20_m" type="radio" value="1"/></td>
								<td>Dapat Berargumentasi</td>
							</tr>
							<tr>
								<td><input name="disc_statement20_l" type="radio" value="2"/></td>
								<td><input name="disc_statement20_m" type="radio" value="2"/></td>
								<td>Fleksibel, Mudah Beradaptasi</td>
							</tr>
							<tr>
								<td><input name="disc_statement20_l" type="radio" value="3"/></td>
								<td><input name="disc_statement20_m" type="radio" value="3"/></td>
								<td>Tak Peduli, Acuh tak Acuh, Tidak Perhatian</td>
							</tr>
							<tr>
								<td><input name="disc_statement20_l" type="radio" value="4"/></td>
								<td><input name="disc_statement20_m" type="radio" value="4"/></td>
								<td>Riang, Tiada yang Difikirkan Sama Sekali</td>
							</tr>
						</table>
					</div>
					<div style="border:1px solid #e1e1e1;border-radius:5px;">
						<div style="position:absolute;text-align:right;width: 92%;padding:top:5px;"><span style="padding:10px;background-color:#8dc43f;color:#fff;">#21</span></div>
						<table class="test">
							<tr class="header">
								<td>M</td>
								<td>L</td>
								<td>&nbsp;</td>
							</tr>
							<tr>
								<td><input name="disc_statement21_l" type="radio" value="1"/></td>
								<td><input name="disc_statement21_m" type="radio" value="1"/></td>
								<td>Dapat Dipercaya, Percaya Kepada Orang Lain</td>
							</tr>
							<tr>
								<td><input name="disc_statement21_l" type="radio" value="2"/></td>
								<td><input name="disc_statement21_m" type="radio" value="2"/></td>
								<td>Mudah Puas, Selalu Merasa Cukup</td>
							</tr>
							<tr>
								<td><input name="disc_statement21_l" type="radio" value="3"/></td>
								<td><input name="disc_statement21_m" type="radio" value="3"/></td>
								<td>Selalu Pisitif, Tidak Diragukan</td>
							</tr>
							<tr>
								<td><input name="disc_statement21_l" type="radio" value="4"/></td>
								<td><input name="disc_statement21_m" type="radio" value="4"/></td>
								<td>Tenang Pendiam</td>
							</tr>
						</table>
					</div>
					
					<a href="#" class="tablinks" onclick="showStuff('sheet8', 'sheet1', 'sheet2', 'sheet3', 'sheet4', 'sheet5', 'sheet6', 'sheet7', 'sheet9')" style="margin:3px;padding: 11px;color: #fff;background-color: #8dc43f;border: 1px solid #8dc43f;cursor: pointer;float:right;">Next<i class="fa fa-angle-right" style="margin-left:10px;"></i></a>
					<a href="#" class="tablinks" onclick="showStuff('sheet6', 'sheet1', 'sheet2', 'sheet3', 'sheet4', 'sheet5', 'sheet7', 'sheet8', 'sheet9')" style="margin:3px;padding: 11px;color: #fff;background-color: #8dc43f;border: 1px solid #8dc43f;cursor: pointer;float:right;"><i class="fa fa-angle-left" style="margin-right:10px;"></i>Prev</a>			
				</div>
				<div style="margin:20px;" id="sheet8" class="tabcontent">
					<div style="text-align:right">Pernyataan No. 22 - 24</div>				
					<div style="border:1px solid #e1e1e1;border-radius:5px;">
						<div style="position:absolute;text-align:right;width: 92%;padding:top:5px;"><span style="padding:10px;background-color:#8dc43f;color:#fff;">#22</span></div>
						<table class="test">
							<tr class="header">
								<td>M</td>
								<td>L</td>
								<td>&nbsp;</td>
							</tr>
							<tr>
								<td><input name="disc_statement22_l" type="radio" value="1"/></td>
								<td><input name="disc_statement22_m" type="radio" value="1"/></td>
								<td>Mudah Bergaul, Suka Berteman</td>
							</tr>
							<tr>
								<td><input name="disc_statement22_l" type="radio" value="2"/></td>
								<td><input name="disc_statement22_m" type="radio" value="2"/></td>
								<td>Berbudaya, Memiliki Banyak Pengetahuan</td>
							</tr>
							<tr>
								<td><input name="disc_statement22_l" type="radio" value="3"/></td>
								<td><input name="disc_statement22_m" type="radio" value="3"/></td>
								<td>Bersemangat, Giat</td>
							</tr>
							<tr>
								<td><input name="disc_statement22_l" type="radio" value="4"/></td>
								<td><input name="disc_statement22_m" type="radio" value="4"/></td>
								<td>Toleransi, Tidak Tegas</td>
							</tr>
						</table>
					</div>
					<div style="border:1px solid #e1e1e1;border-radius:5px;">
						<div style="position:absolute;text-align:right;width: 92%;padding:top:5px;"><span style="padding:10px;background-color:#8dc43f;color:#fff;">#23</span></div>
						<table class="test">
							<tr class="header">
								<td>M</td>
								<td>L</td>
								<td>&nbsp;</td>
							</tr>
							<tr>
								<td><input name="disc_statement23_l" type="radio" value="1"/></td>
								<td><input name="disc_statement23_m" type="radio" value="1"/></td>
								<td>Menyenangkan, Ramah</td>
							</tr>
							<tr>
								<td><input name="disc_statement23_l" type="radio" value="2"/></td>
								<td><input name="disc_statement23_m" type="radio" value="2"/></td>
								<td>Teliti, Akurat</td>
							</tr>
							<tr>
								<td><input name="disc_statement23_l" type="radio" value="3"/></td>
								<td><input name="disc_statement23_m" type="radio" value="3"/></td>
								<td>Terus Terang, Bicara Bebas</td>
							</tr>
							<tr>
								<td><input name="disc_statement23_l" type="radio" value="4"/></td>
								<td><input name="disc_statement23_m" type="radio" value="4"/></td>
								<td>Terkendali, Emosi yang Terkendali</td>
							</tr>
						</table>
					</div>
					<div style="border:1px solid #e1e1e1;border-radius:5px;">
						<div style="position:absolute;text-align:right;width: 92%;padding:top:5px;"><span style="padding:10px;background-color:#8dc43f;color:#fff;">#24</span></div>
						<table class="test">
							<tr class="header">
								<td>M</td>
								<td>L</td>
								<td>&nbsp;</td>
							</tr>
							<tr>
								<td><input name="disc_statement24_l" type="radio" value="1"/></td>
								<td><input name="disc_statement24_m" type="radio" value="1"/></td>
								<td>Resah, Tidak Bisa Santai</td>
							</tr>
							<tr>
								<td><input name="disc_statement24_l" type="radio" value="2"/></td>
								<td><input name="disc_statement24_m" type="radio" value="2"/></td>
								<td>Baik Hati, Ramah</td>
							</tr>
							<tr>
								<td><input name="disc_statement24_l" type="radio" value="3"/></td>
								<td><input name="disc_statement24_m" type="radio" value="3"/></td>
								<td>Populer, Disukai Banyak Orang</td>
							</tr>
							<tr>
								<td><input name="disc_statement24_l" type="radio" value="4"/></td>
								<td><input name="disc_statement24_m" type="radio" value="4"/></td>
								<td>Rapi, Teratur</td>
							</tr>
						</table>
					</div>
					
					<a href="#" class="tablinks" onclick="showStuff('sheet9', 'sheet1', 'sheet2', 'sheet3', 'sheet4', 'sheet5', 'sheet6', 'sheet7', 'sheet8')" style="margin:3px;padding: 11px;color: #fff;background-color: #8dc43f;border: 1px solid #8dc43f;cursor: pointer;float:right;">Next<i class="fa fa-angle-right" style="margin-left:10px;"></i></a>
					<a href="#" class="tablinks" onclick="showStuff('sheet7', 'sheet1', 'sheet2', 'sheet3', 'sheet4', 'sheet5', 'sheet6', 'sheet8', 'sheet9')" style="margin:3px;padding: 11px;color: #fff;background-color: #8dc43f;border: 1px solid #8dc43f;cursor: pointer;float:right;"><i class="fa fa-angle-left" style="margin-right:10px;"></i>Prev</a>			
				</div>
				<div style="margin:20px;" id="sheet9" class="tabcontent">
					<h2>DESKRIPSIKAN DIRI ANDA</h2>	
					<div>
						<h5>Instruction :</h5>
						<p>
							Anda diminta untuk membuat 20 kalimat yang diawali dengan kata "Saya", yang isinya mendeskripsikan tentang keadaan diri Anda. Anda dapat menggambarkan kelebihan
							-kelebihan ataupun kekurangan-kekurangan diri Anda, hal-halyang Anda sukai ataupun hal-hal yang ingin Anda capai dan sebagainya.
						</p>
						<p>
							Anda tidak boleh mendeskripsikan ciri-ciri fisik atau data-data statistik Anda, misalnya: "<span style="font-weight:bold">Saya Tinggi</span>","<span style="font-weight:bold">Saya Berambut Hitam</span>","<span style="font-weight:bold">Saya Lahir di Jakarta</span>".
						</p>
					</div>
					<div style="width:100%;">
						<div style="width:50%;float:left;">
							<div style="width:100%;float:left;">
								<label style="float:left;width:5%;">1.</label> 
								<input name="statement1" type="text" style="float:left;width:80%;"/>
							</div>
							<div style="width:100%;float:left;">
								<label style="float:left;width:5%;">2.</label> 
								<input name="statement2" type="text" style="float:left;width:80%;"/>
							</div>
							<div style="width:100%;float:left;">
								<label style="float:left;width:5%;">3.</label> 
								<input name="statement3" type="text" style="float:left;width:80%;"/>
							</div>
							<div style="width:100%;float:left;">
								<label style="float:left;width:5%;">4.</label> 
								<input name="statement4" type="text" style="float:left;width:80%;"/>
							</div>
							<div style="width:100%;float:left;">
								<label style="float:left;width:5%;">5.</label> 
								<input name="statement5" type="text" style="float:left;width:80%;"/>
							</div>
							<div style="width:100%;float:left;">
								<label style="float:left;width:5%;">6.</label> 
								<input name="statement6" type="text" style="float:left;width:80%;"/>
							</div>
							<div style="width:100%;float:left;">
								<label style="float:left;width:5%;">7.</label> 
								<input name="statement7" type="text" style="float:left;width:80%;"/>
							</div>
							<div style="width:100%;float:left;">
								<label style="float:left;width:5%;">8.</label> 
								<input name="statement8" type="text" style="float:left;width:80%;"/>
							</div>
							<div style="width:100%;float:left;">
								<label style="float:left;width:5%;">9.</label> 
								<input name="statement9" type="text" style="float:left;width:80%;"/>
							</div>
							<div style="width:100%;float:left;">
								<label style="float:left;width:5%;">10.</label> 
								<input name="statement10" type="text" style="float:left;width:80%;"/>
							</div>
						</div>
						<div style="width:50%;float:left;">
							<div style="width:100%;float:left;">
								<label style="float:left;width:5%;">11.</label> 
								<input name="statement11" type="text" style="float:left;width:80%;"/>
							</div>
							<div style="width:100%;float:left;">
								<label style="float:left;width:5%;">12.</label> 
								<input name="statement12" type="text" style="float:left;width:80%;"/>
							</div>
							<div style="width:100%;float:left;">
								<label style="float:left;width:5%;">13.</label> 
								<input name="statement13" type="text" style="float:left;width:80%;"/>
							</div>
							<div style="width:100%;float:left;">
								<label style="float:left;width:5%;">14.</label> 
								<input name="statement14" type="text" style="float:left;width:80%;"/>
							</div>
							<div style="width:100%;float:left;">
								<label style="float:left;width:5%;">15.</label> 
								<input name="statement15" type="text" style="float:left;width:80%;"/>
							</div>
							<div style="width:100%;float:left;">
								<label style="float:left;width:5%;">16.</label> 
								<input name="statement16" type="text" style="float:left;width:80%;"/>
							</div>
							<div style="width:100%;float:left;">
								<label style="float:left;width:5%;">17.</label> 
								<input name="statement17" type="text" style="float:left;width:80%;"/>
							</div>
							<div style="width:100%;float:left;">
								<label style="float:left;width:5%;">18.</label> 
								<input name="statement18" type="text" style="float:left;width:80%;"/>
							</div>
							<div style="width:100%;float:left;">
								<label style="float:left;width:5%;">19.</label> 
								<input name="statement19" type="text" style="float:left;width:80%;"/>
							</div>
							<div style="width:100%;float:left;">
								<label style="float:left;width:5%;">20.</label> 
								<input name="statement20" type="text" style="float:left;width:80%;"/>
							</div>
						</div>
					</div>
					<hr/>
					<button type="submit" class="tablinks" style="margin:3px;padding: 15px;color: #fff;background-color: #8dc43f;border: 1px solid #8dc43f;cursor: pointer;float:right;">Submit<i class="fa fa-send" style="margin-left:10px;"></i></button>
					<a href="#" class="tablinks" onclick="showStuff('sheet8', 'sheet1', 'sheet2', 'sheet3', 'sheet4', 'sheet5', 'sheet6', 'sheet7', 'sheet9')" style="margin:3px;padding: 11px;color: #fff;background-color: #8dc43f;border: 1px solid #8dc43f;cursor: pointer;float:right;"><i class="fa fa-angle-left" style="margin-right:10px;"></i>Prev</a>			
				</div>
							
				<?php echo form_close();?>
			</div>
			<div class="clearfix"></div>
</section>
			