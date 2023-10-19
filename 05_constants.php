<!DOCTYPE html>
<html lang="en">
<head>
    <title>Constants</title>
</head>
<body>

<?php
define("MINSIZE", 30);
echo MINSIZE;
echo constant("MINSIZE"); // same thing as the previous line
?>
<?php
define("MAXSIZE", 50);
echo MAXSIZE;
echo constant("MAXSIZE"); 
?>

<?
// Valid constant names ===
define("ONE", "first thing");
define("TWO2", "second thing");
define("THREE_3", "third thing")
?>

</body>
</html>