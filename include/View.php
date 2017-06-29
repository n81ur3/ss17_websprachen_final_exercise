<?php

/**
 * Created by bierbaumer.
 * Date: 6/25/17
 * Time: 8:45 PM
 */
class View
{
    private $model;

    public function __construct($model)
    {
        $this->model = $model;
    }

    public function displayHTML()
    {
        include("html/header.php");
        $this->includeNavigation();
        $this->model->getPageContent();
        include("html/footer.php");
    }

    private function includeNavigation()
    {
        ?>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-brand">NAVIGATION</div>
                <div>
                    <ul class="nav navbar-nav">
                        <li <?=$this->echoActiveClassIfRequestMatches("home")?>><a href="index.php">Home</a></li>
                        <li <?=$this->echoActiveClassIfRequestMatches("got")?>><a href="index.php?action=got">XML Feature</a></li>
                        <li <?=$this->echoActiveClassIfRequestMatches("php_feature")?>><a href="index.php?action=php_feature">PHP Feature</a></li>
                        <li <?=$this->echoActiveClassIfRequestMatches("javascript_feature")?>><a href="index.php?action=javascript_feature">JavaScript Feature</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <?php
    }

    function echoActiveClassIfRequestMatches($requestUri)
    {
        if (isset($_GET['action'])) {
            $current_action = $_GET['action'];
            if ($current_action == $requestUri) {
                echo 'class="active"';
            }
        }
        else if ($requestUri == 'home') {
            echo 'class="active"';
        }
    }
}

?>