<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  
  
class Newhome extends CI_Controller {  
      
    public function index()  
    {  
        $this->load->helper('url'); 
 		$this->load->view('home'); 
    }  
    public function login()  
    {  
        $this->load->helper('url'); 
 		$this->load->view('login'); 
    }  
}  
?>  