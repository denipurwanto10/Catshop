<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth017_model extends CI_Model {

    public function getuser($username)
    {
        $this->db->where('username_017', $username);
        return $this->db->get('users017')->row();
    }
    public function changepass(){
        $this->db->set('password_017', password_hash($this->input->post('newpassword'), PASSWORD_DEFAULT));
        $this->db->where('username_017', $this->session->userdata('username'));
        return $this->db->update('users017');
    }
    public function changephoto($photo){
        if($this->session->userdata('photo') != 'default.png')
        unlink('./uploads/users/'.$this->session->userdata('photo'));

        $this->db->set('photo_017', $photo);
        $this->db->where('username_017',$this->session->userdata('username'));
        return $this->db->update('users017');
    }
}
