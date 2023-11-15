<?php
include("../connection.php");
include("../components/nav.php");

?>
<div class="bg-white rounded-lg shadow-lg p-8 mx-auto max-w-7xl mt-[50px]">

    <?php
    $id = $_GET["ID_Medico"];
    $sql = "SELECT * FROM Medico WHERE ID_Medico = $id";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<h2 class='text-2xl font-bold mb-4'>Dados do usuário</h2>";
            echo "<p class='text-lg mb-2'><strong>ID:</strong> $id</p>";
            echo "<p class='text-lg mb-2'><strong>Nome:</strong> {$row['Nome_Medico']}</p>";
            echo "<p class='text-lg mb-2'><strong>CRM:</strong> {$row['CRM']}</p>";
            echo "<p class='text-lg mb-2'><strong>CPF:</strong> {$row['CPF_Medico']}</p>";
            echo "<p class='text-lg mb-2'><strong>Data de Nascimento:</strong> {$row['Data_Nascimento_Medico']}</p>";
            echo "<p class='text-lg mb-2'><strong>Gênero:</strong> {$row['Genero_Medico']}</p>";
            echo "<p class='text-lg mb-2'><strong>Telefone:</strong> {$row['Telefone_Medico']}</p>";
            echo "<p class='text-lg mb-2'><strong>E-mail:</strong> {$row['E_mail_Medico']}</p>";
            echo "<p class='text-lg mb-2'><strong>RG:</strong> {$row['RG_Medico']}</p>";
            echo "<p class='text-lg mb-2'><strong>Endereço:</strong> " . $row['Logradouro_Medico'] . " " . $row['Nome_Endereco_Medico'] . " " . $row['Numero_Endereco_Medico'] . " " . $row['Complemento_Endereco_Medico'] . "</p>";
        }
    }
    ?>

</div>

<?php
include("../components/footer.php");

?>