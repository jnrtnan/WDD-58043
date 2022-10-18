<html>
<head><title>Exercise</title></head>
<body align="center" bgcolor = 'blue'>
<?php

echo "<h1>GRADING SYSTEM</h1> <br>";

$grade = 69;
if ($grade>=70){
    echo "Grade is ".$grade. "<font color='green'> <strong>PASSED</strong>  ";
    echo "<br>";
}   
if ($grade<=69&&$grade>=60){
    echo "Grade is ".$grade. "<font color='yellow'> <strong>REMEDIAL</strong>";
    echo "<br>";
}   
if ($grade<=59){
    echo "Grade is ".$grade. "<font color='red'> <strong>FAILED</strong>";
    echo "<br>";
}   





?>
</body>
</html>