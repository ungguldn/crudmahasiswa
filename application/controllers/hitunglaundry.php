<?php
defined('BASEPATH') or exit('No direct script access allowed');
class hitunglaundry extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('laundry');
    }
    function index()
    {
        $this->laundry->bayar('setrika','6.5',false,false);
        echo "<br/>";
        $this->laundry->bayar('cuset','8',true,false);
        echo "<br/>";echo "<br/>";
        
        $this->laundry->bayar('setrika','3.5',false,true);
        echo "<br/>";
        

       
    }
}
