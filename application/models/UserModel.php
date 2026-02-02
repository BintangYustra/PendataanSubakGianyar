<?php
class UserModel extends CI_Model {
    public function get_all_user() {
        return $this->db->get('user')->result();
    }
    
    public function get_total_operator() {
    return $this->db->count_all('user');
    }

    public function get_user_by_username($username) {
        return $this->db->get_where('user', ['username' => $username])->row();
    }

    public function pagination($limit, $start)
    {
        return $this -> db -> get('user', $limit, $start) -> result();
    }
}
