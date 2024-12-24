<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Firstname to Nickname</title>
</head>
<body>
    <center>
        <?php
        if (isset($_POST['submit'])) {
            $filename = $_POST['filename'];
            
            // ตรวจสอบว่าไฟล์มีอยู่จริงหรือไม่
            if (file_exists($filename)) {
                $text = file($filename);

                echo "<table border='1' cellpadding='10'>";
                echo "<tr><th>Number</th><th>Nickname</th></tr>";

                foreach ($text as $tr_data) {
                    $col = 1;
                    $array_word = explode(",", $tr_data);
                    $row_html = "<tr>";
                    
                    foreach ($array_word as $value) {
                        $value = trim($value);
                        
                        if ($col == 1) {
                            $row_html .= "<td>" . htmlspecialchars($value) . "</td>";
                        } else {
                            if ($value == "Robert") 
                                $row_html .= "<td><center>Dick</center></td>";
                            elseif ($value == "Dick") 
                                $row_html .= "<td><center>Robert</center></td>";
                            elseif ($value == "Bill") 
                                $row_html .= "<td><center>William</center></td>";
                            elseif ($value == "William") 
                                $row_html .= "<td><center>Bill</center></td>";
                            elseif ($value == "James") 
                                $row_html .= "<td><center>Jim</center></td>";
                            elseif ($value == "Jim") 
                                $row_html .= "<td><center>James</center></td>";
                            elseif ($value == "Margaret") 
                                $row_html .= "<td><center>Peggy</center></td>";
                            elseif ($value == "Peggy") 
                                $row_html .= "<td><center>Margaret</center></td>";
                            elseif ($value == "Ed") 
                                $row_html .= "<td><center>Edward</center></td>";
                            elseif ($value == "Edward") 
                                $row_html .= "<td><center>Ed</center></td>";
                            elseif ($value == "Sarah") 
                                $row_html .= "<td><center>Sally</center></td>";
                            elseif ($value == "Sally") 
                                $row_html .= "<td><center>Sarah</center></td>";
                            elseif ($value == "Andy") 
                                $row_html .= "<td><center>Andrew</center></td>";
                            elseif ($value == "Andrew") 
                                $row_html .= "<td><center>Andy</center></td>";
                            elseif ($value == "Anthony") 
                                $row_html .= "<td><center>Tony</center></td>";
                            elseif ($value == "Tony") 
                                $row_html .= "<td><center>Anthony</center></td>";
                            elseif ($value == "Deborah") 
                                $row_html .= "<td><center>Debbie</center></td>";
                            elseif ($value == "Debbie") 
                                $row_html .= "<td><center>Deborah</center></td>";
                        }
                        $col++;
                    }
                    
                    $row_html .= "</tr>";
                    echo $row_html;
                }
                echo "</table>";
            } else {
                echo "<p style='color: red;'>File not found!</p>";
            }
        } else {
            ?>
            <form method="post" action="">
                <h3>Firstname to Nickname Converter</h3>
                <p>
                    <label>File name:</label>
                    <input type="text" name="filename" size="30" value=""/>
                </p>
                <p>
                    <input type="submit" name="submit" value="SUBMIT" />
                    <input type="reset" value="RESET" />
                </p>
            </form>
            <?php
        }
        ?>
    </center>
</body>
</html>
