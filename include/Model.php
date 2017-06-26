<?php
/**
 * Created by bierbaumer.
 * Date: 6/25/17
 * Time: 8:45 PM
 */
// Aufgabe:
// Gehen Sie sicher, dass diese Datei nicht direkt aufgerufen
// werden kann!
if (! defined("Bierbaumer")) {
    die("Restricted access");
}

class Model{
    private $pageName;

    public function _construct() {
        $this->pageName = "startpage";
    }

    public function setPageName($newPage) {
        $this->pageName = $newPage;
    }

    public function getPageName() {
        return $this->pageName;
    }

    public function getPageContent() {
        include("html/pages/" . $this->pageName . ".php");
    }
}

?>