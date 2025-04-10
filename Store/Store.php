<?php
if(isset($_GET['submit'])) {
    $number = $_GET['number']; 
    $Piece = $_GET['Piece'];  

    if(is_numeric($number) && is_numeric($Piece)) {
        $total = $number * $Piece;
        if($total > 5000) {
            $discount = $total * 0.1; 
            $totaldiscount = $total - $discount; 
        } else {
            $discount = 0; 
            $totaldiscount = $total;
        }

        
        echo "<p>";
        echo "<center>";
        echo "จำนวนสินค้า: $number <br>";
        echo "ราคาต่อชิ้น: $Piece บาท<br>";
        echo "ราคาทั้งสิ้น: $total บาท<br>";
        echo "ส่วนลด: $discount บาท<br>";
        echo "ราคาหลังหักส่วนลด: $totaldiscount บาท<br>";
        echo "<a href='Store.php'> <big>กลับไปกรอกข้อมูลใหม่</big> </a>";
        echo "</center>";
        echo "</p>";
    } else {
        echo "<p><center>กรุณากรอกข้อมูลเป็นตัวเลขเท่านั้น!</center></p>";
    }
} else {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>คำนวณราคาสินค้า</title>
</head>
<body>
    <center>
        <form action="Store.php" method="get">
            <table border="0">
                <tr>
                    <td>จำนวนสินค้า:</td>
                    <td><input type="number" name="number" required></td>
                </tr>
                <tr>
                    <td>ราคาต่อชิ้น (บาท):</td>
                    <td><input type="number" name="Piece" required></td>
                </tr>
                <tr>
                    <td colspan="2" align="center">
                        <input type="submit" name="submit" value="คำนวณ">
                        <input type="reset" value="ล้างข้อมูล">
                    </td>
                </tr>
            </table>
        </form>
    </center>
</body>
</html>
<?php
}
?>









