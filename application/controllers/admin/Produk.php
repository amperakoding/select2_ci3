<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Produk extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();

    $this->load->model(array('Produk_model', 'Tags_model'));
  }

  public function tambah()
  {
    $data['page_title']       = 'Tambah Data';

    $data['action'] = 'admin/produk/proses_tambah';

    $this->load->view('backend/produk/tambah', $data);
  }


  public function proses_tambah()
  {
    $this->form_validation->set_rules('nama_produk', 'Nama Produk', 'trim|required');
    $this->form_validation->set_rules('harga', 'Harga Produk', 'trim|required');
    $this->form_validation->set_rules('nama_tags[]', 'Tags', 'trim|required');

    $this->form_validation->set_message('required', '{field} wajib diisi');

    $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');

    if ($this->form_validation->run() == FALSE) {
      $this->tambah();
    } else {
      $data = array(
        'nama_produk' => $this->input->post('nama_produk'),
        'harga'       => $this->input->post('harga'),
      );

      $this->Produk_model->insert($data);

      $produk_id = $this->db->insert_id();

      $nama_tags = count($this->input->post('nama_tags'));

      for ($i = 0; $i < $nama_tags; $i++) {
        $datas[$i] = array(
          'produk_id' => $produk_id,
          'nama_tags' => $this->input->post('nama_tags[' . $i . ']')
        );

        $this->db->insert('tags', $datas[$i]);
      }

      redirect('admin/produk/index');
    }
  }
}
