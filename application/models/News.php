<?php
class News extends CI_Controller
{
    function news_list()
    {
        // Load model
        $this->load->model('news_model');

        // Gọi function trong model
        $news_list = $this->news_model->getList();
    }
}
