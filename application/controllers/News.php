<?php
// class News extends CI_Controller
// {
//     function news_list()
//     {
//         // Load model
//         $this->load->model('news_model', 'm_news');
//
//         // Gọi function trong model
//         $news_list = $this->m_news->getList();
//     }
// }

class News extends CI_Controller
{
    function news_list()
    {
        // Gọi function trong model
        $news_list = $this->news_model->getList();
    }
}
