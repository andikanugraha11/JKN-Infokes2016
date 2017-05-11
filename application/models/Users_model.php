<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users_model extends CI_Model{
    
    public function daftar(){
        $data = array(
				
			'nama_depan'	    => $this->input->post('nama_depan'),
			'nama_belakang' 	=> $this->input->post('nama_belakang'),
			'jenis_identitas' 	=> $this->input->post('jenis_identitas'),
			'no_identitas'      => $this->input->post('no_identitas'),
            'jenis_kelamin'     => $this->input->post('jenis_kelamin'), //belum dibuat
            'tempat_lahir'      => $this->input->post('tempat_lahir'),
            'status'            => $this->input->post('status'),
            'status_keluarga'   => $this->input->post('status_keluarga'),
            'kewarganegaraan'   => $this->input->post('kewarganegaraan'),
            'alamat'            => $this->input->post('alamat'),
            'provinsi'          => $this->input->post('prov'), //nama tabelnya
            'kota'              => $this->input->post('kot'), //nama tabelnya
            'kecamatan'         => $this->input->post('kec'), //nama tabelnya
            'kode_pos'          => $this->input->post('kode_pos'),
            'no_telepon'        => $this->input->post('no_telepon'),
            'email'             => $this->input->post('email'),
            'pekerjaan'         => $this->input->post('pekerjaan'),
            'penghasilan'       => $this->input->post('penghasilan'),
            'kategori_jkn'      => $this->input->post('kategori_jkn'),
            'alamat_kantor'     => $this->input->post('alamat_kantor'),
            'telpon_kantor'     => $this->input->post('telpon_kantor'),
            'no_fax'            => $this->input->post('fax'),
            'email_kantor'      => $this->input->post('email_kantor'),
            'kelas_jkn'         => $this->input->post('kelas_jkn'),
            'agama'             => $this->input->post('agama') //belum dibuat
    
		);
		$insert_data = $this->db->insert('member',$data);
		return $insert_data;
    }
    
    public function login_admin($username, $password){
		$this->db->select('*');
		$this->db->from('admin');
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		$query = $this->db->get();
		return $query->num_rows();
        }
    
    public function login_member($identitas, $tempat){
		$this->db->select('*');
		$this->db->from('member');
		$this->db->where('no_identitas', $identitas);
		$this->db->where('tempat_lahir', $tempat);
		$query = $this->db->get();
		return $query->num_rows();
	}
    
}
?>