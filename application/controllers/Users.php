<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Controller{


//public function admin(){
//    $this->load->view("backend/login/admin");
//}
public function logout()
	{
		$this->session->sess_destroy();
		redirect('users/login_admin');
		
	}
    
public function login_admin(){
 /*
		* Fungsi yang digunakan untuk memanggil tampilan view lgin dan m_users
		* yang digunakan untuk mengatur login role pada users
		*/

		//$this->load->view("backend/login/login");
		$this->form_validation->set_rules('username','Username','trim|required|trim|min_length[4]');
		$this->form_validation->set_rules('password','Password','trim|required|trim|min_length[4]');
		
		if ($this->session->userdata('masuk')) {
			redirect('dashboard');
		}else{
			if($this->form_validation->run()== FALSE){
			$this->load->view("backend/login/admin");
			}else{
				$username = $this->input->post('username');
				$password = $this->input->post('password');
				//Cek dari variabel ke m_users apakah adata tersebut exist//
				$cek = $this->Users_model->login_admin($username, $password);
				$cek2 = $this->Users_model->login_admin($username);
				
				if ($cek<>0){
					//Mengambil data id_role dari database//
					foreach ($cek2 as $cek2) {
               			 $level = $cek2['user_role']; //mengambil data(level/hak akses) dari database
            		}


            		//**********************************************//

                    

					$this->session->set_userdata(array(
					'isLogin'   => TRUE, //set data telah login
					'username'  => $username, //set session username
					'level'      => $level //set session hak akses
					));
					
					redirect('Dashboard', 'refresh');
				}else{
					//Redirect ke halaman login jika username dan password tidak ada 
					//pada database
					$this->load->view("backend/login/login");	
				}

			}
		}
		
}
		
    public function login_member(){
		$this->form_validation->set_rules('no_identitas','Identitas','required');
		$this->form_validation->set_rules('tempat_lahir','Tempat Lahir','required');
		
		if ($this->session->userdata('masuk')) {
			redirect('Dashboard');
		}else{
			if($this->form_validation->run()== FALSE){
			$this->load->view("backend/login/login_member");
			}else{
				$identitas = $this->input->post('no_identitas');
				$tempat = $this->input->post('tempat_lahir');

                $data_member = $this->Users_model->login_member($identitas, $tempat);
				
				if ($data_member<>0){
					//Mengambil data id_role dari database//
					foreach ($data_member as $data_member) {
               	        $level  = $data_member['user_role']; //mengambil data(level/hak akses) dari database
                        $id     = $data_member->id; //sama aja cuma beda cara
                        $nama   = $data_member->nama_depan;
            		}
                    
					$this->session->set_userdata(array(
                        'masuk'     => TRUE, //set data telah login
                        'nama'      => $nama, //set session username
                        'level'     => $level, //set session hak akses
                        'id'        => $id //set session hak akses
                    ));
					redirect('dashboard', 'refresh');
                }else
                {
                    $this->load->view("backend/login/login");	
				}

			}
		}
		
	}
}
?>