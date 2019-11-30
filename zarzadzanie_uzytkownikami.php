<?php
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