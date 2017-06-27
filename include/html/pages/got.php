<?php
/**
 * Created by: bierbaumer
 * Date: 6/27/17
 * Time: 10:06 PM
 */

if (! defined("Bierbaumer")) {
    die("Restricted access");
}

    // Lade XML in DOMDocument
    $dom = new DOMDocument;
    $dom->load("xml/tvseries.xml");
    // Lade XSL in DOMDocument
    $xsl = new DOMDocument;
    $xsl->load('xml/tvseries.xsl');
    //Transformator initialisieren
    $proc = new XSLTProcessor;
    // Import von XSL in den Transformator
    $proc->importStyleSheet($xsl);
    // Ausgabe als "XML" oder "HTML"-je nach XSL
    echo $proc->transformToXML($dom);
?>