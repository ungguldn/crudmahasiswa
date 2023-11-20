<?php
defined('BASEPATH') or exit('No direct script access allowed');


/**
 *
 * Controller Profil
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

class Profil extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
		$this-> load->model('User_model', 'userrole');
  }
	

  public function index()
{
    $data['title'] = "Halaman Profile"; // Menggunakan variabel title
    $data['user'] = $this->userrole->getBy();
    $this->load->view("layout/header", $data);
    $this->load->view("profil/vw_profil", $data);
    $this->load->view("layout/footer");
}


}


/* End of file Profil.php */
/* Location: ./application/controllers/Profil.php */
