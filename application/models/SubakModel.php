<?php

class SubakModel extends CI_model{
    public function getSubak()
    {
        return $query = $this->db->get('tb_subak') -> result_array();
    }
}

?>