<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth017 extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Auth017_model');
    }

    public function login()
    {
        if($this->input->post('login') && $this->validation('login')){
            $login=$this->Auth017_model->getuser($this->input->post('username'));
            if($login != NULL){
                if(password_verify($this->input->post('password'), $login->password_017)){
                    $data = array (
                        'username' => $login->username_017,
                        'usertype' => $login->usertype_017,
                        'fullname' => $login->fullname_017,
                        'photo' => $login->photo_017
                    );
                    $this->session->set_userdata($data);
                redirect('welcome');
            }
        } 
        $this->session->set_flashdata('msg', '<p class="alert alert-danger">Invalid username or password !</p>');
    }
            $this->load->view('auth017/form_login_017');
    }
    public function logout()
    {
        $this->session->sess_destroy();
        redirect('auth017/login');
    }
    public function changepass()
    {
        if(! $this->session->userdata('username')) redirect('auth017/login');
        if($this->input->post('change') && $this->validation('change')){
            $change=$this->Auth017_model->getuser($this->session->userdata('username'));
            if(password_verify($this->input->post('oldpassword'), $change->password_017)){
                if($this->Auth017_model->changepass())
                $this->session->set_flashdata('msg', '<p class="alert alert-success">Password successfuly changed !</p>');
                else
                $this->session->set_flashdata('msg', '<p class="alert alert-danger">Change password failed !</p>');
            } else {
                $this->session->set_flashdata('msg', '<p class="alert alert-danger">Wrong old password !</p>');
            }
        }
        $this->load->view('auth017/form_password_017');
    }
    public function changephoto()
    {
        if(! $this->session->userdata('username')) redirect('auth017/login');   //filter login
        $data['error']='';
        if($this->input->post('upload')){
            if($this->upload()){    //jika sukses upload
                $this->Auth017_model->changephoto($this->upload->data('file_name'));    //ubah data foto di database
                $this->session->set_userdata('photo',$this->upload->data('file_name')); //update data session
                $this->session->set_flashdata('msg', '<p class="alert alert-success">Photo successfuly changed !</p>');
            } else $data['error'] = $this->upload->display_errors();    //jika gagal upload
        }
        $this->load->view('auth017/form_photo_017', $data);
    }
    private function upload()
    {
        $config['upload_path']      = './uploads/users/';
        $config['allowed_types']    = 'gif|jpg|png';
        $config['max_size']         = '100';
        $config['max_width']        = '1024';
        $config['max_height']       = '768';

        $this->load->library('upload', $config);
        return $this->upload->do_upload('photo');
    }
    public function validation($type)
    {
        $this->load->library('form_validation');
        if($type == 'login'){
            $this->form_validation->set_rules('username', 'Username', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required');
        } else {
            $this->form_validation->set_rules('oldpassword', 'Old Password', 'required');
            $this->form_validation->set_rules('newpassword', 'New Password', 'required');
        }

        if($this->form_validation->run())
            return TRUE;
        else
            return FALSE;
    }   

}
