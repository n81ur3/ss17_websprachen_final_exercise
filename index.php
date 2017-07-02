<?php
/**
 * Created by bierbaumer.
 * Date: 6/25/17
 * Time: 8:45 PM
 */
define("BIERBAUMER", true);

include_once("include/Controller.php");
include_once("include/Model.php");
include_once("include/View.php");

$controller = new Controller();
$controller->display();

?>
