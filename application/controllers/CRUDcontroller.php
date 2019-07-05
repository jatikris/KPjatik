<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CRUDcontroller extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('CRUDmodel');
    }

	public function index(){
        $data['result'] = $this->CRUDmodel->getAllData();
		$this->load->view('CRUDview', $data);
    }
    
    public function create(){
        $this->CRUDmodel->createData();
        redirect("CRUDcontroller");
    }
 

}
