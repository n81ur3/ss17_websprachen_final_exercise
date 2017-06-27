<?php
/**
 * Created by: bierbaumer
 * Date: 6/27/17
 * Time: 9:54 PM
 */

?>

<h1>PHP Feature</h1>
<pre>
<?php
if (isset($_GET["booktitle"])) {
    $booktitle = $_GET["booktitle"];
    $book = fopen("books/" . $booktitle . "t .txt", "r");
    echo fread($book, filesize("books/" . $booktitle . ".txt"));
    fclose($book);
}
?>
</pre>
