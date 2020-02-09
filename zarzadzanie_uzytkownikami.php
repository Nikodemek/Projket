<?php
    session_start();
    require_once('includy/header_admin.php')
?>
<main class="zestawy" id="zzestawy">
        <div>
            <h1>Dodawanie użytkownika</h1>
            <form method="post">
                <p>Nazwa użytkownika</p>
                <input type="text" name="znazwa">
                <p>Imię użytkownika</p>
                <input type="text" name="zimie">
                <p>Nazwisko użytkownika</p>
                <input type="text" name="znazwisko">
                <p>Hasło użytkownika</p>
                <input type="password" name="zhaslo">
                <p>Rodzaj użytkownika</p>
                <div>Uczeń: <input type="radio" name="ruzyt" id="ruczen"></div>
                <div>Nauczyciel: <input type="radio" name="ruzyt" id="rnaucz"></div>
                <div>Administrator: <input type="radio" name="ruzyt" id="radmin"></div>
                <div class="hidden">
                    <p>Klasa</p>
                    <input type="text" name="zklasa">
                </div>
                <input type="submit" value="Dodaj" name="zdodaj">
            </form>
            <?php
                if(isset($_POST['zdodaj']) && !empty($_POST['znazwa']) && !empty($_POST['zimie']) && !empty($_POST['zhaslo']) && !empty($_POST['znazwisko'])){
                    $password = $_POST['zhaslo'];
                    $nazwa = $_POST['znazwa'];
                    $imie = $_POST['zimie'];
                    $nazwisko = $_POST['znazwisko'];
                    $connect = mysqli_connect("localhost", "root", "", "pai");
                    mysqli_set_charset($connect, "utf8");
                    $newPassword = password_hash($password, PASSWORD_ARGON2ID);
                    $sql = "INSERT INTO `uzytkownik` (`imie`, `nazwisko`, `login`, `haslo`) VALUES ('$imie', '$nazwisko', '$nazwa', '$newPassword')";
                    if(mysqli_query($connect, $sql)){
                        echo "Dodano uzytkownika ";
                    }else{
                        echo "Cos nie pyklo";
                    }
                    mysqli_close($connect);
                }
            ?>
        </div>
        <div>
            <h1>Usuwanie użytkownika</h1>
            <form method="post">
                <p>Nazwa użytkownika</p>
                <input type="text" name="unazwa">
                <div>
                    <input type="submit" value="Usuń" name="zusun">
                </div>
            </form>
        </div>
    </main>

<?php
    require_once('includy/footer_zuzyt.php')
?>