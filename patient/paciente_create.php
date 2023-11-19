<?php
include("../connection.php");

$sql = "SELECT * FROM Paciente";

$result = $conn->query($sql);
?>

<div class="grid items-center justify-center">
    <h1 class="text-2xl font-bold mb-4">Cadastrar paciente</h1>
    <form name="form1" id="form1" method="GET" class="max-w-md mx-auto">
        <div class="mb-4">
            <label for="txtNome" class="block">Nome:</label>
            <input type="text" name="txtNome" id="txtNome" value="<?php ?>"
                class="w-full px-4 py-2 border border-gray-300 rounded-md">
        </div>
        <div class="mb-4">
            <label for="txtCondicao" class="block">Condicao:</label>
            <input type="text" name="txtCondicao" id="txtCondicao" value="<?php ?>"
                class="w-full px-4 py-2 border border-gray-300 rounded-md">
        </div>
        <div class="mb-4">
            <label for="txtCpf" class="block">CPF:</label>
            <input type="text" name="txtCpf" id="txtCpf" value="<?php ?>"
                class="w-full px-4 py-2 border border-gray-300 rounded-md">
        </div>
        <div class="mb-4">
            <label for="dtNascimento" class="block">Data de Nascimento:</label>
            <input type="date" name="dtNascimento" id="dtNascimento" value="<?php ?>"
                class="w-full px-4 py-2 border border-gray-300 rounded-md">
        </div>
        <div class="mb-4">
            <label for="txtGenero" class="block">Genero:</label>
            <input type="text" name="txtGenero" id="txtGenero" value="<?php ?>"
                class="w-full px-4 py-2 border border-gray-300 rounded-md">
        </div>
        <div class="mb-4">
            <label for="telTelefone" class="block">Telefone de Emergência:</label>
            <input type="tel" name="telTelefone" id="telTelefone" value="<?php ?>"
                class="w-full px-4 py-2 border border-gray-300 rounded-md">
        </div>
        <div class="mb-4">
            <label for="email" class="block">Email:</label>
            <input type="text" name="email" id="email" value="<?php ?>"
                class="w-full px-4 py-2 border border-gray-300 rounded-md">
        </div>
        <div class="mb-4">
            <label for="txtRg" class="block">RG:</label>
            <input type="text" name="txtRg" id="txtRg" value="<?php ?>"
                class="w-full px-4 py-2 border border-gray-300 rounded-md">
        </div>
        <div class="mb-4">
            <label for="txtLogradouro" class="block">Logradouro:</label>
            <input type="text" name="txtLogradouro" id="txtLogradouro" value="<?php ?>"
                class="w-full px-4 py-2 border border-gray-300 rounded-md">
        </div>
        <div class="mb-4">
            <label for="txtNomeEndereco" class="block">Nome Endereço:</label>
            <input type="text" name="txtNomeEndereco" id="txtNomeEndereco" value="<?php ?>"
                class="w-full px-4 py-2 border border-gray-300 rounded-md">
        </div>
        <div class="mb-4">
            <label for="txtNumeroEndereco" class="block">Número Endereço:</label>
            <input type="text" name="txtNumeroEndereco" id="txtNumeroEndereco" value="<?php ?>"
                class="w-full px-4 py-2 border border-gray-300 rounded-md">
        </div>
        <div class="mb-4">
            <label for="txtComplementoEndereco" class="block">Complemento Endereço:</label>
            <input type="text" name="txtComplementoEndereco" id="txtComplementoEndereco" value="<?php ?>"
                class="w-full px-4 py-2 border border-gray-300 rounded-md">
        </div>
    </form>

    <input type="button" onclick="submit()" value="Enviar" class="w-full px-4 py-2 bg-green-500 text-white rounded-md">
    <script>
        function submit() {
            location.href = "./paciente_create_php.php?txtNome=" + document.getElementById("txtNome").value + "&txtCondicao=" + document.getElementById("txtCondicao").value + "&txtCpf=" + document.getElementById("txtCpf").value + "&dtNascimento=" + document.getElementById("dtNascimento").value + "&txtGenero=" + document.getElementById("txtGenero").value + "&telTelefone=" + document.getElementById("telTelefone").value + "&email=" + document.getElementById("email").value + "&txtRg=" + document.getElementById("txtRg").value + "&txtLogradouro=" + document.getElementById("txtLogradouro").value + "&txtNomeEndereco=" + document.getElementById("txtNomeEndereco").value + "&txtNumeroEndereco=" + document.getElementById("txtNumeroEndereco").value + "&txtComplementoEndereco=" + document.getElementById("txtComplementoEndereco").value;
        }
    </script>
</div>

<?php
include("../components/footer.php");
?>