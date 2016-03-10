<?php
	if(!defined('BASEPATH'))exit('No direct script access allowed');
	
	class Page extends CI_Controller{
		function __construct(){
			parent::__construct();
		}
		
		function index(){
		
		}
		
		function category(){
			$id = $this->uri->segment(4);
			
			$page = $this->uri->segment(5);
			$limit = 8;
			if(!$page){
				$offset = 0;
			}else{
				$offset = $page;
			}
			
			$category = $this->db->query("select * from gocweb_user, gocweb_page, gocweb_page_category 
			where gocweb_page.author=gocweb_user.user_id and gocweb_page_category.page_category_id=gocweb_page.page_category 
			and gocweb_page.page_status='posting' and gocweb_page_category.page_category_id='".$id."'");
			$config['base_url'] = base_url()."index.php/home/page/category/".$id."/";
			$config['total_rows'] = $category->num_rows();
			$config['per_page'] = $limit;
			$config['uri_segment'] = 5;
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
			
			$data['query'] = $this->db->query("select * from gocweb_user, gocweb_page, gocweb_page_category 
			where gocweb_page.author=gocweb_user.user_id and gocweb_page_category.page_category_id=gocweb_page.page_category 
			and gocweb_page.page_status='posting' and gocweb_page_category.page_category_id='".$id."' LIMIT ".$limit." OFFSET ".$offset);
			
			$this->load->view('front/others/head');
			$this->load->view('front/others/body_start');
			$header['menu'] = $this->db->query("select menu_id, menu_name, menu_url from gocweb_menu order by menu_id asc");
			$q = $this->db->query("select setting_logo from gocweb_setting");
			foreach($q->result() as $db){
				$header['logo'] = $db->setting_logo;
			}
			$this->load->view('front/others/header',$header);
			
			$this->load->view('front/page/header_title',$data);
			$this->load->view('front/page/portfolio_v',$data);
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
/*Location:.application/controllers/home/page.php*/