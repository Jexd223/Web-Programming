<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" type="text/css" href="css/mycss.css">
</head>
<body>
    <?php
        $fullname = "นายรุจ พิมพ์ทอง";
        $studentID = "6606021611083";
        $university = "มหาวิทยาลัยเทคโนโลยีพระจอมเกล้าพระนครเหนือ";
        $faculty = "เทคโนโลยีสารสนเทศ";
        $branch = "เทคโนโลยีสารสนเทศ";
    ?>

    <h1 class="big">
        <i>ประวัติส่วนตัว</i>
    </h1>
    <hr size="2"/> <br/>
    <p class="normal">
        ชื่อ : <?php echo $fullname; ?> <br/>
        รหัสประจำตัว : <?php echo $studentID; ?> <br/>
        <a class="link" href="http://www.kmutnb.ac.th">
            <?php echo $university; ?>
        </a><br/>
        <img src="image/logo_kmutnb.png" class="img"><br/>
        <a class="link" href="http://www.fitm.kmutnb.ac.th">คณะ : <?php echo $faculty; ?></a><br/>
        สาขา : <?php echo $branch; ?> <br/>
    </p>
</body>
</html>
