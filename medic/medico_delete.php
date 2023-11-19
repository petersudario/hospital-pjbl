<?php
$servername = "localhost";
$username = "root"; // PUC => root
$password = "root";
$dbname = "hospital";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexão falhou: ${$conn->connect_error}");
}

$id = $_GET["id"];
$sql = "DELETE FROM medico WHERE ID_Medico = $id";
$result = $conn->query($sql);

if ($result === TRUE) {
    ?>
    <script>
        alert('Usuário removido com sucesso!!!');
        location.href = <?= header("Location: medico_view.php") ?>;
    </script>
    <?php
} else {
    ?>
    <script>
        alert('Algo não deu certo...');
        history.go(-1);
    </script>
    <?php
}
?>