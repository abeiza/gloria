<?php 
	if(!defined('BASEPATH'))exit('No Direct Script Access Allowed');
	class Manage_Career extends CI_Controller{
		function __construct(){
			parent::__construct();
		}
		
		function index(){
			$cek = $this->session->userdata('success_login');
			if(!$cek){
				$this->load->view('back/login_view');
			}else{
				$this->load->model('model_back');
				$page = $this->uri->segment(4);
				$limit = 5;
				
				if(!$page){
					$offset = 0;
				}else{
					$offset = $page;
				}
				
				$career = $this->model_back->get_data('gocweb_career');
				$config['total_rows'] = $career->num_rows();
				$config['base_url'] = base_url()."index.php/backend/manage_career/index/";
				$config['per_page'] = $limit;
				$config['uri_segment'] = 4;
				$config['full_tag_open'] = "<div class='pagination'><ul>";
				$config['full_tag_close'] = "</ul></div>";
				
				$config['next_link'] = "Next <i class='fa fa-angle-right'></i>";
				$config['next_tag_open'] = "<li>";
				$config['next_tag_close'] = "</li>";
				
				$config['prev_link'] = "<i class='fa fa-angle-left'></i> Prev";
				$config['prev_tag_open'] = "<li>";
				$config['prev_tag_close'] = "</li>";
				
				$config['first_link'] = "<span class='paging-arrow'><i class='fa fa-angle-double-left'></i> First</span>";
				$config['first_tag_open'] = "<li>";
				$config['first_tag_close'] = "</li>";
				
				$config['last_link'] = "<span class='paging-arrow'>Last <i class='fa fa-angle-double-right'></i></span>";
				$config['last_tag_open'] = "<li>";
				$config['last_tag_close'] = "</li>";

				$config['cur_tag_open'] = "<li><span class='active'>";//active
				$config['cur_tag_close'] = "</span></li>";
				
				$config['num_tag_open'] = "<li>";
				$config['num_tag_close'] = "</li>";
				
				$config['num_links'] = 3;
				
				$this->pagination->initialize($config);
				$data['paging'] = $this->pagination->create_links();
				
				$data['career'] = $this->model_back->get_data_limit('gocweb_career',$limit,$offset);
				$data['limit'] = $limit;
				$data['of'] = $career->num_rows();
				
				$this->load->view('back/others/top');
				$this->load->view('back/others/left_side');
				$this->load->view('back/others/top-header');
				$this->load->view('back/career/manage_career_view',$data);
				$this->load->view('back/others/bottom');
				
			}
		}
		
		function grid_position(){
			$cek = $this->session->userdata('success_login');
			if(!$cek){
				$this->load->view('back/login_view');
			}else{
				$this->load->model('model_back');
				$page = $this->uri->segment(4);
				$limit = 5;
				
				if(!$page){
					$offset = 0;
				}else{
					$offset = $page;
				}
				
				$career = $this->model_back->get_data('gocweb_job_position');
				$config['total_rows'] = $career->num_rows();
				$config['base_url'] = base_url()."index.php/backend/manage_career/grid_position/";
				$config['per_page'] = $limit;
				$config['uri_segment'] = 4;
				$config['full_tag_open'] = "<div class='pagination'><ul>";
				$config['full_tag_close'] = "</ul></div>";
				
				$config['next_link'] = "Next <i class='fa fa-angle-right'></i>";
				$config['next_tag_open'] = "<li>";
				$config['next_tag_close'] = "</li>";
				
				$config['prev_link'] = "<i class='fa fa-angle-left'></i> Prev";
				$config['prev_tag_open'] = "<li>";
				$config['prev_tag_close'] = "</li>";
				
				$config['first_link'] = "<span class='paging-arrow'><i class='fa fa-angle-double-left'></i> First</span>";
				$config['first_tag_open'] = "<li>";
				$config['first_tag_close'] = "</li>";
				
				$config['last_link'] = "<span class='paging-arrow'>Last <i class='fa fa-angle-double-right'></i></span>";
				$config['last_tag_open'] = "<li>";
				$config['last_tag_close'] = "</li>";

				$config['cur_tag_open'] = "<li><span class='active'>";//active
				$config['cur_tag_close'] = "</span></li>";
				
				$config['num_tag_open'] = "<li>";
				$config['num_tag_close'] = "</li>";
				
				$config['num_links'] = 3;
				
				$this->pagination->initialize($config);
				$data['paging'] = $this->pagination->create_links();
				
				$data['career'] = $this->model_back->get_data_limit('gocweb_job_position',$limit,$offset);
				$data['limit'] = $limit;
				$data['of'] = $career->num_rows();
				
				$this->load->view('back/others/top');
				$this->load->view('back/others/left_side');
				$this->load->view('back/others/top-header');
				$this->load->view('back/career/manage_position_view',$data);
				$this->load->view('back/others/bottom');
				
			}
		}
		
		function grid_applying_application(){
			$cek = $this->session->userdata('success_login');
			if(!$cek){
				$this->load->view('back/login_view');
			}else{
				$this->load->model('model_back');
				$page = $this->uri->segment(4);
				$limit = 5;
				
				if(!$page){
					$offset = 0;
				}else{
					$offset = $page;
				}
				
				$career = $this->model_back->get_data('gocweb_resume_header');
				$config['total_rows'] = $career->num_rows();
				$config['base_url'] = base_url()."index.php/backend/manage_career/grid_applying_application/";
				$config['per_page'] = $limit;
				$config['uri_segment'] = 4;
				$config['full_tag_open'] = "<div class='pagination'><ul>";
				$config['full_tag_close'] = "</ul></div>";
				
				$config['next_link'] = "Next <i class='fa fa-angle-right'></i>";
				$config['next_tag_open'] = "<li>";
				$config['next_tag_close'] = "</li>";
				
				$config['prev_link'] = "<i class='fa fa-angle-left'></i> Prev";
				$config['prev_tag_open'] = "<li>";
				$config['prev_tag_close'] = "</li>";
				
				$config['first_link'] = "<span class='paging-arrow'><i class='fa fa-angle-double-left'></i> First</span>";
				$config['first_tag_open'] = "<li>";
				$config['first_tag_close'] = "</li>";
				
				$config['last_link'] = "<span class='paging-arrow'>Last <i class='fa fa-angle-double-right'></i></span>";
				$config['last_tag_open'] = "<li>";
				$config['last_tag_close'] = "</li>";

				$config['cur_tag_open'] = "<li><span class='active'>";//active
				$config['cur_tag_close'] = "</span></li>";
				
				$config['num_tag_open'] = "<li>";
				$config['num_tag_close'] = "</li>";
				
				$config['num_links'] = 3;
				
				$this->pagination->initialize($config);
				$data['paging'] = $this->pagination->create_links();
				
				$data['career'] = $this->db->query("select * from gocweb_resume_header, gocweb_resume_personal, gocweb_career  where gocweb_resume_header.resume_kode_lamaran = gocweb_resume_personal.kode_lamaran and gocweb_career.Career_Id=gocweb_resume_header.resume_jabatan order by gocweb_resume_header.resume_tgl_isi desc limit ".$limit." offset ".$offset);
				$data['limit'] = $limit;
				$data['of'] = $career->num_rows();
				
				$this->load->view('back/others/top');
				$this->load->view('back/others/left_side');
				$this->load->view('back/others/top-header');
				$this->load->view('back/career/manage_applying_application',$data);
				$this->load->view('back/others/bottom');
				
			}
		}
		
		function get_detail_resume($id){
			$id = $this->uri->segment(4);
			$data['data_detail'] = $this->db->query("select * from gocweb_resume_header, gocweb_resume_personal, gocweb_resume_family, gocweb_resume_education, gocweb_resume_experience, gocweb_resume_other, gocweb_career WHERE 
			gocweb_resume_header.resume_kode_lamaran=gocweb_resume_personal.kode_lamaran and
			gocweb_resume_header.resume_kode_lamaran=gocweb_resume_family.kode_lamaran and
			gocweb_resume_header.resume_kode_lamaran=gocweb_resume_education.kode_lamaran and
			gocweb_resume_header.resume_kode_lamaran=gocweb_resume_experience.kode_lamaran and
			gocweb_resume_header.resume_kode_lamaran=gocweb_resume_other.kode_lamaran and
			gocweb_resume_header.resume_jabatan=gocweb_career.Career_Id and gocweb_resume_header.resume_kode_lamaran='".$id."'");
				
				
			$this->load->view('back/others/top');
			$this->load->view('back/others/left_side');
			$this->load->view('back/others/top-header');
			$this->load->view('back/career/detail_resume_view',$data);
			$this->load->view('back/others/bottom');
		}
		
		function get_detail_disc($id){
			$id = $this->uri->segment(4);
			$data['data_disc'] = $this->db->query("select * from gocweb_resume_header, gocweb_resume_personal, gocweb_career, gocweb_test_disc WHERE 
			gocweb_resume_header.resume_kode_lamaran=gocweb_resume_personal.kode_lamaran and
			gocweb_resume_header.resume_kode_lamaran=gocweb_test_disc.kode_lamaran and
			gocweb_resume_header.resume_jabatan=gocweb_career.Career_Id and gocweb_resume_header.resume_kode_lamaran='".$id."'");
				
				
			$this->load->view('back/others/top');
			$this->load->view('back/others/left_side');
			$this->load->view('back/others/top-header');
			$this->load->view('back/career/detail_disc_view', $data);
			$this->load->view('back/others/bottom');
		}
		
		function get_detail_desc($id){
			$id = $this->uri->segment(4);
			$data['data_desc'] = $this->db->query("select * from gocweb_resume_header, gocweb_resume_personal, gocweb_career, gocweb_test_desc WHERE 
			gocweb_resume_header.resume_kode_lamaran=gocweb_resume_personal.kode_lamaran and
			gocweb_resume_header.resume_kode_lamaran=gocweb_test_desc.kode_lamaran and
			gocweb_resume_header.resume_jabatan=gocweb_career.Career_Id and gocweb_resume_header.resume_kode_lamaran='".$id."'");
				
				
			$this->load->view('back/others/top');
			$this->load->view('back/others/left_side');
			$this->load->view('back/others/top-header');
			$this->load->view('back/career/detail_desc_view', $data);
			$this->load->view('back/others/bottom');
		}
		
		function get_position(){
			$id = $this->input->get('id');
			$query = $this->db->query("select * from gocweb_job_position where job_position_department='".$id."' order by job_short_code");
			$data = array();
			foreach($query->result() as $db){
				$data[] = $db; 
			}
			echo json_encode($data);
		}
		
		function form_add(){
			$this->load->view('back/others/top');
			$this->load->view('back/others/left_side');
			$this->load->view('back/others/top-header');
			$this->load->view("back/career/form_add_view");
			$this->load->view('back/others/bottom');
		}
		
		function form_add_position(){
			$this->load->view('back/others/top');
			$this->load->view('back/others/left_side');
			$this->load->view('back/others/top-header');
			$this->load->view("back/career/form_add_position");
			$this->load->view('back/others/bottom');
		}
		
		function add(){
			$this->load->model('model_back');
			$this->form_validation->set_rules('title','job title','required');
			$this->form_validation->set_rules('desc','job desc','required');
			$this->form_validation->set_rules('req','requirement','required');
			$this->form_validation->set_rules('dept','department','required');
			$this->form_validation->set_rules('position','department','required');
			$this->form_validation->set_rules('location','location','required');
			$this->form_validation->set_rules('edu','latest education','required');
			$this->form_validation->set_rules('experience','work experience','required');
			$this->form_validation->set_rules('status','status','required');
			if($this->form_validation->run() == false){
				$this->form_add();
			}else{
				$data['Career_Id'] = $this->model_back->getMaxKode('gocweb_career', 'Career_Id', 'JCG');
				$data['Career_Title'] = $this->input->post('title');
				$data['Career_Departmen'] = $this->input->post('dept');
				$data['Career_Position'] = $this->input->post('position');
				$data['Career_Location'] = $this->input->post('location');
				$data['Career_Education'] = $this->input->post('edu');
				$data['Career_Work_Experience'] = $this->input->post('experience');
				$data['Career_Job_Desc'] = $this->input->post('desc');
				$data['Career_Requrement'] = $this->input->post('req');
				$data['Career_Job_Expired'] = $this->input->post('exp');
				$data['Career_Qty'] = $this->input->post('co');
				$data['Carrer_Status'] = $this->input->post('status');
				
				$data['Career_Post_Create'] = date("Y-m-d H:i:s");
				
				
				$add_data = $this->model_back->get_insert('gocweb_career',$data);
				
				if(!$add_data){
					$this->session->set_flashdata("add_result",'<div style="margin:10px 20px;width:auto;background-color:#ffffbf;font-size:12px;border-radius:3px;color:red;padding:10px;"><span style="color:red; font-size:12px;"><i class="fa fa-exclamation-triangle" style="color:red;font-size:16px;margin-right:5px;"></i>Sorry your entry is fail.. Please try again.. </span></div>');
					Header("Location:".base_url()."index.php/backend/manage_career/add/");
				}else{
					$this->session->set_flashdata("add_result",'<div style="margin:10px 20px;width:auto;background-color:#ffffbf;font-size:12px;border-radius:3px;color:red;padding:10px;"><span style="color:green; font-size:12px;"><i class="fa fa-check" style="color:green;font-size:16px;margin-right:5px;"></i>Insert data is success</span></div>');
					Header("Location:".base_url()."index.php/backend/manage_career/add/");
				}	
			}
		}
		
		function add_position(){
			$this->load->model('model_back');
			$this->form_validation->set_rules('short','Short Code','required');
			$this->form_validation->set_rules('name','Position Name','required');
			$this->form_validation->set_rules('dept','Department','required');
			$this->form_validation->set_rules('desc','Description','required');
			if($this->form_validation->run() == false){
				$this->form_add_position();
			}else{
				//$data['Career_Id'] = $this->model_back->getMaxKode('gocweb_career', 'Career_Id', 'JCG');
				$data['job_short_code'] = $this->input->post('short');
				$data['job_position_name'] = $this->input->post('name');
				$data['job_position_desc'] = $this->input->post('desc');
				$data['job_position_department'] = $this->input->post('dept');
				
				$add_data = $this->model_back->get_insert('gocweb_job_position',$data);
				
				if(!$add_data){
					$this->session->set_flashdata("add_result",'<div style="margin:10px 20px;width:auto;background-color:#ffffbf;font-size:12px;border-radius:3px;color:red;padding:10px;"><span style="color:red; font-size:12px;"><i class="fa fa-exclamation-triangle" style="color:red;font-size:16px;margin-right:5px;"></i>Sorry your entry is fail.. Please try again.. </span></div>');
					Header("Location:".base_url()."index.php/backend/manage_career/add_position/");
				}else{
					$this->session->set_flashdata("add_result",'<div style="margin:10px 20px;width:auto;background-color:#ffffbf;font-size:12px;border-radius:3px;color:red;padding:10px;"><span style="color:green; font-size:12px;"><i class="fa fa-check" style="color:green;font-size:16px;margin-right:5px;"></i>Insert data is success</span></div>');
					Header("Location:".base_url()."index.php/backend/manage_career/add_position/");
				}	
			}
		}
		
		function form_edit($id){
			$id = $this->uri->segment(4);
			$this->load->model('model_back');
			$career = $this->model_back->get_data_where('career_id',$id,'gocweb_career');
			foreach($career->result() as $db){
				$data['id'] = $db->Career_Id;
				$data['title'] = $db->Career_Title;
				$data['dept'] = $db->Career_Departmen;
				$data['position'] = $db->Career_Position;
				$data['location'] = $db->Career_Location;
				$data['edu'] = $db->Career_Education;
				$data['experience'] = $db->Career_Work_Experience;
				$data['desc'] = $db->Career_Job_Desc;
				$data['req'] = $db->Career_Requrement;
				$data['exp'] = $db->Career_Job_Expired;
				$data['co'] = $db->Career_Qty;
				$data['status'] = $db->Carrer_Status;
			}
			$this->load->view('back/others/top');
			$this->load->view('back/others/left_side');
			$this->load->view('back/others/top-header');
			$this->load->view("back/career/form_edit_view",$data);
			$this->load->view('back/others/bottom');
		}
		
		function form_edit_position($id){
			$id = $this->uri->segment(4);
			$this->load->model('model_back');
			$career = $this->model_back->get_data_where('job_position_id',$id,'gocweb_job_position');
			foreach($career->result() as $db){
				$data['id'] = $db->job_position_id;
				$data['short'] = $db->job_short_code;
				$data['dept'] = $db->job_position_department;
				$data['name'] = $db->job_position_name;
				$data['desc'] = $db->job_position_desc;
			}
			$this->load->view('back/others/top');
			$this->load->view('back/others/left_side');
			$this->load->view('back/others/top-header');
			$this->load->view("back/career/form_edit_position",$data);
			$this->load->view('back/others/bottom');
		}
			
		function edit($id){
			$this->load->model('model_back');
			$this->form_validation->set_rules('title','job title','required');
			$this->form_validation->set_rules('desc','job desc','required');
			$this->form_validation->set_rules('req','requirement','required');
			$this->form_validation->set_rules('dept','department','required');
			$this->form_validation->set_rules('location','location','required');
			$this->form_validation->set_rules('edu','latest education','required');
			$this->form_validation->set_rules('experience','work experience','required');
			$this->form_validation->set_rules('status','status','required');
			if($this->form_validation->run() == false){
				$this->form_edit($this->uri->segment(4));
			}else{
				$id = $this->uri->segment(4);
				$data['Career_Title'] = $this->input->post('title');
				$data['Career_Departmen'] = $this->input->post('dept');
				$data['Career_Location'] = $this->input->post('location');
				$data['Career_Education'] = $this->input->post('edu');
				$data['Career_Work_Experience'] = $this->input->post('experience');
				$data['Career_Job_Desc'] = $this->input->post('desc');
				$data['Career_Requrement'] = $this->input->post('req');
				$data['Career_Job_Expired'] = $this->input->post('exp');
				$data['Career_Qty'] = $this->input->post('co');
				$data['Carrer_Status'] = $this->input->post('status');
				
				$data['Career_Post_Update'] = date("Y-m-d H:i:s");
				
				$edit_data = $this->model_back->get_update('gocweb_career',$data,'career_id',$id);
				
				if(!$edit_data){
					$this->session->set_flashdata("edit_result",'<div style="margin:10px 20px;width:auto;background-color:#ffffbf;font-size:12px;border-radius:3px;color:red;padding:10px;"><span style="color:red; font-size:12px;"><i class="fa fa-exclamation-triangle" style="color:red;font-size:16px;margin-right:5px;"></i>Sorry your update is fail.. Please try again.. </span></div>');
					Header("Location:".base_url()."index.php/backend/manage_career/edit/".$id);
				}else{
					$this->session->set_flashdata("edit_result",'<div style="margin:10px 20px;width:auto;background-color:#ffffbf;font-size:12px;border-radius:3px;color:red;padding:10px;"><span style="color:green; font-size:12px;"><i class="fa fa-check" style="color:green;font-size:16px;margin-right:5px;"></i>Update data is success</span></div>');
					Header("Location:".base_url()."index.php/backend/manage_career/edit/".$id);
				}	
			}
		}
		
		function edit_position($id){
			$this->load->model('model_back');
			$this->form_validation->set_rules('name','position name','required');
			$this->form_validation->set_rules('short','short code','required');
			$this->form_validation->set_rules('dept','department','required');
			if($this->form_validation->run() == false){
				$this->form_edit($this->uri->segment(4));
			}else{
				$id = $this->uri->segment(4);
				$data['job_position_name'] = $this->input->post('name');
				$data['job_short_code'] = $this->input->post('short');
				$data['job_position_department'] = $this->input->post('dept');
				$data['job_position_desc'] = $this->input->post('desc');
				$edit_data = $this->model_back->get_update('gocweb_job_position',$data,'job_position_id',$id);
				
				if(!$edit_data){
					$this->session->set_flashdata("edit_result",'<div style="margin:10px 20px;width:auto;background-color:#ffffbf;font-size:12px;border-radius:3px;color:red;padding:10px;"><span style="color:red; font-size:12px;"><i class="fa fa-exclamation-triangle" style="color:red;font-size:16px;margin-right:5px;"></i>Sorry your update is fail.. Please try again.. </span></div>');
					Header("Location:".base_url()."index.php/backend/manage_career/form_edit_position/".$id);
				}else{
					$this->session->set_flashdata("edit_result",'<div style="margin:10px 20px;width:auto;background-color:#ffffbf;font-size:12px;border-radius:3px;color:red;padding:10px;"><span style="color:green; font-size:12px;"><i class="fa fa-check" style="color:green;font-size:16px;margin-right:5px;"></i>Update data is success</span></div>');
					Header("Location:".base_url()."index.php/backend/manage_career/form_edit_position/".$id);
				}	
			}
		}
		
		function delete($id){
			$this->load->model('model_back');
			$id = $this->uri->segment(4);
			
			$delete = $this->model_back->get_delete('gocweb_career','career_id',$id);
			
			if(!$delete){
				$this->session->set_flashdata("modify_result",'<div style="margin:10px 20px;width:auto;background-color:#ffffbf;font-size:12px;border-radius:3px;color:red;padding:10px;"><span style="color:red; font-size:12px;"><i class="fa fa-check" style="color:red;font-size:16px;margin-right:5px;"></i>Sorry, delete proses id fail... Please try again...</span></div>');
				Header("Location:".base_url()."index.php/backend/manage_career/");
			}else{
				$this->session->set_flashdata("modify_result",'<div style="margin:10px 20px;width:auto;background-color:#ffffbf;font-size:12px;border-radius:3px;color:red;padding:10px;"><span style="color:green; font-size:12px;"><i class="fa fa-check" style="color:green;font-size:16px;margin-right:5px;"></i>Delete data is success</span></div>');
				Header("Location:".base_url()."index.php/backend/manage_career/");
			}
		}
		
		function position_delete($id){
			$this->load->model('model_back');
			$id = $this->uri->segment(4);
			
			$delete = $this->model_back->get_delete('gocweb_job_position','job_position_id',$id);
			
			if(!$delete){
				$this->session->set_flashdata("modify_result",'<div style="margin:10px 20px;width:auto;background-color:#ffffbf;font-size:12px;border-radius:3px;color:red;padding:10px;"><span style="color:red; font-size:12px;"><i class="fa fa-check" style="color:red;font-size:16px;margin-right:5px;"></i>Sorry, delete proses id fail... Please try again...</span></div>');
				Header("Location:".base_url()."index.php/backend/manage_career/grid_position/");
			}else{
				$this->session->set_flashdata("modify_result",'<div style="margin:10px 20px;width:auto;background-color:#ffffbf;font-size:12px;border-radius:3px;color:red;padding:10px;"><span style="color:green; font-size:12px;"><i class="fa fa-check" style="color:green;font-size:16px;margin-right:5px;"></i>Delete data is success</span></div>');
				Header("Location:".base_url()."index.php/backend/manage_career/grid_position/");
			}
		}
		
		function search(){
			if($this->input->post('search') != ''){
				$sess['search_career'] = $this->input->post('search');
			}

			$this->session->set_userdata($sess);
			$search = $this->db->query("select * from gocweb_career where career_title like '%".$this->session->userdata('search_career')."%' or career_departmen like '%".$this->session->userdata('search_career')."%' or career_location like '%".$this->session->userdata('search_career')."%' or career_job_desc like '%".$this->session->userdata('search_career')."%' or career_requrement like '%".$this->session->userdata('search_career')."%'");
			$page = $this->uri->segment(5);
			$limit = 5;
			
			if(!$page){
				$offset = 0;
			}else{
				$offset = $page;
			}
			
			//$user = $this->model_back->get_data('gocweb_user');
			$config['total_rows'] = $search->num_rows();
			$config['base_url'] = base_url()."index.php/backend/manage_career/search/index/";
			$config['per_page'] = $limit;
			$config['uri_segment'] = 5;
			$config['full_tag_open'] = "<div class='pagination'><ul>";
			$config['full_tag_close'] = "</ul></div>";
			
			$config['next_link'] = "Next <i class='fa fa-angle-right'></i>";
			$config['next_tag_open'] = "<li>";
			$config['next_tag_close'] = "</li>";
			
			$config['prev_link'] = "<i class='fa fa-angle-left'></i> Prev";
			$config['prev_tag_open'] = "<li>";
			$config['prev_tag_close'] = "</li>";
			
			$config['first_link'] = "<span class='paging-arrow'><i class='fa fa-angle-double-left'></i> First</span>";
			$config['first_tag_open'] = "<li>";
			$config['first_tag_close'] = "</li>";
			
			$config['last_link'] = "<span class='paging-arrow'>Last <i class='fa fa-angle-double-right'></i></span>";
			$config['last_tag_open'] = "<li>";
			$config['last_tag_close'] = "</li>";

			$config['cur_tag_open'] = "<li><span class='active'>";//active
			$config['cur_tag_close'] = "</span></li>";
			
			$config['num_tag_open'] = "<li>";
			$config['num_tag_close'] = "</li>";
			
			$config['num_links'] = 3;
			
			$this->pagination->initialize($config);
			$data['paging'] = $this->pagination->create_links();
			
			//$data['user_grid'] = $this->model_back->get_data_limit('gocweb_user',$limit,$offset);
			$data['career'] = $this->db->query("select * from gocweb_career where career_title like '%".$this->session->userdata('search_career')."%' or career_departmen like '%".$this->session->userdata('search_career')."%' or career_location like '%".$this->session->userdata('search_career')."%' or career_job_desc like '%".$this->session->userdata('search_career')."%' or career_requrement like '%".$this->session->userdata('search_career')."%' LIMIT ".$limit." OFFSET ".$offset."");
			$data['limit'] = $limit;
			$data['of'] = $search->num_rows();
			
			$this->load->view('back/others/top');
			$this->load->view('back/others/left_side');
			$this->load->view('back/others/top-header');
			$this->load->view('back/career/manage_career_view',$data);
			$this->load->view('back/others/bottom');
		}
		
		function search_position(){
			if($this->input->post('search') != ''){
				$sess['search_career_position'] = $this->input->post('search');
			}

			$this->session->set_userdata($sess);
			$search = $this->db->query("select * from gocweb_job_position where job_position_name like '%".$this->session->userdata('search_career_position')."%' or job_short_code like '%".$this->session->userdata('search_career_position')."%' or job_position_desc like '%".$this->session->userdata('search_career_position')."%'");
			$page = $this->uri->segment(5);
			$limit = 5;
			
			if(!$page){
				$offset = 0;
			}else{
				$offset = $page;
			}
			
			//$user = $this->model_back->get_data('gocweb_user');
			$config['total_rows'] = $search->num_rows();
			$config['base_url'] = base_url()."index.php/backend/manage_career/search_grid_position/index/";
			$config['per_page'] = $limit;
			$config['uri_segment'] = 5;
			$config['full_tag_open'] = "<div class='pagination'><ul>";
			$config['full_tag_close'] = "</ul></div>";
			
			$config['next_link'] = "Next <i class='fa fa-angle-right'></i>";
			$config['next_tag_open'] = "<li>";
			$config['next_tag_close'] = "</li>";
			
			$config['prev_link'] = "<i class='fa fa-angle-left'></i> Prev";
			$config['prev_tag_open'] = "<li>";
			$config['prev_tag_close'] = "</li>";
			
			$config['first_link'] = "<span class='paging-arrow'><i class='fa fa-angle-double-left'></i> First</span>";
			$config['first_tag_open'] = "<li>";
			$config['first_tag_close'] = "</li>";
			
			$config['last_link'] = "<span class='paging-arrow'>Last <i class='fa fa-angle-double-right'></i></span>";
			$config['last_tag_open'] = "<li>";
			$config['last_tag_close'] = "</li>";

			$config['cur_tag_open'] = "<li><span class='active'>";//active
			$config['cur_tag_close'] = "</span></li>";
			
			$config['num_tag_open'] = "<li>";
			$config['num_tag_close'] = "</li>";
			
			$config['num_links'] = 3;
			
			$this->pagination->initialize($config);
			$data['paging'] = $this->pagination->create_links();
			
			//$data['user_grid'] = $this->model_back->get_data_limit('gocweb_user',$limit,$offset);
			$data['career'] = $this->db->query("select * from gocweb_job_position where job_position_name like '%".$this->session->userdata('search_career_position')."%' or job_short_code like '%".$this->session->userdata('search_career_position')."%' or job_position_desc like '%".$this->session->userdata('search_career_position')."%' LIMIT ".$limit." OFFSET ".$offset."");
			$data['limit'] = $limit;
			$data['of'] = $search->num_rows();
			
			$this->load->view('back/others/top');
			$this->load->view('back/others/left_side');
			$this->load->view('back/others/top-header');
			$this->load->view('back/career/manage_position_view',$data);
			$this->load->view('back/others/bottom');
		}
	}
/*End of file manage_tag.php*/
/*Location:.application/controllers/backend/manage_career.php*/