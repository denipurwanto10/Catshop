<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cats017 extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        if(! $this->session->userdata('username')) redirect(base_url());
        $this->load->model('Cats017_model');
        $this->load->model('Categories017_model');  
        $this->load->library('form_validation');
    }


	public function index()
	{
        $this->load->library('pagination');

        $config['base_url'] = site_url('Cats017/index');
        $config['total_rows'] = $this->db->count_all('Cats017');
        $config['per_page'] = 10;

        $config['full_tag_open'] = '<div class="pagination">';
        $config['full_tag_close'] = '</div>';

        $this->pagination->initialize($config);

        $limit=$config['per_page'];
        $start = $this->uri->segment(3)?$this->uri->segment(3):0;

        $data['i']=$start+1;

        $data['cats']=$this->Cats017_model->read($limit,$start);
		$this->load->view('Cats017/cat_list_017',$data);
	}

    public function add()
    {
        if($this->input->post('submit')) {
            $this->Cats017_model->create();
            if($this->db->affected_rows() > 0) {
                $this->session->set_flashdata('msg', '<p class="alert alert-success">Cats successfuly added !</p>');
            }else{
                $this->session->set_flashdata('msg', '<p class="alert alert-danger">Cats added failed !</p>');
            }
            redirect('Cats017');
        }
        $data['cate']=$this->Categories017_model->read();      
        $this->load->view('Cats017/cat_form_017',$data);
    }

    public function edit($id)
    {
        if($this->input->post('submit')) {
            $this->Cats017_model->update($id);
            if($this->db->affected_rows() > 0) {
                $this->session->set_flashdata('msg', '<p class="alert alert-success">Cats successfuly update !</p>');
            }else{
                $this->session->set_flashdata('msg', '<p class="alert alert-danger">Cats update failed !</p>');
            }
            redirect('Cats017');
            
        }
        $data['cate']=$this->Categories017_model->read();    
        $data['cat']=$this->Cats017_model->read_by($id);
        $this->load->view('Cats017/cat_form_017',$data);    
    }

    public function delete($id)
    {
        $this->Cats017_model->delete($id);
        if($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('msg', '<p class="alert alert-success">Cats successfuly delete !</p>');
        }else{
            $this->session->set_flashdata('msg', '<p class="alert alert-danger">Cats delete failed !</p>');
        }
        redirect('Cats017');
    }

    public function sale($id)
    {
        if($this->input->post('submit'))   {
            $this->Cats017_model->sale($id);
            if($this->db->affected_rows() > 0) {
                $this->session->set_flashdata('msg', '<p class="alert alert-success">Cats successfuly sale !</p>');
            }else{
                $this->session->set_flashdata('msg', '<p class="alert alert-danger">Cats sale failed !</p>');
            }
            redirect('Cats017');
        }

        $data['cat']=$this->Cats017_model->read_by($id);
        $this->load->view('Cats017/cat_sale_017',$data);
    }

    public function sales()
    {
        if($this->session->userdata('usertype')!='Manager') redirect(base_url());;
        $data['sales']=$this->Cats017_model->sales();
		$this->load->view('Cats017/sale_list_017',$data);
	}

    public function changephoto($id)
    {
        $data['error']='';
        if(! $this->session->userdata('username')) redirect('auth017/login');   //filter login
        if($this->input->post('upload')){
            if($this->upload()){   //jika sukses upload
                $this->Cats017_model->changephoto($this->upload->data('file_name'), $id);    //ubah data foto di database
                $this->session->set_flashdata('msg', '<p class="alert alert-success">Photo successfuly changed !</p>');
            } else $data['error'] = $this->upload->display_errors();    //jika gagal upload
        }
        // $this->load->model('Cats017');
        $data['cat']=$this->Cats017_model->read_by($id);
        $this->load->view('Cats017/form_photo_017', $data);
    }

    private function upload()
    {
        $config['upload_path']      = './uploads/cats/';
        $config['allowed_types']    = 'gif|jpg|png';
        $config['max_size']         = '100';
        $config['max_width']        = '1024';
        $config['max_height']       = '768';

        $this->load->library('upload', $config);
        return $this->upload->do_upload('photo');
    }
}


