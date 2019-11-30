<?php
    require_once('includy/header_admin.php')
?>
<main class="zestawy" id="edycja_zestaw">
    <div class="holder">
        <form method="post">
            <p>Fiszka 1</p>
            <input type="text" name="ezestaw">
            <p>Tłumaczenie 1</p>
            <input type="text" name="etzestaw">
            <i class="far fa-minus-square remove"></i>
            <p>Fiszka 2</p>
            <input type="text" name="ezestaw2">
            <p>Tłumaczenie 2</p>
            <input type="text" name="etzestaw2">
            <i class="far fa-minus-square remove"></i>
            <p>Fiszka 3</p>
            <input type="text" name="ezestaw3">
            <p>Tłumaczenie 3</p>
            <input type="text" name="etzestaw3">
            <i class="far fa-minus-square remove"></i>
        </form>   
    </div>
    <i class="far fa-plus-square adding"></i>
</main>
<?php
    require_once('includy/footer_nie_mam_nazwy.php')
?>