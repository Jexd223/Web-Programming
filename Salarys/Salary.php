<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="SalaryCal.php" method="get">
        <table>
            <tr>
                <td colspan="2" align="center" width="50">
                    <big>คำนวณเงินเดือน</big>
                </td>
            </tr>
            <tr>
                <td>ชั่วโมงการทำงาน : </td>
                <td><input type="number" name="hour" size = "15" value=""></td>
            </tr>
            <tr>
                <td>อัตราค่าจ้างต่อชั่วโมง : </td>
                <td><input type="number" name="Salary" size = "15" value=""></td>
            </tr>
            <td colspan="2" align="center">
                <input type="submit" name="submit" value=" OK " />
                <input type="reset" value=" Clear " />
        </td>
        </table>
    </form>
</body>
</html>