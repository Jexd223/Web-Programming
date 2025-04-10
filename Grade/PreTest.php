<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <?php
    if(isset($_POST['submit'])){
        $col = 1;
        $filename = $_POST['filename'];
        $text = file($filename);
        echo  "<center><table border = '0'>";
        echo "<tr><th>นักศึกษา</th><th>ทดสอบย่อย</th><th>สอบกลางภาค</th><th>สอบปลายภาค</th><th>รวม 100 คะแนน</th><th> Grade </th></tr>";
        foreach($text as $tr_data){
            $array_word = explode(",",$tr_data);
            $nameID = trim($array_word[0]);
            $score1 = isset($array_word[1]) ? (int)trim($array_word[1]) : 0;
            $score2 = isset($array_word[2])?(int)trim($array_word[2]) : 0;
            $score3 = isset($array_word[3])?(int)trim($array_word[3]) : 0;

            $total = $score1 + $score2 + $score3;
            $grade = "";
            if($total >= 80){
                $grade ='A';
            }elseif($total >= 75){
                $grade = 'B+';
            }elseif($total >= 70){
                $grade = 'B';
            }
            elseif($total >= 65){
                $grade = 'C+';
            }elseif($total >= 60){
                $grade = 'C';
            }elseif($total >= 55){
                $grade = 'D+';
            }elseif($total >= 50){
                $grade = 'D';
            }else{
                $grade = 'F';
            }
            echo "<tr>
            <td><center>$nameID<center></td>
            <td><center>$score1<center></td>
            <td><center>$score2<center></td>
            <td><center>$score3<center></td>
            <td><center>$total<center></td>
            <td><center>$grade<center></td>
            </tr>";
        }
        echo "</table></center>";
    }else {
    ?>
        <form method="post" action="PreTest.php">
            <h3>ไม่รู้</h3>
            <p>
                <label>File name:</label>
                <input type="text" name="filename" size="30" value=""/>
            </p>
            <p>
                <input type="submit" name="submit" value="SUBMIT" />
                <input type="reset" value="RESET" />
            </p>
        </form>
    <?php
    }
    ?>
</body>
</html>