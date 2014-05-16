<?php if ( ! defined('BASEPATH'))
    exit('No direct script access allowed');
session_start();

class Login_User extends CI_Controller{
public function __construct() {
  
    
    parent::__construct();
   
    $this->load->model('login_model');
    $id=$this->session->userdata('user_id');
    if($id!=NULL)
    {
        redirect("Blogger","refresh");
    }
    
}
            
    
    public function sign_up(){
            $data=array();
            $data['main']=$this->load->view('sign_up','',true);
            $data['title']="Sign up";
              $data['header']="s";
              $this->load->view('home',$data);
        }
        
        public function save_user(){
            $data=array();
            
            //echo'<pre>';
            //print_r($_POST);
           //exit();
            $data['first_name']=$this->input->post('first_name',true);
            $data['last_name']=$this->input->post('last_name',true);
            $data['email']=$this->input->post('email',true);
            $data['password']=$this->input->post('password',true);
            $data['password']=  md5($data['password']);
            $data['address']=$this->input->post('address',true);
            $data['mobile']=$this->input->post('mobile',true);
            $data['city']=$this->input->post('city',true);
            $data['gender']=$this->input->post('gender',true);
            $data['country']=$this->input->post('country',true);
            $data['zip_code']=$this->input->post('zip_code',true);
           
            
            $result=$this->login_model->user_check($data['email']);
            if($result)
            {
                $sdata=array();
                $sdata['msg']="user already exist";
                $this->session->set_userdata($sdata);
                redirect ("login_user/sign_up");
            }
            else{
                $this->login_model->save_info($data);
            redirect ("login_user/sign_up"); 
            }
           
            
            
        }
        public function user_login_page()
        {
            $data=array();
            $data['main']=$this->load->view('user_login','',true);
             $data['title']="Photos";
              $data['header']="s";
              $data['archives']="s";
            $this->load->view('home',$data);
        }
        public function enter_user()
        {
            $email=$this->input->post('email');
            $password=$this->input->post('password');
           
            $result=$this->login_model->cheak_login($email,$password);
            
            $sdata=array();if($result)
            {
                $sdata['full_name']=$result->first_name.' '.$result->last_name;
                $sdata['user_id']=$result->user_id;
                $sdata['login_status']=TRUE;
                $this->session->set_userdata($sdata);
                redirect("Blogger/index","refresh");
            }
            else {
                 
                 $sdata['msg']="User name or password are invalid";
                 $this->session->set_userdata($sdata);
                 redirect ("login_user/user_login_page");
             }
        }
          
         
         }


?>