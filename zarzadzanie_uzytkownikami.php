<?php
    session_start();
    require_once('includy/header_admin.php')
?>
<main class="zestawy" id="zzestawy">
        <div>
            <h1>Dodawanie ucznia</h1>
            <form method="post">
                <p>Nazwa ucznia</p>
                <input type="text" name="znazwa">
                <p>Imię ucznia</p>
                <input type="text" name="zimie">
                <p>Nazwisko ucznia</p>
                <input type="text" name="znazwisko">
                <p>Hasło ucznia</p>
                <input type="password" name="zhaslo">
                <div class="holder"></div>
                <input type="submit" value="Dodaj" name="zdodaj">
            </form>
            <?php
                if(isset($_POST['zdodaj']) && !empty($_POST['znazwa']) && !empty($_POST['zimie']) && !empty($_POST['zhaslo']) && !empty($_POST['znazwisko'])){
                    $password = $_POST['zhaslo'];
                    $connect = mysqli_connect("localhost", "root", "", "pai");
                    mysqli_set_charset($connect, "utf8");
                    $sql = $connect->prepare("INSERT INTO `uzytkownik` (`imie`, `nazwisko`, `login`, `haslo`, `id_rdz_uzytkownik`, `status_id`) VALUES (?, ?, ?, ?, ?, ?)");
                    $nazwa = $_POST['znazwa'];
                    $imie = $_POST['zimie'];
                    $nazwisko = $_POST['znazwisko'];
                    $newPassword = password_hash($password, PASSWORD_ARGON2ID);
                    $rodzaj = 1;
                    $status = 1;
                    $sql->bind_param('ssssii', $imie, $nazwisko, $nazwa, $newPassword, $rodzaj, $status);
                    if($sql->execute()){
                        echo "Dodano uzytkownika ";
                    }else{
                        echo "Cos nie pyklo";
                    }
                    $sql->close();
                    mysqli_close($connect);
                }
            ?>
        </div>
        <div>
            <h1>Dodawanie admina</h1>
            <form method="post">
                <p>Nazwa admina</p>
                <input type="text" name="anazwa">
                <p>Imię admina</p>
                <input type="text" name="aimie">
                <p>Nazwisko admina</p>
                <input type="text" name="anazwisko">
                <p>Hasło admina</p>
                <input type="password" name="ahaslo">
                <div class="holder"></div>
                <input type="submit" value="Dodaj" name="adodaj">
            </form>
            <?php
                if(isset($_POST['adodaj']) && !empty($_POST['anazwa']) && !empty($_POST['aimie']) && !empty($_POST['ahaslo']) && !empty($_POST['anazwisko'])){
                    $connect = mysqli_connect("localhost", "root", "", "pai");
                    mysqli_set_charset($connect, "utf8");
                    $password = $_POST['ahaslo'];
                    $sql = $connect->prepare("INSERT INTO `uzytkownik` (`imie`, `nazwisko`, `login`, `haslo`, `id_rdz_uzytkownik`, `status_id`) VALUES (?, ?, ?, ?, ?, ?)");
                    $sql->bind_param('ssssii', $imie, $nazwisko, $nazwa, $newPassword, $rodzaj, $status);
                    $nazwa = $_POST['anazwa'];
                    $imie = $_POST['aimie'];
                    $nazwisko = $_POST['anazwisko'];
                    $newPassword = password_hash($password, PASSWORD_ARGON2ID);
                    $rodzaj = 2;
                    $status = 1;
                    if($sql->execute()){
                        echo "Dodano uzytkownika ";
                    }else{
                        echo "Cos nie pyklo";
                    }
                    $sql->close();
                    mysqli_close($connect);
                }
            ?>
        </div>
        <div>
            <h1>Usuwanie użytkownika</h1>
            <form method="post">
                <p>Nazwa użytkownika</p>
                <input type="text" name="usuwanko">
                <div>
                    <input type="submit" value="Usuń" name="zusun">
                </div>
                <?php
                    if(isset($_POST['zusun']) && !empty($_POST['usuwanko'])){
                        $connect = mysqli_connect("localhost", "root", "", "pai");
                        mysqli_set_charset($connect, "utf8");
                        $nazwa = $_POST['usuwanko'];
                        $sql1 = "SELECT `id_uzytkownika` FROM `uzytkownik` WHERE `login` = '$nazwa'";
                        $result = mysqli_query($connect, $sql1);
                        $user = mysqli_fetch_assoc($result);
                        $sql = $connect->prepare("DELETE FROM `uzytkownik` WHERE `uzytkownik`.`id_uzytkownika` = ?");
                        $siemka = $user['id_uzytkownika'];
                        $sql->bind_param('i', $siemka);
                        if($sql->execute()){
                            echo "Usunieto uzytkownika";
                        }else{
                            echo "Cos poszlo nie tak";
                        }
                        $sql->close();
                        mysqli_close($connect);
                    }
                ?>
            </form>
        </div>
    </main>

<?php
    require_once('includy/footer_zuzyt.php')
?>