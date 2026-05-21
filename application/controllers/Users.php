<?php
class Users extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('User_model');
    }

    public function index(){
        $data['users'] = $this->User_model->get_users();
        $this->load->view('users_list', $data);
    }

    public function create(){

        if($this->input->post()){
            $data = [
                'name' => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'role_id' => $this->input->post('role_id'),
                'department_id' => $this->input->post('department_id')
            ];

            $this->User_model->insert_user($data);
            redirect('users');
        }

        $data['roles'] = $this->User_model->get_roles();
        $data['departments'] = $this->User_model->get_departments();

        $this->load->view('user_create', $data);
    }
}u