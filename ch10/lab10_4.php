<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $link[] = "http://www.kapook.com";
        $link[] = "http://www.yahoo.com";
        $link[] = "http://www.hotmail.com";
        $fp = fopen("link.html", "w");
        
        for($i = 0; $link[$i] != ""; $i++) {
            fputs($fp, "<a href='" . $link[$i] . "'>" . $link[$i] . "</a><br>\n");
        }
        
        echo "<h3>Write File Finish...</h3><br>";
        echo "<a href='link.html'>Test file</a>";
        
        fclose($fp);
    ?>
</body>
</html>
