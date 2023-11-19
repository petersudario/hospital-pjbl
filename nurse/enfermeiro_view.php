<?php
include("../connection.php");

$sql = "SELECT * FROM Enfermeiro";

$result = $conn->query($sql);
?>
<div class="grid m-2">
    <div class="text-left text-3xl font-bold mb-4 mt-4 ml-4">Enfermeiro</div>
    <div class=" mb-4 mt-4 ml-4">
        <?php
        if ($_SESSION['role'] == "admin") {
            echo '<a href="./enfermeiro_create.php" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-4 inline-block">Cadastrar</a>';
        }
        ?>
    </div>
    <div class="flex flex-wrap -mx-4 mx-auto">
        <div class="flex flex-wrap -mx-4 mx-auto">
            <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    ?>
                    <div class="w-full md:w-1/2 lg:w-1/3 px-4 py-4">
                        <div class="bg-white rounded-lg shadow-lg">
                            <div class="px-6 py-4">
                                <div class="font-bold text-xl mb-2">
                                    <?php echo $row["Nome_Enfermeiro"] ?>
                                </div>
                                <p class="text-gray-700 text-base">
                                    CIP:
                                    <?php echo $row["CIP"] ?><br>
                                    CPF:
                                    <?php echo $row["CPF_Enfermeiro"] ?><br>
                                    Data Nascimento:
                                    <?php echo $row["Data_Nascimento_Enfermeiro"] ?><br>
                                    Gênero:
                                    <?php echo $row["Genero_Enfermeiro"] ?><br>
                                    RG:
                                    <?php echo $row["RG_Enfermeiro"] ?><br>
                                    Telefone:
                                    <?php echo $row["Telefone_Enfermeiro"] ?><br>
                                    E-mail:
                                    <?php echo $row["E_mail_Enfermeiro"] ?><br>
                                    Endereço:
                                    <?php echo $row['Logradouro_Enfermeiro'] . " " . $row['Nome_Endereco_Enfermeiro'] . " " . $row['Numero_Endereco_Enfermeiro'] . " " . $row['Complemento_Endereco_Enfermeiro'] ?>
                                </p>
                                <a href="enfermeiro_show.php?ID_Enfermeiro=<?php echo $row['ID_Enfermeiro'] ?>"
                                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-4 inline-block">Ver
                                    detalhes</a>
                                    <?php
                                        if ($_SESSION['role'] == "admin") {
                                            echo '<a href="./enfermeiro_edit.php?ID_Enfermeiro=' . $row['ID_Enfermeiro'] . '" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-4 inline-block">Editar</a>';
                                            echo '<input onclick="deletar(' . $row['ID_Enfermeiro'] . ')" type="button" value="Excluir" class=" ml-[5px] bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded mt-4 inline-block">';
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
                location.href = "./enfermeiro_delete.php?id=" + id;
            }
        }
    </script>

    <?php
    include("../components/footer.php");
    ?>