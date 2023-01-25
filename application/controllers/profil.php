<?php
defined('BASEPATH') OR exit ('No direct script acces allowed');

class profil extends CI_Controller {
    public function profile()
{
// fungsi untuk me-load view contact.php
$this->load->view('profile');
}
}