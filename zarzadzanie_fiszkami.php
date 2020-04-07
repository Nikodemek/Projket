<?php
    require_once('includy/header_admin.php')
?>
<main class="zestawy" id="zewik">
    <div>
        <h1>Dodawanie zestawu</h1>
        <form method="post">
        <p>Nazwa zestawu</p>
        <input type="text" name="dname_zestaw">
        <p>Język zestawu</p>
        <input type="text" name="jezyk_zestawu">
        <div class="holder">
        </div>
        <div class="holder">
        </div>
        <input type="submit" value="Dodaj" name="siemka">
        </form>
        <?php
            if(isset($_POST['siemka']) && !empty($_POST['dname_zestaw']) && !empty('jezyk_zestawu')){
                $connect = mysqli_connect("localhost", "root", "", "pai");
                mysqli_set_charset($connect, "utf8");
                $sql = $connect->prepare("INSERT INTO `zestaw` (`nazwa_zestawu`, `jezyk`) VALUES (?, ?)");
                $sql->bind_param('ss', $name1, $jezyk);
                $name1 = $_POST['dname_zestaw'];
                $jezyk = $_POST['jezyk_zestawu'];
                if($sql->execute()){
                    echo "Dodano zestaw";
                }else{
                    echo "Cos nie pyklo";
                }
                // if(mysqli_query($connect, $sql)){
                //     echo "Dodano zestaw ";
                // }else{
                //     echo "Cos nie pyklo";
                // }
                $sql->close();
                mysqli_close($connect);
            }
        ?>
    </div>
    <div>
        <h1>Dodawanie fiszki</h1>
        <form method="post">
            <p>Nazwa zestawu</p>
            <input type="text" name="name_zestaw">
            <p>Nazwa fiszki</p>
            <input type="text" name="new_fiszka" placeholder="Orginalne znaczenie">
            <input type="text" name="new_fiszka2" placeholder="Tłumaczenie">
            <div class="holder"></div>
            <input type="submit" value="Dodaj fiszke" name="dodawnko">
        </form>
        <?php
            if(isset($_POST['dodawnko']) && !empty($_POST['name_zestaw']) && !empty($_POST['new_fiszka']) && !empty($_POST['new_fiszka2'])){
                $name = $_POST['name_zestaw'];
                $connect = mysqli_connect("localhost", "root", "", "pai");
                mysqli_set_charset($connect, "utf8");
                $sql1 = "SELECT `id_zestawu` FROM `zestaw` WHERE `nazwa_zestawu` = '$name'";
                $result = mysqli_query($connect, $sql1);
                $zestaw = mysqli_fetch_assoc($result);
                $sql = $connect->prepare("INSERT INTO `fiszki` (`slowko`, `tlumaczenie`, `id_zestawu`) VALUES (?, ?, ?)");
                $sql->bind_param('ssi', $new, $new1, $new2);
                $new = $_POST['new_fiszka'];
                $new1 = $_POST['new_fiszka2'];
                $new2 = $zestaw['id_zestawu'];
                if($sql->execute()){
                    echo "Dodano fiszke";
                }else{
                    echo "Cos poszlo nie tak";
                }
                $sql->close();
                mysqli_close($connect);
            }
        ?>
    </div>
    <div>
        <h1>Usuwanie zestawu</h1>
        <form method="post">
            <p>Nazwa zestawu</p>
            <input type="text" name="name_zestaw">
            <div>
                <input type="submit" value="Usuń" name="usun_zestaw">
            </div>
        </form>
        <?php
            if(isset($_POST['usun_zestaw']) && !empty($_POST['name_zestaw'])){
                $connect = mysqli_connect("localhost", "root", "", "pai");
                mysqli_set_charset($connect, "utf8");
                $name = $_POST['name_zestaw'];
                $sql1 = "SELECT `id_zestawu` FROM `zestaw` WHERE `nazwa_zestawu` = '$name'";
                $result = mysqli_query($connect, $sql1);
                $user = mysqli_fetch_assoc($result);
                $sql = $connect->prepare("DELETE FROM `zestaw` WHERE `zestaw`.`id_zestawu` = ?");
                $siemano = $user['id_zestawu'];
                $sql->bind_param('i', $siemano);
                if($sql->execute()){
                    echo "Usunieto zestaw";
                }else{
                    echo "Cos poszlo nie tak";
                }
                $sql->close();
                mysqli_close($connect);
            }
        ?>
    </div>
</main>
<?php
    require_once('includy/footer_zfiszka.php')
?>