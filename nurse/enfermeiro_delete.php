<?php
    include("../connection.php");

        $id = $_GET["id"];
        $sql = "DELETE FROM enfermeiro WHERE ID_Enfermeiro = $id";
        $result = $conn->query($sql);

        if ($result === TRUE) {
?>
<script>
    alert('Usuário removido com sucesso!!!');
    location.href = './enfermeiro_view.php';
</script>
<?php
        }
        else {
?>
<script>
    alert('Algo não deu certo...');
    history.go(-1);
</script>
<?php
        }
?>