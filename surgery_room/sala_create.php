<?php
include("../connection.php");

$sql = "SELECT * FROM Sala";

$result = $conn->query($sql);
?>

<div class="grid h-[88vh]">
    <div class="grid items-center justify-center">
        <form name="form1" id="form1" method="GET" class="max-w-md mx-auto">
        <h1 class="text-2xl font-bold mb-4">Cadastrar Sala</h1>
            <div class="mb-4">
                <label for="txtBloco" class="block">Bloco:</label>
                <input type="text" name="txtBloco" id="txtBloco" value="<?php ?>"
                    class="w-full px-4 py-2 border border-gray-300 rounded-md">
            </div>
            <div class="mb-4">
                <label for="txtNumero" class="block">Número:</label>
                <input type="text" name="txtNumero" id="txtNumero" value="<?php ?>"
                    class="w-full px-4 py-2 border border-gray-300 rounded-md">
            </div>
            <div class="mb-4">
                <label for="txtTipo" class="block">Tipo:</label>
                <input type="text" name="txtTipo" id="txtTipo" value="<?php ?>"
                    class="w-full px-4 py-2 border border-gray-300 rounded-md">
            </div>
        </form>
        <input type="button" onclick="submit()" value="Enviar" class="w-full px-4 py-2 bg-green-500 text-white rounded-md">

        <script>
            function submit(){

                location.href = "./sala_create_php.php?txtBloco=" + document.getElementById("txtBloco").value + "&txtNumero=" + document.getElementById("txtNumero").value + "&txtTipo=" + document.getElementById("txtTipo").value;
            }
        </script>
    </div>
</div>

<?php
include("../components/footer.php");
?>