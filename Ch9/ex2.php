<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $MaxStudent = 20;
        for($n = 0 ; $n < $MaxStudent; $n++) {
            $scoremid[$n] = rand(0, 30);
            $scorefinal[$n] = rand(0,30);
            $scorework[$n] = rand(0,40);
            $score[$n] = $scoremid[$n] + $scorefinal[$n] + $scorework[$n];  // Fixed semicolon
        }
        echo '<center><font size="4" color="blue">Grade Report</font></center>';
        echo '<table border="1" align="center">';
        echo '<tr><td align="center" width="90">Student No.</td>';
        echo '<td align="center" width="90">Work Score</td>';
        echo '<td align="center" width="90">Midterm Score</td>';
        echo '<td align="center" width="90">Final Score</td>';
        echo '<td align="center" width="90">Total Score</td></tr>';
        
        for($n = 0; $n < $MaxStudent; $n++) {
            echo '<tr><td align="center" width="90">' . ($n + 1) . '</td>';
            echo '<td align="center" width="90">' . $scorework[$n] . '</td>';
            echo '<td align="center" width="90">' . $scoremid[$n] . '</td>';
            echo '<td align="center" width="90">' . $scorefinal[$n] . '</td>';
            echo '<td align="center" width="90">' . $score[$n] . '</td></tr>';
        }

        echo '<tr><td colspan="5" align="center">Average Score: ';
        echo average($score, $MaxStudent);
        echo '</td></tr></table>';

        function average($data, $max) {
            $total = 0;
            for($n = 0; $n < $max; $n++) {
                $total += $data[$n];
            }
            return ($total / $max);
        }
    ?>
</body>
</html>
