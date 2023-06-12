<?php
require_once('../boot.php');
require("../login/login_script.php");
require("../form_task3/form_content.php");


if(isset($_POST['surname']) && isset($_POST['name'])){
    if(isset($_POST['comment'])){
        $login = $_POST['login'];
        $user_id = "SELECT id FROM users WHERE login =  $login";
        $text = "Предмет: " + $_POST['select-lesson.element'];
        $comment = $_POST['comment'];





      

        $sql = "INSERT INTO record(user_id, text, comment) VALUES ('$user_id','$text','$comment')";



        $stmt = get_mysqli()->query($sql);

    }







}
else{
    header("Location: ../index.php");
}




?>