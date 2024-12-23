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
        $fp = fopen("1.png", "rb");  // Open the original binary file in read mode
        if ($fp) {
            // Open a new file to write the copied content
            $fpnew = fopen("new_koala.jpg", "wb");  // Open a new file for writing the content
            
            // Read the original file and write it to the new file
            while ($ln = fread($fp, 1024)) {
                fwrite($fpnew, $ln);
            }

            // Close both files after finishing
            fclose($fp);
            fclose($fpnew);
            
            echo "<h3>File Copy Finish...</h3>";
            echo "<img src='new_koala.jpg' width='320' height='240'>";
        } else {
            die("ไม่สามารถเปิดไฟล์ 1.ppg ได้ !");
        }
    ?>
</body>
</html>
