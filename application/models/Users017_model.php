<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users017_model extends CI_Model {

	public function create()
	{
		$data = array(
            'username_017' => $this->input->post('username_017'),
            'usertype_017' => $this->input->post('usertype_017'),
            'fullname_017' => $this->input->post('fullname_017'),
            'password_017' => password_hash($this->input->post('usertype_017'), PASSWORD_DEFAULT)
        );
        $this->db->insert('users017', $data);
	}

    public function read()
    {
        $query = $this->db->get('users017');
        return $query->result();
    }

    public function read_by($userid)
    {
        $this->db->where('userid_017', $userid);
        $query = $this->db->get('users017');
        return $query->row();
    }

    public function update($userid)
    {
        $data = array(
            'username_017' => $this->input->post('username_017'),
            'usertype_017' => $this->input->post('usertype_017'),
            'fullname_017' => $this->input->post('fullname_017')
        );
        $this->db->where('userid_017', $userid);
        $this->db->update('users017', $data);
    }

    public function reset($id)
    {
        $this->db->set('password_017', password_hash($this->db->where('userid_017',$id)->get('users017')->row('usertype_017'), PASSWORD_DEFAULT));
        $this->db->where('userid_017', $id);
        return $this->db->update('users017');
    }

    public function delete($userid)
    {
        $this->db->where('userid_017', $userid);
        $this->db->delete('users017');
    }
    public function validation()
    {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('username_017', 'Username', 'required');
        $this->form_validation->set_rules('usertype_017', 'Usertype', 'required');
        $this->form_validation->set_rules('fullname_017', 'Fullname', 'required');

        if($this->form_validation->run())
            return TRUE;
        else
            return FALSE;
    }   
}
