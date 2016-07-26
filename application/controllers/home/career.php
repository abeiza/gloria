<?php
	if(!defined('BASEPATH'))exit('No direct script access allowed');
	
	class Career extends CI_Controller{
		function __construct(){
			parent::__construct();
		}
		
		function index(){
			$this->list_career();
		}
		
		function send_email(){
		$config = array(
					'protocol' => 'smtp',
					'smtp_host' => 'ssl://smtp.gmail.com',
					'smtp_port' => 465,
					'smtp_user' => 'evan.abeiza@gmail.com', // change it to yours
					'smtp_pass' => 'satria3van164', // change it to yours
					'mailtype' => 'html',
					'charset'   => 'iso-8859-1',
					'wordwrap' => TRUE
				  ); 
				  
	  		    /*$config['protocol'] = 'mail';
				$config['smtp_host'] = 'http://purbasari.com:2095/';
				$config['smtp_port'] = '25';
				$config['smtp_user'] = 'it.mis@goc.co.id';
				$config['smtp_pass'] = 'user1234';
				*/
				
				$this->load->library('email',$config);
				$this->email->set_newline("\r\n");
				$this->email->from('evan.abeiza@gmail.com');
				$this->email->to('it.mis@goc.co.id');


				$this->email->subject("test");
				$this->email->message("message");

				$result = $this->email->send();
				

				if ($result) {
					echo  $result;

				}
				else{
					echo $this->email->print_debugger();
				}
		}
		
		function form_applicant_personal($id){
			$data['id_career']=$this->uri->segment(4);
			$q = $this->db->query("select career_title from gocweb_career where career_id='".$this->uri->segment(4)."'");
			foreach($q->result() as $db){
				$data['nama_career'] = $db->career_title;
			}
			$data['menu'] = $this->db->query("select menu_id, menu_name, menu_url from gocweb_menu order by menu_id asc");
			$q = $this->db->query("select setting_logo from gocweb_setting");
			foreach($q->result() as $db){
				$data['logo'] = $db->setting_logo;
			}
			$this->load->view('front/others/head');
			//$this->load->view('front/others/body_start');
			//$this->load->view('front/others/header',$header);
			//$this->load->view('front/career/header_title_application');
			$this->load->view('front/career/job_applicant',$data);
			$this->load->view('front/others/footer');
			$this->load->view('front/others/body_end');
		}
		
		function proses_upload($id){
			$this->load->model('model_back');
			//insert_header
			
			$this->form_validation->set_rules("pribadi_nama_lengkap","Nama Lengkap","required");
			$this->form_validation->set_rules("pribadi_nama_panggilan","Nama Panggilan","required");
			$this->form_validation->set_rules("pribadi_jk","Jenis Kelamin","required");
			$this->form_validation->set_rules("pribadi_alamat","Alamat","required");
			$this->form_validation->set_rules("pribadi_telp","Telp","");
			$this->form_validation->set_rules("pribadi_hp","No. Hp","required");
			$this->form_validation->set_rules("pribadi_email","Email","required");
			$this->form_validation->set_rules("pribadi_tempat","Tempat Lahir","required");
			$this->form_validation->set_rules("pribadi_tgl_lahir","Tanggal Lahir","required");
			$this->form_validation->set_rules("pribadi_gol_dar","Golongan Darah","");
			$this->form_validation->set_rules("pribadi_pendidikan","Pendidikan","required");
			$this->form_validation->set_rules("pribadi_tgl_lulus","Tgl Kelulusan","");
			$this->form_validation->set_rules("pribadi_agama","Agama","required");
			$this->form_validation->set_rules("pribadi_suku","Suku","required");
			$this->form_validation->set_rules("pribadi_status","Status","required");
			$this->form_validation->set_rules("pribadi_warganegara","Warganegara","required");
			$this->form_validation->set_rules("pribadi_berat","Berat","required");
			$this->form_validation->set_rules("pribadi_tinggi","Tinggi","required");
			$this->form_validation->set_rules("pribadi_type_iden","Jenis Identitas","required");
			$this->form_validation->set_rules("pribadi_no_iden","No. Identitas","required");
			$this->form_validation->set_rules("keluarga_dari_brp","No. Identitas","required");
			
			$this->form_validation->set_rules("keluarga_rumah","","");
			$this->form_validation->set_rules("keluarga_rumah_desc","","");
			$this->form_validation->set_rules("keluarga_anak_ke","","");
			$this->form_validation->set_rules("keluarga_dari_brp","","");
			$this->form_validation->set_rules("keluarga_ayah_nama","","");
			$this->form_validation->set_rules("keluarga_ayah_usia","","");
			$this->form_validation->set_rules("keluarga_ayah_pendidikan","","");
			$this->form_validation->set_rules("keluarga_ayah_pekerjaan","","");
			$this->form_validation->set_rules("keluarga_ibu_nama","","");
			$this->form_validation->set_rules("keluarga_ibu_usia","","");
			$this->form_validation->set_rules("keluarga_ibu_pendidikan","","");
			$this->form_validation->set_rules("keluarga_ibu_pekerjaan","","");
			$this->form_validation->set_rules("keluarga_alamat_ortu","","");
			$this->form_validation->set_rules("keluarga_telp_ortu","","");
			$this->form_validation->set_rules("keluarga_saudara_satu_status","","");
			$this->form_validation->set_rules("keluarga_saudara_satu_nama","","");
			$this->form_validation->set_rules("keluarga_saudara_satu_usia","","");
			$this->form_validation->set_rules("keluarga_saudara_satu_pendidikan","","");
			$this->form_validation->set_rules("keluarga_saudara_satu_pekerjaan","","");
			
			$this->form_validation->set_rules("keluarga_saudara_dua_status","","");
			$this->form_validation->set_rules("keluarga_saudara_dua_nama","","");
			$this->form_validation->set_rules("keluarga_saudara_dua_usia","","");
			$this->form_validation->set_rules("keluarga_saudara_dua_pendidikan","","");
			$this->form_validation->set_rules("keluarga_saudara_dua_pekerjaan","","");
			
			$this->form_validation->set_rules("keluarga_saudara_tiga_status","","");
			$this->form_validation->set_rules("keluarga_saudara_tiga_nama","","");
			$this->form_validation->set_rules("keluarga_saudara_tiga_usia","","");
			$this->form_validation->set_rules("keluarga_saudara_tiga_pendidikan","","");
			$this->form_validation->set_rules("keluarga_saudara_tiga_pekerjaan","","");
			
			$this->form_validation->set_rules("keluarga_saudara_empat_status","","");
			$this->form_validation->set_rules("keluarga_saudara_empat_nama","","");
			$this->form_validation->set_rules("keluarga_saudara_empat_usia","","");
			$this->form_validation->set_rules("keluarga_saudara_empat_pendidikan","","");
			$this->form_validation->set_rules("keluarga_saudara_empat_pekerjaan","","");
			
			$this->form_validation->set_rules("keluarga_saudara_lima_status","","");
			$this->form_validation->set_rules("keluarga_saudara_lima_nama","","");
			$this->form_validation->set_rules("keluarga_saudara_lima_usia","","");
			$this->form_validation->set_rules("keluarga_saudara_lima_pendidikan","","");
			$this->form_validation->set_rules("keluarga_saudara_lima_pekerjaan","","");
			
			$this->form_validation->set_rules("keluarga_pasangan_nama","","");
			$this->form_validation->set_rules("keluarga_pasangan_usia","","");
			$this->form_validation->set_rules("keluarga_pasangan_pendidikan","","");
			$this->form_validation->set_rules("keluarga_pasangan_pekerjaan","","");
			
			$this->form_validation->set_rules("keluarga_anak_satu_nama","","");
			$this->form_validation->set_rules("keluarga_anak_satu_usia","","");
			$this->form_validation->set_rules("keluarga_anak_satu_pendidikan","","");
			$this->form_validation->set_rules("keluarga_anak_satu_pekerjaan","","");
			
			$this->form_validation->set_rules("keluarga_anak_dua_nama","","");
			$this->form_validation->set_rules("keluarga_anak_dua_usia","","");
			$this->form_validation->set_rules("keluarga_anak_dua_pendidikan","","");
			$this->form_validation->set_rules("keluarga_anak_dua_pekerjaan","","");
			
			$this->form_validation->set_rules("keluarga_anak_tiga_nama","","");
			$this->form_validation->set_rules("keluarga_anak_tiga_usia","","");
			$this->form_validation->set_rules("keluarga_anak_tiga_pendidikan","","");
			$this->form_validation->set_rules("keluarga_anak_tiga_pekerjaan","","");
			
			$this->form_validation->set_rules("keluarga_darurat_nama","","");
			$this->form_validation->set_rules("keluarga_darurat_hubungan","","");
			$this->form_validation->set_rules("keluarga_darurat_alamat","","");
			
			$this->form_validation->set_rules("pendidikan_nama_sekolah_sd","","");
			$this->form_validation->set_rules("pendidikan_kota_sekolah_sd","","");
			$this->form_validation->set_rules("pendidikan_tahun_masuk_sd","","");
			$this->form_validation->set_rules("pendidikan_tahun_keluar_sd","","");
			$this->form_validation->set_rules("pendidikan_jurusan_sd","","");
			$this->form_validation->set_rules("pendidikan_nem_ipk_sd","","");
			
			$this->form_validation->set_rules("pendidikan_nama_sekolah_smp","","");
			$this->form_validation->set_rules("pendidikan_kota_sekolah_smp","","");
			$this->form_validation->set_rules("pendidikan_tahun_masuk_smp","","");
			$this->form_validation->set_rules("pendidikan_tahun_keluar_smp","","");
			$this->form_validation->set_rules("pendidikan_jurusan_smp","","");
			$this->form_validation->set_rules("pendidikan_nem_ipk_smp","","");
			
			$this->form_validation->set_rules("pendidikan_nama_sekolah_smu","","");
			$this->form_validation->set_rules("pendidikan_kota_sekolah_smu","","");
			$this->form_validation->set_rules("pendidikan_tahun_masuk_smu","","");
			$this->form_validation->set_rules("pendidikan_tahun_keluar_smu","","");
			$this->form_validation->set_rules("pendidikan_jurusan_smu","","");
			$this->form_validation->set_rules("pendidikan_nem_ipk_smu","","");
			
			$this->form_validation->set_rules("pendidikan_nama_sekolah_univ","","");
			$this->form_validation->set_rules("pendidikan_kota_sekolah_univ","","");
			$this->form_validation->set_rules("pendidikan_tahun_masuk_univ","","");
			$this->form_validation->set_rules("pendidikan_tahun_keluar_univ","","");
			$this->form_validation->set_rules("pendidikan_jurusan_univ","","");
			$this->form_validation->set_rules("pendidikan_nem_ipk_univ","","");
			
			$this->form_validation->set_rules("pendidikan_nama_sekolah_pasca","","");
			$this->form_validation->set_rules("pendidikan_kota_sekolah_pasca","","");
			$this->form_validation->set_rules("pendidikan_tahun_masuk_pasca","","");
			$this->form_validation->set_rules("pendidikan_tahun_keluar_pasca","","");
			$this->form_validation->set_rules("pendidikan_jurusan_pasca","","");
			$this->form_validation->set_rules("pendidikan_nem_ipk_pasca","","");
			
			$this->form_validation->set_rules("pendidikan_ekstra_satu_nama","","");
			$this->form_validation->set_rules("pendidikan_ekstra_satu_tahun","","");
			$this->form_validation->set_rules("pendidikan_ekstra_satu_tempat","","");
			$this->form_validation->set_rules("pendidikan_ekstra_satu_sertifikat","","");
			
			$this->form_validation->set_rules("pendidikan_ekstra_dua_nama","","");
			$this->form_validation->set_rules("pendidikan_ekstra_dua_tahun","","");
			$this->form_validation->set_rules("pendidikan_ekstra_dua_tempat","","");
			$this->form_validation->set_rules("pendidikan_ekstra_dua_sertifikat","","");
			
			$this->form_validation->set_rules("pendidikan_ekstra_tiga_nama","","");
			$this->form_validation->set_rules("pendidikan_ekstra_tiga_tahun","","");
			$this->form_validation->set_rules("pendidikan_ekstra_tiga_tempat","","");
			$this->form_validation->set_rules("pendidikan_ekstra_tiga_sertifikat","","");
			
			$this->form_validation->set_rules("pendidikan_aktivitas_satu_nama","","");
			$this->form_validation->set_rules("pendidikan_aktivitas_satu_tahun","","");
			$this->form_validation->set_rules("pendidikan_aktivitas_satu_tempat","","");
			$this->form_validation->set_rules("pendidikan_aktivitas_satu_sertifikat","","");
			
			$this->form_validation->set_rules("pendidikan_aktivitas_dua_nama","","");
			$this->form_validation->set_rules("pendidikan_aktivitas_dua_tahun","","");
			$this->form_validation->set_rules("pendidikan_aktivitas_dua_tempat","","");
			$this->form_validation->set_rules("pendidikan_aktivitas_dua_sertifikat","","");
			
			$this->form_validation->set_rules("pendidikan_aktivitas_tiga_nama","","");
			$this->form_validation->set_rules("pendidikan_aktivitas_tiga_tahun","","");
			$this->form_validation->set_rules("pendidikan_aktivitas_tiga_tempat","","");
			$this->form_validation->set_rules("pendidikan_aktivitas_tiga_sertifikat","","");
			
			$this->form_validation->set_rules("pendidikan_prestasi_satu_nama","","");
			$this->form_validation->set_rules("pendidikan_prestasi_satu_tahun","","");
			$this->form_validation->set_rules("pendidikan_prestasi_dua_nama","","");
			$this->form_validation->set_rules("pendidikan_prestasi_dua_tahun","","");
			$this->form_validation->set_rules("pendidikan_prestasi_tiga_nama","","");
			$this->form_validation->set_rules("pendidikan_prestasi_tiga_tahun","","");
			
			$this->form_validation->set_rules("pendidikan_pertanyaan_satu","","");
			$this->form_validation->set_rules("pendidikan_pertanyaan_dua","","");
			$this->form_validation->set_rules("pendidikan_judul_karya","","");
			$this->form_validation->set_rules("pendidikan_tahun_karya","","");
			$this->form_validation->set_rules("pendidikan_topik_karya","","");
			
			$this->form_validation->set_rules("pendidikan_bahasa_satu","","");
			$this->form_validation->set_rules("pendidikan_bahasa_satu_menulis","","");
			$this->form_validation->set_rules("pendidikan_bahasa_satu_membaca","","");
			$this->form_validation->set_rules("pendidikan_bahasa_satu_berbicara","","");
			
			$this->form_validation->set_rules("pendidikan_bahasa_dua","","");
			$this->form_validation->set_rules("pendidikan_bahasa_dua_menulis","","");
			$this->form_validation->set_rules("pendidikan_bahasa_dua_membaca","","");
			$this->form_validation->set_rules("pendidikan_bahasa_dua_berbicara","","");
			
			$this->form_validation->set_rules("pendidikan_bahasa_tiga","","");
			$this->form_validation->set_rules("pendidikan_bahasa_tiga_menulis","","");
			$this->form_validation->set_rules("pendidikan_bahasa_tiga_membaca","","");
			$this->form_validation->set_rules("pendidikan_bahasa_tiga_berbicara","","");
			
			$this->form_validation->set_rules("pekerjaan_perusahaan_satu_lama","","");
			$this->form_validation->set_rules("pekerjaan_perusahaan_dua_lama","","");
			$this->form_validation->set_rules("pekerjaan_perusahaan_tiga_lama","","");
			$this->form_validation->set_rules("pekerjaan_perusahaan_satu_nama","","");
			$this->form_validation->set_rules("pekerjaan_perusahaan_dua_nama","","");
			$this->form_validation->set_rules("pekerjaan_perusahaan_tiga_nama","","");
			$this->form_validation->set_rules("pekerjaan_perusahaan_satu_alamat_telp","","");
			$this->form_validation->set_rules("pekerjaan_perusahaan_dua_alamat_telp","","");
			$this->form_validation->set_rules("pekerjaan_perusahaan_tiga_alamat_telp","","");
			$this->form_validation->set_rules("pekerjaan_perusahaan_satu_bidang","","");
			$this->form_validation->set_rules("pekerjaan_perusahaan_dua_bidang","","");
			$this->form_validation->set_rules("pekerjaan_perusahaan_tiga_bidang","","");
			$this->form_validation->set_rules("pekerjaan_perusahaan_satu_jabatan","","");
			$this->form_validation->set_rules("pekerjaan_perusahaan_dua_jabatan","","");
			$this->form_validation->set_rules("pekerjaan_perusahaan_tiga_jabatan","","");
			$this->form_validation->set_rules("pekerjaan_perusahaan_satu_nama_atasan","","");
			$this->form_validation->set_rules("pekerjaan_perusahaan_dua_nama_atasan","","");
			$this->form_validation->set_rules("pekerjaan_perusahaan_tiga_nama_atasan","","");
			$this->form_validation->set_rules("pekerjaan_perusahaan_satu_gapok","","");
			$this->form_validation->set_rules("pekerjaan_perusahaan_dua_gapok","","");
			$this->form_validation->set_rules("pekerjaan_perusahaan_tiga_gapok","","");
			$this->form_validation->set_rules("pekerjaan_perusahaan_satu_tunjangan","","");
			$this->form_validation->set_rules("pekerjaan_perusahaan_dua_tunjangan","","");
			$this->form_validation->set_rules("pekerjaan_perusahaan_tiga_tunjangan","","");
			$this->form_validation->set_rules("pekerjaan_perusahaan_satu_fasilitas","","");
			$this->form_validation->set_rules("pekerjaan_perusahaan_dua_fasilitas","","");
			$this->form_validation->set_rules("pekerjaan_perusahaan_tiga_fasilitas","","");
			$this->form_validation->set_rules("pekerjaan_perusahaan_satu_tugas","","");
			$this->form_validation->set_rules("pekerjaan_perusahaan_dua_tugas","","");
			$this->form_validation->set_rules("pekerjaan_perusahaan_tiga_tugas","","");
			$this->form_validation->set_rules("pekerjaan_perusahaan_satu_alasan","","");
			$this->form_validation->set_rules("pekerjaan_perusahaan_dua_alasan","","");
			$this->form_validation->set_rules("pekerjaan_perusahaan_tiga_alasan","","");
			$this->form_validation->set_rules("pekerjaan_pertanyaan_satu","","");
			$this->form_validation->set_rules("pekerjaan_perusahaan_lain_nama","","");
			$this->form_validation->set_rules("pekerjaan_lain_sebagai","","");
			$this->form_validation->set_rules("pekerjaan_lain_kapan","","");
			$this->form_validation->set_rules("pekerjaan_referensi_satu_nama","","");
			$this->form_validation->set_rules("pekerjaan_referensi_satu_jabatan","","");
			$this->form_validation->set_rules("pekerjaan_referensi_satu_alamat","","");
			$this->form_validation->set_rules("pekerjaan_referensi_satu_telp","","");
			$this->form_validation->set_rules("pekerjaan_referensi_dua_nama","","");
			$this->form_validation->set_rules("pekerjaan_referensi_dua_jabatan","","");
			$this->form_validation->set_rules("pekerjaan_referensi_dua_alamat","","");
			$this->form_validation->set_rules("pekerjaan_referensi_dua_telp","","");
			$this->form_validation->set_rules("pekerjaan_referensi_tiga_nama","","");
			$this->form_validation->set_rules("pekerjaan_referensi_tiga_jabatan","","");
			$this->form_validation->set_rules("pekerjaan_referensi_tiga_alamat","","");
			$this->form_validation->set_rules("pekerjaan_referensi_tiga_telp","","");
			$this->form_validation->set_rules("other_pertanyaan_a","","");
			$this->form_validation->set_rules("other_pertanyaan_b","","");
			$this->form_validation->set_rules("other_pertanyaan_c","","");
			$this->form_validation->set_rules("other_pertanyaan_d","","");
			$this->form_validation->set_rules("other_pertanyaan_e","","");
			$this->form_validation->set_rules("other_pertanyaan_f","","");
			$this->form_validation->set_rules("other_pertanyaan_g","","");
			$this->form_validation->set_rules("other_pertanyaan_h","","");
			$this->form_validation->set_rules("other_pertanyaan_i","","");
			$this->form_validation->set_rules("other_pertanyaan_j","","");
			$this->form_validation->set_rules("other_pertanyaan_k","","");
			$this->form_validation->set_rules("other_pertanyaan_l","","");
			$this->form_validation->set_rules("other_pertanyaan_m","","");
			$this->form_validation->set_rules("other_pertanyaan_n","","");
			$this->form_validation->set_rules("other_pertanyaan_o","","");
			$this->form_validation->set_rules("other_pertanyaan_p","","");
			$this->form_validation->set_rules("other_pertanyaan_q","","");
			$this->form_validation->set_rules("agree","","required");
			if (empty($_FILES['pict']['name']))
			{
				$this->form_validation->set_rules('pict', 'Pass Foto', 'required');
			}
			if ($this->input->post('keluarga_rumah') == 4)
			{
				$this->form_validation->set_rules('keluarga_rumah_desc', 'Desc Pemilikan Rumah', 'required');
				$this->form_validation->set_rules('keluarga_rumah', 'Status Rumah', 'required');
			}
			if($this->form_validation->run() == false)
			{
				//$id = $this->input->post('career_id');
				$this->form_applicant_personal($this->uri->segment(4));
			}
			else
			{
				$configu['upload_path'] = './apply/original/';
				$configu['upload_url'] = base_url().'apply/original/';
				$configu['allowed_types'] = 'gif|jpeg|jpg|png';
				$configu['max_size'] = '10000';
				$configu['max_width'] = '10000';
				$configu['max_height'] = '10000';
				
				$this->load->library('upload',$configu);
				
				if (!$this->upload->do_upload('pict'))
				{
					$error = array('error' => $this->upload->display_errors());
					$this->load->view('form_upload', $error);
				}
				else
				{
					$upload_data = $this->upload->data();
				
					$config1['image_library'] = 'GD2';
					$config1['source_image'] = $upload_data['full_path'];
					$config1['new_image'] = 'apply/thumb/'.$upload_data['file_name'];
					$config1['maintain_ratio'] = TRUE;
					$config1['width'] = 200;
					$config1['height'] = 200;

					$this->load->library('image_lib', $config1);

					if(!$this->image_lib->resize()){
						echo $this->image_lib->display_errors();
					}
					
					$data['resume_objectid'] = $this->model_back->getMaxKodelong('gocweb_resume_header', 'resume_objectid', 'APCR');
					$data['resume_jabatan'] = $this->input->post('career_id');
					$data['resume_tgl_isi'] = date('Y-m-d h:i:s');
					$data['resume_kode_lamaran'] = $this->input->post('career_id').date('ish_mdy');
					
					$insert_header = $this->model_back->get_insert('gocweb_resume_header',$data);
					
					//insert_personal
					$data1['kode_lamaran'] = $data['resume_kode_lamaran'];
					$data1['pribadi_foto'] = $upload_data['file_name'];
					$data1['pribadi_nama_lengkap'] = $this->input->post('pribadi_nama_lengkap');
					$data1['pribadi_nama_panggilan'] = $this->input->post('pribadi_nama_panggilan');
					$data1['pribadi_jk'] = $this->input->post('pribadi_jk');
					$data1['pribadi_alamat'] = $this->input->post('pribadi_alamat');
					$data1['pribadi_telp'] = $this->input->post('pribadi_telp');
					$data1['pribadi_hp'] = $this->input->post('pribadi_hp');
					$data1['pribadi_email'] = $this->input->post('pribadi_email');
					$data1['pribadi_tempat'] = $this->input->post('pribadi_tempat');
					$data1['pribadi_tgl_lahir'] = $this->input->post('pribadi_tgl_lahir');
					$data1['pribadi_gol_dar'] = $this->input->post('pribadi_gol_dar');
					$data1['pribadi_pendidikan'] = $this->input->post('pribadi_pendidikan');
					$data1['pribadi_tgl_lulus'] = $this->input->post('pribadi_tgl_lulus');
					$data1['pribadi_agama'] = $this->input->post('pribadi_agama');
					$data1['pribadi_suku'] = $this->input->post('pribadi_suku');
					$data1['pribadi_status'] = $this->input->post('pribadi_status');
					$data1['pribadi_warganegara'] = $this->input->post('pribadi_warganegara');
					$data1['pribadi_berat'] = $this->input->post('pribadi_berat');
					$data1['pribadi_tinggi'] = $this->input->post('pribadi_tinggi');
					$data1['pribadi_type_iden'] = $this->input->post('pribadi_type_iden');
					$data1['pribadi_no_iden'] = $this->input->post('pribadi_no_iden');
					
					$insert_personal = $this->model_back->get_insert('gocweb_resume_personal',$data1);
					
					$data2['kode_lamaran'] = $data['resume_kode_lamaran'];
					$data2['keluarga_rumah'] = $this->input->post('keluarga_rumah');
					$data2['keluarga_rumah_desc'] = $this->input->post('keluarga_rumah_desc');
					$data2['keluarga_anak_ke'] = $this->input->post('keluarga_anak_ke');
					$data2['keluarga_dari_brp'] = $this->input->post('keluarga_dari_brp');
					$data2['keluarga_ayah_nama'] = $this->input->post('keluarga_ayah_nama');
					$data2['keluarga_ayah_usia'] = $this->input->post('keluarga_ayah_usia');
					$data2['keluarga_ayah_pendidikan'] = $this->input->post('keluarga_ayah_pendidikan');
					$data2['keluarga_ayah_pekerjaan'] = $this->input->post('keluarga_ayah_pekerjaan');
					$data2['keluarga_ibu_nama'] = $this->input->post('keluarga_ibu_nama');
					$data2['keluarga_ibu_usia'] = $this->input->post('keluarga_ibu_usia');
					$data2['keluarga_ibu_pendidikan'] = $this->input->post('keluarga_ibu_pendidikan');
					$data2['keluarga_ibu_pekerjaan'] = $this->input->post('keluarga_ibu_pekerjaan');
					$data2['keluarga_alamat_ortu'] = $this->input->post('keluarga_alamat_ortu');
					$data2['keluarga_telp_ortu'] = $this->input->post('keluarga_telp_ortu');
					$data2['keluarga_saudara_satu_status'] = $this->input->post('keluarga_saudara_satu_status');
					$data2['keluarga_saudara_satu_nama'] = $this->input->post('keluarga_saudara_satu_nama');
					$data2['keluarga_saudara_satu_usia'] = $this->input->post('keluarga_saudara_satu_usia');
					$data2['keluarga_saudara_satu_pendidikan'] = $this->input->post('keluarga_saudara_satu_pendidikan');
					$data2['keluarga_saudara_satu_pekerjaan'] = $this->input->post('keluarga_saudara_satu_pekerjaan');
					$data2['keluarga_saudara_dua_status'] = $this->input->post('keluarga_saudara_dua_status');
					$data2['keluarga_saudara_dua_nama'] = $this->input->post('keluarga_saudara_dua_nama');
					$data2['keluarga_saudara_dua_usia'] = $this->input->post('keluarga_saudara_dua_usia');
					$data2['keluarga_saudara_dua_pendidikan'] = $this->input->post('keluarga_saudara_dua_pendidikan');
					$data2['keluarga_saudara_dua_pekerjaan'] = $this->input->post('keluarga_saudara_dua_pekerjaan');
					$data2['keluarga_saudara_tiga_status'] = $this->input->post('keluarga_saudara_tiga_status');
					$data2['keluarga_saudara_tiga_nama'] = $this->input->post('keluarga_saudara_tiga_nama');
					$data2['keluarga_saudara_tiga_usia'] = $this->input->post('keluarga_saudara_tiga_usia');
					$data2['keluarga_saudara_tiga_pendidikan'] = $this->input->post('keluarga_saudara_tiga_pendidikan');
					$data2['keluarga_saudara_tiga_pekerjaan'] = $this->input->post('keluarga_saudara_tiga_pekerjaan');
					$data2['keluarga_saudara_empat_status'] = $this->input->post('keluarga_saudara_empat_status');
					$data2['keluarga_saudara_empat_nama'] = $this->input->post('keluarga_saudara_empat_nama');
					$data2['keluarga_saudara_empat_usia'] = $this->input->post('keluarga_saudara_empat_usia');
					$data2['keluarga_saudara_empat_pendidikan'] = $this->input->post('keluarga_saudara_empat_pendidikan');
					$data2['keluarga_saudara_empat_pekerjaan'] = $this->input->post('keluarga_saudara_empat_pekerjaan');
					$data2['keluarga_saudara_lima_status'] = $this->input->post('keluarga_saudara_lima_status');
					$data2['keluarga_saudara_lima_nama'] = $this->input->post('keluarga_saudara_lima_nama');
					$data2['keluarga_saudara_lima_usia'] = $this->input->post('keluarga_saudara_lima_usia');
					$data2['keluarga_saudara_lima_pendidikan'] = $this->input->post('keluarga_saudara_lima_pendidikan');
					$data2['keluarga_saudara_lima_pekerjaan'] = $this->input->post('keluarga_saudara_lima_pekerjaan');
					$data2['keluarga_pasangan_nama'] = $this->input->post('keluarga_pasangan_nama');
					$data2['keluarga_pasangan_usia'] = $this->input->post('keluarga_pasangan_usia');
					$data2['keluarga_pasangan_pendidikan'] = $this->input->post('keluarga_pasangan_pendidikan');
					$data2['keluarga_pasangan_pekerjaan'] = $this->input->post('keluarga_pasangan_pekerjaan');
					$data2['keluarga_anak_satu_nama'] = $this->input->post('keluarga_anak_satu_nama');
					$data2['keluarga_anak_satu_usia'] = $this->input->post('keluarga_anak_satu_usia');
					$data2['keluarga_anak_satu_pendidikan'] = $this->input->post('keluarga_anak_satu_pendidikan');
					$data2['keluarga_anak_satu_pekerjaan'] = $this->input->post('keluarga_anak_satu_pekerjaan');
					$data2['keluarga_anak_dua_nama'] = $this->input->post('keluarga_anak_dua_nama');
					$data2['keluarga_anak_dua_usia'] = $this->input->post('keluarga_anak_dua_usia');
					$data2['keluarga_anak_dua_pendidikan'] = $this->input->post('keluarga_anak_dua_pendidikan');
					$data2['keluarga_anak_dua_pekerjaan'] = $this->input->post('keluarga_anak_dua_pekerjaan');
					$data2['keluarga_anak_tiga_nama'] = $this->input->post('keluarga_anak_tiga_nama');
					$data2['keluarga_anak_tiga_usia'] = $this->input->post('keluarga_anak_tiga_usia');
					$data2['keluarga_anak_tiga_pendidikan'] = $this->input->post('keluarga_anak_tiga_pendidikan');
					$data2['keluarga_anak_tiga_pekerjaan'] = $this->input->post('keluarga_anak_tiga_pekerjaan');
					$data2['keluarga_darurat_nama'] = $this->input->post('keluarga_darurat_nama');
					$data2['keluarga_darurat_hubungan'] = $this->input->post('keluarga_darurat_hubungan');
					$data2['keluarga_darurat_alamat'] = $this->input->post('keluarga_darurat_alamat');
					
					$insert_family = $this->model_back->get_insert('gocweb_resume_family',$data2);
					
					$data3['kode_lamaran'] = $data['resume_kode_lamaran'];
					$data3['pendidikan_nama_sekolah_sd'] = $this->input->post('pendidikan_nama_sekolah_sd');
					$data3['pendidikan_kota_sekolah_sd'] = $this->input->post('pendidikan_kota_sekolah_sd');
					$data3['pendidikan_tahun_masuk_sd'] = $this->input->post('pendidikan_tahun_masuk_sd');
					$data3['pendidikan_tahun_keluar_sd'] = $this->input->post('pendidikan_tahun_keluar_sd');
					$data3['pendidikan_jurusan_sd'] = $this->input->post('pendidikan_jurusan_sd');
					$data3['pendidikan_nem_ipk_sd'] = $this->input->post('pendidikan_nem_ipk_sd');
					$data3['pendidikan_nama_sekolah_smp'] = $this->input->post('pendidikan_nama_sekolah_smp');
					$data3['pendidikan_kota_sekolah_smp'] = $this->input->post('pendidikan_kota_sekolah_smp');
					$data3['pendidikan_tahun_masuk_smp'] = $this->input->post('pendidikan_tahun_masuk_smp');
					$data3['pendidikan_tahun_keluar_smp'] = $this->input->post('pendidikan_tahun_keluar_smp');
					$data3['pendidikan_jurusan_smp'] = $this->input->post('pendidikan_jurusan_smp');
					$data3['pendidikan_nem_ipk_smp'] = $this->input->post('pendidikan_nem_ipk_smp');
					$data3['pendidikan_nama_sekolah_smu'] = $this->input->post('pendidikan_nama_sekolah_smu');
					$data3['pendidikan_kota_sekolah_smu'] = $this->input->post('pendidikan_kota_sekolah_smu');
					$data3['pendidikan_tahun_masuk_smu'] = $this->input->post('pendidikan_tahun_masuk_smu');
					$data3['pendidikan_tahun_keluar_smu'] = $this->input->post('pendidikan_tahun_keluar_smu');
					$data3['pendidikan_jurusan_smu'] = $this->input->post('pendidikan_jurusan_smu');
					$data3['pendidikan_nem_ipk_smu'] = $this->input->post('pendidikan_nem_ipk_smu');
					$data3['pendidikan_nama_sekolah_univ'] = $this->input->post('pendidikan_nama_sekolah_univ');
					$data3['pendidikan_kota_sekolah_univ'] = $this->input->post('pendidikan_kota_sekolah_univ');
					$data3['pendidikan_tahun_masuk_univ'] = $this->input->post('pendidikan_tahun_masuk_univ');
					$data3['pendidikan_tahun_keluar_univ'] = $this->input->post('pendidikan_tahun_keluar_univ');
					$data3['pendidikan_jurusan_univ'] = $this->input->post('pendidikan_jurusan_univ');
					$data3['pendidikan_nem_ipk_univ'] = $this->input->post('pendidikan_nem_ipk_univ');
					$data3['pendidikan_nama_sekolah_pasca'] = $this->input->post('pendidikan_nama_sekolah_pasca');
					$data3['pendidikan_kota_sekolah_pasca'] = $this->input->post('pendidikan_kota_sekolah_pasca');
					$data3['pendidikan_tahun_masuk_pasca'] = $this->input->post('pendidikan_tahun_masuk_pasca');
					$data3['pendidikan_tahun_keluar_pasca'] = $this->input->post('pendidikan_tahun_keluar_pasca');
					$data3['pendidikan_jurusan_pasca'] = $this->input->post('pendidikan_jurusan_pasca');
					$data3['pendidikan_nem_ipk_pasca'] = $this->input->post('pendidikan_nem_ipk_pasca');
					$data3['pendidikan_ekstra_satu_nama'] = $this->input->post('pendidikan_ekstra_satu_nama');
					$data3['pendidikan_ekstra_satu_tahun'] = $this->input->post('pendidikan_ekstra_satu_tahun');
					$data3['pendidikan_ekstra_satu_tempat'] = $this->input->post('pendidikan_ekstra_satu_tempat');
					$data3['pendidikan_ekstra_satu_sertifikat'] = $this->input->post('pendidikan_ekstra_satu_sertifikat');
					$data3['pendidikan_ekstra_dua_nama'] = $this->input->post('pendidikan_ekstra_dua_nama');
					$data3['pendidikan_ekstra_dua_tahun'] = $this->input->post('pendidikan_ekstra_dua_tahun');
					$data3['pendidikan_ekstra_dua_tempat'] = $this->input->post('pendidikan_ekstra_dua_tempat');
					$data3['pendidikan_ekstra_dua_sertifikat'] = $this->input->post('pendidikan_ekstra_dua_sertifikat');
					$data3['pendidikan_ekstra_tiga_nama'] = $this->input->post('pendidikan_ekstra_tiga_nama');
					$data3['pendidikan_ekstra_tiga_tahun'] = $this->input->post('pendidikan_ekstra_tiga_tahun');
					$data3['pendidikan_ekstra_tiga_tempat'] = $this->input->post('pendidikan_ekstra_tiga_tempat');
					$data3['pendidikan_ekstra_tiga_sertifikat'] = $this->input->post('pendidikan_ekstra_tiga_sertifikat');
					$data3['pendidikan_aktivitas_satu_nama'] = $this->input->post('pendidikan_aktivitas_satu_nama');
					$data3['pendidikan_aktivitas_satu_tahun'] = $this->input->post('pendidikan_aktivitas_satu_tahun');
					$data3['pendidikan_aktivitas_satu_tempat'] = $this->input->post('pendidikan_aktivitas_satu_tempat');
					$data3['pendidikan_aktivitas_satu_sertifikat'] = $this->input->post('pendidikan_aktivitas_satu_sertifikat');
					$data3['pendidikan_aktivitas_dua_nama'] = $this->input->post('pendidikan_aktivitas_dua_nama');
					$data3['pendidikan_aktivitas_dua_tahun'] = $this->input->post('pendidikan_aktivitas_dua_tahun');
					$data3['pendidikan_aktivitas_dua_tempat'] = $this->input->post('pendidikan_aktivitas_dua_tempat');
					$data3['pendidikan_aktivitas_dua_sertifikat'] = $this->input->post('pendidikan_aktivitas_dua_sertifikat');
					$data3['pendidikan_aktivitas_tiga_nama'] = $this->input->post('pendidikan_aktivitas_tiga_nama');
					$data3['pendidikan_aktivitas_tiga_tahun'] = $this->input->post('pendidikan_aktivitas_tiga_tahun');
					$data3['pendidikan_aktivitas_tiga_tempat'] = $this->input->post('pendidikan_aktivitas_tiga_tempat');
					$data3['pendidikan_aktivitas_tiga_sertifikat'] = $this->input->post('pendidikan_aktivitas_tiga_sertifikat');
					$data3['pendidikan_prestasi_satu_nama'] = $this->input->post('pendidikan_prestasi_satu_nama');
					$data3['pendidikan_prestasi_satu_tahun'] = $this->input->post('pendidikan_prestasi_satu_tahun');
					$data3['pendidikan_prestasi_dua_nama'] = $this->input->post('pendidikan_prestasi_dua_nama');
					$data3['pendidikan_prestasi_dua_tahun'] = $this->input->post('pendidikan_prestasi_dua_tahun');
					$data3['pendidikan_prestasi_tiga_nama'] = $this->input->post('pendidikan_prestasi_tiga_nama');
					$data3['pendidikan_prestasi_tiga_tahun'] = $this->input->post('pendidikan_prestasi_tiga_tahun');
					$data3['pendidikan_pertanyaan_satu'] = $this->input->post('pendidikan_pertanyaan_satu');
					$data3['pendidikan_pertanyaan_dua'] = $this->input->post('pendidikan_pertanyaan_dua');
					$data3['pendidikan_judul_karya'] = $this->input->post('pendidikan_judul_karya');
					$data3['pendidikan_tahun_karya'] = $this->input->post('pendidikan_tahun_karya');
					$data3['pendidikan_topik_karya'] = $this->input->post('pendidikan_topik_karya');
					$data3['pendidikan_bahasa_satu'] = $this->input->post('pendidikan_bahasa_satu');
					$data3['pendidikan_bahasa_satu_menulis'] = $this->input->post('pendidikan_bahasa_satu_menulis');
					$data3['pendidikan_bahasa_satu_membaca'] = $this->input->post('pendidikan_bahasa_satu_membaca');
					$data3['pendidikan_bahasa_satu_berbicara'] = $this->input->post('pendidikan_bahasa_satu_berbicara');
					$data3['pendidikan_bahasa_dua'] = $this->input->post('pendidikan_bahasa_dua');
					$data3['pendidikan_bahasa_dua_menulis'] = $this->input->post('pendidikan_bahasa_dua_menulis');
					$data3['pendidikan_bahasa_dua_membaca'] = $this->input->post('pendidikan_bahasa_dua_membaca');
					$data3['pendidikan_bahasa_dua_berbicara'] = $this->input->post('pendidikan_bahasa_dua_berbicara');
					$data3['pendidikan_bahasa_tiga'] = $this->input->post('pendidikan_bahasa_tiga');
					$data3['pendidikan_bahasa_tiga_menulis'] = $this->input->post('pendidikan_bahasa_tiga_menulis');
					$data3['pendidikan_bahasa_tiga_membaca'] = $this->input->post('pendidikan_bahasa_tiga_membaca');
					$data3['pendidikan_bahasa_tiga_berbicara'] = $this->input->post('pendidikan_bahasa_tiga_berbicara');
					
					$insert_education = $this->model_back->get_insert('gocweb_resume_education',$data3);
					
					$data4['kode_lamaran'] = $data['resume_kode_lamaran'];
					$data4['pekerjaan_perusahaan_satu_lama'] = $this->input->post('pekerjaan_perusahaan_satu_lama');
					$data4['pekerjaan_perusahaan_dua_lama'] = $this->input->post('pekerjaan_perusahaan_dua_lama');
					$data4['pekerjaan_perusahaan_tiga_lama'] = $this->input->post('pekerjaan_perusahaan_tiga_lama');
					$data4['pekerjaan_perusahaan_satu_nama'] = $this->input->post('pekerjaan_perusahaan_satu_nama');
					$data4['pekerjaan_perusahaan_dua_nama'] = $this->input->post('pekerjaan_perusahaan_dua_nama');
					$data4['pekerjaan_perusahaan_tiga_nama'] = $this->input->post('pekerjaan_perusahaan_tiga_nama');
					$data4['pekerjaan_perusahaan_satu_alamat_telp'] = $this->input->post('pekerjaan_perusahaan_satu_alamat_telp');
					$data4['pekerjaan_perusahaan_dua_alamat_telp'] = $this->input->post('pekerjaan_perusahaan_dua_alamat_telp');
					$data4['pekerjaan_perusahaan_tiga_alamat_telp'] = $this->input->post('pekerjaan_perusahaan_tiga_alamat_telp');
					$data4['pekerjaan_perusahaan_satu_bidang'] = $this->input->post('pekerjaan_perusahaan_satu_bidang');
					$data4['pekerjaan_perusahaan_dua_bidang'] = $this->input->post('pekerjaan_perusahaan_dua_bidang');
					$data4['pekerjaan_perusahaan_tiga_bidang'] = $this->input->post('pekerjaan_perusahaan_tiga_bidang');
					$data4['pekerjaan_perusahaan_satu_jabatan'] = $this->input->post('pekerjaan_perusahaan_satu_jabatan');
					$data4['pekerjaan_perusahaan_dua_jabatan'] = $this->input->post('pekerjaan_perusahaan_dua_jabatan');
					$data4['pekerjaan_perusahaan_tiga_jabatan'] = $this->input->post('pekerjaan_perusahaan_tiga_jabatan');
					$data4['pekerjaan_perusahaan_satu_nama_atasan'] = $this->input->post('pekerjaan_perusahaan_satu_nama_atasan');
					$data4['pekerjaan_perusahaan_dua_nama_atasan'] = $this->input->post('pekerjaan_perusahaan_dua_nama_atasan');
					$data4['pekerjaan_perusahaan_tiga_nama_atasan'] = $this->input->post('pekerjaan_perusahaan_tiga_nama_atasan');
					$data4['pekerjaan_perusahaan_satu_gapok'] = $this->input->post('pekerjaan_perusahaan_satu_gapok');
					$data4['pekerjaan_perusahaan_dua_gapok'] = $this->input->post('pekerjaan_perusahaan_dua_gapok');
					$data4['pekerjaan_perusahaan_tiga_gapok'] = $this->input->post('pekerjaan_perusahaan_tiga_gapok');
					$data4['pekerjaan_perusahaan_satu_tunjangan'] = $this->input->post('pekerjaan_perusahaan_satu_tunjangan');
					$data4['pekerjaan_perusahaan_dua_tunjangan'] = $this->input->post('pekerjaan_perusahaan_dua_tunjangan');
					$data4['pekerjaan_perusahaan_tiga_tunjangan'] = $this->input->post('pekerjaan_perusahaan_tiga_tunjangan');
					$data4['pekerjaan_perusahaan_satu_fasilitas'] = $this->input->post('pekerjaan_perusahaan_satu_fasilitas');
					$data4['pekerjaan_perusahaan_dua_fasilitas'] = $this->input->post('pekerjaan_perusahaan_dua_fasilitas');
					$data4['pekerjaan_perusahaan_tiga_fasilitas'] = $this->input->post('pekerjaan_perusahaan_tiga_fasilitas');
					$data4['pekerjaan_perusahaan_satu_tugas'] = $this->input->post('pekerjaan_perusahaan_satu_tugas');
					$data4['pekerjaan_perusahaan_dua_tugas'] = $this->input->post('pekerjaan_perusahaan_dua_tugas');
					$data4['pekerjaan_perusahaan_tiga_tugas'] = $this->input->post('pekerjaan_perusahaan_tiga_tugas');
					$data4['pekerjaan_perusahaan_satu_alasan'] = $this->input->post('pekerjaan_perusahaan_satu_alasan');
					$data4['pekerjaan_perusahaan_dua_alasan'] = $this->input->post('pekerjaan_perusahaan_dua_alasan');
					$data4['pekerjaan_perusahaan_tiga_alasan'] = $this->input->post('pekerjaan_perusahaan_tiga_alasan');
					$data4['pekerjaan_pertanyaan_satu'] = $this->input->post('pekerjaan_pertanyaan_satu');
					$data4['pekerjaan_perusahaan_lain_nama'] = $this->input->post('pekerjaan_perusahaan_lain_nama');
					$data4['pekerjaan_lain_sebagai'] = $this->input->post('pekerjaan_lain_sebagai');
					$data4['pekerjaan_lain_kapan'] = $this->input->post('pekerjaan_lain_kapan');
					$data4['pekerjaan_referensi_satu_nama'] = $this->input->post('pekerjaan_referensi_satu_nama');
					$data4['pekerjaan_referensi_satu_jabatan'] = $this->input->post('pekerjaan_referensi_satu_jabatan');
					$data4['pekerjaan_referensi_satu_alamat'] = $this->input->post('pekerjaan_referensi_satu_alamat');
					$data4['pekerjaan_referensi_satu_telp'] = $this->input->post('pekerjaan_referensi_satu_telp');
					$data4['pekerjaan_referensi_dua_nama'] = $this->input->post('pekerjaan_referensi_dua_nama');
					$data4['pekerjaan_referensi_dua_jabatan'] = $this->input->post('pekerjaan_referensi_dua_jabatan');
					$data4['pekerjaan_referensi_dua_alamat'] = $this->input->post('pekerjaan_referensi_dua_alamat');
					$data4['pekerjaan_referensi_dua_telp'] = $this->input->post('pekerjaan_referensi_dua_telp');
					$data4['pekerjaan_referensi_tiga_nama'] = $this->input->post('pekerjaan_referensi_tiga_nama');
					$data4['pekerjaan_referensi_tiga_jabatan'] = $this->input->post('pekerjaan_referensi_tiga_jabatan');
					$data4['pekerjaan_referensi_tiga_alamat'] = $this->input->post('pekerjaan_referensi_tiga_alamat');
					$data4['pekerjaan_referensi_tiga_telp'] = $this->input->post('pekerjaan_referensi_tiga_telp');
					
					$insert_experience = $this->model_back->get_insert('gocweb_resume_experience',$data4);
					
					$data5['kode_lamaran'] = $data['resume_kode_lamaran'];
					$data5['other_pertanyaan_a'] = $this->input->post('other_pertanyaan_a');
					$data5['other_pertanyaan_b'] = $this->input->post('other_pertanyaan_b');
					$data5['other_pertanyaan_c'] = $this->input->post('other_pertanyaan_c');
					$data5['other_pertanyaan_d'] = $this->input->post('other_pertanyaan_d');
					$data5['other_pertanyaan_e'] = $this->input->post('other_pertanyaan_e');
					$data5['other_pertanyaan_f'] = $this->input->post('other_pertanyaan_f');
					$data5['other_pertanyaan_g'] = $this->input->post('other_pertanyaan_g');
					$data5['other_pertanyaan_h'] = $this->input->post('other_pertanyaan_h');
					$data5['other_pertanyaan_i'] = $this->input->post('other_pertanyaan_i');
					$data5['other_pertanyaan_j'] = $this->input->post('other_pertanyaan_j');
					$data5['other_pertanyaan_k'] = $this->input->post('other_pertanyaan_k');
					$data5['other_pertanyaan_l'] = $this->input->post('other_pertanyaan_l');
					$data5['other_pertanyaan_m'] = $this->input->post('other_pertanyaan_m');
					$data5['other_pertanyaan_n'] = $this->input->post('other_pertanyaan_n');
					$data5['other_pertanyaan_o'] = $this->input->post('other_pertanyaan_o');
					$data5['other_pertanyaan_p'] = $this->input->post('other_pertanyaan_p');
					$data5['other_pertanyaan_q'] = $this->input->post('other_pertanyaan_q');
					
					$insert_other = $this->model_back->get_insert('gocweb_resume_other',$data5);
					
					if($insert_header && $insert_personal && $insert_family && $insert_education && $insert_experience && $insert_other){
						//$this->session->set_flashdata("add_result",'<div style="margin:10px 20px;width:auto;background-color:#ffffbf;font-size:12px;border-radius:3px;color:red;padding:10px;"><span style="color:red; font-size:12px;"><i class="fa fa-exclamation-triangle" style="color:red;font-size:16px;margin-right:5px;"></i>Sorry your entry is fail.. Please try again.. </span></div>');
						Header("Location:".base_url()."index.php/home/career/psikotes/".$data['resume_kode_lamaran']);
					}else{
						//$this->session->set_flashdata("add_result",'<div style="margin:10px 20px;width:auto;background-color:#ffffbf;font-size:12px;border-radius:3px;color:red;padding:10px;"><span style="color:red; font-size:12px;"><i class="fa fa-exclamation-triangle" style="color:red;font-size:16px;margin-right:5px;"></i>Sorry your entry is fail.. Please try again.. </span></div>');
						Header("Location:".base_url()."index.php/home/career/form_applicant_personal/".$data['resume_jabatan']);
					}
				}
			}
		}
		
		function proses_upload_test($id){
			$id = $this->uri->segment(4);
			$this->load->model('model_back');
			$data_disc['kode_lamaran'] = $this->uri->segment(4);
			$data_disc['disc_statement1_l'] = $this->input->post('disc_statement1_l');
			$data_disc['disc_statement1_m'] = $this->input->post('disc_statement1_m');
			
			$data_disc['disc_statement2_l'] = $this->input->post('disc_statement2_l');
			$data_disc['disc_statement2_m'] = $this->input->post('disc_statement2_m');
			
			$data_disc['disc_statement3_l'] = $this->input->post('disc_statement3_l');
			$data_disc['disc_statement3_m'] = $this->input->post('disc_statement3_m');
			
			$data_disc['disc_statement4_l'] = $this->input->post('disc_statement4_l');
			$data_disc['disc_statement4_m'] = $this->input->post('disc_statement4_m');
			
			$data_disc['disc_statement5_l'] = $this->input->post('disc_statement5_l');
			$data_disc['disc_statement5_m'] = $this->input->post('disc_statement5_m');
			
			$data_disc['disc_statement6_l'] = $this->input->post('disc_statement6_l');
			$data_disc['disc_statement6_m'] = $this->input->post('disc_statement6_m');
			
			$data_disc['disc_statement7_l'] = $this->input->post('disc_statement7_l');
			$data_disc['disc_statement7_m'] = $this->input->post('disc_statement7_m');
			
			$data_disc['disc_statement8_l'] = $this->input->post('disc_statement8_l');
			$data_disc['disc_statement8_m'] = $this->input->post('disc_statement8_m');
			
			$data_disc['disc_statement9_l'] = $this->input->post('disc_statement9_l');
			$data_disc['disc_statement9_m'] = $this->input->post('disc_statement9_m');
			
			$data_disc['disc_statement10_l'] = $this->input->post('disc_statement10_l');
			$data_disc['disc_statement10_m'] = $this->input->post('disc_statement10_m');
			
			$data_disc['disc_statement11_l'] = $this->input->post('disc_statement11_l');
			$data_disc['disc_statement11_m'] = $this->input->post('disc_statement11_m');
			
			$data_disc['disc_statement12_l'] = $this->input->post('disc_statement12_l');
			$data_disc['disc_statement12_m'] = $this->input->post('disc_statement12_m');
			
			$data_disc['disc_statement13_l'] = $this->input->post('disc_statement13_l');
			$data_disc['disc_statement13_m'] = $this->input->post('disc_statement13_m');
			
			$data_disc['disc_statement14_l'] = $this->input->post('disc_statement14_l');
			$data_disc['disc_statement14_m'] = $this->input->post('disc_statement14_m');
			
			$data_disc['disc_statement15_l'] = $this->input->post('disc_statement15_l');
			$data_disc['disc_statement15_m'] = $this->input->post('disc_statement15_m');
			
			$data_disc['disc_statement16_l'] = $this->input->post('disc_statement16_l');
			$data_disc['disc_statement16_m'] = $this->input->post('disc_statement16_m');
			
			$data_disc['disc_statement17_l'] = $this->input->post('disc_statement17_l');
			$data_disc['disc_statement17_m'] = $this->input->post('disc_statement17_m');
			
			$data_disc['disc_statement18_l'] = $this->input->post('disc_statement18_l');
			$data_disc['disc_statement18_m'] = $this->input->post('disc_statement18_m');
			
			$data_disc['disc_statement19_l'] = $this->input->post('disc_statement19_l');
			$data_disc['disc_statement19_m'] = $this->input->post('disc_statement19_m');
			
			$data_disc['disc_statement20_l'] = $this->input->post('disc_statement20_l');
			$data_disc['disc_statement20_m'] = $this->input->post('disc_statement20_m');
			
			$data_disc['disc_statement21_l'] = $this->input->post('disc_statement21_l');
			$data_disc['disc_statement21_m'] = $this->input->post('disc_statement21_m');
			
			$data_disc['disc_statement22_l'] = $this->input->post('disc_statement22_l');
			$data_disc['disc_statement22_m'] = $this->input->post('disc_statement22_m');
			
			$data_disc['disc_statement23_l'] = $this->input->post('disc_statement23_l');
			$data_disc['disc_statement23_m'] = $this->input->post('disc_statement23_m');
			
			$data_disc['disc_statement24_l'] = $this->input->post('disc_statement24_l');
			$data_disc['disc_statement24_m'] = $this->input->post('disc_statement24_m');
			
			$insert_disc = $this->model_back->get_insert('gocweb_test_disc',$data_disc);
			
			
			$data_desc['kode_lamaran'] = $this->uri->segment(4);
			$data_desc['statement1'] = $this->input->post('statement1');
			$data_desc['statement2'] = $this->input->post('statement2');
			$data_desc['statement3'] = $this->input->post('statement3');
			$data_desc['statement4'] = $this->input->post('statement4');
			$data_desc['statement5'] = $this->input->post('statement5');
			$data_desc['statement6'] = $this->input->post('statement6');
			$data_desc['statement7'] = $this->input->post('statement7');
			$data_desc['statement8'] = $this->input->post('statement8');
			$data_desc['statement9'] = $this->input->post('statement9');
			$data_desc['statement10'] = $this->input->post('statement10');
			$data_desc['statement11'] = $this->input->post('statement11');
			$data_desc['statement12'] = $this->input->post('statement12');
			$data_desc['statement13'] = $this->input->post('statement13');
			$data_desc['statement14'] = $this->input->post('statement14');
			$data_desc['statement15'] = $this->input->post('statement15');
			$data_desc['statement16'] = $this->input->post('statement16');
			$data_desc['statement17'] = $this->input->post('statement17');
			$data_desc['statement18'] = $this->input->post('statement18');
			$data_desc['statement19'] = $this->input->post('statement19');
			$data_desc['statement20'] = $this->input->post('statement20');
			
			$insert_desc = $this->model_back->get_insert('gocweb_test_desc',$data_desc);
			
			if($insert_disc and $insert_desc){
				Header("Location:".base_url()."index.php/home/career/success_apply/");
			}else{
				$this->session->set_flashdata("add_result",'<div style="margin:10px 20px;width:auto;background-color:#ffffbf;font-size:12px;border-radius:3px;color:red;padding:10px;"><span style="color:red; font-size:12px;"><i class="fa fa-exclamation-triangle" style="color:red;font-size:16px;margin-right:5px;"></i>Sorry your entry is fail.. Please try again.. </span></div>');
				Header("Location:".base_url()."index.php/home/career/form_applicant_personal/".$data['resume_jabatan']);
			}
			
		}
		
		function psikotes($id){
			$id = $this->uri->segment(4);
			$header['menu'] = $this->db->query("select menu_id, menu_name, menu_url from gocweb_menu order by menu_id asc");
			$q = $this->db->query("select setting_logo from gocweb_setting");
			foreach($q->result() as $db){
				$header['logo'] = $db->setting_logo;
			}
			$this->load->view('front/others/head');
			$this->load->view('front/others/body_start');
			$this->load->view('front/others/header',$header);
			//$this->load->view('front/career/header_title_application');
			$this->load->view('front/career/disc_test_view');
			$this->load->view('front/others/footer');
			$this->load->view('front/others/body_end');
		}
		
		function success_apply(){
			$header['menu'] = $this->db->query("select menu_id, menu_name, menu_url from gocweb_menu order by menu_id asc");
			$q = $this->db->query("select setting_logo from gocweb_setting");
			foreach($q->result() as $db){
				$header['logo'] = $db->setting_logo;
			}
			$this->load->view('front/others/head');
			$this->load->view('front/others/body_start');
			$this->load->view('front/others/header',$header);
			//$this->load->view('front/career/header_title_application');
			$this->load->view('front/career/apply_success');
			$this->load->view('front/others/footer');
			$this->load->view('front/others/body_end');
		}
		
		function list_career(){
			$page = $this->uri->segment(4);
			
			//$page = $this->uri->segment(5);
			$limit = 6;
			if(!$page){
				$offset = 0;
			}else{
				$offset = $page;
			}
			
			$career = $this->db->query("select * from gocweb_career where carrer_status='posting'");
			$config['base_url'] = base_url()."index.php/home/career/index/";
			$config['total_rows'] = $career->num_rows();
			$config['per_page'] = $limit;
			$config['uri_segment'] = 4;
			$config['full_tag_open'] = "<div class='pagination clearfix row'><ul>";
			$config['full_tag_close'] = "</ul></div>";
			
			$config['next_link'] = "Next &gt;";
			$config['next_tag_open'] = "<li>";
			$config['next_tag_close'] = "</li>";
			
			$config['prev_link'] = "&lt; Prev";
			$config['prev_tag_open'] = "<li>";
			$config['prev_tag_close'] = "</li>";
			
			$config['first_link'] = "&laquo; First";
			$config['first_tag_open'] = "<li>";
			$config['first_tag_close'] = "</li>";
			
			$config['last_link'] = "Last &raquo;";
			$config['last_tag_open'] = "<li>";
			$config['last_tag_close'] = "</li>";

			$config['cur_tag_open'] = "<li class='selected'>";
			$config['cur_tag_close'] = "</li>";
			
			$config['num_tag_open'] = "<li>";
			$config['num_tag_close'] = "</li>";
			
			$this->pagination->initialize($config);
			$data['paging'] = $this->pagination->create_links();
			
			$data['career'] = $this->db->query("select * from gocweb_career where carrer_status='posting' LIMIT ".$limit." OFFSET ".$offset);
			
			$this->load->view('front/others/head');
			$this->load->view('front/others/body_start');
			$header['menu'] = $this->db->query("select menu_id, menu_name, menu_url from gocweb_menu order by menu_id asc");
			$q = $this->db->query("select setting_logo from gocweb_setting");
			foreach($q->result() as $db){
				$header['logo'] = $db->setting_logo;
			}
			$this->load->view('front/others/header',$header);
			
			$this->load->view('front/career/header_title',$data);
			$this->load->view('front/career/list',$data);
			$this->load->view('front/others/footer');
			$this->load->view('front/others/body_end');
		}
		
		function single($id){
			$id = $this->uri->segment(4);
			
			$data['query'] = $this->db->query("select * from gocweb_page where page_id='".$id."'");
			
			
			$this->load->view('front/others/head');
			$this->load->view('front/others/body_start');
			$header['menu'] = $this->db->query("select menu_id, menu_name, menu_url from gocweb_menu order by menu_id asc");
			$q = $this->db->query("select setting_logo from gocweb_setting");
			foreach($q->result() as $db){
				$header['logo'] = $db->setting_logo;
			}
			$this->load->view('front/others/header',$header);
			
			$this->load->view('front/page/header_title_single',$data);
			$this->load->view('front/page/main',$data);
			$this->load->view('front/others/footer');
			$this->load->view('front/others/body_end');
		}
	}
	
/*End of file page.php*/
/*Location:.application/controllers/home/career.php*/