<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 6 Q3</title>
</head>
<body>
<?php
function calculateArea($length, $width) {
    return $length * $width;
}

$length = 4; 
$width = 2; 
$area = calculateArea($length, $width);
?>


<p>The area of a rectangle with a width of <?php echo $length; ?> and <?php echo $width; ?> is <?php echo $area; ?>.</p>
</body>
</html>