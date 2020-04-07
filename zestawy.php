<?php
    require_once('includy/header_log.php')
?>

<main class="zestawy">
    <!-- <h1 class="jezyk">Język angielski</h1>
    <a href="zestaw_1.php" class="zestawik">Przykładowy zestaw</a>
    <a href="zestaw_1.php" class="zestawik">Przykładowy zestaw</a>
    <h1 class="jezyk">Język niemiecki</h1>
    <a href="zestaw_1.php" class="zestawik">Przykładowy zestaw</a>
    <a href="zestaw_1.php" class="zestawik">Przykładowy zestaw</a>
    <h1 class="jezyk">Język hiszpański</h1>
    <a href="zestaw_1.php" class="zestawik">Przykładowy zestaw</a>
    <a href="zestaw_1.php" class="zestawik">Przykładowy zestaw</a> -->
    <?php
        $connect = mysqli_connect("localhost", "root", "", "pai");
        mysqli_set_charset($connect, "utf8");
        $sql =  "SELECT * FROM `zestaw`";
        $result = mysqli_query($connect,$sql);
        $licznik=0;
        while($row = mysqli_fetch_assoc($result)){
            $licznik++;
            echo "<a href='zestaw_1.php?setID=$row[id_zestawu]' class='zestawik' id='Zestaw_$licznik'>Zestaw $licznik</a>";
        }
    ?>
</main>

<?php
    require_once('includy/footer.php')
?>