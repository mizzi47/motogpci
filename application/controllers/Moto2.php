<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  
  
class Moto2 extends CI_Controller {  
      
    public function index()  
    {  
        $this->load->helper('url'); 
 		$this->load->view('moto2'); 
    }  
}  
?>  