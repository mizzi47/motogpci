<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  
  
class Motogp extends CI_Controller {  

    public function __construct()
    {
        parent::__construct();
        $this->load->model('coach');
        $this->load->helper('url_helper');
        $this->load->helper('form');
        $this->load->library('form_validation');
    }
      
    public function index()  
    {  
        // $this->load->helper('url'); 
        // $data['coach'] = $this->coach->coach_list();
        // $data['title'] = 'Rider List';
 		$this->load->view('motogp'); 
    }    
   public function get_coach()
   {
      $draw = intval($this->input->get("draw"));
      $start = intval($this->input->get("start"));
      $length = intval($this->input->get("length"));


      $query = $this->db->get("coach");


      $data = [];


      foreach($query->result() as $r) {
           $data[] = array(
                $r->id,
                $r->name,
                $r->rnum,
                $r->age
           );
      }


      $result = array(
               "draw" => $draw,
                 "recordsTotal" => $query->num_rows(),
                 "recordsFiltered" => $query->num_rows(),
                 "data" => $data
            );


      echo json_encode($result);
      exit();
    }  
    
    public function sel1(){
        $this->load->helper('url');
        redirect('Moto2', 'refresh');;
    }

    // public function index()
    // {
    //     $data['notes'] = $this->notes_model->notes_list();
    //     $data['title'] = 'Notes List';
 
    //     $this->load->view('notes/list', $data);
    // }
}  
?>  