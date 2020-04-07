<?php
    require_once('includy/header_log.php')
?>

<main class="zestawy">
    <h1></h1>
    <div class="nauka">
        <div id="first_nauka" class="fiszka"></div>
        <i class="fas fa-chevron-right"></i>
        <i class="fas fa-chevron-left"></i>
        <div id="second_nauka" class="fiszka"></div>
        <div class="foot_nauka">
            <a href="zestawy.php">Powrót</a>
        </div>
    </div>
</main>

<?php
    require_once('includy/footer_fiszki.php');
    if(isset($_GET['setID'])){
        $siemka = $_GET['setID'];
        $connect = mysqli_connect("localhost", "root", "", "pai");
        mysqli_set_charset($connect, "utf8");
        $sql = "SELECT `zestaw`.`jezyk`, `fiszki`.`id_zestawu`,`fiszki`.`slowko`, `fiszki`.`tlumaczenie` FROM `zestaw` INNER JOIN `fiszki` ON `zestaw`.`id_zestawu` = `fiszki`.`id_zestawu` WHERE `fiszki`.`id_zestawu` = $siemka";
        $result = mysqli_query($connect,$sql);
        $string = "[";
        $string2 = "[";
        while($row = mysqli_fetch_assoc($result)){
        $jezyk = $row['jezyk'];
        foreach($row as $key => $value){
            if($key == 'slowko'){
                $string.="'".$value."', ";
            }else if($key == 'tlumaczenie'){
                $string2.="'".$value."', ";
            }else{
            }
        }
    }
    $string = rtrim($string, ", ");
    $string2 = rtrim($string2, ", ");
    $string.="]";
    $string2.="]";
    }
    echo <<< siemano
    <script>const zestawy = {
        angielski: {
            zestaw_1: $string,
            tlumaczenie_1: $string2
        },
        niemiecki: {
    
        },
        francuski: {
    
        }
    }
    let i = 0;
    const right = document.querySelector(".zestawy .nauka .fas:nth-child(2)");
    const left = document.querySelector(".zestawy .nauka .fas:nth-child(3)");
    const upper = document.querySelector(".zestawy .nauka #first_nauka");
    const lower = document.querySelector(".zestawy .nauka #second_nauka");
    const h1 = document.querySelector("h1");
    h1.textContent = "$jezyk".toUpperCase();
    upper.textContent = zestawy.angielski.zestaw_1[0];
    lower.textContent = zestawy.angielski.tlumaczenie_1[0];
    
    right.addEventListener('click', () => {
        i++;
        if (i >= zestawy.angielski.zestaw_1.length) {
            i = 0;
            upper.textContent = zestawy.angielski.zestaw_1[0];
            lower.textContent = zestawy.angielski.tlumaczenie_1[0];
        } else {
            upper.textContent = zestawy.angielski.zestaw_1[i];
            lower.textContent = zestawy.angielski.tlumaczenie_1[i];
        }
        right.classList.add("swietlik");
        if (left.className == 'fas fa-chevron-left swietlik') {
            left.classList.remove("swietlik");
        }
    });
    
    left.addEventListener('click', () => {
        i--;
        if (i < 0) {
            i = zestawy.angielski.zestaw_1.length;
            upper.textContent = zestawy.angielski.zestaw_1[zestawy.angielski.zestaw_1.length - 1];
            lower.textContent = zestawy.angielski.tlumaczenie_1[zestawy.angielski.zestaw_1.length - 1];
        } else {
            upper.textContent = zestawy.angielski.zestaw_1[i];
            lower.textContent = zestawy.angielski.tlumaczenie_1[i];
        }
        left.classList.add("swietlik");
        if (right.className == 'fas fa-chevron-right swietlik') {
            right.classList.remove("swietlik");
        }
    });</script>
siemano;
?>