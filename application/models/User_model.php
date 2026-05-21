<?php
class User_model extends CI_Model {

    public function get_users(){
        $this->db->select('users.name, users.email, roles.name as role, departments.name as department');
        $this->db->from('users');
        $this->db->join('roles', 'users.role_id = roles.id');
        $this->db->join('departments', 'users.department_id = departments.id');

        return $this->db->get()->result();
    }

    public function get_roles(){
        return $this->db->get('roles')->result();
    }

    public function get_departments(){
        return $this->db->get('departments')->result();
    }

    public function insert_user($data){
        return $this->db->insert('users', $data);
    }
}