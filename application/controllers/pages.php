<?php
 class Pages extends CI_Controller {

     function home() {
        $this->load->library('user_agent');
		$data['Title']= PROJECT_NAME." | Home ";
		$data['Operation_system'] = $this->agent->platform();
		$data['Browser'] = $this->agent->browser();
        $data['Ip_address'] = $_SERVER['REMOTE_ADDR'];
        $data['User_agent'] = $_SERVER['HTTP_USER_AGENT'];
        
        $this->load->view('fe/templates/header',$data);
        $this->load->view('fe/templates/nav');
        $this->load->view('fe/pages/home',$data);
        $this->load->view('fe/templates/footer');


     }
	 

	 
 }
?>
