<html>
    <head>
        <title>Cadastro de sala</title>
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    </head>
    <body>
        
    <?php
        include("../connection.php");
        include("../components/nav.php");

        $sql = "SELECT * FROM Sala";
        
        $result = $conn->query($sql);
    ?>

        <h1 class="text-2xl font-bold mb-4">Cadastrar Sala</h1>
        <form name="form1" id="form1" method="post" action="./sala_create_php.php" class="max-w-md mx-auto">
            <div class="mb-4">
                <label for="txtBloco" class="block">Bloco:</label>
                <input type="text" name="txtBloco" id="txtBloco" value="<?php ?>" class="w-full px-4 py-2 border border-gray-300 rounded-md">
            </div>
            <div class="mb-4">
                <label for="txtNumero" class="block">Número:</label>
                <input type="text" name="txtNumero" id="txtNumero" value="<?php ?>" class="w-full px-4 py-2 border border-gray-300 rounded-md">
            </div>
            <div class="mb-4">
                <label for="txtTipo" class="block">Tipo:</label>
                <input type="text" name="txtTipo" id="txtTipo" value="<?php ?>" class="w-full px-4 py-2 border border-gray-300 rounded-md">
            </div>
            <input type="submit" value="Enviar" class="w-full px-4 py-2 bg-green-500 text-white rounded-md">
        </form>
    </body>
    
    <?php
        include("../components/footer.php");
    ?>
</html>