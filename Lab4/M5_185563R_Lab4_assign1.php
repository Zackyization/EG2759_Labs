<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title>World Tours: Tours</title>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
</head>

<body>
    <table width="750" border="0" cellpadding="3" cellspacing="0">
        <tr>
            <td><a name="top"></a><img src="images/banner_left.jpg" width="451" height="68" alt="World Tours Banner, Left" /></td>
            <td width="135"><img src="images/stonehenge.jpg" width="135" height="68" alt="World Tours Banner,Right" /></td>
            <td width="135"><img src="images/dc.jpg" width="135" height="68" alt="World Tours Banner,Right" /></td>
        </tr>
        <tr>
            <td><img src="images/navbar.gif" name="navbar" width="450" height="20" border="0" usemap="#navbarMap" alt="Navigation Bar" /></td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td colspan="2">
    </table>

    <h1>Choose a Tour (City)</h1>
    <p><a href="XX_185563R_Lab4_assign1.php?id=P">Paris</a></p>
    <p><a href="XX_185563R_Lab4_assign1.php?id=L">London</a></p>
    <p><a href="XX_185563R_Lab4_assign1.php?id=SF">San Francisco</a></p>
    <p><a href="XX_185563R_Lab4_assign1.php?id=NY">New York</a></p>

<?php
if (isset($_GET['id'])) {

    echo "<hr>";

    switch ($_GET['id']) {
        case "P":
            $title = "Paris";
            $img = "images/eiffel.jpg";
            break;

        case "L":
            $title = "London";
            $img = "images/bigben.jpg";
            break;

        case "SF":
            $title = "San Francisco";
            $img = "images/golden_gate.jpg ";
            break;

        case "NY":
            $title = "New York";
            $img = "images/liberty.jpg";
            break;
    }

    echo "<h2>$title</h2>";
    echo "<img src='$img' width='165' height='250'>";
}
?>

</body>

</html>