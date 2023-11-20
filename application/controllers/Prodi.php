<?php
defined('BASEPATH') or exit('No direct script access allowed');
// Don't forget include/define REST_Controller path

/**
 *
 * Controller Prodi
 *
 * This controller for ...
 *
 * @package   CodeIgniter
 * @category  Controller CI
 * @author    Setiawan Jodi <jodisetiawan@fisip-untirta.ac.id>
 * @author    Raul Guerrero <r.g.c@me.com>
 * @link      https://github.com/setdjod/myci-extension/
 * @param     ...
 * @return    ...
 *
 */

class Prodi extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
    $this->load->model('prodi_model');
  }

  public function index()
  {
    $data['judul'] = "Halaman Prodi";
    $data['user'] = $this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();
    $data['prodi'] = $this->prodi_model->get();
    $this->load->view("layout/header", $data);
    $this->load->view("prodi/vw_prodi", $data);
    $this->load->view("layout/footer", $data);
  }

  public function tambah()
  {
    $data['judul'] = "Halaman Tambah Prodi";
    $data['user'] = $this->db->get_where ('user',['email' => $this->session->userdata('email')])->row_array();
    $this->form_validation->set_rules('nama','Nama Prodi','required',[
      'required' => 'Nama Prodi Wajib di isi'
    ]);
    $this->form_validation->set_rules('ruangan','Ruangan','required',[
      'required' => 'No Ruangan Prodi Wajib di isi'
    ]);
    $this->form_validation->set_rules('jurusan','Jurusan','required',[
      'required' => 'Jurusan dari Prodi Wajib di isi'
    ]);
    $this->form_validation->set_rules('akreditasi','Akreditasi','required',[
      'required' => 'Akreditasi Prodi Wajib di isi'
    ]);
    $this->form_validation->set_rules('nama_kaprodi','Nama Kaprodi','required',[
      'required' => 'Nama Kaprodi Wajib di isi'
    ]);
    $this->form_validation->set_rules('tahun_berdiri','Tahun Berdiri','required',[
      'required' => 'Tahun Berdirinya Prodi Wajib di isi'
    ]);
    $this->form_validation->set_rules('output_lulusan','Output Lulusan','required',[
      'required' => 'Lulusan dari Prodi Wajib di isi',
      
    ]);
    if ($this->form_validation->run() == false){
    $this->load->view("layout/header", $data);
    $this->load->view("prodi/vw_tambah_prodi", $data);
    $this->load->view("layout/footer");
    }else {
      $data = [
        'nama' => $this->input->post('nama'),
        'ruangan' => $this->input->post('ruangan'),
        'jurusan' => $this->input->post('jurusan'),
        'akreditasi' => $this->input->post('akreditasi'),
        'nama_kaprodi' => $this->input->post('nama_kaprodi'),
        'tahun_berdiri' => $this->input->post('tahun_berdiri'),
        'output_lulusan' => $this->input->post('output_lulusan'),
      ];
      $upload_image = $_FILES['gambar']['name'];
      if ($upload_image) {
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '2048';
        $config['upload_path'] = './assets/img/prodi/';
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('gambar')) {
          $new_image = $this->upload->data('file_name');
          $this->db->set('gambar', $new_image);
        } else {
          echo $this->upload->display_errors();
        }
      }
      $this->prodi_model->insert($data, $upload_image);        
      $this -> session -> set_flashdata('message','<div class="alert alert-success" role="alert">Data Prodi Berhasil Ditambah!</div>');
      redirect('Prodi');
    }
  }
  public function detail($id)
  {
    $data['judul'] = "Halaman Detail Prodi";
    $data['prodi'] = $this->prodi_model->getById($id);
    $this->load->view("layout/header", $data);
    $this->load->view("prodi/vw_detail_prodi", $data);
    $this->load->view("layout/footer");
  }

  public function hapus($id)
  {
    $this->prodi_model->delete($id);
    redirect('Prodi');
  }

public function edit($id)
{
  $data['judul'] = "Halaman Edit Prodi";
  $data['prodi'] = $this->prodi_model->getById($id);
  $this->load->view("layout/header");
  $this->load->view("prodi/vw_ubah_prodi", $data);
  $this->load->view("layout/footer");
}
public function update()
{
  $data = [
    'nama' => $this->input->post('nama'),
    'ruangan' => $this->input->post('ruangan'),
    'jurusan' => $this->input->post('jurusan'),
    'akreditasi' => $this->input->post('akreditasi'),
    'nama_kaprodi' => $this->input->post('nama_kaprodi'),
    'tahun_berdiri' => $this->input->post('tahun_berdiri'),
    'output_lulusan' => $this->input->post('output_lulusan'),
  ];
  $id = $this->input->post('id');
  $this->prodi_model->update(['id' => $id], $data);
  redirect('Prodi');
}
}

/* End of file Prodi.php */
/* Location: ./application/controllers/Prodi.php */