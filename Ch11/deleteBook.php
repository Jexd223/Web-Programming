<?php
    $bookId = $_REQUEST['bookId'];

    $hostname = "localhost";
    $username = "root";
    $password = "";
    $dbName = "bookstore";
    $conn = mysqli_connect($hostname, $username, $password);

    if (!$conn)
        die("ไม่สามารถติดต่อกับ mySQL ได้");
    
    mysqli_select_db($conn, $dbName) or die("ไม่สามารถเลือกฐานข้อมูล book_store ได้");

    $sql = "delete from book where bookId=$bookId";
    
    mysqli_query($conn, $sql) or die("delete จากตาราง book มีข้อผิดพลาดเกิดขึ้น" . mysqli_error($conn));
    mysqli_close($conn);
    
    header("location:listBook.php");
?>