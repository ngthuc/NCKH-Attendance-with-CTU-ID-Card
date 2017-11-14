<?php
class Login extends CI_Controller
{
    // Hàm load form login
    public function form()
    {
        // Data cần truyền qua view
        $data = array(
            'title' => 'Đây là trang login',
            'message' => 'Nhập Thông Tin Đăng Nhập'
        );

        // Load view và truyền data qua view
        $this->load->view('login_form', $data);
    }
}
