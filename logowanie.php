<?php
    session_start();
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
    <link href="https://fonts.googleapis.com/css?family=Oswald:400,700&display=swap&subset=latin-ext" rel="stylesheet">
</head>
<body>
    <div class="wrapper logowanie">
        <form action="" method="post" id="log">
            <p>Login</p>
            <input type="text" name="login">
            <p>Hasło</p>
            <input type="password" name="haslo">
            <section>
                <input type="submit" name="submit" value="Logowanie">
                <a href="index.php">Powrót</a>
            </section>
        </form>
        <?php
            if(isset($_POST["submit"]) && !empty($_POST["login"]) && !empty("haslo")){
                $login = $_POST["login"];
                $password = $_POST["haslo"];
                $sql = "SELECT * FROM `uzytkownik` WHERE login = '$login'";
                $connect = mysqli_connect("localhost", "root", "", "pai");
                mysqli_set_charset($connect, "utf8");
                $checkLog = mysqli_query($connect, $sql);
                $row = mysqli_fetch_assoc($checkLog);
                if(password_verify($password, $row['haslo'])){
                    header('Location: panel_uzytkownika.php');
                }else{
                    echo "Nie dziala","<br>";
                    echo $row['haslo'],"<br>";
                    echo $password;
                }
            }
        ?>
    </div>
</body>
</html>