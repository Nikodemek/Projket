<?php
    if(isset($_SESSION)){
    }else{
        session_start();
    }
     if($_SESSION['id'] != "user"){
         header('Location: index.php');
     }
?>
<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LearNico</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="media.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU"
    crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Oswald:400,700&display=swap&subset=latin-ext" rel="stylesheet">
</head>

<body>
    <div class="wrapper">
        <header>
            <a id="main_page" href="panel_uzytkownika.php">LearNico</a>
            <a id="log_outt" href="index.php">Wyloguj się</a>
        </header>