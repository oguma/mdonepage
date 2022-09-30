<?php
spl_autoload_register(function($class){
	require str_replace('\\', DIRECTORY_SEPARATOR, ltrim($class, '\\')).'.php';
});
use Michelf\MarkdownExtra;
$text = file_get_contents('editme.md');
$html = MarkdownExtra::defaultTransform($text);
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="initial-scale=1.0"/>
        <link rel="stylesheet" href="style.css"/>
        <script>
            window.onload = function() {
                document.getElementById("year").innerHTML = new Date().getFullYear();
            }
        </script>
    </head>
    <body>
        <article><?php echo $html; ?></article>
        <footer>
          <hr/>
          <p>&copy; <span id="year"></span> One-page website. All Rights Reserved.</p>
        </footer>
    </body>
</html>
