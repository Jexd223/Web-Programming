<?php
    if(isset($_GET['submit'])){
        $work = $_GET['hour'];
        $salary = $_GET['Salary'];
        if($work > 40){
            $ot = ($work-40)*($salary*1.5);
            
            $total = (40*$salary) + $ot;
        }else{
            $total = $work*$salary;
        }
        echo "<p>";
        echo "<center>";
        echo "ชั่วโมงการทำงาน : $work </br>";
        echo "ค่าจ้างต่อชั่วโมง : $salary </br>";
        echo "เงินเดือน : $total</br>";
        echo "<a href='Salary.php'> <big>Back </big></a>";
        echo "</center>";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="Salary.php" method="get">
        
    </form>
</body>
</html>