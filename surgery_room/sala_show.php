<?php
include("../connection.php");
include("../components/nav.php");

?>
<div class="bg-white rounded-lg shadow-lg p-8 mx-auto max-w-7xl mt-[50px]">

    <?php
    $id = $_GET["ID_Sala"];
    $sql = "SELECT ID_Sala, Bloco_Sala, Numero_Sala, tipo.tipo FROM Sala INNER JOIN Tipo ON fk_Tipo_ID_tipo = ID_tipo WHERE ID_Sala = $id";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<h2 class='text-2xl font-bold mb-4'>Dados da sala</h2>";
            echo "<p class='text-lg mb-2'><strong>ID:</strong> $id</p>";
            echo "<p class='text-lg mb-2'><strong>Bloco:</strong> {$row['Bloco_Sala']}</p>";
            echo "<p class='text-lg mb-2'><strong>Numero:</strong> {$row['Numero_Sala']}</p>";
            echo "<p class='text-lg mb-2'><strong>Tipo:</strong> {$row['tipo']}</p>";
        }
    }
    ?>

</div>

<?php
include("../components/footer.php");

?>