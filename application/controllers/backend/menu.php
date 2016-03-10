<?php 
	if(!defined('BASEPATH'))exit('No Direct Script Access Allowed');
	class Menu extends CI_Controller{
		
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
				
				$pages = $this->model_back->get_data('gocweb_menu');
				$config['total_rows'] = $pages->num_rows();
				$config['base_url'] = base_url()."index.php/backend/menu/index/";
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
				
				$data['menu_grid'] = $this->model_back->get_data_limit('gocweb_menu',$limit,$offset);
				$data['limit'] = $limit;
				$data['of'] = $pages->num_rows();
				
				$this->load->view('back/others/top');
				$this->load->view('back/others/left_side');
				$this->load->view('back/others/top-header');
				$this->load->view('back/menu/view',$data);
				$this->load->view('back/others/bottom');
			}
		}
		
		function content_add($id){
			$id = $this->uri->segment(4);
			$query['sub_menu'] = $this->db->query('select * from gocweb_menu_content where menu_refparent="'.$id.'"');
			$query['kode'] = $id;
			$cek = $this->session->userdata('success_login');
			if(!$cek){
				$this->load->view('back/login_view');
			}else{
				$this->load->view('back/others/top');
				$this->load->view('back/others/left_side');
				$this->load->view('back/others/top-header');
				$this->load->view('back/menu/add_content',$query);
				$this->load->view('back/others/bottom');
			}
		}
		
		function select_data_menu(){
			$select = $_GET["kode"];
			if($select == 'page'){
				$query = $this->db->query("select page_id, page_title from gocweb_page where page_status='posting' order by page_title");
				echo '
				<div style="width:100%">
					<label style="width:20%;float:left;text-align:left;margin-top:10px; margin-right:10px;">Select Pages*</label>
					<select style="width:60%;float:left;margin:0px;padding:7px;border:1px solid #ccc;" name="page">';
				foreach($query->result() as $db){
					echo '<option value="'.base_url().'index.php/home/page/single/'.$db->page_id.'">'.$db->page_title.'</option>';
				}
				echo '
					</select>
				</div>
				<div style="width:100%">
					<label style="width:20%;float:left;text-align:left;margin-top:10px; margin-right:10px;">Menu Label*</label>
					<input style="width:60%;float:left;margin:5px 0px;padding:7px;border:1px solid #ccc;" type="text" name="label"/>
				</div>';
			}else if($select == 'post'){
				$query = $this->db->query("select post_id, post_title from gocweb_post where post_status='posting' order by post_title");
				echo '
				<div style="width:100%">
					<label style="width:20%;float:left;text-align:left;margin-top:10px; margin-right:10px;">Select Post*</label>
					<select style="width:60%;float:left;margin:0px;padding:7px;border:1px solid #ccc;" name="post">';
				foreach($query->result() as $db){
					echo '<option value="'.base_url().'index.php/home/post/single/'.$db->post_id.'">'.$db->post_title.'</option>';
				}
				echo '
					</select>
				</div>
				<div style="width:100%">
					<label style="width:20%;float:left;text-align:left;margin-top:10px; margin-right:10px;">Menu Label*</label>
					<input style="width:60%;float:left;margin:5px 0px;padding:7px;border:1px solid #ccc;" type="text" name="label"/>
				</div>';
			}else if($select == 'post_category'){
				$query = $this->db->query("select category_id, category_name from gocweb_category order by category_name");
				echo '
				<div style="width:100%">
					<label style="width:20%;float:left;text-align:left;margin-top:10px; margin-right:10px;">Select Category*</label>
					<select style="width:60%;float:left;margin:0px;padding:7px;border:1px solid #ccc;" name="post_category">';
				foreach($query->result() as $db){
					echo '<option value="'.base_url().'index.php/home/post/category/'.$db->category_id.'">'.$db->category_name.'</option>';
				}
				echo '
					</select>
				</div>
				<div style="width:100%">
					<label style="width:20%;float:left;text-align:left;margin-top:10px; margin-right:10px;">Menu Label*</label>
					<input style="width:60%;float:left;margin:5px 0px;padding:7px;border:1px solid #ccc;" type="text" name="label"/>
				</div>';
			}else if($select == 'page_category'){
				$query = $this->db->query("select page_category_id, page_category_name from gocweb_page_category order by page_category_name");
				echo '
				<div style="width:100%">
					<label style="width:20%;float:left;text-align:left;margin-top:10px; margin-right:10px;">Select Category*</label>
					<select style="width:60%;float:left;margin:0px;padding:7px;border:1px solid #ccc;" name="page_category">';
				foreach($query->result() as $db){
					echo '<option value="'.base_url().'index.php/home/page/category/'.$db->page_category_id.'">'.$db->page_category_name.'</option>';
				}
				echo '
					</select>
				</div>
				<div style="width:100%">
					<label style="width:20%;float:left;text-align:left;margin-top:10px; margin-right:10px;">Menu Label*</label>
					<input style="width:60%;float:left;margin:5px 0px;padding:7px;border:1px solid #ccc;" type="text" name="label"/>
				</div>';
			}else{
				echo '
				<div style="width:100%">
					<label style="width:20%;float:left;text-align:left;margin-top:10px; margin-right:10px;">Menu Label*</label>
					<input style="width:60%;float:left;margin:5px 0px;padding:7px;border:1px solid #ccc;" type="text" name="label"/>
				</div>
				<div style="width:100%">
					<label style="width:20%;float:left;text-align:left;margin-top:10px; margin-right:10px;">URL</label>
					<input style="width:70%;float:left;margin:5px 0px;padding:7px;border:1px solid #ccc;" type="text" name="url"/>
				</div>';
			}
		}
		
		function select_data(){
			$select = $_GET["kode"];
			if($select == 'page'){
				$query = $this->db->query("select page_id, page_title from gocweb_page where page_status='posting' order by page_title");
				echo '<select style="width:30%;float:left;margin:5px;padding:7px;border:1px solid #ccc;" id="page-select" class="page-select" name="page">';
				foreach($query->result() as $db){
					echo '<option value="'.base_url().'index.php/home/page/single/'.$db->page_id.'">'.$db->page_title.'</option>';
				}
				echo '
				</select>
				<label style="float:left;margin:8px;">Label : </label>
				<input style="margin:5px;width:30%;float:left;margin:5px 0px;padding:7px;border:1px solid #ccc;" type="text" name="label"/>';
			}else if($select == 'post'){
				$query = $this->db->query("select post_id, post_title from gocweb_post where post_status='posting' order by post_title");
				echo '<select style="width:30%;float:left;margin:5px;padding:7px;border:1px solid #ccc;" id="page-select" class="page-select" name="post">';
				foreach($query->result() as $db){
					echo '<option value="'.base_url().'index.php/home/post/single/'.$db->post_id.'">'.$db->post_title.'</option>';
				}
				echo '
				</select>
				<label style="float:left;margin:8px;">Label : </label>
				<input style="margin:5px;width:30%;float:left;margin:5px 0px;padding:7px;border:1px solid #ccc;" type="text" name="label"/>';
			}else if($select == 'post_category'){
				$query = $this->db->query("select category_id, category_name from gocweb_category order by category_name");
				echo '<select style="width:30%;float:left;margin:5px;padding:7px;border:1px solid #ccc;" name="post_category">';
				foreach($query->result() as $db){
					echo '<option value="'.base_url().'index.php/home/post/category/'.$db->category_id.'">'.$db->category_name.'</option>';
				}
				echo '
				</select>
				<label style="float:left;margin:8px;">Label : </label>
				<input style="margin:5px;width:30%;float:left;margin:5px 0px;padding:7px;border:1px solid #ccc;" type="text" name="label"/>';
			}else if($select == 'page_category'){
				$query = $this->db->query("select page_category_id, page_category_name from gocweb_page_category order by page_category_name");
				echo '<select style="width:30%;float:left;margin:5px;padding:7px;border:1px solid #ccc;" name="page_category">';
				foreach($query->result() as $db){
					echo '<option value="'.base_url().'index.php/home/page/category/'.$db->page_category_id.'">'.$db->page_category_name.'</option>';
				}
				echo '
				</select>
				<label style="float:left;margin:8px;">Label : </label>
				<input style="margin:5px;width:30%;float:left;margin:5px 0px;padding:7px;border:1px solid #ccc;" type="text" name="label"/>';
			}else{
				echo '
				<label style="float:left;margin:8px 0px;">Label : </label>
				<input style="margin:5px;width:30%;float:left;padding:7px;border:1px solid #ccc;" type="text" name="label"/>
				<label style="float:left;margin:8px 0px;">URL : </label>
				<input style="margin:5px;width:30%;float:left;padding:7px;border:1px solid #ccc;" type="text" name="url"/>
				';
			}
		}
		
		function form_add(){
			$this->load->model('model_back');
			$cek = $this->session->userdata('success_login');
			if(!$cek){
				$this->load->view('back/login_view');
			}else{
				$data['kode'] = $this->model_back->getMaxKode('gocweb_menu', 'menu_id', 'MNU');
				$this->load->view('back/others/top');
				$this->load->view('back/others/left_side');
				$this->load->view('back/others/top-header');
				$this->load->view("back/menu/add",$data);
				$this->load->view('back/others/bottom');
			}
		}
		
		function add(){
			$this->load->model('model_back');
			$this->form_validation->set_rules('label','label menu','required');
			if($this->form_validation->run() == false){
				$this->form_add();
			}else{
				if($this->input->post('page')){
					$data['menu_id'] = $this->input->post('kode');
					$data['menu_name'] = $this->input->post('label');
					$data['menu_url'] = $this->input->post('page');
					$data['menu_remark'] = $this->input->post('remark');
					
					
					$data['menu_date_modify'] = date("Y-m-d H:i:s");
					
			
					$add_data = $this->model_back->get_insert('gocweb_menu',$data);
				
					if(!$add_data){
						$this->session->set_flashdata("add_result",'<div style="margin:10px 20px;width:auto;background-color:#ffffbf;font-size:12px;border-radius:3px;color:red;padding:10px;"><span style="color:red; font-size:12px;"><i class="fa fa-exclamation-triangle" style="color:red;font-size:16px;margin-right:5px;"></i>Sorry your entry is fail.. Please try again.. </span></div>');
						Header("Location:".base_url()."index.php/backend/menu/add/");
					}else{
						$this->session->set_flashdata("add_result",'<div style="margin:10px 20px;width:auto;background-color:#ffffbf;font-size:12px;border-radius:3px;color:red;padding:10px;"><span style="color:green; font-size:12px;"><i class="fa fa-check" style="color:green;font-size:16px;margin-right:5px;"></i>Insert data is success</span></div>');
						Header("Location:".base_url()."index.php/backend/menu/add/");
					}	
				}else if($this->input->post('post')){
					$data['menu_id'] = $this->input->post('kode');
					$data['menu_name'] = $this->input->post('label');
					$data['menu_url'] = $this->input->post('post');
					$data['menu_remark'] = $this->input->post('remark');
					
					
					$data['menu_date_modify'] = date("Y-m-d H:i:s");
					
			
					$add_data = $this->model_back->get_insert('gocweb_menu',$data);
				
					if(!$add_data){
						$this->session->set_flashdata("add_result",'<div style="margin:10px 20px;width:auto;background-color:#ffffbf;font-size:12px;border-radius:3px;color:red;padding:10px;"><span style="color:red; font-size:12px;"><i class="fa fa-exclamation-triangle" style="color:red;font-size:16px;margin-right:5px;"></i>Sorry your entry is fail.. Please try again.. </span></div>');
						Header("Location:".base_url()."index.php/backend/menu/add/");
					}else{
						$this->session->set_flashdata("add_result",'<div style="margin:10px 20px;width:auto;background-color:#ffffbf;font-size:12px;border-radius:3px;color:red;padding:10px;"><span style="color:green; font-size:12px;"><i class="fa fa-check" style="color:green;font-size:16px;margin-right:5px;"></i>Insert data is success</span></div>');
						Header("Location:".base_url()."index.php/backend/menu/add/");
					}	
				}else if($this->input->post('post_category')){
					$data['menu_id'] = $this->input->post('kode');
					$data['menu_name'] = $this->input->post('label');
					$data['menu_url'] = $this->input->post('post_category');
					$data['menu_remark'] = $this->input->post('remark');
					
					
					$data['menu_date_modify'] = date("Y-m-d H:i:s");
					
			
					$add_data = $this->model_back->get_insert('gocweb_menu',$data);
				
					if(!$add_data){
						$this->session->set_flashdata("add_result",'<div style="margin:10px 20px;width:auto;background-color:#ffffbf;font-size:12px;border-radius:3px;color:red;padding:10px;"><span style="color:red; font-size:12px;"><i class="fa fa-exclamation-triangle" style="color:red;font-size:16px;margin-right:5px;"></i>Sorry your entry is fail.. Please try again.. </span></div>');
						Header("Location:".base_url()."index.php/backend/menu/add/");
					}else{
						$this->session->set_flashdata("add_result",'<div style="margin:10px 20px;width:auto;background-color:#ffffbf;font-size:12px;border-radius:3px;color:red;padding:10px;"><span style="color:green; font-size:12px;"><i class="fa fa-check" style="color:green;font-size:16px;margin-right:5px;"></i>Insert data is success</span></div>');
						Header("Location:".base_url()."index.php/backend/menu/add/");
					}	
				}else if($this->input->post('page_category')){
					$data['menu_id'] = $this->input->post('kode');
					$data['menu_name'] = $this->input->post('label');
					$data['menu_url'] = $this->input->post('page_category');
					$data['menu_remark'] = $this->input->post('remark');
					
					
					$data['menu_date_modify'] = date("Y-m-d H:i:s");
					
			
					$add_data = $this->model_back->get_insert('gocweb_menu',$data);
				
					if(!$add_data){
						$this->session->set_flashdata("add_result",'<div style="margin:10px 20px;width:auto;background-color:#ffffbf;font-size:12px;border-radius:3px;color:red;padding:10px;"><span style="color:red; font-size:12px;"><i class="fa fa-exclamation-triangle" style="color:red;font-size:16px;margin-right:5px;"></i>Sorry your entry is fail.. Please try again.. </span></div>');
						Header("Location:".base_url()."index.php/backend/menu/add/");
					}else{
						$this->session->set_flashdata("add_result",'<div style="margin:10px 20px;width:auto;background-color:#ffffbf;font-size:12px;border-radius:3px;color:red;padding:10px;"><span style="color:green; font-size:12px;"><i class="fa fa-check" style="color:green;font-size:16px;margin-right:5px;"></i>Insert data is success</span></div>');
						Header("Location:".base_url()."index.php/backend/menu/add/");
					}	
				}else if($this->input->post('url')){
					$data['menu_id'] = $this->input->post('kode');
					$data['menu_name'] = $this->input->post('label');
					$data['menu_url'] = $this->input->post('url');
					$data['menu_remark'] = $this->input->post('remark');
					
					
					$data['menu_date_modify'] = date("Y-m-d H:i:s");
					
			
					$add_data = $this->model_back->get_insert('gocweb_menu',$data);
				
					if(!$add_data){
						$this->session->set_flashdata("add_result",'<div style="margin:10px 20px;width:auto;background-color:#ffffbf;font-size:12px;border-radius:3px;color:red;padding:10px;"><span style="color:red; font-size:12px;"><i class="fa fa-exclamation-triangle" style="color:red;font-size:16px;margin-right:5px;"></i>Sorry your entry is fail.. Please try again.. </span></div>');
						Header("Location:".base_url()."index.php/backend/menu/add/");
					}else{
						$this->session->set_flashdata("add_result",'<div style="margin:10px 20px;width:auto;background-color:#ffffbf;font-size:12px;border-radius:3px;color:red;padding:10px;"><span style="color:green; font-size:12px;"><i class="fa fa-check" style="color:green;font-size:16px;margin-right:5px;"></i>Insert data is success</span></div>');
						Header("Location:".base_url()."index.php/backend/menu/add/");
					}	
				}
			}
		}
		
		function add_content($id){
			$id = $this->uri->segment(4);
			$this->load->model('model_back');
			$this->form_validation->set_rules('label','label menu','required');
			if($this->form_validation->run() == false){
				$this->add_content();
			}else{
				if($this->input->post('page')){
					$data['menu_refparent'] = $id;
					$data['menu_content_label'] = $this->input->post('label');
					$data['menu_content_url'] = $this->input->post('page');
					
					
					//$data['menu_date_modify'] = date("Y-m-d H:i:s");
					
			
					$add_data = $this->model_back->get_insert('gocweb_menu_content',$data);
				
					if(!$add_data){
						$this->session->set_flashdata("add_result",'<div style="margin:10px 20px;width:auto;background-color:#ffffbf;font-size:12px;border-radius:3px;color:red;padding:10px;"><span style="color:red; font-size:12px;"><i class="fa fa-exclamation-triangle" style="color:red;font-size:16px;margin-right:5px;"></i>Sorry your entry is fail.. Please try again.. </span></div>');
						Header("Location:".base_url()."index.php/backend/menu/content_add/".$id);
					}else{
						$this->session->set_flashdata("add_result",'<div style="margin:10px 20px;width:auto;background-color:#ffffbf;font-size:12px;border-radius:3px;color:red;padding:10px;"><span style="color:green; font-size:12px;"><i class="fa fa-check" style="color:green;font-size:16px;margin-right:5px;"></i>Insert data is success</span></div>');
						Header("Location:".base_url()."index.php/backend/menu/content_add/".$id);
					}	
				}else if($this->input->post('post')){
					$data['menu_refparent'] = $id;
					$data['menu_content_label'] = $this->input->post('label');
					$data['menu_content_url'] = $this->input->post('post');
					
					
					//$data['menu_date_modify'] = date("Y-m-d H:i:s");
					
			
					$add_data = $this->model_back->get_insert('gocweb_menu_content',$data);
				
					if(!$add_data){
						$this->session->set_flashdata("add_result",'<div style="margin:10px 20px;width:auto;background-color:#ffffbf;font-size:12px;border-radius:3px;color:red;padding:10px;"><span style="color:red; font-size:12px;"><i class="fa fa-exclamation-triangle" style="color:red;font-size:16px;margin-right:5px;"></i>Sorry your entry is fail.. Please try again.. </span></div>');
						Header("Location:".base_url()."index.php/backend/menu/content_add/".$id);
					}else{
						$this->session->set_flashdata("add_result",'<div style="margin:10px 20px;width:auto;background-color:#ffffbf;font-size:12px;border-radius:3px;color:red;padding:10px;"><span style="color:green; font-size:12px;"><i class="fa fa-check" style="color:green;font-size:16px;margin-right:5px;"></i>Insert data is success</span></div>');
						Header("Location:".base_url()."index.php/backend/menu/content_add/".$id);
					}	
				}else if($this->input->post('page_category')){
					$data['menu_refparent'] = $id;
					$data['menu_content_label'] = $this->input->post('label');
					$data['menu_content_url'] = $this->input->post('page_category');
					
					
					//$data['menu_date_modify'] = date("Y-m-d H:i:s");
					
			
					$add_data = $this->model_back->get_insert('gocweb_menu_content',$data);
				
					if(!$add_data){
						$this->session->set_flashdata("add_result",'<div style="margin:10px 20px;width:auto;background-color:#ffffbf;font-size:12px;border-radius:3px;color:red;padding:10px;"><span style="color:red; font-size:12px;"><i class="fa fa-exclamation-triangle" style="color:red;font-size:16px;margin-right:5px;"></i>Sorry your entry is fail.. Please try again.. </span></div>');
						Header("Location:".base_url()."index.php/backend/menu/content_add/".$id);
					}else{
						$this->session->set_flashdata("add_result",'<div style="margin:10px 20px;width:auto;background-color:#ffffbf;font-size:12px;border-radius:3px;color:red;padding:10px;"><span style="color:green; font-size:12px;"><i class="fa fa-check" style="color:green;font-size:16px;margin-right:5px;"></i>Insert data is success</span></div>');
						Header("Location:".base_url()."index.php/backend/menu/content_add/".$id);
					}	
				}else if($this->input->post('post_category')){
					$data['menu_refparent'] = $id;
					$data['menu_content_label'] = $this->input->post('label');
					$data['menu_content_url'] = $this->input->post('post_category');
					
					
					//$data['menu_date_modify'] = date("Y-m-d H:i:s");
					
			
					$add_data = $this->model_back->get_insert('gocweb_menu_content',$data);
				
					if(!$add_data){
						$this->session->set_flashdata("add_result",'<div style="margin:10px 20px;width:auto;background-color:#ffffbf;font-size:12px;border-radius:3px;color:red;padding:10px;"><span style="color:red; font-size:12px;"><i class="fa fa-exclamation-triangle" style="color:red;font-size:16px;margin-right:5px;"></i>Sorry your entry is fail.. Please try again.. </span></div>');
						Header("Location:".base_url()."index.php/backend/menu/content_add/".$id);
					}else{
						$this->session->set_flashdata("add_result",'<div style="margin:10px 20px;width:auto;background-color:#ffffbf;font-size:12px;border-radius:3px;color:red;padding:10px;"><span style="color:green; font-size:12px;"><i class="fa fa-check" style="color:green;font-size:16px;margin-right:5px;"></i>Insert data is success</span></div>');
						Header("Location:".base_url()."index.php/backend/menu/content_add/".$id);
					}	
				}else if($this->input->post('url')){
					$data['menu_refparent'] = $id;
					$data['menu_content_label'] = $this->input->post('label');
					$data['menu_content_url'] = $this->input->post('url');
					
					
					//$data['menu_date_modify'] = date("Y-m-d H:i:s");
					
			
					$add_data = $this->model_back->get_insert('gocweb_menu_content',$data);
				
					if(!$add_data){
						$this->session->set_flashdata("add_result",'<div style="margin:10px 20px;width:auto;background-color:#ffffbf;font-size:12px;border-radius:3px;color:red;padding:10px;"><span style="color:red; font-size:12px;"><i class="fa fa-exclamation-triangle" style="color:red;font-size:16px;margin-right:5px;"></i>Sorry your entry is fail.. Please try again.. </span></div>');
						Header("Location:".base_url()."index.php/backend/menu/content_add/".$id);
					}else{
						$this->session->set_flashdata("add_result",'<div style="margin:10px 20px;width:auto;background-color:#ffffbf;font-size:12px;border-radius:3px;color:red;padding:10px;"><span style="color:green; font-size:12px;"><i class="fa fa-check" style="color:green;font-size:16px;margin-right:5px;"></i>Insert data is success</span></div>');
						Header("Location:".base_url()."index.php/backend/menu/content_add/".$id);
					}	
				}
			}
		}
		
		function delete_content($id){
			//$this->load->model('model_back');
			$id_parent = $this->uri->segment(4);
			$id_child = $this->uri->segment(5);
			
			$delete = $this->db->query("delete from gocweb_menu_content where menu_content_id='".$id_child."' and menu_refparent='".$id_parent."'");
			
			if(!$delete){
				$this->session->set_flashdata("add_result",'<div style="margin:10px 20px;width:auto;background-color:#ffffbf;font-size:12px;border-radius:3px;color:red;padding:10px;"><span style="color:red; font-size:12px;"><i class="fa fa-check" style="color:red;font-size:16px;margin-right:5px;"></i>Sorry, delete proses id fail... Please try again...</span></div>');
				Header("Location:".base_url()."index.php/backend/menu/content_add/".$id_parent);
			}else{
				$this->session->set_flashdata("add_result",'<div style="margin:10px 20px;width:auto;background-color:#ffffbf;font-size:12px;border-radius:3px;color:red;padding:10px;"><span style="color:green; font-size:12px;"><i class="fa fa-check" style="color:green;font-size:16px;margin-right:5px;"></i>Delete data is success</span></div>');
				Header("Location:".base_url()."index.php/backend/menu/content_add/".$id_parent);
			}
		}
		
		function form_edit($id){
			$id = $this->uri->segment(4);
			$this->load->model('model_back');
			$menu_read = $this->model_back->get_data_where('menu_id',$id,'gocweb_menu');
			foreach($menu_read->result() as $db){
				$data['menu_id'] = $db->menu_id;
				$data['menu_name'] = $db->menu_name;
				$data['menu_url'] = $db->menu_url;
				$data['menu_remark'] = $db->menu_remark;
				//$data['category'] = $db->post_category;
				//$data['tag'] = $db->post_tag;
			}
			//$data['category'] = $this->db->query("select category_id, category_name from gocweb_category order by category_name");
			//$data['tag'] = $this->db->query("select tag_id, tag_name from gocweb_tag order by tag_name");
			$this->load->view('back/others/top');
			$this->load->view('back/others/left_side');
			$this->load->view('back/others/top-header');
			$this->load->view("back/menu/form_edit",$data);
			$this->load->view('back/others/bottom');
		}
		
		function edit($id){
			$this->load->model('model_back');
			$id = $this->uri->segment(4);
				if($this->input->post('page')){
					$data['menu_name'] = $this->input->post('label');
					$data['menu_url'] = $this->input->post('page');
					$data['menu_remark'] = $this->input->post('remark');
					
					
					$data['menu_date_modify'] = date("Y-m-d H:i:s");
					
			
					$add_data = $this->model_back->get_update('gocweb_menu',$data,'menu_id',$id);
				
					if(!$add_data){
						$this->session->set_flashdata("add_result",'<div style="margin:10px 20px;width:auto;background-color:#ffffbf;font-size:12px;border-radius:3px;color:red;padding:10px;"><span style="color:red; font-size:12px;"><i class="fa fa-exclamation-triangle" style="color:red;font-size:16px;margin-right:5px;"></i>Sorry your entry is fail.. Please try again.. </span></div>');
						Header("Location:".base_url()."index.php/backend/menu/form_edit/".$id);
					}else{
						$this->session->set_flashdata("add_result",'<div style="margin:10px 20px;width:auto;background-color:#ffffbf;font-size:12px;border-radius:3px;color:red;padding:10px;"><span style="color:green; font-size:12px;"><i class="fa fa-check" style="color:green;font-size:16px;margin-right:5px;"></i>Insert data is success</span></div>');
						Header("Location:".base_url()."index.php/backend/menu/form_edit/".$id);
					}	
				}else if($this->input->post('post')){
					$data['menu_name'] = $this->input->post('label');
					$data['menu_url'] = $this->input->post('post');
					$data['menu_remark'] = $this->input->post('remark');
					
					
					$data['menu_date_modify'] = date("Y-m-d H:i:s");
					
			
					$add_data = $this->model_back->get_update('gocweb_menu',$data,'menu_id',$id);
				
					if(!$add_data){
						$this->session->set_flashdata("add_result",'<div style="margin:10px 20px;width:auto;background-color:#ffffbf;font-size:12px;border-radius:3px;color:red;padding:10px;"><span style="color:red; font-size:12px;"><i class="fa fa-exclamation-triangle" style="color:red;font-size:16px;margin-right:5px;"></i>Sorry your entry is fail.. Please try again.. </span></div>');
						Header("Location:".base_url()."index.php/backend/menu/form_edit/".$id);
					}else{
						$this->session->set_flashdata("add_result",'<div style="margin:10px 20px;width:auto;background-color:#ffffbf;font-size:12px;border-radius:3px;color:red;padding:10px;"><span style="color:green; font-size:12px;"><i class="fa fa-check" style="color:green;font-size:16px;margin-right:5px;"></i>Insert data is success</span></div>');
						Header("Location:".base_url()."index.php/backend/menu/form_edit/".$id);
					}	
				}else if($this->input->post('post_category')){
					$data['menu_name'] = $this->input->post('label');
					$data['menu_url'] = $this->input->post('post_category');
					$data['menu_remark'] = $this->input->post('remark');
					
					
					$data['menu_date_modify'] = date("Y-m-d H:i:s");
					
			
					$add_data = $this->model_back->get_update('gocweb_menu',$data,'menu_id',$id);
				
					if(!$add_data){
						$this->session->set_flashdata("add_result",'<div style="margin:10px 20px;width:auto;background-color:#ffffbf;font-size:12px;border-radius:3px;color:red;padding:10px;"><span style="color:red; font-size:12px;"><i class="fa fa-exclamation-triangle" style="color:red;font-size:16px;margin-right:5px;"></i>Sorry your entry is fail.. Please try again.. </span></div>');
						Header("Location:".base_url()."index.php/backend/menu/form_edit/".$id);
					}else{
						$this->session->set_flashdata("add_result",'<div style="margin:10px 20px;width:auto;background-color:#ffffbf;font-size:12px;border-radius:3px;color:red;padding:10px;"><span style="color:green; font-size:12px;"><i class="fa fa-check" style="color:green;font-size:16px;margin-right:5px;"></i>Insert data is success</span></div>');
						Header("Location:".base_url()."index.php/backend/menu/form_edit/".$id);
					}	
				}else if($this->input->post('page_category')){
					$data['menu_name'] = $this->input->post('label');
					$data['menu_url'] = $this->input->post('page_category');
					$data['menu_remark'] = $this->input->post('remark');
					
					
					$data['menu_date_modify'] = date("Y-m-d H:i:s");
					
			
					$add_data = $this->model_back->get_update('gocweb_menu',$data,'menu_id',$id);
				
					if(!$add_data){
						$this->session->set_flashdata("add_result",'<div style="margin:10px 20px;width:auto;background-color:#ffffbf;font-size:12px;border-radius:3px;color:red;padding:10px;"><span style="color:red; font-size:12px;"><i class="fa fa-exclamation-triangle" style="color:red;font-size:16px;margin-right:5px;"></i>Sorry your entry is fail.. Please try again.. </span></div>');
						Header("Location:".base_url()."index.php/backend/menu/form_edit/".$id);
					}else{
						$this->session->set_flashdata("add_result",'<div style="margin:10px 20px;width:auto;background-color:#ffffbf;font-size:12px;border-radius:3px;color:red;padding:10px;"><span style="color:green; font-size:12px;"><i class="fa fa-check" style="color:green;font-size:16px;margin-right:5px;"></i>Insert data is success</span></div>');
						Header("Location:".base_url()."index.php/backend/menu/form_edit/".$id);
					}	
				}else if($this->input->post('url')){
					$data['menu_name'] = $this->input->post('label');
					$data['menu_url'] = $this->input->post('url');
					$data['menu_remark'] = $this->input->post('remark');
					
					
					$data['menu_date_modify'] = date("Y-m-d H:i:s");
					
			
					$add_data = $this->model_back->get_update('gocweb_menu',$data,'menu_id',$id);
				
					if(!$add_data){
						$this->session->set_flashdata("add_result",'<div style="margin:10px 20px;width:auto;background-color:#ffffbf;font-size:12px;border-radius:3px;color:red;padding:10px;"><span style="color:red; font-size:12px;"><i class="fa fa-exclamation-triangle" style="color:red;font-size:16px;margin-right:5px;"></i>Sorry your entry is fail.. Please try again.. </span></div>');
						Header("Location:".base_url()."index.php/backend/menu/form_edit/".$id);
					}else{
						$this->session->set_flashdata("add_result",'<div style="margin:10px 20px;width:auto;background-color:#ffffbf;font-size:12px;border-radius:3px;color:red;padding:10px;"><span style="color:green; font-size:12px;"><i class="fa fa-check" style="color:green;font-size:16px;margin-right:5px;"></i>Insert data is success</span></div>');
						Header("Location:".base_url()."index.php/backend/menu/form_edit/".$id);
					}	
				}else{
					$data['menu_remark'] = $this->input->post('remark');
					$data['menu_date_modify'] = date("Y-m-d H:i:s");
					
			
					$add_data = $this->model_back->get_update('gocweb_menu',$data,'menu_id',$id);
				
					if(!$add_data){
						$this->session->set_flashdata("add_result",'<div style="margin:10px 20px;width:auto;background-color:#ffffbf;font-size:12px;border-radius:3px;color:red;padding:10px;"><span style="color:red; font-size:12px;"><i class="fa fa-exclamation-triangle" style="color:red;font-size:16px;margin-right:5px;"></i>Sorry your entry is fail.. Please try again.. </span></div>');
						Header("Location:".base_url()."index.php/backend/menu/form_edit/".$id);
					}else{
						$this->session->set_flashdata("add_result",'<div style="margin:10px 20px;width:auto;background-color:#ffffbf;font-size:12px;border-radius:3px;color:red;padding:10px;"><span style="color:green; font-size:12px;"><i class="fa fa-check" style="color:green;font-size:16px;margin-right:5px;"></i>Insert data is success</span></div>');
						Header("Location:".base_url()."index.php/backend/menu/form_edit/".$id);
					}
				}		
		}
		
		function delete($id){
			$this->load->model('model_back');
			$id = $this->uri->segment(4);
			
			$delete = $this->model_back->get_delete('gocweb_menu','menu_id',$id);
			
			if(!$delete){
				$this->session->set_flashdata("modify_result",'<div style="margin:10px 20px;width:auto;background-color:#ffffbf;font-size:12px;border-radius:3px;color:red;padding:10px;"><span style="color:red; font-size:12px;"><i class="fa fa-check" style="color:red;font-size:16px;margin-right:5px;"></i>Sorry, delete proses id fail... Please try again...</span></div>');
				Header("Location:".base_url()."index.php/backend/menu/");
			}else{
				$this->session->set_flashdata("modify_result",'<div style="margin:10px 20px;width:auto;background-color:#ffffbf;font-size:12px;border-radius:3px;color:red;padding:10px;"><span style="color:green; font-size:12px;"><i class="fa fa-check" style="color:green;font-size:16px;margin-right:5px;"></i>Delete data is success</span></div>');
				Header("Location:".base_url()."index.php/backend/menu/");
			}
		}
		
	}
/*End of file menu.php*/
/*Location:.application/controllers/menu.php*/