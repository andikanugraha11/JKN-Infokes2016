<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Daftar extends CI_Controller {
    
    public function index(){
        $data['header'] = 'Backend/Main/Daftar/Config';
        $data['content'] = 'Backend/Main/Daftar/Content';
        $data['js'] = 'Backend/Main/Daftar/Js';
        $this->load->view('Backend/Material/Index',$data);
    }
    
    public function baru(){
        $this->form_validation->set_rules('nama_depan','Nama Depan','trim|required');
        $this->form_validation->set_rules('nama_belakang','Nama Belakang','trim|required');
        $this->form_validation->set_rules('no_identitas','No Identitas','trim|required|min_length[4]');
        $this->form_validation->set_rules('email','E-Mail','trim|required|min_length[4]');
        if($this->form_validation->run() == false)
        {
            $dika = $this->Users_model->daftar();
            if($dika){
                redirect('member/notverified');
            }else{
                redirect('Daftar');
            }
        }
    }
    
}
?>