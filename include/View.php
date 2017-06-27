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
        echo "<body><h1>First headline</h1></body>";
        $this->model->getPageContent();
        include("html/footer.php");
    }

    private function includeNavigation()
    {
        ?>
        <a href="index.php">Startpage</a>
        <a href="index.php?action=got">GoT</a>
        <a href="index.php?action=php_feature">PHP Feature</a>
        <a href="index.php?action=javascript_feature">JavaScript Feature</a>
<?php
    }
}
?>