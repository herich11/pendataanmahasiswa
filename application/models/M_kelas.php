<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_kelas extends CI_Model
{
    public function getkelas()
    {
        $data = $this->db->get("masterkelas");
        return $data;
    }
    public function savekelas($postData)
    {
        $this->db->insert("masterkelas", $postData);
    }
    public function deletekelas($where)
    {
        $this->db->where($where)->delete("masterkelas");
    }
    public function getsinglekelas($where)
    {
        $data = $this->db->where($where)->get("masterkelas");
        return $data;
    }
    public function updatekelas($where, $postData)
    {
        $this->db->where($where)->update("masterkelas", $postData);
    }
}
