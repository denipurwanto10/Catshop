<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categories017_model extends CI_Model {

	public function create()
	{
		$data = array(
            'cate_name_017' => $this->input->post('cate_name_017'),
            'description_017' => $this->input->post('description_017')
        );
        $this->db->insert('categories017', $data);
	}

    public function read()
    {
        $query = $this->db->get('categories017');
        return $query->result();
    }

    public function read_by($id)
    {
        $this->db->where('cate_id_017', $id);
        $query = $this->db->get('categories017');
        return $query->row();
    }

    public function update($id)
    {
        $data = array(
            'cate_name_017' => $this->input->post('cate_name_017'),
            'description_017' => $this->input->post('description_017')
        );
        $this->db->where('cate_id_017', $id);
        $this->db->update('categories017', $data);
    }

    public function delete($id)
    {
        $this->db->where('cate_id_017', $id);
        $this->db->delete('categories017');
    }

    public function validation()
    {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('cate_name_017', 'Cate name', 'required');
        $this->form_validation->set_rules('description_017', 'Cate description', 'required');

        if($this->form_validation->run())
            return TRUE;
        else
            return FALSE;
    }  
}
