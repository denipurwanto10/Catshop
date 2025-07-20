<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users017 extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        if(! $this->session->userdata('username')) redirect('auth017/login');
        if($this->session->userdata('usertype')!='Manager') redirect('welcome');
        $this->load->model('Users017_model');
        $this->load->model('Auth017_model');
        $this->load->library('form_validation');
    }

	public function index()
	{
        $this->load->library('pagination');

        $config['base_url'] = site_url('users017/index');
        $config['total_rows'] = $this->db->count_all('users017');
        $config['per_page'] = 5;

        $config['full_tag_open'] = '<div class="pagination">';
        $config['full_tag_close'] = '</div>';

        $this->pagination->initialize($config);

        $limit=$config['per_page'];
        $start = $this->uri->segment(3)?$this->uri->segment(3):0;

        $data['i']=$start+1;
        $data['users']=$this->Users017_model->read();
		$this->load->view('users017/user_list_017', $data);
	}

    public function add()
    {
        if ($this->input->post('submit')) {
            if($this->Users017_model->validation()){
            $this->Users017_model->create();
            if($this->db->affected_rows() > 0){
                $this->session->set_flashdata('msg', '<p class="alert alert-success">User successfuly added !</p>');
            } else {
                $this->session->set_flashdata('msg', '<p class="alert alert-danger" style="color:red">User added failed !</p>');
            }
            redirect('users017');
        }
    }
        $this->load->view('users017/user_form_017');
    }

    public function edit($id)
    {
        if($this->input->post('submit')) {
            if($this->Users017_model->validation()){
            $this->Users017_model->update($id);
            if($this->db->affected_rows() > 0){
                $this->session->set_flashdata('msg', '<p class="alert alert-success">User successfuly updated !</p>');
            } else {
                $this->session->set_flashdata('msg', '<p class="alert alert-danger">User update failed !</p>');
            }
            redirect('users017');
        }
    }
        $data['user']=$this->Users017_model->read_by($id);
        $this->load->view('users017/user_form_017', $data);
    }

    public function delete($id)
    {
        $this->Users017_model->delete($id);
        if($this->db->affected_rows() > 0){
            $this->session->set_flashdata('msg', '<p class="alert alert-success">User successfuly deleted ! </p>');
        } else {
            $this->session->set_flashdata('msg', '<p class="alert alert-danger">User delete failed !</p>');
        }
        redirect('users017');
    }

    public function resetpass($id)
    {
		$this->Users017_model->reset($id);
        if($this->db->affected_rows() > 0) {
			$this->session->set_flashdata('msg','<div class="alert alert-success"><strong>Reset password successfully !</strong></div>');
		} else {
			$this->session->set_flashdata('msg','<div class="alert alert-danger"><strong>Reset password failed !</strong></div>');
		}
		redirect('users017');
    }
    
}
