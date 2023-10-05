<!DOCTYPE html>
<html lang="en">
<head>
    <title>Syntax OVerview</title>
</head>
<body>
<?
# This is a comment, and
# This is the second line of the comment
// This is a comment too. Each style comments only
print "An example with single line comments";
?>
<?
# First 
print <<<END
This uses the "here document" syntax to output
multiple lines with $variable interpolation. Note
that the here document terminator must appear on a
line with just a semicolon no extra whitespace!
END;
# Second 
print "This spans
multiple lines. The newlines will be
output as well";
?>
<?
/* This is a comment with multiline
 Author : Mohammad Mohtashim
 Purpose: Multiline Comments Demo
 Subject: PHP
*/
print "An example with multi line comments";
?>
<?
//syntax overview
$capital = 67;
print("Variable capital is $capital<br>");
print("Variable CaPiTaL is $CaPiTaL<br>");
?>
<?
if (3 == 2 + 1)
 print("Good - I haven't totally lost my mind.<br>");
if (3 == 2 + 1)

 print("Good - I haven't totally");
 print("lost my mind.<br>");
?>
</body>
</html>