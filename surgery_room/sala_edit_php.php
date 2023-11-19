<?php
include("../connection.php");


$id = $_POST["hidId"];
$bloco = $_POST["txtBloco"];
$numero = $_POST["txtNumero"];
$tipo = $_POST["txtTipo"];

$sql = "UPDATE Sala SET 
                        Bloco_Sala = '$bloco',
                        Numero_Sala = '$numero',
                        fk_Tipo_ID_tipo = '$tipo'
                    WHERE ID_Sala=$id";

$result = $conn->query($sql);

if ($result === TRUE) {
    ?>
    <script>
        alert('Usuário editado com sucesso!!!');
        location.href = 'sala_view.php';
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