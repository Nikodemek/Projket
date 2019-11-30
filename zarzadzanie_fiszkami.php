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
        <div>Angielski: <input type="radio" name="duzy"></div>
        <div>Niemiecki: <input type="radio" name="duzy"></div>
        <div>Francuski: <input type="radio" name="duzy"></div>
        <div class="holder">
        </div>
        <i class="far fa-plus-square adding"></i>
        <input type="submit" value="Dodaj">
        </form>
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
    </div>
    <div class="editing">
        <h1>Edycja zestawu</h1>
        <form method="post">
            <p>Nazwa zestawu</p>
            <input type="text" name="nameik_zestaw">
            <div>
                <a href="edycja_zestawu.php">Szukaj</a>
            </div>
        </form>
    </div>
</main>
<?php
    require_once('includy/footer_zfiszka.php')
?>