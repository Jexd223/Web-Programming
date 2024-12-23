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
                echo "<tr><th>Firstname</th><th>Nickname</th></tr>";

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
                                $row_html .= "<td>Dick</td>";
                            elseif ($value == "Dick") 
                                $row_html .= "<td>Robert</td>";
                            elseif ($value == "Bill") 
                                $row_html .= "<td>William</td>";
                            elseif ($value == "William") 
                                $row_html .= "<td>Bill</td>";
                            elseif ($value == "James") 
                                $row_html .= "<td>Jim</td>";
                            elseif ($value == "Jim") 
                                $row_html .= "<td>James</td>";
                            elseif ($value == "Margaret") 
                                $row_html .= "<td>Peggy</td>";
                            elseif ($value == "Peggy") 
                                $row_html .= "<td>Margaret</td>";
                            elseif ($value == "Ed") 
                                $row_html .= "<td>Edward</td>";
                            elseif ($value == "Edward") 
                                $row_html .= "<td>Ed</td>";
                            elseif ($value == "Sarah") 
                                $row_html .= "<td>Sally</td>";
                            elseif ($value == "Sally") 
                                $row_html .= "<td>Sarah</td>";
                            elseif ($value == "Andy") 
                                $row_html .= "<td>Andrew</td>";
                            elseif ($value == "Andrew") 
                                $row_html .= "<td>Andy</td>";
                            elseif ($value == "Anthony") 
                                $row_html .= "<td>Tony</td>";
                            elseif ($value == "Tony") 
                                $row_html .= "<td>Anthony</td>";
                            elseif ($value == "Deborah") 
                                $row_html .= "<td>Debbie</td>";
                            elseif ($value == "Debbie") 
                                $row_html .= "<td>Deborah</td>";
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
