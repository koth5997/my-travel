<?php
    $n = $_POST["n1"];
    if($n == n1) {
    start($n);	
    }else if($n == n2) {
        start($n);
    }else if($n == n3) {
        start($n);
    }else if($n == n4) {
        start($n);
    }else if($n == n5) {
        start($n);
    }else if($n == n6) {
        start($n);
    }
    
    function start($key) {
    if($key == n1) {
    echo "<form action=\"homework4_1.php\" method=\"post\" >";
    echo "밑변 : <input type=\"number\" name=\"width\" /><br />";
    echo "높이 : <input type=\"number\" name=\"height\" /><br />";
    echo "<input type=\"hidden\" name=\"key\" value=\"n1\" />";
    
    echo "<input type=\"submit\" value=\"확인\" />";
    echo "</form>";	
        
    }else if($key == n2) {
    echo "<form action=\"homework4_1.php\" method=\"post\" >";
    echo "가로 : <input type=\"number\" name=\"width\" /><br />";
    echo "세로 : <input type=\"number\" name=\"height\" /><br />";
    echo "<input type=\"hidden\" name=\"key\" value=\"n2\" />";
    echo "<input type=\"submit\" value=\"확인\" />";
    echo "</form>";		
    }
    else if($key == n3) {
        echo "<form action=\"homework4_1.php\" method=\"post\" >";
    echo "반지름 : <input type=\"number\" name=\"r\" /><br />";
    echo "<input type=\"hidden\" name=\"key\" value=\"n3\" />";
    echo "<input type=\"submit\" value=\"확인\" />";
    echo "</form>";	
    }else if($key == n4) {
        echo "<form action=\"homework4_1.php\" method=\"post\" >";
    echo "가로 : <input type=\"number\" name=\"width\" /><br />";
    echo "세로 : <input type=\"number\" name=\"length\" /><br />";
    echo "높이 : <input type=\"number\" name=\"height\" /><br />";
    echo "<input type=\"hidden\" name=\"key\" value=\"n4\" />";
    echo "<input type=\"submit\" value=\"확인\" />";
    echo "</form>";	
        
    }else if($key == n5) {
        echo "<form action=\"homework4_1.php\" method=\"post\" >";
    echo "반지름 : <input type=\"number\" name=\"r\" /><br />";
    echo "높이 : <input type=\"number\" name=\"height\" /><br />";
    echo "<input type=\"hidden\" name=\"key\" value=\"n5\" />";
    echo "<input type=\"submit\" value=\"확인\" />";
    echo "</form>";	
        
    }else if($key == n6) {
    echo "<form action=\"homework4_1.php\" method=\"post\" >";
    echo "반지름 : <input type=\"number\" name=\"r\" /><br />";
    echo "<input type=\"hidden\" name=\"key\" value=\"n6\" />";
    echo "<input type=\"submit\" value=\"확인\" />";
    echo "</form>";	
    }	
    }?>