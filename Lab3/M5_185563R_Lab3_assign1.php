<?php
// function is_str_all_lowercase($text) {
//     for ($sc = 0; $sc < strlen($text); $sc++) {
//         if (ord($text[$sc]) >= ord('A') && ord($text[$sc]) <= ord('Z')) {
//             return false; //an uppercase character is detected
//         }
//     }
//     return true; //All chracters are lowercase
// }

function num_uppercase($text)
{
    $amt = 0;
    for ($sc = 0; $sc < strlen($text); $sc++) {
        if (ctype_upper($text[$sc])) {
            $amt++;
        }
    }

    return $amt;
}

$text1 = "Open Source Web Solutions Development";
if (num_uppercase($text1)) {
    echo "<b>" . $text1 . "</b>" . " contains " . num_uppercase($text1) . " uppercase characters";
} else {
    $text1 . " is all lowercase";
}

echo "<br>";

$text2 = "EG3753 OSWSD";
if (num_uppercase($text2)) {
    echo "<b>" . $text2 . "</b>" . " contains " . num_uppercase($text2) . " uppercase characters";
} else {
    $text2 . " is all lowercase";
}
echo "<br>";

$text3 = "is very interesting";
if (num_uppercase($text3)) {
    echo "<b>" . $text3 . "</b>" . " contains " . num_uppercase($text3) . " uppercase characters";
} else {
    echo $text3 . " is all lowercase";
}