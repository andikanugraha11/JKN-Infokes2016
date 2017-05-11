<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {
    
    public function index(){
        $data['header'] = 'Backend/Main/Dashboard/Config';
        $data['content'] = 'Backend/Main/Dashboard/Content';
        $data['js'] = 'Backend/Main/Dashboard/Js';
        $this->load->view('Backend/Material/Index',$data);
    }
    
}
?>