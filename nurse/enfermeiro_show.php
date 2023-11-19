<?php
include("../connection.php");

?>
<div class="h-[88vh] grid items-center justify-center">
    <div class="bg-white rounded-lg shadow-lg p-8 mx-auto max-w-7xl">
        <?php
        $id = $_GET["ID_Enfermeiro"];
        $sql = "SELECT * FROM Enfermeiro WHERE ID_Enfermeiro = $id";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<h2 class='text-2xl font-bold mb-4'>Dados do usuário</h2>";
                echo "<p class='text-lg mb-2'><strong>ID:</strong> $id</p>";
                echo "<p class='text-lg mb-2'><strong>Nome:</strong> {$row['Nome_Enfermeiro']}</p>";
                echo "<p class='text-lg mb-2'><strong>Cip:</strong> {$row['CIP']}</p>";
                echo "<p class='text-lg mb-2'><strong>CPF:</strong> {$row['CPF_Enfermeiro']}</p>";
                echo "<p class='text-lg mb-2'><strong>Data de Nascimento:</strong> {$row['Data_Nascimento_Enfermeiro']}</p>";
                echo "<p class='text-lg mb-2'><strong>Gênero:</strong> {$row['Genero_Enfermeiro']}</p>";
                echo "<p class='text-lg mb-2'><strong>Telefone:</strong> {$row['Telefone_Enfermeiro']}</p>";
                echo "<p class='text-lg mb-2'><strong>E-mail:</strong> {$row['E_mail_Enfermeiro']}</p>";
                echo "<p class='text-lg mb-2'><strong>RG:</strong> {$row['RG_Enfermeiro']}</p>";
                echo "<p class='text-lg mb-2'><strong>Endereço:</strong> " . $row['Logradouro_Enfermeiro'] . " " . $row['Nome_Endereco_Enfermeiro'] . " " . $row['Numero_Endereco_Enfermeiro'] . " " . $row['Complemento_Endereco_Enfermeiro'] . "</p>";
            }
        }
        ?>
    </div>
</div>

<?php
include("../components/footer.php");

?>