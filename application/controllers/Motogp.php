<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  
  
class Motogp extends CI_Controller {  
      
    public function index()  
    {  
        $this->load->helper('url'); 
 		$this->load->view('motogp'); 
    }  
    
    public function sel1(){
        $this->load->helper('url');
        redirect('Moto2', 'refresh');;
    }
}  
?>  