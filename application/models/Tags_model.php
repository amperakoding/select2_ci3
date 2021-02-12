<?php defined('BASEPATH') or exit('No direct script access allowed');

class Tags_model extends CI_Model
{
  function insert($data)
  {
    $this->db->insert('tags', $data);
  }
}
