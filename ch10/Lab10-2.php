<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $fp = @fopen("Sample.txt", "r");
    $first = true;

    if ($fp) {
        echo "<table border='1' align='center' width='50%'>";
        
        // Reading each line instead of each character
        while (($line = fgets($fp)) !== false) {
            $columns = explode(",", $line);  // Assuming comma-separated values
            echo "<tr>";
            
            foreach ($columns as $column) {
                echo "<td align='center'>" . htmlspecialchars(trim($column)) . "</td>";
            }
            
            echo "</tr>";
        }
        
        echo "</table>";
        fclose($fp);  // Don't forget to close the file
    } else {
        echo "<p style='text-align: center; color: red;'>ไม่สามารถเปิดไฟล์ Sample.txt เพื่ออ่านได้!</p>";
    }
?>
</body>
</html>
