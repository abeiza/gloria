<?php 
	if(!defined('BASEPATH'))exit('No Direct Script Access Allowed');
	
	class Manage_User extends CI_Controller{
		
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
				
				$user = $this->model_back->get_data('gocweb_user');
				$config['total_rows'] = $user->num_rows();
				$config['base_url'] = base_url()."index.php/backend/manage_user/index/";
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
				
				$data['user_grid'] = $this->model_back->get_data_limit('gocweb_user',$limit,$offset);
				$data['limit'] = $limit;
				$data['of'] = $user->num_rows();
				
				$this->load->view('back/others/top');
				$this->load->view('back/others/left_side');
				$this->load->view('back/others/top-header');
				$this->load->view('back/user/manage_user_view',$data);
				$this->load->view('back/others/bottom');
				
			}
		}
		
		function form_add(){
			$this->load->view('back/others/top');
			$this->load->view('back/others/left_side');
			$this->load->view('back/others/top-header');
			$this->load->view("back/user/form_add_view");
			$this->load->view('back/others/bottom');
		}
		
		function add(){
			$this->load->model('model_back');
			$this->form_validation->set_rules('first','first name','required');
			$this->form_validation->set_rules('nick','nick name','required');
			$this->form_validation->set_rules('username','username','required');
			$this->form_validation->set_rules('password','password','required|matches[confirm]');
			$this->form_validation->set_rules('email','email','required');
			if($this->form_validation->run() == false){
				$this->form_add();
			}else{
				$data['user_first_name'] = $this->input->post('first');
				$data['user_last_name'] = $this->input->post('last');
				$data['user_nick'] = $this->input->post('nick');
				$data['user_username'] = $this->input->post('username');
				$data['user_password'] = $this->input->post('password');
				$data['user_email'] = $this->input->post('email');
				
				$cek = $this->db->query("select user_username, user_password from gocweb_user where user_username='".$data['user_username']."' and user_password='".$data['user_password']."'");
				if($cek->num_rows() == 0){
					$add_data = $this->model_back->get_insert('gocweb_user',$data);
				
					if(!$add_data){
						$this->session->set_flashdata("add_result",'<div style="margin:10px 20px;width:auto;background-color:#ffffbf;font-size:12px;border-radius:3px;color:red;padding:10px;"><span style="color:red; font-size:12px;"><i class="fa fa-exclamation-triangle" style="color:red;font-size:16px;margin-right:5px;"></i>Sorry your entry is fail.. Please try again.. </span></div>');
						Header("Location:".base_url()."index.php/backend/manage_user/add/");
					}else{
						$this->session->set_flashdata("add_result",'<div style="margin:10px 20px;width:auto;background-color:#ffffbf;font-size:12px;border-radius:3px;color:red;padding:10px;"><span style="color:green; font-size:12px;"><i class="fa fa-check" style="color:green;font-size:16px;margin-right:5px;"></i>Insert data is success</span></div>');
						Header("Location:".base_url()."index.php/backend/manage_user/add/");
					}	
				}else{
					$this->session->set_flashdata("add_result",'<div style="margin:10px 20px;width:auto;background-color:#ffffbf;font-size:12px;border-radius:3px;color:red;padding:10px;"><span style="color:red; font-size:12px;"><i class="fa fa-exclamation-triangle" style="color:red;font-size:16px;margin-right:5px;"></i>Sorry your username or password is available.. Please try again.. </span></div>');
					Header("Location:".base_url()."index.php/backend/manage_user/add/");
				}
			}
		}
		
		function form_edit($id){
			$id = $this->uri->segment(4);
			$this->load->model('model_back');
			$user_read = $this->model_back->get_data_where('user_id',$id,'gocweb_user');
			foreach($user_read->result() as $db){
				$data['id'] = $db->user_id;
				$data['first'] = $db->user_first_name;
				$data['last'] = $db->user_last_name;
				$data['nick'] = $db->user_nick;
				$data['username'] = $db->user_username;
				$data['password'] = $db->user_password;
				$data['email'] = $db->user_email;
			}
			$this->load->view('back/others/top');
			$this->load->view('back/others/left_side');
			$this->load->view('back/others/top-header');
			$this->load->view("back/user/form_edit_view",$data);
			$this->load->view('back/others/bottom');
		}
		
		function edit($id){
			$this->load->model('model_back');
			$this->form_validation->set_rules('first','first name','required');
			$this->form_validation->set_rules('nick','nick name','required');
			$this->form_validation->set_rules('username','username','required');
			$this->form_validation->set_rules('password','password','required|matches[confirm]');
			$this->form_validation->set_rules('email','email','required');
			if($this->form_validation->run() == false){
				$this->form_edit($this->uri->segment(4));
			}else{
				$id = $this->uri->segment(4);
				$data['user_first_name'] = $this->input->post('first');
				$data['user_last_name'] = $this->input->post('last');
				$data['user_nick'] = $this->input->post('nick');
				$data['user_username'] = $this->input->post('username');
				$data['user_password'] = $this->input->post('password');
				$data['user_email'] = $this->input->post('email');
				
				$edit_data = $this->model_back->get_update('gocweb_user',$data,'user_id',$id);
				
				if(!$edit_data){
					$this->session->set_flashdata("edit_result",'<div style="margin:10px 20px;width:auto;background-color:#ffffbf;font-size:12px;border-radius:3px;color:red;padding:10px;"><span style="color:red; font-size:12px;"><i class="fa fa-exclamation-triangle" style="color:red;font-size:16px;margin-right:5px;"></i>Sorry your update is fail.. Please try again.. </span></div>');
					Header("Location:".base_url()."index.php/backend/manage_user/edit/".$id);
				}else{
					$this->session->set_flashdata("edit_result",'<div style="margin:10px 20px;width:auto;background-color:#ffffbf;font-size:12px;border-radius:3px;color:red;padding:10px;"><span style="color:green; font-size:12px;"><i class="fa fa-check" style="color:green;font-size:16px;margin-right:5px;"></i>Update data is success</span></div>');
					Header("Location:".base_url()."index.php/backend/manage_user/edit/".$id);
				}	
			}
		}
		
		function delete($id){
			$this->load->model('model_back');
			$id = $this->uri->segment(4);
			
			$delete = $this->model_back->get_delete('gocweb_user','user_id',$id);
			
			if(!$delete){
				$this->session->set_flashdata("modify_result",'<div style="margin:10px 20px;width:auto;background-color:#ffffbf;font-size:12px;border-radius:3px;color:red;padding:10px;"><span style="color:red; font-size:12px;"><i class="fa fa-check" style="color:red;font-size:16px;margin-right:5px;"></i>Sorry, delete proses id fail... Please try again...</span></div>');
				Header("Location:".base_url()."index.php/backend/manage_user/");
			}else{
				$this->session->set_flashdata("modify_result",'<div style="margin:10px 20px;width:auto;background-color:#ffffbf;font-size:12px;border-radius:3px;color:red;padding:10px;"><span style="color:green; font-size:12px;"><i class="fa fa-check" style="color:green;font-size:16px;margin-right:5px;"></i>Delete data is success</span></div>');
				Header("Location:".base_url()."index.php/backend/manage_user/");
			}
		}
		
		function search(){
			if($this->input->post('search') != ''){
				$sess['search_user'] = $this->input->post('search');
			}

			$this->session->set_userdata($sess);
			$search = $this->db->query("select * from gocweb_user where user_username like '%".$this->session->userdata('search_user')."%' or user_first_name like '%".$this->session->userdata('search_user')."%' or user_last_name like '%".$this->session->userdata('search_user')."%' or user_email like '%".$this->session->userdata('search_user')."%' ");
			$page = $this->uri->segment(5);
			$limit = 5;
			
			if(!$page){
				$offset = 0;
			}else{
				$offset = $page;
			}
			
			//$user = $this->model_back->get_data('gocweb_user');
			$config['total_rows'] = $search->num_rows();
			$config['base_url'] = base_url()."index.php/backend/manage_user/search/index/";
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
			$data['user_grid'] = $this->db->query("select * from gocweb_user where user_username like '%".$this->session->userdata('search_user')."%' or user_first_name like '%".$this->session->userdata('search_user')."%' or user_last_name like '%".$this->session->userdata('search_user')."%' or user_email like '%".$this->session->userdata('search_user')."%' LIMIT ".$limit." OFFSET ".$offset."");
			$data['limit'] = $limit;
			$data['of'] = $search->num_rows();
			
			$this->load->view('back/others/top');
			$this->load->view('back/others/left_side');
			$this->load->view('back/others/top-header');
			$this->load->view('back/user/manage_user_view',$data);
			$this->load->view('back/others/bottom');
		}
	}
	
/*End of file manage_user.php*/
/*Location:.application/controllers/backend/manage_users.php*/
