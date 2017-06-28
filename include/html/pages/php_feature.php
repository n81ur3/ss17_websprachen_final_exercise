<?php
/**
 * Created by: bierbaumer
 * Date: 6/27/17
 * Time: 9:54 PM
 */

?>

<h1>PHP Feature</h1>
<nav>
    <span>Please select a book: </span>
    <a href="index.php?action=php_feature&booktitle=hackers"><button>Hackers, Heroes of the Computer Revolution</button></a>
    <a href="index.php?action=php_feature&booktitle=internet"><button>A Brief History of the Internet</button></a>
    <a href="index.php?action=php_feature&booktitle=cyberpunks"><button>The Real Cyberpunk Fakebook</button></a>

</nav>
<pre>
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

    while(!feof($book)) {
        $line = fgets($book, 1024);
        echo $line;
    }
    fclose($book);
}
?>
</pre>
