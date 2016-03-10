<?php if(!defined('BASEPATH'))exit('No Direct Script Access Allowed');

	class Banner extends CI_Controller{
		function __construct(){
			parent::__construct();
			date_default_timezone_set('Asia/Jakarta');
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
				
				$banner = $this->model_back->get_data('gocweb_banner');
				$config['total_rows'] = $banner->num_rows();
				$config['base_url'] = base_url()."index.php/backend/banner/index/";
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
				
				$data['banner_grid'] = $this->model_back->get_data_limit('gocweb_banner',$limit,$offset);
				$data['limit'] = $limit;
				$data['of'] = $banner->num_rows();
				
				$this->load->view('back/others/top');
				$this->load->view('back/others/left_side');
				$this->load->view('back/others/top-header');
				$this->load->view('back/banner/view',$data);
				$this->load->view('back/others/bottom');
			}
		}
		
		function form_add(){
			$cek = $this->session->userdata('success_login');
			if(!$cek){
				$this->load->view('back/login_view');
			}else{
				$data['id'] = $this->model_back->getMaxKode('gocweb_banner', 'banner_id', 'BNR');
				$this->load->view('back/others/top');
				$this->load->view('back/others/left_side');
				$this->load->view('back/others/top-header');
				$this->load->view('back/banner/form_add',$data);
				$this->load->view('back/others/bottom');
			}
		}
		
		function content_add($id){
			$id = $this->uri->segment(4);
			$query['sub_banner'] = $this->db->query('select * from gocweb_banner_content where banner_contect_parent="'.$id.'"');
			$query['kode'] = $id;
			$cek = $this->session->userdata('success_login');
			if(!$cek){
				$this->load->view('back/login_view');
			}else{
				$this->load->view('back/others/top');
				$this->load->view('back/others/left_side');
				$this->load->view('back/others/top-header');
				$this->load->view('back/banner/form_add_content',$query);
				$this->load->view('back/others/bottom');
			}
		}
		
		function select_data_menu(){
			$select = $_GET["kode"];
			if($select == 'page'){
				$query = $this->db->query("select page_id, page_title from gocweb_page where page_status='posting' order by page_title");
				echo '
				<div style="width:100%">
					<label style="width:30%;float:left;text-align:right;margin-top:10px; margin-right:10px;">Select Pages*</label>
					<select style="width:60%;float:left;margin:0px;padding:7px;border:1px solid #ccc;" name="page">';
				foreach($query->result() as $db){
					echo '<option value="'.base_url().'index.php/home/page/single/'.$db->page_id.'">'.$db->page_title.'</option>';
				}
				echo '
					</select>
				</div>
				';
			}else if($select == 'post'){
				$query = $this->db->query("select post_id, post_title from gocweb_post where post_status='posting' order by post_title");
				echo '
				<div style="width:100%">
					<label style="width:30%;float:left;text-align:right;margin-top:10px; margin-right:10px;">Select Post*</label>
					<select style="width:60%;float:left;margin:0px;padding:7px;border:1px solid #ccc;" name="post">';
				foreach($query->result() as $db){
					echo '<option value="'.base_url().'index.php/home/post/single/'.$db->post_id.'">'.$db->post_title.'</option>';
				}
				echo '
					</select>
				</div>
				';
			}else if($select == 'post_category'){
				$query = $this->db->query("select category_id, category_name from gocweb_category order by category_name");
				echo '
				<div style="width:100%">
					<label style="width:30%;float:left;text-align:right;margin-top:10px; margin-right:10px;">Select Category*</label>
					<select style="width:60%;float:left;margin:0px;padding:7px;border:1px solid #ccc;" name="post_category">';
				foreach($query->result() as $db){
					echo '<option value="'.base_url().'index.php/home/category/'.$db->category_id.'">'.$db->category_name.'</option>';
				}
				echo '
					</select>
				</div>
				';
			}else if($select == 'page_category'){
				$query = $this->db->query("select page_category_id, page_category_name from gocweb_page_category order by page_category_name");
				echo '
				<div style="width:100%">
					<label style="width:30%;float:left;text-align:right;margin-top:10px; margin-right:10px;">Select Category*</label>
					<select style="width:60%;float:left;margin:0px;padding:7px;border:1px solid #ccc;" name="page_category">';
				foreach($query->result() as $db){
					echo '<option value="'.base_url().'index.php/home/page/category/'.$db->page_category_id.'">'.$db->page_category_name.'</option>';
				}
				echo '
					</select>
				</div>
				';
			}else{
				echo '
				<div style="width:100%">
					<label style="width:30%;float:left;text-align:right;margin-top:10px; margin-right:10px;">URL*</label>
					<input style="width:60%;float:left;margin:5px 0px;padding:7px;border:1px solid #ccc;" type="text" name="url"/>
				</div>
				';
			}
		}
		
		function add(){
			$this->load->model('model_back');
			$this->form_validation->set_rules('title','title','required');
			$this->form_validation->set_rules('desc','description','required');
			
			if(empty($_FILES['pict']['name'])){
				$this->form_validation->set_rules('pict', 'image banner', 'required');
			}
			
			if($this->form_validation->run() == false){
				$this->form_add();
			}else{
				$configu['upload_path'] = './uploads/banner/original/';
				$configu['upload_url'] = base_url().'uploads/banner/original/';
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
					$config1['new_image'] = 'uploads/banner/thumb/'.$upload_data['file_name'];
					//$config1['create_thumb'] = TRUE;
					$config1['maintain_ratio'] = TRUE;
					$config1['width'] = 225;
					$config1['height'] = 165;

					$this->load->library('image_lib', $config1);

					if(!$this->image_lib->resize()){
						echo $this->image_lib->display_errors();
					}
					
					if($this->input->post('page')){
						$data['banner_id'] = $this->input->post('id');
						$data['banner_title'] = $this->input->post('title');
						$data['banner_desc'] = $this->input->post('desc');
						$data['banner_url'] = $this->input->post('page');
						$data['banner_background'] = $upload_data['file_name'];
						
						
						$data['banner_date_modify'] = date("Y-m-d H:i:s");
						
				
						$add_data = $this->model_back->get_insert('gocweb_banner',$data);
					
						if(!$add_data){
							$this->session->set_flashdata("add_result",'<div style="margin:10px 20px;width:auto;background-color:#ffffbf;font-size:12px;border-radius:3px;color:red;padding:10px;"><span style="color:red; font-size:12px;"><i class="fa fa-exclamation-triangle" style="color:red;font-size:16px;margin-right:5px;"></i>Sorry your entry is fail.. Please try again.. </span></div>');
							Header("Location:".base_url()."index.php/backend/banner/add/");
						}else{
							$this->session->set_flashdata("add_result",'<div style="margin:10px 20px;width:auto;background-color:#ffffbf;font-size:12px;border-radius:3px;color:red;padding:10px;"><span style="color:green; font-size:12px;"><i class="fa fa-check" style="color:green;font-size:16px;margin-right:5px;"></i>Insert data is success</span></div>');
							Header("Location:".base_url()."index.php/backend/banner/add/");
						}	
					}else if($this->input->post('post')){
						$data['banner_id'] = $this->input->post('id');
						$data['banner_title'] = $this->input->post('title');
						$data['banner_desc'] = $this->input->post('desc');
						$data['banner_url'] = $this->input->post('post');
						$data['banner_background'] = $upload_data['file_name'];
						
						
						$data['banner_date_modify'] = date("Y-m-d H:i:s");
						
				
						$add_data = $this->model_back->get_insert('gocweb_banner',$data);
					
						if(!$add_data){
							$this->session->set_flashdata("add_result",'<div style="margin:10px 20px;width:auto;background-color:#ffffbf;font-size:12px;border-radius:3px;color:red;padding:10px;"><span style="color:red; font-size:12px;"><i class="fa fa-exclamation-triangle" style="color:red;font-size:16px;margin-right:5px;"></i>Sorry your entry is fail.. Please try again.. </span></div>');
							Header("Location:".base_url()."index.php/backend/banner/add/");
						}else{
							$this->session->set_flashdata("add_result",'<div style="margin:10px 20px;width:auto;background-color:#ffffbf;font-size:12px;border-radius:3px;color:red;padding:10px;"><span style="color:green; font-size:12px;"><i class="fa fa-check" style="color:green;font-size:16px;margin-right:5px;"></i>Insert data is success</span></div>');
							Header("Location:".base_url()."index.php/backend/banner/add/");
						}	
					}else if($this->input->post('post_category')){
						$data['banner_id'] = $this->input->post('id');
						$data['banner_title'] = $this->input->post('title');
						$data['banner_desc'] = $this->input->post('desc');
						$data['banner_url'] = $this->input->post('post_category');
						$data['banner_background'] = $upload_data['file_name'];
						
						
						$data['banner_date_modify'] = date("Y-m-d H:i:s");
						
				
						$add_data = $this->model_back->get_insert('gocweb_banner',$data);
					
						if(!$add_data){
							$this->session->set_flashdata("add_result",'<div style="margin:10px 20px;width:auto;background-color:#ffffbf;font-size:12px;border-radius:3px;color:red;padding:10px;"><span style="color:red; font-size:12px;"><i class="fa fa-exclamation-triangle" style="color:red;font-size:16px;margin-right:5px;"></i>Sorry your entry is fail.. Please try again.. </span></div>');
							Header("Location:".base_url()."index.php/backend/banner/add/");
						}else{
							$this->session->set_flashdata("add_result",'<div style="margin:10px 20px;width:auto;background-color:#ffffbf;font-size:12px;border-radius:3px;color:red;padding:10px;"><span style="color:green; font-size:12px;"><i class="fa fa-check" style="color:green;font-size:16px;margin-right:5px;"></i>Insert data is success</span></div>');
							Header("Location:".base_url()."index.php/backend/banner/add/");
						}
					}else if($this->input->post('page_category')){
						$data['banner_id'] = $this->input->post('id');
						$data['banner_title'] = $this->input->post('title');
						$data['banner_desc'] = $this->input->post('desc');
						$data['banner_url'] = $this->input->post('page_category');
						$data['banner_background'] = $upload_data['file_name'];
						
						
						$data['banner_date_modify'] = date("Y-m-d H:i:s");
						
				
						$add_data = $this->model_back->get_insert('gocweb_banner',$data);
					
						if(!$add_data){
							$this->session->set_flashdata("add_result",'<div style="margin:10px 20px;width:auto;background-color:#ffffbf;font-size:12px;border-radius:3px;color:red;padding:10px;"><span style="color:red; font-size:12px;"><i class="fa fa-exclamation-triangle" style="color:red;font-size:16px;margin-right:5px;"></i>Sorry your entry is fail.. Please try again.. </span></div>');
							Header("Location:".base_url()."index.php/backend/banner/add/");
						}else{
							$this->session->set_flashdata("add_result",'<div style="margin:10px 20px;width:auto;background-color:#ffffbf;font-size:12px;border-radius:3px;color:red;padding:10px;"><span style="color:green; font-size:12px;"><i class="fa fa-check" style="color:green;font-size:16px;margin-right:5px;"></i>Insert data is success</span></div>');
							Header("Location:".base_url()."index.php/backend/banner/add/");
						}	
					}else if($this->input->post('url')){
						$data['banner_id'] = $this->input->post('id');
						$data['banner_title'] = $this->input->post('title');
						$data['banner_desc'] = $this->input->post('desc');
						$data['banner_url'] = $this->input->post('url');
						$data['banner_background'] = $upload_data['file_name'];
						
						
						$data['banner_date_modify'] = date("Y-m-d H:i:s");
						
				
						$add_data = $this->model_back->get_insert('gocweb_banner',$data);
					
						if(!$add_data){
							$this->session->set_flashdata("add_result",'<div style="margin:10px 20px;width:auto;background-color:#ffffbf;font-size:12px;border-radius:3px;color:red;padding:10px;"><span style="color:red; font-size:12px;"><i class="fa fa-exclamation-triangle" style="color:red;font-size:16px;margin-right:5px;"></i>Sorry your entry is fail.. Please try again.. </span></div>');
							Header("Location:".base_url()."index.php/backend/banner/add/");
						}else{
							$this->session->set_flashdata("add_result",'<div style="margin:10px 20px;width:auto;background-color:#ffffbf;font-size:12px;border-radius:3px;color:red;padding:10px;"><span style="color:green; font-size:12px;"><i class="fa fa-check" style="color:green;font-size:16px;margin-right:5px;"></i>Insert data is success</span></div>');
							Header("Location:".base_url()."index.php/backend/banner/add/");
						}	
					}
				}
			}
		}
		
		function add_content($id){
			$id = $this->uri->segment(4);
			$this->load->model('model_back');
			$this->form_validation->set_rules('position','Animation Fade Position','required');
			$this->form_validation->set_rules('x','Coordinate x','required');
			$this->form_validation->set_rules('y','Coordinate y','required');
			$this->form_validation->set_rules('speed','Speed','required');
			$this->form_validation->set_rules('start','Start Position','required');
			$this->form_validation->set_rules('animation','Type Animation','required');
			
			if(empty($_FILES['pict']['name'])){
				$this->form_validation->set_rules('pict', 'Image Text', 'required');
			}
			
			if($this->form_validation->run() == false){
				$this->add_content($id);
			}else{
				$configu['upload_path'] = './uploads/banner/content/';
				$configu['upload_url'] = base_url().'uploads/banner/content/';
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
				
					//$config1['image_library'] = 'GD2';
					//$config1['source_image'] = $upload_data['full_path'];
					//$config1['new_image'] = 'uploads/banner/thumb/'.$upload_data['file_name'];
					//$config1['create_thumb'] = TRUE;
					//$config1['maintain_ratio'] = TRUE;
					//$config1['width'] = 225;
					//$config1['height'] = 165;

					//$this->load->library('image_lib', $config1);

					//if(!$this->image_lib->resize()){
					//	echo $this->image_lib->display_errors();
					//}
					
					$data['banner_contect_parent'] = $id;
					$data['banner_content_post_animation'] = $this->input->post('position');
					$data['banner_content_x'] = $this->input->post('x');
					$data['banner_content_y'] = $this->input->post('y');
					$data['banner_content_speed'] = $this->input->post('speed');
					$data['banner_content_start'] = $this->input->post('start');
					$data['banner_content_animation'] = $this->input->post('animation');
					$data['banner_pict'] = $upload_data['file_name'];
					
					
			
					$add_data = $this->model_back->get_insert('gocweb_banner_content',$data);
				
					if(!$add_data){
						$this->session->set_flashdata("add_result",'<div style="margin:10px 20px;width:auto;background-color:#ffffbf;font-size:12px;border-radius:3px;color:red;padding:10px;"><span style="color:red; font-size:12px;"><i class="fa fa-exclamation-triangle" style="color:red;font-size:16px;margin-right:5px;"></i>Sorry your entry is fail.. Please try again.. </span></div>');
						Header("Location:".base_url()."index.php/backend/banner/content_add/".$id);
					}else{
						$this->session->set_flashdata("add_result",'<div style="margin:10px 20px;width:auto;background-color:#ffffbf;font-size:12px;border-radius:3px;color:red;padding:10px;"><span style="color:green; font-size:12px;"><i class="fa fa-check" style="color:green;font-size:16px;margin-right:5px;"></i>Insert data is success</span></div>');
						Header("Location:".base_url()."index.php/backend/banner/content_add/".$id);
					}
				}
			}
		}
		
		function form_edit($id){
			$id = $this->uri->segment(4);
			$this->load->model('model_back');
			$banner_read = $this->model_back->get_data_where('banner_id',$id,'gocweb_banner');
			foreach($banner_read->result() as $db){
				$data['id'] = $db->banner_id;
				$data['title'] = $db->banner_title;
				$data['desc'] = $db->banner_desc;
				$data['url'] = $db->banner_url;
				$data['pict'] = $db->banner_background;
			}
			$this->load->view('back/others/top');
			$this->load->view('back/others/left_side');
			$this->load->view('back/others/top-header');
			$this->load->view("back/banner/form_edit",$data);
			$this->load->view('back/others/bottom');
		}
		
		function edit($id){
			$this->load->model('model_back');
			$this->form_validation->set_rules('title','title','required');
			$this->form_validation->set_rules('desc','description','required');
			
			if($this->form_validation->run() == false){
				$this->form_edit($this->uri->segment(4));
			}else{
				if(empty($_FILES['pict']['name'])){
					if($this->input->post('page')){
						$id = $this->uri->segment(4);
						$data['banner_title'] = $this->input->post('title');
						$data['banner_desc'] = $this->input->post('desc');
						$data['banner_url'] = $this->input->post('page');
						
						
						$data['banner_date_modify'] = date("Y-m-d H:i:s");
						
				
						$add_data = $this->model_back->get_update('gocweb_banner',$data,'banner_id',$id);
					
						if(!$add_data){
							$this->session->set_flashdata("add_result",'<div style="margin:10px 20px;width:auto;background-color:#ffffbf;font-size:12px;border-radius:3px;color:red;padding:10px;"><span style="color:red; font-size:12px;"><i class="fa fa-exclamation-triangle" style="color:red;font-size:16px;margin-right:5px;"></i>Sorry your entry is fail.. Please try again.. </span></div>');
							Header("Location:".base_url()."index.php/backend/banner/form_edit/".$id);
						}else{
							$this->session->set_flashdata("add_result",'<div style="margin:10px 20px;width:auto;background-color:#ffffbf;font-size:12px;border-radius:3px;color:red;padding:10px;"><span style="color:green; font-size:12px;"><i class="fa fa-check" style="color:green;font-size:16px;margin-right:5px;"></i>Update data is success</span></div>');
							Header("Location:".base_url()."index.php/backend/banner/form_edit/".$id);
						}	
					}else if($this->input->post('post')){
						$id = $this->input->post('id');
						$data['banner_title'] = $this->input->post('title');
						$data['banner_desc'] = $this->input->post('desc');
						$data['banner_url'] = $this->input->post('post');
						
						
						$data['banner_date_modify'] = date("Y-m-d H:i:s");
						
				
						$add_data = $this->model_back->get_update('gocweb_banner',$data,'banner_id',$id);
					
						if(!$add_data){
							$this->session->set_flashdata("add_result",'<div style="margin:10px 20px;width:auto;background-color:#ffffbf;font-size:12px;border-radius:3px;color:red;padding:10px;"><span style="color:red; font-size:12px;"><i class="fa fa-exclamation-triangle" style="color:red;font-size:16px;margin-right:5px;"></i>Sorry your entry is fail.. Please try again.. </span></div>');
							Header("Location:".base_url()."index.php/backend/banner/form_edit/".$id);
						}else{
							$this->session->set_flashdata("add_result",'<div style="margin:10px 20px;width:auto;background-color:#ffffbf;font-size:12px;border-radius:3px;color:red;padding:10px;"><span style="color:green; font-size:12px;"><i class="fa fa-check" style="color:green;font-size:16px;margin-right:5px;"></i>Update data is success</span></div>');
							Header("Location:".base_url()."index.php/backend/banner/form_edit/".$id);
						}	
					}else if($this->input->post('post_category')){
						$id = $this->input->post('id');
						$data['banner_title'] = $this->input->post('title');
						$data['banner_desc'] = $this->input->post('desc');
						$data['banner_url'] = $this->input->post('post_category');
						
						
						$data['banner_date_modify'] = date("Y-m-d H:i:s");
						
				
						$add_data = $this->model_back->get_update('gocweb_banner',$data,'banner_id',$id);
					
						if(!$add_data){
							$this->session->set_flashdata("add_result",'<div style="margin:10px 20px;width:auto;background-color:#ffffbf;font-size:12px;border-radius:3px;color:red;padding:10px;"><span style="color:red; font-size:12px;"><i class="fa fa-exclamation-triangle" style="color:red;font-size:16px;margin-right:5px;"></i>Sorry your entry is fail.. Please try again.. </span></div>');
							Header("Location:".base_url()."index.php/backend/banner/form_edit/".$id);
						}else{
							$this->session->set_flashdata("add_result",'<div style="margin:10px 20px;width:auto;background-color:#ffffbf;font-size:12px;border-radius:3px;color:red;padding:10px;"><span style="color:green; font-size:12px;"><i class="fa fa-check" style="color:green;font-size:16px;margin-right:5px;"></i>Update data is success</span></div>');
							Header("Location:".base_url()."index.php/backend/banner/form_edit/".$id);
						}
					}else if($this->input->post('page_category')){
						$id = $this->input->post('id');
						$data['banner_title'] = $this->input->post('title');
						$data['banner_desc'] = $this->input->post('desc');
						$data['banner_url'] = $this->input->post('page_category');
						
						
						$data['banner_date_modify'] = date("Y-m-d H:i:s");
						
				
						$add_data = $this->model_back->get_update('gocweb_banner',$data,'banner_id',$id);
					
						if(!$add_data){
							$this->session->set_flashdata("add_result",'<div style="margin:10px 20px;width:auto;background-color:#ffffbf;font-size:12px;border-radius:3px;color:red;padding:10px;"><span style="color:red; font-size:12px;"><i class="fa fa-exclamation-triangle" style="color:red;font-size:16px;margin-right:5px;"></i>Sorry your entry is fail.. Please try again.. </span></div>');
							Header("Location:".base_url()."index.php/backend/banner/form_edit/".$id);
						}else{
							$this->session->set_flashdata("add_result",'<div style="margin:10px 20px;width:auto;background-color:#ffffbf;font-size:12px;border-radius:3px;color:red;padding:10px;"><span style="color:green; font-size:12px;"><i class="fa fa-check" style="color:green;font-size:16px;margin-right:5px;"></i>Update data is success</span></div>');
							Header("Location:".base_url()."index.php/backend/banner/form_edit/".$id);
						}	
					}else if($this->input->post('url')){
						$id = $this->input->post('id');
						$data['banner_title'] = $this->input->post('title');
						$data['banner_desc'] = $this->input->post('desc');
						$data['banner_url'] = $this->input->post('url');
						
						
						$data['banner_date_modify'] = date("Y-m-d H:i:s");
						
				
						$add_data = $this->model_back->get_update('gocweb_banner',$data,'banner_id',$id);
					
						if(!$add_data){
							$this->session->set_flashdata("add_result",'<div style="margin:10px 20px;width:auto;background-color:#ffffbf;font-size:12px;border-radius:3px;color:red;padding:10px;"><span style="color:red; font-size:12px;"><i class="fa fa-exclamation-triangle" style="color:red;font-size:16px;margin-right:5px;"></i>Sorry your entry is fail.. Please try again.. </span></div>');
							Header("Location:".base_url()."index.php/backend/banner/form_edit/".$id);
						}else{
							$this->session->set_flashdata("add_result",'<div style="margin:10px 20px;width:auto;background-color:#ffffbf;font-size:12px;border-radius:3px;color:red;padding:10px;"><span style="color:green; font-size:12px;"><i class="fa fa-check" style="color:green;font-size:16px;margin-right:5px;"></i>Update data is success</span></div>');
							Header("Location:".base_url()."index.php/backend/banner/form_edit/".$id);
						}	
					}else{
						$id = $this->input->post('id');
						$data['banner_title'] = $this->input->post('title');
						$data['banner_desc'] = $this->input->post('desc');
						
						
						$data['banner_date_modify'] = date("Y-m-d H:i:s");
						
				
						$add_data = $this->model_back->get_update('gocweb_banner',$data,'banner_id',$id);
					
						if(!$add_data){
							$this->session->set_flashdata("add_result",'<div style="margin:10px 20px;width:auto;background-color:#ffffbf;font-size:12px;border-radius:3px;color:red;padding:10px;"><span style="color:red; font-size:12px;"><i class="fa fa-exclamation-triangle" style="color:red;font-size:16px;margin-right:5px;"></i>Sorry your entry is fail.. Please try again.. </span></div>');
							Header("Location:".base_url()."index.php/backend/banner/form_edit/".$id);
						}else{
							$this->session->set_flashdata("add_result",'<div style="margin:10px 20px;width:auto;background-color:#ffffbf;font-size:12px;border-radius:3px;color:red;padding:10px;"><span style="color:green; font-size:12px;"><i class="fa fa-check" style="color:green;font-size:16px;margin-right:5px;"></i>Update data is success</span></div>');
							Header("Location:".base_url()."index.php/backend/banner/form_edit/".$id);
						}
					}
				}else{
					$configu['upload_path'] = './uploads/banner/original/';
					$configu['upload_url'] = base_url().'uploads/banner/original/';
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
						$config1['new_image'] = 'uploads/banner/thumb/'.$upload_data['file_name'];
						//$config1['create_thumb'] = TRUE;
						$config1['maintain_ratio'] = TRUE;
						$config1['width'] = 225;
						$config1['height'] = 165;

						$this->load->library('image_lib', $config1);

						if(!$this->image_lib->resize()){
							echo $this->image_lib->display_errors();
						}
						
						if($this->input->post('page')){
							$id = $this->uri->segment(4);
							$data['banner_title'] = $this->input->post('title');
							$data['banner_desc'] = $this->input->post('desc');
							$data['banner_url'] = $this->input->post('page');
							$data['banner_background'] = $upload_data['file_name'];
							
							
							$data['banner_date_modify'] = date("Y-m-d H:i:s");
							
					
							$add_data = $this->model_back->get_update('gocweb_banner',$data,'banner_id',$id);
						
							if(!$add_data){
								$this->session->set_flashdata("add_result",'<div style="margin:10px 20px;width:auto;background-color:#ffffbf;font-size:12px;border-radius:3px;color:red;padding:10px;"><span style="color:red; font-size:12px;"><i class="fa fa-exclamation-triangle" style="color:red;font-size:16px;margin-right:5px;"></i>Sorry your entry is fail.. Please try again.. </span></div>');
								Header("Location:".base_url()."index.php/backend/banner/form_edit/".$id);
							}else{
								$this->session->set_flashdata("add_result",'<div style="margin:10px 20px;width:auto;background-color:#ffffbf;font-size:12px;border-radius:3px;color:red;padding:10px;"><span style="color:green; font-size:12px;"><i class="fa fa-check" style="color:green;font-size:16px;margin-right:5px;"></i>Update data is success</span></div>');
								Header("Location:".base_url()."index.php/backend/banner/form_edit/".$id);
							}	
						}else if($this->input->post('post')){
							$id = $this->uri->segment(4);
							$data['banner_title'] = $this->input->post('title');
							$data['banner_desc'] = $this->input->post('desc');
							$data['banner_url'] = $this->input->post('post');
							$data['banner_background'] = $upload_data['file_name'];
							
							
							$data['banner_date_modify'] = date("Y-m-d H:i:s");
							
					
							$add_data = $this->model_back->get_update('gocweb_banner',$data,'banner_id',$id);
						
							if(!$add_data){
								$this->session->set_flashdata("add_result",'<div style="margin:10px 20px;width:auto;background-color:#ffffbf;font-size:12px;border-radius:3px;color:red;padding:10px;"><span style="color:red; font-size:12px;"><i class="fa fa-exclamation-triangle" style="color:red;font-size:16px;margin-right:5px;"></i>Sorry your entry is fail.. Please try again.. </span></div>');
								Header("Location:".base_url()."index.php/backend/banner/form_edit/".$id);
							}else{
								$this->session->set_flashdata("add_result",'<div style="margin:10px 20px;width:auto;background-color:#ffffbf;font-size:12px;border-radius:3px;color:red;padding:10px;"><span style="color:green; font-size:12px;"><i class="fa fa-check" style="color:green;font-size:16px;margin-right:5px;"></i>Update data is success</span></div>');
								Header("Location:".base_url()."index.php/backend/banner/form_edit/".$id);
							}	
						}else if($this->input->post('post_category')){
							$id = $this->uri->segment(4);
							$data['banner_title'] = $this->input->post('title');
							$data['banner_desc'] = $this->input->post('desc');
							$data['banner_url'] = $this->input->post('post_category');
							$data['banner_background'] = $upload_data['file_name'];
							
							
							$data['banner_date_modify'] = date("Y-m-d H:i:s");
							
					
							$add_data = $this->model_back->get_update('gocweb_banner',$data,'banner_id',$id);
						
							if(!$add_data){
								$this->session->set_flashdata("add_result",'<div style="margin:10px 20px;width:auto;background-color:#ffffbf;font-size:12px;border-radius:3px;color:red;padding:10px;"><span style="color:red; font-size:12px;"><i class="fa fa-exclamation-triangle" style="color:red;font-size:16px;margin-right:5px;"></i>Sorry your entry is fail.. Please try again.. </span></div>');
								Header("Location:".base_url()."index.php/backend/banner/form_edit/".$id);
							}else{
								$this->session->set_flashdata("add_result",'<div style="margin:10px 20px;width:auto;background-color:#ffffbf;font-size:12px;border-radius:3px;color:red;padding:10px;"><span style="color:green; font-size:12px;"><i class="fa fa-check" style="color:green;font-size:16px;margin-right:5px;"></i>Update data is success</span></div>');
								Header("Location:".base_url()."index.php/backend/banner/form_edit/".$id);
							}
						}else if($this->input->post('page_category')){
							$id = $this->uri->segment(4);
							$data['banner_title'] = $this->input->post('title');
							$data['banner_desc'] = $this->input->post('desc');
							$data['banner_url'] = $this->input->post('page_category');
							$data['banner_background'] = $upload_data['file_name'];
							
							
							$data['banner_date_modify'] = date("Y-m-d H:i:s");
							
					
							$add_data = $this->model_back->get_update('gocweb_banner',$data,'banner_id',$id);
						
							if(!$add_data){
								$this->session->set_flashdata("add_result",'<div style="margin:10px 20px;width:auto;background-color:#ffffbf;font-size:12px;border-radius:3px;color:red;padding:10px;"><span style="color:red; font-size:12px;"><i class="fa fa-exclamation-triangle" style="color:red;font-size:16px;margin-right:5px;"></i>Sorry your entry is fail.. Please try again.. </span></div>');
								Header("Location:".base_url()."index.php/backend/banner/form_edit/".$id);
							}else{
								$this->session->set_flashdata("add_result",'<div style="margin:10px 20px;width:auto;background-color:#ffffbf;font-size:12px;border-radius:3px;color:red;padding:10px;"><span style="color:green; font-size:12px;"><i class="fa fa-check" style="color:green;font-size:16px;margin-right:5px;"></i>Update data is success</span></div>');
								Header("Location:".base_url()."index.php/backend/banner/form_edit/".$id);
							}	
						}else if($this->input->post('url')){
							$id = $this->uri->segment(4);
							$data['banner_title'] = $this->input->post('title');
							$data['banner_desc'] = $this->input->post('desc');
							$data['banner_url'] = $this->input->post('url');
							$data['banner_background'] = $upload_data['file_name'];
							
							
							$data['banner_date_modify'] = date("Y-m-d H:i:s");
							
					
							$add_data = $this->model_back->get_update('gocweb_banner',$data,'banner_id',$id);
						
							if(!$add_data){
								$this->session->set_flashdata("add_result",'<div style="margin:10px 20px;width:auto;background-color:#ffffbf;font-size:12px;border-radius:3px;color:red;padding:10px;"><span style="color:red; font-size:12px;"><i class="fa fa-exclamation-triangle" style="color:red;font-size:16px;margin-right:5px;"></i>Sorry your entry is fail.. Please try again.. </span></div>');
								Header("Location:".base_url()."index.php/backend/banner/form_edit/".$id);
							}else{
								$this->session->set_flashdata("add_result",'<div style="margin:10px 20px;width:auto;background-color:#ffffbf;font-size:12px;border-radius:3px;color:red;padding:10px;"><span style="color:green; font-size:12px;"><i class="fa fa-check" style="color:green;font-size:16px;margin-right:5px;"></i>Update data is success</span></div>');
								Header("Location:".base_url()."index.php/backend/banner/form_edit/".$id);
							}	
						}else{
							$id = $this->input->post('id');
							$data['banner_title'] = $this->input->post('title');
							$data['banner_desc'] = $this->input->post('desc');
							$data['banner_background'] = $upload_data['file_name'];
							
							$data['banner_date_modify'] = date("Y-m-d H:i:s");
							
					
							$add_data = $this->model_back->get_update('gocweb_banner',$data,'banner_id',$id);
						
							if(!$add_data){
								$this->session->set_flashdata("add_result",'<div style="margin:10px 20px;width:auto;background-color:#ffffbf;font-size:12px;border-radius:3px;color:red;padding:10px;"><span style="color:red; font-size:12px;"><i class="fa fa-exclamation-triangle" style="color:red;font-size:16px;margin-right:5px;"></i>Sorry your entry is fail.. Please try again.. </span></div>');
								Header("Location:".base_url()."index.php/backend/banner/form_edit/".$id);
							}else{
								$this->session->set_flashdata("add_result",'<div style="margin:10px 20px;width:auto;background-color:#ffffbf;font-size:12px;border-radius:3px;color:red;padding:10px;"><span style="color:green; font-size:12px;"><i class="fa fa-check" style="color:green;font-size:16px;margin-right:5px;"></i>Update data is success</span></div>');
								Header("Location:".base_url()."index.php/backend/banner/form_edit/".$id);
							}
						}
					}
				}
			}
		}
		
		function delete($id){
			$this->load->model('model_back');
			$id = $this->uri->segment(4);
			
			$delete = $this->model_back->get_delete('gocweb_banner','banner_id',$id);
			
			if(!$delete){
				$this->session->set_flashdata("modify_result",'<div style="margin:10px 20px;width:auto;background-color:#ffffbf;font-size:12px;border-radius:3px;color:red;padding:10px;"><span style="color:red; font-size:12px;"><i class="fa fa-check" style="color:red;font-size:16px;margin-right:5px;"></i>Sorry, delete proses id fail... Please try again...</span></div>');
				Header("Location:".base_url()."index.php/backend/banner/");
			}else{
				$this->session->set_flashdata("modify_result",'<div style="margin:10px 20px;width:auto;background-color:#ffffbf;font-size:12px;border-radius:3px;color:red;padding:10px;"><span style="color:green; font-size:12px;"><i class="fa fa-check" style="color:green;font-size:16px;margin-right:5px;"></i>Delete data is success</span></div>');
				Header("Location:".base_url()."index.php/backend/banner/");
			}
		}
		
		function delete_content($id){
			//$this->load->model('model_back');
			$id_parent = $this->uri->segment(4);
			$id_child = $this->uri->segment(5);
			
			$delete = $this->db->query("delete from gocweb_banner_content where banner_content_id='".$id_child."' and banner_contect_parent='".$id_parent."'");
			
			if(!$delete){
				$this->session->set_flashdata("add_result",'<div style="margin:10px 20px;width:auto;background-color:#ffffbf;font-size:12px;border-radius:3px;color:red;padding:10px;"><span style="color:red; font-size:12px;"><i class="fa fa-check" style="color:red;font-size:16px;margin-right:5px;"></i>Sorry, delete proses id fail... Please try again...</span></div>');
				Header("Location:".base_url()."index.php/backend/banner/content_add/".$id_parent);
			}else{
				$this->session->set_flashdata("add_result",'<div style="margin:10px 20px;width:auto;background-color:#ffffbf;font-size:12px;border-radius:3px;color:red;padding:10px;"><span style="color:green; font-size:12px;"><i class="fa fa-check" style="color:green;font-size:16px;margin-right:5px;"></i>Delete data is success</span></div>');
				Header("Location:".base_url()."index.php/backend/banner/content_add/".$id_parent);
			}
		}
	}

/*End of file banner.php*/
/*Location:.application/controllers/backend/banner.php*/