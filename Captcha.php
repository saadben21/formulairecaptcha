<?php
session_start();
$questiion = $_SESSION["question"];
$user_question = $_POST["question"];
$str = '<img style="margin:0px auto;width:500px;height:500px;" src="image/ok.png">';
$str1 = '<img style="margin:0px auto;width:500px;height:500px;" src="image/no.png">';
if ($user_question == $questiion) {
    echo $str;
} else {
    echo $str1; 
}

?>

