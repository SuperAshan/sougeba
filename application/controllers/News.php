<?php

/*
 * Created on 2016��3��8��
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
class News extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this -> load -> model('news_model');
        $this -> load -> helper('url_helper');
    }

    public function index()
    {
        $data['news']=$this->news_model->get_news();
        $data['title'] = 'News archive';

        $this->load->view('templates/header', $data);
        $this->load->view('news/index', $data);
        $this->load->view('templates/footer');
    }

	public function view($singername = 'NULL') {
        $data['news_item'] = $this->news_model->get_news($singername);
        if (empty($data['news_item']))
        {
        show_404();
         }

         $data['title'] = $data['news_item']['SongName'];

         $this->load->view('templates/header', $data);
         $this->load->view('news/view', $data);
         $this->load->view('templates/footer');
	}
}
?>
