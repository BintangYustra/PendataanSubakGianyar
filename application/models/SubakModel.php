<?php

class SubakModel extends CI_model{
    public function getSubak()
    {
        return $query = $this->db->get('tb_subak') -> result_array();
    }

    public function getUser()
    {
        return $query = $this->db->get('tb_user') -> result_array();
    }
    public function getPrajuru()
    {
        return $query = $this->db->get('tb_prajuru') -> result_array();
    }
    public function getPalemahan()
    {
        return $query = $this->db->get('tb_palemahan') -> result_array();
    }
    public function getPawongan()
    {
        return $query = $this->db->get('tb_pawongan') -> result_array();
    }
    public function getPerahyangan()
    {
        return $query = $this->db->get('tb_perahyangan') -> result_array();
    }
}

?>