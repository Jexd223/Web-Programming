<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    // open file
    $fp = @fopen("sample.txt", "r");
    if ($fp) {
        while (!feof($fp)) {
            $data = @fgets($fp);
            echo $data . "<br>";
        }
        fclose($fp); // Always close the file after you're done
    } else {
        die ("ไม่สามารถเปิดไฟล์ Sample.txt เพื่ออ่านได้ !</body></html>");
    }
?>
</body>
</html>
