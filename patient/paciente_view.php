<?php
include("../connection.php");


$sql = "SELECT * FROM Paciente";

$result = $conn->query($sql);
?>
<div class="grid m-2">
    <div class="text-left text-3xl font-bold mb-4 mt-4 ml-4">Paciente</div>
    <div class=" mb-4 mt-4 ml-4">
        <?php
        if ($_SESSION['role'] == "admin") {
            echo '<a href="./paciente_create.php" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-4 inline-block">Cadastrar</a>';
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
                            <div class="font-bold text-xl mb-2">
                                <?php echo $row["Nome_Paciente"] ?>
                            </div>
                            <p class="text-gray-700 text-base">
                                Condição:
                                <?php echo $row["Condicao_Paciente"] ?><br>
                                CPF:
                                <?php echo $row["CPF_Paciente"] ?><br>
                                Data Nascimento:
                                <?php echo $row["Data_Nascimento_Paciente"] ?><br>
                                Gênero:
                                <?php echo $row["Genero_Paciente"] ?><br>
                                RG:
                                <?php echo $row["RG_Paciente"] ?><br>
                                Telefone de Emergência:
                                <?php echo $row["Telefone_Emergencia_Paciente"] ?><br>
                                E-mail:
                                <?php echo $row["E_mail_Paciente"] ?><br>
                                Endereço:
                                <?php echo $row['Logradouro_Paciente'] . " " . $row['Nome_Endereco_Paciente'] . " " . $row['Numero_Endereco_Paciente'] . " " . $row['Complemento_Endereco_Paciente'] ?>
                            </p>
                            <a href="paciente_show.php?ID_Paciente=<?php echo $row['ID_Paciente'] ?>"
                                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-4 inline-block">Ver
                                detalhes</a>
                                <?php
                                if ($_SESSION['role'] == "admin") {
                                    echo '<a href="./paciente_edit.php?ID_Paciente=' . $row['ID_Paciente'] . '" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-4 inline-block">Editar</a>';
                                    echo '<input onclick="deletar(' . $row['ID_Paciente'] . ')" type="button" value="Excluir" class=" ml-[5px] bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded mt-4 inline-block">';
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
            location.href = "./paciente_delete.php?id=" + id;
        }
    }
</script>


<?php
include("../components/footer.php");
?>