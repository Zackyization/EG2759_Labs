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
    echo "<b>" . $text1 . "</b>" . " contains <b>" . num_uppercase($text1) . "</b> uppercase characters";
} else {
    echo "<b>" . $text1 . "</b> is all lowercase";
}

echo "<br>";

$text2 = "EG3753 OSWSD";
if (num_uppercase($text2)) {
    echo "<b>" . $text2 . "</b>" . " contains <b>" . num_uppercase($text2) . "</b> uppercase characters";
} else {
    echo "<b>" . $text2 . "</b> is all lowercase";
}
echo "<br>";

$text3 = "is very interesting";
if (num_uppercase($text3)) {
    echo "<b>" . $text3 . "</b>" . " contains <b>" . num_uppercase($text3) . "</b> uppercase characters";
} else {
    echo "<b>" . $text3 . "</b>" . " is all lowercase";
}