<?php
	if(!defined('BASEPATH'))exit('No Direct Script Access Allowed');

	class Contact extends CI_Controller{
		
		function __construct(){
			parent::__construct();
		}
		
		function index(){
			$this->load->library('googlemaps');
			$this->load->view('front/others/head');
			$this->load->view('front/others/body_start');
			$header['menu'] = $this->db->query("select menu_id, menu_name, menu_url from gocweb_menu order by menu_id asc");
			$q = $this->db->query("select setting_logo from gocweb_setting");
			foreach($q->result() as $db){
				$header['logo'] = $db->setting_logo;
			}
			$this->load->view('front/others/header',$header);
			//$this->load->view('front/contact/header_title');
			$query = $this->db->query('select * from gocweb_contact');
			foreach($query->result() as $db){
				$data['email'] = $db->contact_email;
				$data['phone1'] = $db->contact_phone1;
				$data['phone2'] = $db->contact_phone2;
				$data['fax'] = $db->contact_fax;
				$data['address'] = $db->contact_address;
				$data['facebook'] = $db->contact_facebook;
				$data['twitter'] = $db->contact_twitter;
				$data['youtube'] = $db->contact_youtube;
				$data['linkedin'] = $db->contact_linkedin;
				
				$long = $db->long_point;
				$lat = $db->lat_point;
				
				$config['center'] = '-6.257737483553622,106.77751957671717';
				$config['zoom'] = '13';
				$this->googlemaps->initialize($config);
				
				$marker = array();
				$marker['position'] = $lat.",".$long;
				$marker['icon'] = (base_url().'assets/icon/mapicon1.png');
				$marker['animation'] = 'BOUNCE';
				$marker['infowindow_content'] = '<h4 style="color:#8dc43f">Gloria Origita Cosmetics</h4>';
  				$marker['title'] = 'venue_name';
				$this->googlemaps->add_marker($marker);
				$data['map'] = $this->googlemaps->create_map();
			}
			$this->load->view('front/contact/main',$data);
			$this->load->view('front/others/footer');
			$this->load->view('front/others/body_end');
		}
		
		function message(){
			$hasil = $this->input->post('a') + $this->input->post('b');
			$this->load->model('model_back');
			if($hasil == $this->input->post('jml')){
				$data['message_name'] = $this->input->post('name');
				$data['message_email'] = $this->input->post('email');
				$data['message_subject'] = $this->input->post('subject');
				$data['message_text'] = $this->input->post('text');
				$data['message_post_date'] = date("Y-m-d H:i:s");
				
				$add_data = $this->model_back->get_insert("gocweb_message",$data);
				
				if(!$add_data){
					$this->session->set_flashdata("add_result",'<span style="margin:10px 20px;width:auto;background-color:#ffffbf;font-size:12px;border-radius:3px;color:red;padding:10px;"><span style="color:red; font-size:12px;"><i class="fa fa-exclamation-triangle" style="color:red;font-size:16px;margin-right:5px;"></i>Sorry, Your Message Not Complete</span></span>');
					Header("Location:".base_url()."index.php/home/contact/");
				}else{
					$this->session->set_flashdata("add_result",'<span style="margin:10px 20px;width:auto;background-color:#ffffbf;font-size:12px;border-radius:3px;color:red;padding:10px;"><span style="color:green; font-size:12px;"><i class="fa fa-check" style="color:green;font-size:16px;margin-right:5px;"></i>Thank You for Your Message</span></span>');
					Header("Location:".base_url()."index.php/home/contact/");
				}
			}else{
				$this->session->set_flashdata("add_result",'<span style="margin:10px 20px;width:auto;background-color:#ffffbf;font-size:12px;border-radius:3px;color:red;padding:10px;"><span style="color:red; font-size:12px;"><i class="fa fa-exclamation-triangle" style="color:red;font-size:16px;margin-right:5px;"></i>Sorry, Are You Robots</span></span>');
					Header("Location:".base_url()."index.php/home/contact/");
			}
		}
		
	}
	/*End of file contact.php*/
	/*Location:.application/controllers/home/contact.php*/