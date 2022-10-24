<?php

defined('BASEPATH') or exit('No direct script access allowed');

class ModelUser extends CI_Model
{
    public function simpanData($data = null)
    {
        $this->db->insert('user', $data);
    }
    public function cekData($Where = null)
    {
        return $this->db->get_where('user', $Where);
    }
    public function getUserWhere($Where = null)
    {
        return $this->db->get_where('user', $Where);
    }
    public function cekUserAccess($Where = null)
    {
        $this->db->select('*');
        $this->db->form('Access_menu');
        $this->db->select($where);
        return $this->db->get();
    }
    public function getUserLimit()
    {
        $this->db->select('*');
        $this->db->form('user');
        $this->db->limit(10, 0);
        return $this->db->get();
    }
}

?>