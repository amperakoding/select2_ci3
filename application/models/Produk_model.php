<?php defined('BASEPATH') or exit('No direct script access allowed');

class Produk_model extends CI_Model
{
  function insert($data)
  {
    $this->db->insert('produk', $data);
  }
}
