<!doctype html>
<html lang="en">
    <head>
        <!-- Put Meta tags below this -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>PHP - ReadFile</title>

        <!-- Put Styles and Scripts below this -->
    </head>
    <body>
        <?php
            $myfile = fopen('output.txt', 'w') or die();

            $txt = "Hello World!";
            fwrite($myfile, $txt);

            fclose($myfile);

            /*$myfile = fopen('output.txt', 'r') or die();
            echo fread($myfile, filesize('output.txt'));
            fclose($myfile);*/
        ?>
    </body>
</html>