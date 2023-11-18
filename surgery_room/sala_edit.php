<html>
    <head>
        <title>Edição de sala</title>
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
        <?php
        include("../connection.php");
        include("../components/nav.php");
        ?>
    </head>
    <body>
        <div class="flex justify-center">
            <div>
                <h1 class="text-2xl font-bold mb-4">Editar Sala</h1>
            </div>
        </div>
        
    <?php
        $sql = "SELECT * FROM Sala";
        
        $result = $conn->query($sql);


        $id = $_GET["ID_Sala"];
        $sql = "SELECT * FROM Sala WHERE ID_Sala = $id";
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
            echo '<div class="flex justify-center">';
            echo '<div class="max-w-md">';
            while($row = $result->fetch_assoc()) {
                echo '<div class="bg-white shadow-md rounded p-4 mb-4">';
                echo "id: $id<br>";
                echo "Bloco: {$row['Bloco_Sala']}<br>";
                echo "Número: {$row['Numero_Sala']}<br>";
                echo "Tipo da sala: {$row['fk_Tipo_ID_tipo']}<br>";
                echo '</div>';
            }
            echo '</div>';
            echo '</div>';
        }

    ?>
    <div class="grid justify-center">

        <div class="mb-4">
            <label for="txtBloco" class="block mb-2">Bloco:</label>
            <input type="text" name="txtBloco" id="txtBloco" value="<?php ?>" class="w-full px-4 py-2 border rounded">
        </div>
        <div class="mb-4">
            <label for="txtNumero" class="block mb-2">Número:</label>
            <input type="text" name="txtNumero" id="txtNumero" value="<?php ?>" class="w-full px-4 py-2 border rounded">
        </div>
        <input type="hidden" name="hidId" value="<?php echo $id ?>">
        <div class="mb-4">
            <label for="txtTipo" class="block mb-2">Tipo da sala:</label>
            <input type="text" name="txtTipo" id="txtTipo" value="<?php ?>" class="w-full px-4 py-2 border rounded">
        </div>
        <input type="submit" value="Enviar" class="px-4 py-2 bg-blue-500 text-white rounded">
    </div>
    </form>
    </body>
    <?php
        include("../components/footer.php");
    ?>
</html>