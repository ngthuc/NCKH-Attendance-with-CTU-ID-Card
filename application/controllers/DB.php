<?php
class DB extends CI_Controller
{
    // Hàm load form login
    public function load_db()
    {
        // Load model
        $this->load->database();
    }
}
