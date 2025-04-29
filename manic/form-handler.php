<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // тут можно отправить на email или сохранить в файл

    echo "Ďakujeme, $name! Vaša správa bola odoslaná.";
}
?>