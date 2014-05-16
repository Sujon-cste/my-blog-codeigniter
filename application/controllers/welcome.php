<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start();
class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the fottp://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
        public function __construct() {
            parent::__construct();
            $this->load->model('blogger_model');
  
        }
	public function index()
	{
            $data=array();
            $data['result']=$this->blogger_model->show_blog();
            $data['main']=$this->load->view('home_msg',$data,true);
            $data['title']="Blog";
            $data['archives']='true';

		$this->load->view('home',$data);
	}
      
        
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */