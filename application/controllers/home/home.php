<?php
	if(!defined('BASEPATH'))exit('No Direct Script Access Allowed');

	class Home extends CI_Controller{
		
		function __construct(){
			parent::__construct();
		}
		
		function index(){
			$this->load->view('front/others/head');
			$this->load->view('front/others/body_start');
			$header['menu'] = $this->db->query("select menu_id, menu_name, menu_url from gocweb_menu order by menu_id asc");
			$q = $this->db->query("select setting_logo from gocweb_setting");
			foreach($q->result() as $db){
				$header['logo'] = $db->setting_logo;
			}
			$this->load->view('front/others/header',$header);
			$slider['slide'] = $this->db->query("select * from gocweb_banner");
			$this->load->view('front/home/slider',$slider);
			$query = $this->db->query('select * from gocweb_setting');
			foreach($query->result() as $db){
				//$data['logo'] = $db->setting_logo;
				$data['tagline'] = $db->setting_tag_line;
				$data['desc'] = $db->setting_desc;
				$data['visi'] = $db->setting_vision;
				$data['misi'] = $db->setting_mission;
				$data['moto'] = $db->setting_moto;
			}
			$this->load->view('front/home/main',$data);
			$this->load->view('front/others/footer');
			$this->load->view('front/others/body_end');
		}
		
	}
	/*End of file home.php*/
	/*Location:.application/controllers/frontend/home.php*/