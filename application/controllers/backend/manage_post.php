<?php 
	if(!defined('BASEPATH'))exit('No Direct Script Access Allowed');
	class Manage_Post extends CI_Controller{
		
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
				
				$post = $this->model_back->get_data('gocweb_post');
				$config['total_rows'] = $post->num_rows();
				$config['base_url'] = base_url()."index.php/backend/manage_post/index/";
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
				
				$data['post_grid'] = $this->model_back->get_data_limit('gocweb_post',$limit,$offset);
				$data['limit'] = $limit;
				$data['of'] = $post->num_rows();
				
				$this->load->view('back/others/top');
				$this->load->view('back/others/left_side');
				$this->load->view('back/others/top-header');
				$this->load->view('back/post/manage_post_view',$data);
				$this->load->view('back/others/bottom');
				
			}
		}
		
		function form_add(){
			$query['category'] = $this->db->query("select category_id, category_name from gocweb_category order by category_name");
			$query['tag'] = $this->db->query("select tag_id, tag_name from gocweb_tag order by tag_name");
			$this->load->view('back/others/top');
			$this->load->view('back/others/left_side');
			$this->load->view('back/others/top-header');
			$this->load->view("back/post/form_add_view",$query);
			$this->load->view('back/others/bottom');
		}
		
		function add(){
			$this->load->model('model_back');
			$this->form_validation->set_rules('title','post title','required');
			$this->form_validation->set_rules('short','short description','required');
			$this->form_validation->set_rules('desc','description','required');
			$this->form_validation->set_rules('status','status','required');
			if($this->form_validation->run() == false){
				$this->form_add();
			}else{
				if(empty($_FILES['pict']['name'])){
					$data['post_title'] = $this->input->post('title');
					$data['post_short_desc'] = $this->input->post('short');
					$data['post_desc'] = $this->input->post('desc');
					//$data['post_pict'] = $this->input->post('title');
					$data['post_status'] = $this->input->post('status');
					
					
					$data['post_date_create'] = date("Y-m-d H:i:s");
					$data['author'] = $this->session->userdata('user_id');
					
					$add_data = $this->model_back->get_insert("gocweb_post",$data);
					if(!$add_data){
						$this->session->set_flashdata("add_result",'<div style="margin:10px 20px;width:auto;background-color:#ffffbf;font-size:12px;border-radius:3px;color:red;padding:10px;"><span style="color:red; font-size:12px;"><i class="fa fa-exclamation-triangle" style="color:red;font-size:16px;margin-right:5px;"></i>Sorry your entry is fail.. Please try again.. </span></div>');
						Header("Location:".base_url()."index.php/backend/manage_post/add/");
					}else{
						$id_terakhir = $this->db->query("select post_id from gocweb_post order by post_id desc LIMIT 1");
						$ctg = $this->input->post('category');
						if(!empty($ctg)){
							foreach($id_terakhir->result() as $db){
								foreach($this->input->post('category') as $key => $value){
									echo $data1['post_ref_post'] = $db->post_id;
									echo $data1['post_ref_category'] = $value;
									$add_data = $this->model_back->get_insert('gocweb_post_category',$data1);
								}
							}
						}
						
						$tg = $this->input->post('tag');
						if(!empty($tg)){
							foreach($id_terakhir->result() as $db){
								foreach($this->input->post('tag') as $key => $value){
									echo $data2['post_ref_post'] = $db->post_id;
									echo $data2['post_ref_tag'] = $value;
									$add_data = $this->model_back->get_insert('gocweb_post_tag',$data2);
								}
							}
						}
						$this->session->set_flashdata("add_result",'<div style="margin:10px 20px;width:auto;background-color:#ffffbf;font-size:12px;border-radius:3px;color:red;padding:10px;"><span style="color:green; font-size:12px;"><i class="fa fa-check" style="color:green;font-size:16px;margin-right:5px;"></i>Insert data is success</span></div>');
						Header("Location:".base_url()."index.php/backend/manage_post/add/");
					}
				}else{
					$configu['upload_path'] = './uploads/post/original/';
					$configu['upload_url'] = base_url().'uploads/post/original/';
					$configu['allowed_types'] = 'gif|jpeg|jpg|png';
					$configu['max_size'] = '1000';
					$configu['max_width'] = '1000';
					$configu['max_height'] = '1000';
					
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
						$config1['new_image'] = 'uploads/post/thumb/'.$upload_data['file_name'];
						$config1['maintain_ratio'] = TRUE;
						$config1['width'] = 225;
						$config1['height'] = 165;

						$this->load->library('image_lib', $config1);

						if(!$this->image_lib->resize()){
							echo $this->image_lib->display_errors();
						}
						
						$data['post_title'] = $this->input->post('title');
						$data['post_short_desc'] = $this->input->post('short');
						$data['post_desc'] = $this->input->post('desc');
						$data['post_pict'] = $upload_data['file_name'];
						$data['post_pict_thumb'] = $config1['new_image'];
						$data['post_status'] = $this->input->post('status');
						
						
						$data['post_date_create'] = date("Y-m-d H:i:s");
						$data['author'] = $this->session->userdata('user_id');
						
						$add_data = $this->model_back->get_insert("gocweb_post",$data);
						if(!$add_data){
							$this->session->set_flashdata("add_result",'<div style="margin:10px 20px;width:auto;background-color:#ffffbf;font-size:12px;border-radius:3px;color:red;padding:10px;"><span style="color:red; font-size:12px;"><i class="fa fa-exclamation-triangle" style="color:red;font-size:16px;margin-right:5px;"></i>Sorry your entry is fail.. Please try again.. </span></div>');
							Header("Location:".base_url()."index.php/backend/manage_post/add/");
						}else{
							$id_terakhir = $this->db->query("select post_id from gocweb_post order by post_id desc LIMIT 1");
							$ctg = $this->input->post('category');
							if(!empty($ctg)){
								foreach($id_terakhir->result() as $db){
									foreach($this->input->post('category') as $key => $value){
										echo $data1['post_ref_post'] = $db->post_id;
										echo $data1['post_ref_category'] = $value;
										$add_data = $this->model_back->get_insert('gocweb_post_category',$data1);
									}
								}
							}
							
							$tg = $this->input->post('tag');
							if(!empty($tg)){
								foreach($id_terakhir->result() as $db){
									foreach($this->input->post('tag') as $key => $value){
										echo $data2['post_ref_post'] = $db->post_id;
										echo $data2['post_ref_tag'] = $value;
										$add_data = $this->model_back->get_insert('gocweb_post_tag',$data2);
									}
								}
							}
							$this->session->set_flashdata("add_result",'<div style="margin:10px 20px;width:auto;background-color:#ffffbf;font-size:12px;border-radius:3px;color:red;padding:10px;"><span style="color:green; font-size:12px;"><i class="fa fa-check" style="color:green;font-size:16px;margin-right:5px;"></i>Insert data is success</span></div>');
							Header("Location:".base_url()."index.php/backend/manage_post/add/");
						}
					}
				}
			}
		}
		
		function form_edit($id){
			$id = $this->uri->segment(4);
			$this->load->model('model_back');
			$post_read = $this->model_back->get_data_where('post_id',$id,'gocweb_post');
			foreach($post_read->result() as $db){
				$data['id'] = $db->post_id;
				$data['title'] = $db->post_title;
				$data['desc'] = $db->post_desc;
				$data['status'] = $db->post_status;
				$data['short'] = $db->post_short_desc;
				$data['pict'] = $db->post_pict;
				//$data['category'] = $db->post_category;
				//$data['tag'] = $db->post_tag;
			}
			$data['category'] = $this->db->query("select category_id, category_name from gocweb_category order by category_name");
			$data['tag'] = $this->db->query("select tag_id, tag_name from gocweb_tag order by tag_name");
			$this->load->view('back/others/top');
			$this->load->view('back/others/left_side');
			$this->load->view('back/others/top-header');
			$this->load->view("back/post/form_edit_view",$data);
			$this->load->view('back/others/bottom');
		}
		
		function edit($id){
			$this->load->model('model_back');
			$this->form_validation->set_rules('title','post title','required');
			$this->form_validation->set_rules('short','short description','required');
			$this->form_validation->set_rules('desc','description','required');
			$this->form_validation->set_rules('status','status','required');
			if($this->form_validation->run() == false){
				$this->form_edit($this->uri->segment(4));
			}else{
				if(empty($_FILES['pict']['name'])){
					$id = $this->uri->segment(4);
					$data['post_title'] = $this->input->post('title');
					$data['post_short_desc'] = $this->input->post('short');
					$data['post_desc'] = $this->input->post('desc');
					//$data['post_pict'] = $this->input->post('title');
					$data['post_status'] = $this->input->post('status');
					
					
					$data['post_date_update'] = date("Y-m-d H:i:s");
					$data['author'] = $this->session->userdata('user_id');
					
					$edit_data = $this->model_back->get_update('gocweb_post',$data,'post_id',$id);
					if(!$edit_data){
						$this->session->set_flashdata("edit_result",'<div style="margin:10px 20px;width:auto;background-color:#ffffbf;font-size:12px;border-radius:3px;color:red;padding:10px;"><span style="color:red; font-size:12px;"><i class="fa fa-exclamation-triangle" style="color:red;font-size:16px;margin-right:5px;"></i>Sorry your update is fail.. Please try again.. </span></div>');
						Header("Location:".base_url()."index.php/backend/manage_post/edit/".$id);
					}else{
						foreach($this->input->post('category') as $key => $value){
							echo $data1['post_ref_post'] = $id;
							echo $data1['post_ref_category'] = $value;
						$this->db->query("delete from gocweb_post_category where post_ref_post='".$id."'");
						}
						foreach($this->input->post('category') as $key => $value){
							echo $data1['post_ref_post'] = $id;
							echo $data1['post_ref_category'] = $value;
							$add_data = $this->model_back->get_insert('gocweb_post_category',$data1);
						}
						
						foreach($this->input->post('tag') as $key => $value){
							echo $data2['post_ref_post'] = $id;
							echo $data2['post_ref_tag'] = $value;
							$this->db->query("delete from gocweb_post_tag where post_ref_post='".$id."'");
						}
						
						foreach($this->input->post('tag') as $key => $value){
							echo $data2['post_ref_post'] = $id;
							echo $data2['post_ref_tag'] = $value;
							$add_data = $this->model_back->get_insert('gocweb_post_tag',$data2);
						}
						$this->session->set_flashdata("edit_result",'<div style="margin:10px 20px;width:auto;background-color:#ffffbf;font-size:12px;border-radius:3px;color:red;padding:10px;"><span style="color:green; font-size:12px;"><i class="fa fa-check" style="color:green;font-size:16px;margin-right:5px;"></i>Update data is success</span></div>');
						Header("Location:".base_url()."index.php/backend/manage_post/edit/".$id);
					}
				}else{
					$configu['upload_path'] = './uploads/post/original/';
					$configu['upload_url'] = base_url().'uploads/post/original/';
					$configu['allowed_types'] = 'gif|jpeg|jpg|png';
					$configu['max_size'] = '1000';
					$configu['max_width'] = '1000';
					$configu['max_height'] = '1000';
					
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
						$config1['new_image'] = 'uploads/post/thumb/'.$upload_data['file_name'];
						$config1['maintain_ratio'] = TRUE;
						$config1['width'] = 225;
						$config1['height'] = 165;

						$this->load->library('image_lib', $config1);

						if(!$this->image_lib->resize()){
							echo $this->image_lib->display_errors();
						}
						
						$id = $this->uri->segment(4);
						$data['post_title'] = $this->input->post('title');
						$data['post_short_desc'] = $this->input->post('short');
						$data['post_desc'] = $this->input->post('desc');
						$data['post_pict'] = $upload_data['file_name'];
						$data['post_pict_thumb'] = $config1['new_image'];
						$data['post_status'] = $this->input->post('status');
						
						
						$data['post_date_update'] = date("Y-m-d H:i:s");
						$data['author'] = $this->session->userdata('user_id');
						
						$edit_data = $this->model_back->get_update('gocweb_post',$data,'post_id',$id);
						if(!$edit_data){
							$this->session->set_flashdata("edit_result",'<div style="margin:10px 20px;width:auto;background-color:#ffffbf;font-size:12px;border-radius:3px;color:red;padding:10px;"><span style="color:red; font-size:12px;"><i class="fa fa-exclamation-triangle" style="color:red;font-size:16px;margin-right:5px;"></i>Sorry your update is fail.. Please try again.. </span></div>');
							Header("Location:".base_url()."index.php/backend/manage_post/edit/".$id);
						}else{
							foreach($this->input->post('category') as $key => $value){
								echo $data1['post_ref_post'] = $id;
								echo $data1['post_ref_category'] = $value;
							$this->db->query("delete from gocweb_post_category where post_ref_post='".$id."'");
							}
							foreach($this->input->post('category') as $key => $value){
								echo $data1['post_ref_post'] = $id;
								echo $data1['post_ref_category'] = $value;
								$add_data = $this->model_back->get_insert('gocweb_post_category',$data1);
							}
							
							foreach($this->input->post('tag') as $key => $value){
								echo $data2['post_ref_post'] = $id;
								echo $data2['post_ref_tag'] = $value;
								$this->db->query("delete from gocweb_post_tag where post_ref_post='".$id."'");
							}
							
							foreach($this->input->post('tag') as $key => $value){
								echo $data2['post_ref_post'] = $id;
								echo $data2['post_ref_tag'] = $value;
								$add_data = $this->model_back->get_insert('gocweb_post_tag',$data2);
							}
							$this->session->set_flashdata("edit_result",'<div style="margin:10px 20px;width:auto;background-color:#ffffbf;font-size:12px;border-radius:3px;color:red;padding:10px;"><span style="color:green; font-size:12px;"><i class="fa fa-check" style="color:green;font-size:16px;margin-right:5px;"></i>Update data is success</span></div>');
							Header("Location:".base_url()."index.php/backend/manage_post/edit/".$id);
						}
					}
				}	
			}
		}
		
		function delete($id){
			$this->load->model('model_back');
			$id = $this->uri->segment(4);
			
			$delete = $this->model_back->get_delete('gocweb_post','post_id',$id);
			
			if(!$delete){
				$this->session->set_flashdata("modify_result",'<div style="margin:10px 20px;width:auto;background-color:#ffffbf;font-size:12px;border-radius:3px;color:red;padding:10px;"><span style="color:red; font-size:12px;"><i class="fa fa-check" style="color:red;font-size:16px;margin-right:5px;"></i>Sorry, delete proses id fail... Please try again...</span></div>');
				Header("Location:".base_url()."index.php/backend/manage_post/");
			}else{
				$this->session->set_flashdata("modify_result",'<div style="margin:10px 20px;width:auto;background-color:#ffffbf;font-size:12px;border-radius:3px;color:red;padding:10px;"><span style="color:green; font-size:12px;"><i class="fa fa-check" style="color:green;font-size:16px;margin-right:5px;"></i>Delete data is success</span></div>');
				Header("Location:".base_url()."index.php/backend/manage_post/");
			}
		}
		
		function search(){
			if($this->input->post('search') != ''){
				$sess['search_post'] = $this->input->post('search');
			}

			$this->session->set_userdata($sess);
			$search = $this->db->query("select * from gocweb_post where post_title like '%".$this->session->userdata('search_post')."%' or post_desc like '%".$this->session->userdata('search_post')."%'");
			$page = $this->uri->segment(5);
			$limit = 5;
			
			if(!$page){
				$offset = 0;
			}else{
				$offset = $page;
			}
			
			//$user = $this->model_back->get_data('gocweb_user');
			$config['total_rows'] = $search->num_rows();
			$config['base_url'] = base_url()."index.php/backend/manage_post/search/index/";
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
			$data['post_grid'] = $this->db->query("select * from gocweb_post where post_title like '%".$this->session->userdata('search_post')."%' or post_desc like '%".$this->session->userdata('search_post')."%' LIMIT ".$limit." OFFSET ".$offset."");
			$data['limit'] = $limit;
			$data['of'] = $search->num_rows();
			
			$this->load->view('back/others/top');
			$this->load->view('back/others/left_side');
			$this->load->view('back/others/top-header');
			$this->load->view('back/post/manage_post_view',$data);
			$this->load->view('back/others/bottom');
		}
		
	}
/*End of file manage_post.php*/
/*Location:.application/controllers/backend/manage_post.php*/