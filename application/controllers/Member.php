<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Member extends CI_Controller {
    
    public function verified(){
        $data['verified']    = $this->Member_model->verified();
        $data['header'] = 'Backend/Main/Member/Config';
        $data['content'] = 'Backend/Main/Member/verified';
        $data['js'] = 'Backend/Main/Member/Js';
        $this->load->view('Backend/Material/Index',$data);
    }
    
    public function notverified(){
        $data['notverified']    = $this->Member_model->notverified();
        $data['header'] = 'Backend/Main/Member/Config';
        $data['content'] = 'Backend/Main/Member/notverified';
        $data['js'] = 'Backend/Main/Member/Js';
        $this->load->view('Backend/Material/Index',$data);
    }
    
    public function detail($id){
        $data['detail'] = $this->Member_model->detail($id);
        $data['header'] = 'Backend/detail/Config';
        $data['content'] = 'Backend/detail/Content';
        $data['js'] = 'Backend/detail/Js';
        $this->load->view('Backend/Material/Index',$data);
    }
    
}
?>