<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

    public function view($page = 'index'){
	    if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php')){
            // Whoops, we don't have a page for that!
            show_404();
    	}

        $data['title'] = ucfirst($page); // Capitalize the first letter
        $data['current'] = 'dashboard';
        $data['food_type'] = $this->food_model->get_food_types();
        $data['food'] = $this->food_model->get_food_items();

 
        $this->load->view('templates/header', $data);
        $this->load->view('pages/'.$page, $data);
        $this->load->view('templates/footer');
        $this->load->view('templates/scripts');
    }

     public function food_details($id = NULL){
        $page = 'food_details';
	    if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php')){
            // Whoops, we don't have a page for that!
            show_404();
    	}

        $data['title'] = ucfirst($page); // Capitalize the first letter
        $data['current'] = 'dashboard';
        $data['addon'] = $this->food_model->get_food_variants();
        $data['detail'] = $this->food_model->get_food_items($id);
        $data['image'] = $this->food_model->get_other_images($id);
        $data['option'] = $this->food_model->get_options($id);
        $data['back'] = $_SERVER['HTTP_REFERER'];

 
        $this->load->view('templates/header_details', $data);
        $this->load->view('pages/'.$page, $data);
        $this->load->view('templates/scripts');
    }
}
