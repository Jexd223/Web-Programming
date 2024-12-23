<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <php?
        if(isset($_POST['submit'])){

        }else{
            ?>
            <form action="FN.php" method="post">
            <b>FirstnamNickname</b>
            <p></p>
            <td align="right">File name : </td>
            <td><input type="text" name="" size="" value=""></td>
            <p></p>
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" value="Submit">
                    <input type="reset" value="Reset">
                </td>
            </tr>
            </form>
        <php?
        }
        ?>
    </center>
</body>
</html>