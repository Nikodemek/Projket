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
    <div class="wrapper ustawienia">
        <form action="" method="post" id="settings">
                <p>Login: <span>Jakies dane</span></p>
                <p>Imie: <span>Jakies dane</span></p>
                <p>Nazwisko: <span>Jakies dane</span></p>
                <button id="passChange">Zmiana hasła</button>
                <a href="panel_uzytkownika.php">Powrót</a>
                <div class="mini_wrap none">
                <p>Stare hasło</p>
                <input type="text" name="stare_haslo">
                <p>Nowe hasło</p>
                <input type="text" name="nowe_haslo">
                <p>Powtórz hasło</p>
                <input type="text" name="nowe_haslo">
                <input type="submit" name="haslo_submit">
            </div>
        </form>
    </div>
    <script src="script_settings.js"></script>
</body>
</html>