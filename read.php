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
            $myfile = fopen('input.txt', 'r') or die('Could not open the file!');

            echo fread($myfile, filesize('input.txt'));

            fclose($myfile);
        ?>
    </body>
</html>