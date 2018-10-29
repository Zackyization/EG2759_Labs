
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Lowercase exercise</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<?php
echo "<b>What is ord() function?</b>";
echo "<br>";
echo "the ASCII of 'a' is " . ord('a');
echo "<br>";
echo "<br>";

function is_str_all_lowercase($text) {
    for ($sc = 0; $sc < strlen($text); $sc++) {
        if (ord($text[$sc]) >= ord('A') && ord($text[$sc]) <= ord('Z')) {
            return false; //an uppercase character is detected
        }
    }
    return true; //All chracters are lowercase
}

$result = is_str_all_lowercase('abc def Ghi');
echo $result;

// $test_text = "abc def ghi";
$test_text = "abc def Ghi";
if (is_str_all_lowercase($test_text)) {
    echo $test_text . ": is ALL LOWERCASE!!";
} else {
    echo $test_text . ": contains UPPERCASE characters.";

    echo "<br>";

    echo "The uppercase characters in the string of '$test_text': ";
    $foo = str_split($test_text);
    foreach($foo as $char) {
        if (ctype_upper($char)) {
            echo $char;
        }
    }
}
?>
</body>
</html>
