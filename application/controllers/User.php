<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller{
    function index(){

        $this->load->model('User_model');
        $users = $this->User_model->all();
        $data = array();
        $data['users'] = $users;

        $this->load->view('list', $data);

    }
    function create(){
        $this->load->model('User_model');

        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required');
        if($this->form_validation->run() == false){
            $this->load->view('new');
        }
        else{
            $data = array();
            $data['name'] = $this->input->post('name');
            $data['email'] = $this->input->post('email');
            $data['password'] = $this->input->post('password');
            $this->User_model->create($data);
            $this->session->set_flashdata('success', 'Data stored successfully');
            redirect(base_url().'index.php/user/index');
        }
    }

    function edit($id){

        $this->load->model('User_model');
        $user = $this->User_model->getUser($id);
        $data = array();
        $data['user'] = $user;

        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if( $this->form_validation->run() == false ){
        $this->load->view('edit', $data);
        }
        else{
            $formArray = array();
            $formArray['name'] = $this->input->post('name');
            $formArray['email'] = $this->input->post('email');
            $formArray['password'] = $this->input->post('password');
            $this->User_model->updateUser($id, $formArray);
            $this->session->set_flashdata('success', 'Record update successfully');
            redirect(base_url().'index.php/user/index');
        }
    }

    function delete($id){
        $this->load->model('User_model');
        $user = $this->User_model->getUser($id);

        if(empty($user)){
            $this->session->set_flashdata('failure', 'Record does not exist');
            redirect(base_url().'index.php/user/index');
    
        }
        else{
            $this->User_model->deleteUser($id);
            $this->session->set_flashdata('success', 'Record deleted successfully');
            redirect(base_url().'index.php/user/index');
        
        }
    }

}