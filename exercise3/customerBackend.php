<!DOCTYPE html>
<html>
<head>
<title>Customer Backend</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<?php
$rtx3060 = intval($_POST["rtx3060"]);
$rtx3080 = intval($_POST["rtx3080"]);
$rtx3090 = intval($_POST["rtx3090"]);
$shipping = $_POST["shipping"];
$email = $_POST["email"];
$pass = $_POST["pass"];

echo "<h2>Welcome ";
echo $email;
echo "</h2><p>Your password is: ";
echo $pass;
echo "</p>";

echo "<table border='1px'>";
echo "<tr><th>Item</th><th>Quantity</th><th>Cost Per Item</th><th>Sub Total</th></tr>";
echo "<tr><th>NVIDIA Geforce RTX 3060</th><td>";
echo $rtx3060;
echo "</td><td>$329</td><td>$";
echo $rtx3060 * 329;
echo "</td></tr>";

echo "<tr><th>NVIDIA Geforce RTX 3080</th><td>";
echo $rtx3080;
echo "</td><td>$699</td><td>$";
echo $rtx3080 * 699;
echo "</td></tr>";

echo "<tr><th>NVIDIA Geforce RTX 3090</th><td>";
echo $rtx3090;
echo "</td><td>$1499</td><td>$";
echo $rtx3090 * 1499;
echo "</td></tr>";

echo "<tr><th colspan='3'>Total Cost</th><th>$";
echo ($rtx3060 * 329) + ($rtx3080 * 699) + ($rtx3090 * 1499);
echo "</th></tr></table>";





?>


</body>
</html>