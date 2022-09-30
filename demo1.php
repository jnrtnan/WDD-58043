<html>
<head><title>This is my first webpage</title><head>
<body bgcolor = "blue">
<p>This HTML will get delivered as is</p>
<?php echo "<p>But this code is interpreted by PHP and turned into HTML</p>";
$username = "Jan";
$count = 17;
echo $count; 
echo "<br>";
echo $username;
echo "6+2 is equal to ". 6+2;
echo "<br>";
echo "My name is ".$username;





?>

</body>
</html>