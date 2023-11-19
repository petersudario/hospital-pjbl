<?php
include("../connection.php");

$sql = "SELECT ID_Sala, Bloco_Sala, Numero_Sala, tipo.tipo FROM Sala INNER JOIN Tipo ON fk_Tipo_ID_tipo = ID_tipo";

$result = $conn->query($sql);
?>




<div class="grid m-2">
    <div class="text-left text-3xl font-bold mb-4 mt-4 ml-4">Sala</div>
    <div class=" mb-4 mt-4 ml-4">
        <?php
        if ($_SESSION['role'] == "admin") {
            echo '<a href="./sala_create.php" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-4 inline-block">Cadastrar</a>';
        }
        ?>
    </div>
    <div class="flex flex-wrap -mx-4 mx-auto">
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                ?>
                <div class="w-full md:w-1/2 lg:w-1/3 px-4 py-4">
                    <div class="bg-white rounded-lg shadow-lg">
                        <div class="px-6 py-4">
                            <div class="font-bold text-xl mb-2">Sala
                                <?php echo $row["ID_Sala"] ?>
                            </div>
                            <p class="text-gray-700 text-base">
                                Bloco:
                                <?php echo $row["Bloco_Sala"] ?><br>
                                Numero:
                                <?php echo $row["Numero_Sala"] ?><br>
                                Tipo de sala:
                                <?php echo $row["tipo"] ?><br>
                            </p>
                            <a href="sala_show.php?ID_Sala=<?php echo $row['ID_Sala'] ?>"
                                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-4 inline-block">Ver
                                detalhes</a>
                            <?php
                            if ($_SESSION['role'] == "admin") {
                                echo '<a href="./sala_edit.php?ID_Sala=' . $row['ID_Sala'] . '" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-4 inline-block">Editar</a>';
                                echo '<input onclick="deletar(' . $row['ID_Sala'] . ')" type="button" value="Excluir" class=" ml-[5px] bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded mt-4 inline-block">';
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <?php
            }
        }
        ?>
    </div>
</div>
<script>
    function deletar(id) {
        if (confirm("Tem certeza que deseja excluir este registro?")) {
            location.href = "./sala_delete.php?id=" + id;
        }
    }
</script>

<?php
include("../components/footer.php");
?>