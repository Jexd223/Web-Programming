<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Scores</title>
</head>
<body>
    <?php
        $maxRow = 20;
        $maxCol = 5; 
        for ($row = 0; $row < $maxRow; $row++) {
            $scores[$row][0] = rand(0, 10);
            $scores[$row][1] = rand(0, 20);
            $scores[$row][2] = rand(0, 35); 
            $scores[$row][3] = rand(0, 35); 
            $scores[$row][4] = $scores[$row][0] + $scores[$row][1] + $scores[$row][2] + $scores[$row][3]; // Total score
        }

        echo "<center><table border='1'>";
        echo "<tr>
                <td width='80' align='center'>No.</td>
                <td width='150' align='center'>HomeWork (10)</td>
                <td width='150' align='center'>Assignment (20)</td>
                <td width='150' align='center'>MidTerm (35)</td>
                <td width='150' align='center'>Final Term (35)</td>
                <td width='100' align='center'>Total (100)</td>
            </tr>";

        for ($row = 0; $row < $maxRow; $row++) {
            $number = $row + 1;
            echo "<tr>";
            echo "<td align='center'>{$number}</td>";
            for ($col = 0; $col < $maxCol; $col++) {
                echo "<td align='center'>{$scores[$row][$col]}</td>";
            }
            echo "</tr>";
        }
        echo "</table></center>";
    ?>
</body>
</html>
