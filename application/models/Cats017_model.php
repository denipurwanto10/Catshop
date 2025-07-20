<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cats017_model extends CI_Model {

	public function create()
	{
		$data = array(
            'name_017' => $this->input->post('name_017'),
            'type_017' => $this->input->post('type_017'),
            'gender_017' => $this->input->post('gender_017'),
            'age_017' => $this->input->post('age_017'),
            'price_017' => $this->input->post('price_017')

        );
        $this->db->insert('cats017', $data);
	}

    public function read($limit,$start)
    {
        $this->db->limit($limit,$start);
        $query = $this->db->get('cats017');
        return $query->result();
    }

    public function read_by($id)
    {
        $this->db->where('id_017', $id);
        $query = $this->db->get('cats017');
        return $query->row();
    }

    public function update($id)
    {
        $data = array(
            'name_017' => $this->input->post('name_017'),
            'type_017' => $this->input->post('type_017'),
            'gender_017' => $this->input->post('gender_017'),
            'age_017' => $this->input->post('age_017'),
            'price_017' => $this->input->post('price_017')
        );
        $this->db->where('id_017', $id);
        $this->db->update('cats017', $data);
    }

    public function delete($id)
    {
        $this->db->where('id_017', $id);
        $this->db->delete('cats017');
    }

    public function validation()
    {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('name_017', 'Cat name', 'required');
        $this->form_validation->set_rules('type_017', 'Cat type', 'required');
        $this->form_validation->set_rules('gender_017', 'Cat gender', 'required');
        $this->form_validation->set_rules('age_017', 'Cat age', 'required|numeric');
        $this->form_validation->set_rules('price_017', 'Cat price', 'required|numeric');
        $this->form_validation->set_rules('photo_017', 'Cat photo', 'required');

        if($this->form_validation->run())
            return TRUE;
        else
            return FALSE;
    }   

    public function sale($id)
    {
        $data = array(
            'customer_name_017' => $this->input->post('customer_name_017'),
            'customer_address_017' => $this->input->post('customer_address_017'),
            'customer_phone_017' => $this->input->post('customer_phone_017'),
            'cat_id_017' => $id
        );
        $this->db->insert('catsales017', $data);

        $this->db->set('sold_017', '1');
        $this->db->where('id_017', $id);
        $this->db->update('cats017');
    }

    public function sales(){
        //$query=$this->db->get('catsales017');
        $this->db->select('*');
        $this->db->from('catsales017');
        $this->db->join('cats017','catsales017.cat_id_017 = cats017.id_017');
        $query = $this->db->get();
        return $query->result();
    }

    public function changephoto($file,$id){
        $this->db->select('photo_017');
        $this->db->from('cats017');
        $this->db->where('id_017', $id);
        $query = $this->db->get();
        $photo = $query->row()->photo_017;

        if($photo != 'default.png')
        unlink('./uploads/cats/'.$photo);

        $this->db->set('photo_017', $file);
        $this->db->where('id_017',$id);
        return $this->db->update('cats017');
    }
}
