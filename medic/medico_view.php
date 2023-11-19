<?php
include("../connection.php");


$sql = "SELECT * FROM Medico";

$result = $conn->query($sql);
?>
<div class="grid m-2">
    <div class="text-left text-3xl font-bold mb-4 mt-4 ml-4">Médicos</div>
    <div class=" mb-4 mt-4 ml-4">

    <?php
    if ($_SESSION['role'] == "admin") {
        echo '<a href="./medico_create.php" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-4 inline-block">Cadastrar</a>';
    }
    ?>

    </div>
    <div class="flex flex-wrap -mx-4 mx-auto">

        <br>
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                ?>
                <div class="w-full md:w-1/2 lg:w-1/3 px-4 py-4">
                    <div class="bg-white rounded-lg shadow-lg">
                        <div class="px-6 py-4">
                            <div class="font-bold text-xl mb-2">
                                <?php echo $row["Nome_Medico"] ?>
                            </div>
                            <p class="text-gray-700 text-base">
                                CRM:
                                <?php echo $row["CRM"] ?><br>
                                CPF:
                                <?php echo $row["CPF_Medico"] ?><br>
                                Data Nascimento:
                                <?php echo $row["Data_Nascimento_Medico"] ?><br>
                                Gênero:
                                <?php echo $row["Genero_Medico"] ?><br>
                                RG:
                                <?php echo $row["RG_Medico"] ?><br>
                                Telefone:
                                <?php echo $row["Telefone_Medico"] ?><br>
                                E-mail:
                                <?php echo $row["E_mail_Medico"] ?><br>
                                Endereço:
                                <?php echo $row['Logradouro_Medico'] . " " . $row['Nome_Endereco_Medico'] . " " . $row['Numero_Endereco_Medico'] . " " . $row['Complemento_Endereco_Medico'] ?>
                            </p>
                            <a href="medico_show.php?ID_Medico=<?php echo $row['ID_Medico'] ?>"
                                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-4 inline-block">Ver
                                detalhes</a>


                            <?php
                            if ($_SESSION['role'] == "admin") {
                                echo '<a href="./medico_edit.php?ID_Medico=' . $row['ID_Medico'] . '" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-4 inline-block">Editar</a>';
                                echo '<input onclick="deletar(' . $row['ID_Medico'] . ')" type="button" value="Excluir" class=" ml-[5px] bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded mt-4 inline-block">';

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
            location.href = "./medico_delete.php?id=" + id;
        }
    }
</script>
</body>

<?php
include("../components/footer.php");
?>

</html>