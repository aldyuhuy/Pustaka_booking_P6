<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contoh1 extends CI_Controller {
	public function index()
	{
		// $this->load->view('welcome_message');
        echo "<h1>Welcome to Controller <span>Contoh1</span></h1>";
        echo "<style>span {color: blue}</style>";
	}
}
