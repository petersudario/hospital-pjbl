<html>
    <head>
        <title>Banco de Dados</title>
        <link rel="stylesheet" href="https://unpkg.com/tailwindcss@latest/dist/tailwind.min.css">
    </head>
    <body class="mx-auto">
<?php
    include("../connection.php");
    include("../components/nav.php");

    $sql = "SELECT ID_Sala, Bloco_Sala, Numero_Sala, tipo.tipo FROM Sala INNER JOIN Tipo ON fk_Tipo_ID_tipo = ID_tipo";

    $result = $conn->query($sql);
?>
        <div class="text-left text-3xl font-bold mb-4 mt-4 ml-4">Salas</div>
        <a href="./sala_create.php" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-4 inline-block">Cadastrar</a>
        <div class="flex flex-wrap -mx-4 mx-auto">
            <?php 
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
            ?>
            <div class="w-full md:w-1/2 lg:w-1/3 px-4 py-4">
                <div class="bg-white rounded-lg shadow-lg">
                    <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2">Sala <?php echo $row["ID_Sala"] ?></div>
                        <p class="text-gray-700 text-base">
                            Bloco: <?php echo $row["Bloco_Sala"] ?><br>
                            Numero: <?php echo $row["Numero_Sala"] ?><br>
                            Tipo de sala: <?php echo $row["tipo"] ?><br>
                        </p>
                        <a href="sala_show.php?ID_Sala=<?php echo $row['ID_Sala'] ?>" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-4 inline-block">Ver detalhes</a>
                        <a href="./sala_edit.php?ID_Sala=<?php echo $row['ID_Sala'] ?>" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-4 inline-block">Editar</a>
                        <input onclick="deletar(<?php echo $row['ID_Sala'] ?>)" type="button" value="Excluir" href="#">
                    </div>
                </div>
            </div>
            <?php
                }
            }
            ?>  
        </div>
        <script>
            function deletar(id) {
                if (confirm("Tem certeza que deseja excluir este registro?")) {
                    location.href = "./sala_delete.php?id=" + id;
                }
            }
        </script>
    </body>

    <?php
        include("../components/footer.php");
    ?>
</html>