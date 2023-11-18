<html>
    <head>
        <title>Dados da sala</title>
    </head>
    <body>
        <?php
            include("../connection.php");

            $bloco = $_POST["txtBloco"];
            $numero = $_POST["txtNumero"];
            $tipo = $_POST["txtTipof"];
            
            $sql = "INSERT INTO Sala(Bloco_Sala, Numero_Sala, fk_Tipo_ID_tipo) 
             VALUES('$bloco', '$numero','$tipo')";
            $result = $conn->query($sql);

            if($result === TRUE) {
?>
<script>
    alert('Sala cadastrada com sucesso!!!');
    location.href = 'sala_view.php';
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
    </body>
</html>