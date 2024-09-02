<?php

require "Model/model.php";
require "View/view.php";

class Controller{

    public function __construct(){
        $this->view = new View();
        $this->model = new Model();
    }


    public function navbar(){
        $this->view->navbar();
    }

    public function footer(){
        $this->view->footer();
    }

    public function indexContent(){
        $this->view->indexContent();
    }
}
?>