<?php
    function getTypeSelect()
    {
        global $conn;
        $sql = "select * from book_type order by typeId";
        $dbQuery = mysqli_query($conn, $sql);

        if (!$dbQuery)
            die("(functionDB:getTypeSelect) select book_type มีข้อผิดพลาด" . mysqli_error($conn));

        echo '<option value="">เลือกประเภทหนังสือ</option>';

        while ($result = mysqli_fetch_object($dbQuery)) 
            echo '<option value=' . $result->typeId . '>' . $result->typeName . '</option>';
    }

    function getStatusSelect()
    {
        global $conn;
        $sql = "select * from book_status order by StatusId";
        $dbQuery = mysqli_query($conn, $sql);

        if (!$dbQuery)
            die("(functionDB:getStatusSelect) select book_status มีข้อผิดพลาด" . mysqli_error($conn));

        echo '<option value="">เลือกสถานะ</option>';

        while ($result = mysqli_fetch_object($dbQuery))
            echo '<option value=' . $result->statusId . '>' . $result->statusName . '</option>';
    }

    
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $dbName = "book_store";
    $conn = mysqli_connect($hostname, $username, $password);
    
    if (!$conn)
        die("ไม่สามารถติดต่อกับ mySQL ได้");

    mysqli_select_db($conn, $dbName) or die("ไม่สามารถเลือกฐานข้อมูล bookStore ได้");
    mysqli_query($conn, "set character_set_connection=utf8mb4");
    mysqli_query($conn, "set character_set_client=utf8mb4");
    mysqli_query($conn, "set character_set_results=utf8mb4");
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Book 1</title>
</head>

<body>
    <center>
        <form enctype="multipart/form-data" name="save" method="post" action="insertBook_2.php">
            <br><br>
            <table width="700" border="1" bgcolor="#ffffff">
                <tr>
                    <th colspan="2" bgcolor="" height="21">เพิ่มข้อมูลหนังสือ</th>
                </tr>
                <tr>
                    <td width="200">รหัสหนังสือ : </td>
                    <td width="400"><input type="text" name="bookId" size="50" maxlength="7"></td>
                </tr>
                <tr>
                    <td width="200">ชื่อหนังสือ : </td>
                    <td><input type="text" name="bookName" size="50" maxlength="50"> </td>
                </tr>
                <tr>
                    <td width="200">ประเภทหนังสือ : </td>
                    <td><select name="typeId">
                            <?php getTypeSelect();
                            ?>
                        </select></td>
                </tr>
                <tr>
                    <td width="200">สถานะหนังสือ : </td>
                    <td><select name="statusId">
                            <?php getStatusSelect();
                            ?>
                        </select></td>
                </tr>
                <tr>
                    <td width="200">สำนักพิมพ์ : </td>
                    <td><input type="text" name="publish" maxlength="25" size="20"></td>
                </tr>
                <tr>
                    <td width="200">ราคาที่ซื้อ : </td>
                    <td><input type="text" name="unitPrice" maxlength="25" size="20"></td>
                </tr>
                <tr>
                    <td width="200">ราคาที่เช่า : </td>
                    <td><input type="text" name="unitRent" size="20" maxlength="25"></td>
                </tr>
                <tr>
                    <td width="200">จำนวนวันที่เช่า : </td>
                    <td><input type="text" name="dayAmount" maxlength="25" size="20"></td>
                </tr>
                <tr>
                    <td width="200">รูปภาพ : </td>
                    <td><input type="file" name="imageFile" size="30">
                        <br>
                        <font size="2" color="#ff3300">นามสกุล .gif หรือ .jpg
                            (เท่านั้น)</font>
                    </td>
                </tr>
            </table>
            <br><input type="submit" name="submit" value="บันทึกข้อมูล" style="cursor:hand;">
            <input type="reset" name="reset" value="ยกเลิก" style="cursor:hand;">
        </form>
        <br><br><a href="listBook.php">กลับหน้า List of Book</a>;
    </center>
</body>

</html>