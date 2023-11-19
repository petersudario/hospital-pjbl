<?php
include("../connection.php");

?>
<div class="bg-white rounded-lg shadow-lg p-8 mx-auto max-w-7xl mt-[50px]">

    <?php
    $id = $_GET["ID_Paciente"];
    $sql = "SELECT * FROM Paciente WHERE ID_Paciente = $id";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<h2 class='text-2xl font-bold mb-4'>Dados do usuário</h2>";
            echo "<p class='text-lg mb-2'><strong>ID:</strong> $id</p>";
            echo "<p class='text-lg mb-2'><strong>Nome:</strong> {$row['Nome_Paciente']}</p>";
            echo "<p class='text-lg mb-2'><strong>Condicao:</strong> {$row['Condicao_Paciente']}</p>";
            echo "<p class='text-lg mb-2'><strong>CPF:</strong> {$row['CPF_Paciente']}</p>";
            echo "<p class='text-lg mb-2'><strong>Data de Nascimento:</strong> {$row['Data_Nascimento_Paciente']}</p>";
            echo "<p class='text-lg mb-2'><strong>Gênero:</strong> {$row['Genero_Paciente']}</p>";
            echo "<p class='text-lg mb-2'><strong>Telefone:</strong> {$row['Telefone_Emergencia_Paciente']}</p>";
            echo "<p class='text-lg mb-2'><strong>E-mail:</strong> {$row['E_mail_Paciente']}</p>";
            echo "<p class='text-lg mb-2'><strong>RG:</strong> {$row['RG_Paciente']}</p>";
            echo "<p class='text-lg mb-2'><strong>Endereço:</strong> " . $row['Logradouro_Paciente'] . " " . $row['Nome_Endereco_Paciente'] . " " . $row['Numero_Endereco_Paciente'] . " " . $row['Complemento_Endereco_Paciente'] . "</p>";
        }
    }
    ?>

</div>

<?php
include("../components/footer.php");

?>