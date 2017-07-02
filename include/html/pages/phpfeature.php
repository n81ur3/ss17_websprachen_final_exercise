<?php
/**
 * Created by: bierbaumer
 * Date: 6/27/17
 * Time: 9:54 PM
 */

if (!defined("BIERBAUMER")) {
    die("Access forbidden");
}

?>

<h1>PHP Feature</h1>
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-brand">Please select a book</div>
        <div class="btn-group">
            <a href="index.php?action=php_feature&booktitle=hackers">
                <button type="button" class="btn btn-success navbar-btn">Hackers, Heroes of the Computer Revolution</button>
            </a>
            <a href="index.php?action=php_feature&booktitle=internet">
                <button type="button" class="btn btn-success">A Brief History of the Internet</button>
            </a>
            <a href="index.php?action=php_feature&booktitle=cyberpunks">
                <button type="button" class="btn btn-success">The Real Cyberpunk Fakebook</button>
            </a>
        </div>
    </div>
</nav>
<pre id="book_text">
<?php
if (isset($_GET["booktitle"])) {
    $book = fopen("http://www.gutenberg.org/cache/epub/729/pg729.txt", "r");
    switch ($_GET["booktitle"]) {
        case "hacker":
            $book = fopen("http://www.gutenberg.org/cache/epub/729/pg729.txt", "r");
            break;
        case "internet":
            $book = fopen("http://www.gutenberg.org/cache/epub/250/pg250.txt", "r");
            break;
        case "cyberpunks":
            $book = fopen("http://www.gutenberg.org/cache/epub/929/pg929.txt", "r");
            break;
    }

    while (!feof($book)) {
        $line = fgets($book, 1024);
        echo $line;
    }

    fclose($book);
}
?>
</pre>
