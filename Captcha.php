<?php
session_start();
$question = $_SESSION["question"];
$user_question = $_POST["question"];
$str = '<img style="margin:0px auto;width:500px;height:500px;" src="image/ok.png">';
$str1 = '<img style="margin:0px auto;width:500px;height:500px;" src="image/no.png">';
if ($user_question == $questiion) {
    echo $str;
    echo '<h1>votre formulaire a bien été envoyer</h1>';
} else {
    echo $str1; 
    echo '<h1>votre formulaire n\'a pas été envoyer</h1>';
}

?>

