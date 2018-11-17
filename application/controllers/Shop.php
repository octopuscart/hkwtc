<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Shop extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Product_model');
        $this->load->library('session');
        $this->user_id = $this->session->userdata('logged_in')['login_id'];
    }

    public function index() {
        $product_home_slider_bottom = $this->Product_model->product_home_slider_bottom();
        $categories = $this->Product_model->productListCategories(0);
        $data["categories"] = $categories;
        $data["product_home_slider_bottom"] = $product_home_slider_bottom;
        $customarray = [1, 2];
        $this->db->where_in('id', $customarray);
        $query = $this->db->get('custome_items');
        $customeitem = $query->result();

        $data['shirtcustome'] = $customeitem[0];
        $data['suitcustome'] = $customeitem[1];

        $query = $this->db->get('sliders');
        $data['sliders'] = $query->result();

        $this->load->view('home', $data);
    }

    public function contactus() {
        $this->load->view('pages/contactus');
    }

    public function aboutus() {
        $this->load->view('pages/aboutus');
    }

    public function blog() {
        $this->load->view('pages/blog');
    }

    public function sendmailtest() {
      
        $config = Array(
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_port' => 465,
            'smtp_user' => 'noreplay2classapartstore@gmail.com',
            'smtp_pass' => 'padhaivadhai',
            'mailtype' => 'html',
            'charset' => 'iso-8859-1'
        );
        $this->load->library('email', $config);

        $this->email->initialize($config);
         $this->email->set_newline("\r\n");
        $this->email->from('sales@bespoketailorshk.com', 'Test Sender');
        $this->email->to("sales@bespoketailorshk.com");
        $this->email->subject('Test Mail');

        $this->email->message("Test Mail");
        $send = $this->email->send();
        if ($send) {
            echo json_encode("send");
        } else {
            $error = $this->email->print_debugger(array('headers'));
            echo json_encode($error);
        }
    }

}
