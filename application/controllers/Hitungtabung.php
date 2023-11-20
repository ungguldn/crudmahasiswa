<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Hitungtabung extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('tabung');
    }

    function index()
    {
        $this->tabung->volume('5', '7', '4');
        echo "<hr/>";
        $this->tabung->luas('5', '7', '4');
        echo "<hr/>";
        $this->tabung->luass('5', '7', '4');
        echo "<hr/>";
    }
}