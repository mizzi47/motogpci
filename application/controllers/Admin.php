<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  
  
class Admin extends CI_Controller {  
    public function __construct(){

        parent::__construct();
  			$this->load->helper('url');
  	 		$this->load->model('user_model');
        $this->load->library('session');

}
      
    public function index()  
    {  
        //$this->load->view('helloworld');
        $this->load->helper('url'); 
 		$this->load->view('login'); 
    }  
}  

    function login_user(){ 
        $user_login=array(
  
        'username'=>$this->input->post('username'),
        'pass'=>md5($this->input->post('pass'))
  
      ); 
?>  