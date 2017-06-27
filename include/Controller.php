<?php

/**
 * Created by bierbaumer.
 * Date: 6/25/17
 * Time: 8:45 PM
 */
class Controller
{
    private $model;
    private $view;
    private $action;

    public function __construct() {
        $this->checkGET();
        $this->model = new Model();
        $this->view = new View($this->model);
    }

    public function display() {
        switch ($this->action) {
            case "got":
                $this->model->setPageName("got");
                break;
            case "php_feature":
                $this->model->setPageName("php_feature");
                break;
            case "javascript_feature":
                $this->model->setPageName("javascript_feature");
                break;
            default:
                $this->model->setPageName("startpage");
        }
        $this->view->displayHTML();
    }

    private function checkGET() {
        if (isset($_GET["action"])) {
            $this->action = $_GET["action"];
        }
    }

}