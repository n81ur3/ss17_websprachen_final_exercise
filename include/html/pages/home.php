<?php
/**
 * Created by: bierbaumer
 * Date: 6/27/17
 * Time: 9:56 PM
 */

if (!defined("BIERBAUMER")) {
    die("Access forbidden");
}

?>

<h1>Startpage</h1>
<div class="row">
    <div class="col-md-4">
        <h3>MVC Design Pattern</h3>
        <img src="images/mvc_pattern.png" id="mvc_pattern"/>
    </div>
    <div class="col-md-6">
        <h3>Aufgabenstellung:</h3>
        <p>
        <ul>
            <li>Verwenden Sie die objektorientierte MVC Struktur der Übungen für Ihre
                Prüfung! Bleiben Sie dem MVC Pattern treu: Logik im Controller, Daten
                im Model, HTML und PHP gemischt in der View
            </li>
            <li>Erstellen Sie dazu folgende Dateien in Ihrem Projekt:
                <ol>
                    <li>index.php Inkludiert nachfolgende Dateien und ist Haupteinstieg</li>
                    <li>php/model.php Datenmodel</li>
                    <li>php/view.php Eigenschaften und Methoden zur Anzeige!</li>
                    <li>php/controller.php Übernimmt die Kontrolle über Ihre Anwendung</li>
                </ol>
                <strong>Wichtig:</strong> Erstellen Sie ausschließlich Funktionen/Methoden, nur im
                Verzeichnis „html“ und dessen Unterverzeichnissen soll PHP und HTML
                vermischt sein! (siehe Übungen).
            </li>
            <li>Folgende Inhalte sollen verfügbar sein:
                <ol>
                    <li>Willkommensseite (Home, html/pages/home.php)</li>
                    <li>Inhalte der vorigen Übung(en) (XML, html/pages/xml.php)
                        Sie sollen hier wie bei der JS Übung mindestens 5 Elemente
                        darstellen. Sie können auch Ihre XSL Datei aus der ersten Übung in
                        Verbindung mit XML verwenden (siehe Anhang)!
                    </li>
                    <li>Bauen Sie außerdem folgendes PHP Feature in einer eigenen Seite
                        (html/pages/phpfeature.php) ein:
                        Öffnen Sie eine entfernte Datei und zeigen Sie den Text darin
                        (irgendeiner) in Ihrer Seite an!
                    </li>
                    <li>Bauen Sie zusätzlich folgendes JavaScript Feature in einer eigenen
                        Seite ein (html/pages/jsfeature.php):
                        Erstellen Sie ein Listenfeld (input vom Typ select), welches 4
                        Optionen hat: "", "Fehler", "Warnung" und "Info". Sobald Sie eine
                        Option ausgewählt haben soll der Hintergrund Ihres Listenfelds je
                        nach Option die Farbe "Weiss", "Rot", "Orange" oder "Blau"
                        haben!
                    </li>
                </ol>
                <strong>Zusätzliche Information:</strong>
                http://php.net/manual/de/features.remote-files.php. Schauen Sie, ob Teile
                Ihrer Aufgabe nicht ohnehin schon in der eLearning Plattform behandelt
                wurden!
        </ul>
    </div>
</div>
</p>
