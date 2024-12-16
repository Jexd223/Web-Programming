<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="get" action="lab5-9cal.php">
        <table border="1" align="center" width="500">
            <tr>
                <td>
                    <big>ทดสอบการใช้ Arthmatic Operetor</big>
                </td>
            </tr>
            <tr>
                <td> Enter Number 1 : </td>
                <td>
                    <input type="text" name="no1" size="15" value=""/>
                </td>
            </tr>
                <td>Enter Number 2 :</td>
                <td><input type="text" name="no2" size="15" value=""/></td>
            </tr>
            <tr>
                <td>Operetor</td>
                <td align="center">
                    <input type="radio" name="Operator" value="+"> + <br>
                    <input type="radio" name="Operator" value="-"> - <br>
                    <input type="radio" name="Operator" value="*"> * <br>
                    <input type="radio" name="Operator" value="/"> / <br>
                    <input type="radio" name="Operator" value="%"> % <br>
                </td>
            </tr>
            <tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" value="Ok"/>
                    <input type="reset" value="Clear">p
                </td>
        </table>
    </form>
</body>
</html>