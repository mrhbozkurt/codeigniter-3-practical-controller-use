<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Test extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {

        // We can import all our data into the view via the $viewData variable. This kind of usage is more practical than the alternatives.
        // It is possible to transfer as much data as we want to the view in a single array and use it.

        $viewData = new stdClass();
        $viewData->pageName = "test";
        $viewData->pageUrl = "test-url";

        
        // ALL DATA
        $viewData->get_all = $this->test_model->get_all("tablo_name", ["which" => 1], "id ASC");

        // ONE DATA
        $viewData->get = $this->test_model->get("tablo_name", ["id" => 1]);


        //META
		$viewData->meta = ["which" => "test", "title" => "Test title", "desc" => "test descrptions"];

        $this->load->view("index", $viewData);

    }


}