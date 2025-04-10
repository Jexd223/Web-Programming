<?php
if(isset($_GET['submit'])) {
    $number = $_GET['number']; // จำนวนสินค้า
    $Piece = $_GET['Piece'];  // ราคาต่อชิ้น
    $total = $number * $Piece; // คำนวณราคาทั้งหมด

    // ตรวจสอบส่วนลด
    if($total > 5000) {
        $total = $total - ($total * 0.1); // ลด 10%
    }

    // แสดงผลลัพธ์
    echo "<p>";
    echo "<center>";
    echo "จำนวนสินค้า: $number <br>";
    echo "ราคาต่อชิ้น: $Piece บาท<br>";
    echo "ราคาทั้งสิ้น (หลังหักส่วนลดถ้ามี): $total บาท<br>";
    echo "<a href='Store.php'> <big>กลับไปกรอกข้อมูลใหม่</big> </a>";
    echo "</center>";
    echo "</p>";
}
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
        <form action="StoreCal.php" method="get">
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
