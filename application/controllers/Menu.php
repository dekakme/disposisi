<?php
defined('BASEPATH') OR exit ('No direct script acces allowed');

class Menu extends CI_Controller {
    public function index ()
    {
        $this->load->view('template/menu');
    }
}