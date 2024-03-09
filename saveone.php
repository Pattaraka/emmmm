<?php
   if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST['confirmation']) && $_POST['confirmation'] === 'not_confirm') {
        echo "ทำรายการไม่สำเร็จ" ;
        echo "<button style='background-color:red; color:white;'>feiled!</button>";
        echo "<style> body { background-color: #FC8EAC; } </style>";

        
    }
     else {
    echo "ทำรายการสำเร็จ";
    echo "<button style='background-color:green; color:white;'>Success!</button>";
    echo "<style> body { background-color: #FC8EAC; } </style>";
    }     
}


?>