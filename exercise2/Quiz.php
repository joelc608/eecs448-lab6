<?php

$answers = array($_POST["q1"], $_POST["q2"], $_POST["q3"], $_POST["q4"], $_POST["q5"]);
$correct_answers = array("2","Infinity","A","HTTP","127.0.0.1");
$correct = 0;

echo "<h2>Question 1</h2>";
echo "<p>What is 1+1?</p>";
echo "<ul><li>1</li>";
echo "<li>2</li>";
echo "<li>3</li>";
echo "<li>4</li></ul>";
echo "<p>You answered: ";
echo $answers[0];
if($answers[0] == $correct_answers[0]){
    $correct = $correct + 1;
}
echo "</p><p>Correct Answer: ";
echo $correct_answers[0];
echo "</p>";

echo "<h2>Question 2</h2>";
echo "<p>Which of these numbers is largest?</p>";
echo "<ul><li>-Infinity</li>";
echo "<li>10000000</li>";
echo "<li>Infinity</li>";
echo "<li>-10000000</li></ul>";
echo "<p>You answered: ";
echo $answers[1];
if($answers[1] == $correct_answers[1]){
    $correct = $correct + 1;
}
echo "</p><p>Correct Answer: ";
echo $correct_answers[1];
echo "</p>";

echo "<h2>Question 3</h2>";
echo "<p>Which comes first?</p>";
echo "<ul><li>A</li>";
echo "<li>B</li>";
echo "<li>C</li>";
echo "<li>D</li></ul>";
echo "<p>You answered: ";
echo $answers[2];
if($answers[2] == $correct_answers[2]){
    $correct = $correct + 1;
}
echo "</p><p>Correct Answer: ";
echo $correct_answers[2];
echo "</p>";


echo "<h2>Question 4</h2>";
echo "<p>Which protocol is used for browsing websites?</p>";
echo "<ul><li>FTP</li>";
echo "<li>LDAP</li>";
echo "<li>RDP</li>";
echo "<li>HTTP</li></ul>";
echo "<p>You answered: ";
echo $answers[3];
if($answers[3] == $correct_answers[3]){
    $correct = $correct + 1;
}
echo "</p><p>Correct Answer: ";
echo $correct_answers[3];
echo "</p>";

echo "<h2>Question 5</h2>";
echo "<p>Which of these is the Loopback IP address?</p>";
echo "<ul><li>192.168.1.1</li>";
echo "<li>127.0.0.1</li>";
echo "<li>255.255.255.0</li>";
echo "<li>10.0.0.1</li></ul>";
echo "<p>You answered: ";
echo $answers[4];
if($answers[4] == $correct_answers[4]){
    $correct = $correct + 1;
}
echo "</p><p>Correct Answer: ";
echo $correct_answers[4];
echo "</p>";

echo "<h2>Score</h2>";
echo "<p>You scored: ";
echo ($correct/5.0)*100;
echo "%</p>";


?>