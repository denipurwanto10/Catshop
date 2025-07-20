<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categories017 extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        if(! $this->session->userdata('username')) redirect('auth017/login');
        $this->load->model('Categories017_model');
        $this->load->library('form_validation');
    }

	public function index()
	{
        $data['cate']=$this->Categories017_model->read();
		$this->load->view('categories017/cate_list_017', $data);
	}

    public function add()
    {
        if ($this->input->post('submit')) {
            if($this->Categories017_model->validation()){
            $this->Categories017_model->create();
            if($this->db->affected_rows() > 0){
                $this->session->set_flashdata('msg', '<p style="color:green">Cat successfuly added !</p>');
            } else {
                $this->session->set_flashdata('msg', '<p style="color:red">Cat added failed !</p>');
            }
            redirect('categories017');
        }
    }
        $this->load->view('categories017/cate_form_017');
    }

    public function edit($id)
    {
        if($this->input->post('submit')) {
            if($this->Categories017_model->validation()){
            $this->Categories017_model->update($id);
            if($this->db->affected_rows() > 0){
                $this->session->set_flashdata('msg', '<p style="color:green">Cat successfuly updated !</p>');
            } else {
                $this->session->set_flashdata('msg', '<p style="color:red">Cat update failed !</p>');
            }
            redirect('categories017');
        }
    }
        $data['cate']=$this->Categories017_model->read_by($id);
        $this->load->view('categories017/cate_form_017', $data);
    }

    public function delete($id)
    {
        $this->Categories017_model->delete($id);
        if($this->db->affected_rows() > 0){
            $this->session->set_flashdata('msg', '<p style="color:green">Cat successfuly deleted !</p>');
        } else {
            $this->session->set_flashdata('msg', '<p style="color:red">Cat delete failed !</p>');
        }
        redirect('categories017');
    }
}
