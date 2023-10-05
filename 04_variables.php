<!DOCTYPE html>
<html lang="en">
<head>
    <title>Variables</title>
</head>
<body>

<?
$variable = "name";
$literally = 'My $variable will not print!\\n';
print($literally);
$literally = "My $variable will print!\\n";
print($literally);
?>

<?php
$channel =<<<_XML_
<channel>
<title>What's For Dinner<title>
<link>http://menu.example.com/<link>
<description>Choose what to eat tonight.</description>
</channel>
_XML_;
echo <<<END
This uses the "here document" syntax to output
multiple lines with variable interpolation. Note
that the here document terminator must appear on a
line with just a semicolon. no extra whitespace!
<br />
END;
print $channel;
?>

<?
/*local variables*/

$x = 4;
function assignx () {
$x = 0;
print "\$x inside function is $x. 
";
}
assignx();
print "\$x outside of function is $x. 
";
?>

<?
//func parameter
// multiply a value by 5 and return it to the caller
function multiply ($value) {
 $value = $value * 5;
 return $value;
}
$retval = multiply (5);
Print "Return value is $retval\n";
?>

<?
//global variables --
$somevar = 15;
function addit() {
GLOBAL $somevar;
$somevar++;
print "Somevar is $somevar";
}
addit();
?>

<?
//static var
function keep_track() {
 STATIC $count = 0;
 $count++;
 print $count;
 print "";
}
keep_track();
keep_track();
keep_track();
?>
</body>
</html>