<?php
function is_str_all_lowercase($text)
{
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
}
?>