<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Member_model extends CI_Model{
    
    public function verified(){
        $this->db->order_by("nama_depan", "asc");
        $this->db->where('verify','yes');
        $query = $this->db->get('member');
        return $query->result();
    }
    
    public function notverified(){
        $this->db->order_by("nama_depan", "asc");
        $this->db->where('verify','no');
        $query = $this->db->get('member');
        return $query->result();
    }
    
    public function detail($id){
        $this->db->where('id',$id);
        $query = $this->db->get('member');
        return $query->result();
    }
}