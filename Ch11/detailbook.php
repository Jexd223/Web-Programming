<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $id = $_REQUEST['bookId'];

        $hostname = "localhost";
        $username = "root";
        $password = "";
        $dbname = "bookstore";
        
        $conn = mysqli_connect( $hostname, $username, $password );
        
        if (!$conn) 
            die ("ไม่สามารถติดต่อกับ MySQL ได้");
        
        mysqli_select_db ( $conn, $dbname )or die ( "ไม่สามารถเลือกฐานข้อมูล bookstore ได้" );
        mysqli_query($conn, "set character_set_connection=utf8mb4");
        mysqli_query($conn, "set character_set_client=utf8mb4");
        mysqli_query($conn, "set character_set_results=utf8mb4");
        
        $sql = "select * from book where BookID = $id";
        $result = mysqli_query($conn,$sql);
        $data = mysqli_fetch_array($result);
        
        $Path="pictures/"; //ระบุ path ของไฟล์รูปภาพที่จัดเก็บไว้ใน server
        $image = "<img src=$Path$data[picture] valign=middle align = center width=\"80\" height = \"100\">";
        echo "<table border=1 align =center bgcolor=#FFCCCC>";  
        echo "<tr><td align=center colspan = 2 bgcolor =#FF99CC><B>แสดงรายละเอียดหนังสือ</B></td></tr>";
        echo "<tr><td> รหัสหนังสือ : </td><td>".$data["BookID"]."</td></tr>";
        echo "<tr><td> ชื่อหนังสือ : </td><td>".$data["BookName"]."</td></tr>";
        echo "<tr><td> ประเภทหนังสือ : </td><td>".$data["TypeID"]."</td></tr>";
        echo "<tr><td> สถานะหนังสือ : </td><td>".$data["StatusID"]."</td></tr>";
        echo "<tr><td> ส านักพิมพ์ : </td><td>".$data["Publish"]."</td></tr>";
        echo "<tr><td> ราคาซื้อ : </td><td>".$data["UnitPrice"]."</td></tr>";
        echo "<tr><td> ราคาเช่า : </td><td>".$data["UnitRent"]."</td></tr>";
        echo "<tr><td> รูปภาพ : </td><td>".$image."</td></tr>";
        echo "<tr><td>จ านวนวันที่ยืมได้ : </td><td>".$data["DayAmount"]."</td></tr>";
        echo "<tr><td> วันที่จัดเก็บหนังสือ :
        </td><td>".$data["Bookdate"]."</td></tr></table>";
    ?>

    <br>
    <div align="center"> <a HREF="listBook.php">กลับหน้าหลัก</a></div><br>
</body>
</html>