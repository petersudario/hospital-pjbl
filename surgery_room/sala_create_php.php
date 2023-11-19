<?php

if(!isset($_SESSION["id_username"]) && $_SERVER['REQUEST_URI'] != "/hospital-pjbl/login.php"){

    header("https://www.google.com.br/");

} else {
    header("https://www.google.com.br/");
}
?>
<script>
    alert('Sala cadastrada com sucesso!!!');
    location.href = <?= header("Location: sala_view.php") ?>;
</script>