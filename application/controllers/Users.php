<?php

class Users extends CI_Controller{
    public function register(){
        $data['title'] = "Sign Up";

        $this->form_validation->set_rules('name', "Name", "required");
        $this->form_validation->set_rules('username', "Username", "required");
        $this->form_validation->set_rules('email', "Email", "required");
        $this->form_validation->set_rules('password', "Password", "required");
        $this->form_validation->set_rules('password2', "Confirm Password", "matches[password]");

        if($this->form_validation->run() === FALSE){
            $this->load->view("templates/header");
            $this->load->view("users/register", $data);
            $this->load->view("templates/footer");
        }
        else{
            $enc_password = md5($this->input->post("password"));

            $this->user_model->register($enc_password);
            $this->session->set_flashdata('user_registered', "You are registered.");
            redirect('posts');
        }
    }
}