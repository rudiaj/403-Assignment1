<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>


<h1>PHP Variable Data  Types</h1> 
<p>
<?php   
 
$whatsit = '10'; 
echo "Value is " . gettype($whatsit) . ".<br>";   
 
$whatsit = 10.1; 
echo "Value is " . gettype($whatsit) . ".<br>";   
 
$whatsit = true; 
echo "Value is " . gettype($whatsit) . ".<br>";   
 
$whatsit = 10; 
echo "Value is " . gettype($whatsit) . ".<br>";
    
$whatsit = null; 
echo "Value is " . gettype($whatsit) . ".<br>";   
 
?>   
</p>
	
	
</body>
</html>