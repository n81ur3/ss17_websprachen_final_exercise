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
        include("html/footer.php");
    }

    private function includeNavigation()
    {
        ?>
        <a href="http://www.orf.at">FirstPage</a>
        <a href="xml/tvseries.xml?action=got">GoT</a>
<?php
    }
}
?>