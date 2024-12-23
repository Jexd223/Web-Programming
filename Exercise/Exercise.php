<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <?php
        if(isset($_POST['submit'])){
            // รับชื่อไฟล์จากฟอร์ม
            $fileName = $_POST['file_name'];  

            // ตรวจสอบว่าไฟล์มีอยู่
            if(file_exists($fileName)) {
                // อ่านไฟล์เป็น array
                $text = file($fileName);

                // เริ่มต้นการแสดงผล
                echo "<h3>เนื้อหาของไฟล์ $fileName:</h3>";

                // เรียกใช้แต่ละบรรทัดจากไฟล์
                foreach($text as $tr_data){
                    $col = 1;
                    // แยกคำจากแต่ละบรรทัด
                    $array_word = explode(" ", trim($tr_data));

                    // ตรวจสอบและแปลงชื่อในแต่ละคำ
                    foreach($array_word as $value){
                        $value = trim($value); // ลบช่องว่างข้างหน้าและข้างหลัง
                        
                        // แปลงชื่อตามเงื่อนไขที่กำหนด
                        if($col == 1){
                            echo $value . " "; // แสดงชื่อแรก
                        } else {
                            if($value == "Robert"){
                                echo "Dick ";
                            }elseif($value == "Dick"){
                                echo "Robert ";
                            }elseif($value == "William"){
                                echo "Bill ";
                            }elseif($value == "Bill"){
                                echo "William ";
                            }elseif($value == "Jame"){
                                echo "Jim ";
                            }elseif($value == "Jim"){
                                echo "Jame ";
                            }elseif($value == "John"){
                                echo "Jack ";
                            }elseif($value == "Jack"){
                                echo "John ";
                            }elseif($value == "Margaret"){
                                echo "Peggy ";
                            }elseif($value == "Peggy"){
                                echo "Margaret ";
                            }elseif($value == "Edward"){
                                echo "Ed ";
                            }elseif($value == "Ed"){
                                echo "Edward ";
                            }elseif($value == "Sarah"){
                                echo "Sally ";
                            }elseif($value == "Sally"){
                                echo "Sarah ";
                            }elseif($value == "Andrew"){
                                echo "Andy ";
                            }elseif($value == "Andy"){
                                echo "Andrew ";
                            }elseif($value == "Antony"){
                                echo "Tony ";
                            }elseif($value == "Tony"){
                                echo "Antony ";
                            }elseif($value == "Deborah"){
                                echo "Debbie ";
                            }elseif($value == "Debbie"){
                                echo "Deborah ";
                            }
                        }

                        $col++;
                    }
                    echo "<br>"; // ขึ้นบรรทัดใหม่หลังจากแต่ละบรรทัดในไฟล์
                }
            } else {
                echo "<h3>ไม่พบไฟล์ที่คุณระบุ!</h3>";
            }

        } else {
        ?>
            <!-- ฟอร์มเพื่อรับชื่อไฟล์ -->
            <form action="FN.php" method="post">
                <b>First Name and Nickname</b><br><br>
                <table>
                    <tr>
                        <td align="right">File Name: </td>
                        <td><input type="text" name="file_name" size="30" value=""></td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center">
                            <input type="submit" name="submit" value="Submit">
                            <input type="reset" value="Reset">
                        </td>
                    </tr>
                </table>
            </form>
        <?php
        }
        ?>
    </center>
</body>
</html>
