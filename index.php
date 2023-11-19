
    <?php
    include("connection.php");

    $sql = "SELECT * FROM Medico ORDER BY ID_Medico DESC LIMIT 2";
    $sql2 = "SELECT * FROM Enfermeiro ORDER BY ID_Enfermeiro DESC LIMIT 2";
    $sql3 = "SELECT * FROM Paciente ORDER BY ID_Paciente DESC LIMIT 2";
    $result = $conn->query($sql);
    $result2 = $conn->query($sql2);
    $result3 = $conn->query($sql3);
    ?>
    <div class="text-left text-3xl font-bold mb-4 mt-4 ml-4">Médicos mais recentes</div>
    <div class="flex flex-wrap -mx-4">
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                ?>
                <div class="w-full md:w-1/2 lg:w-1/3 px-4 py-4 ml-4">
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
                            <a href="medic/medico_show.php?ID_Medico=<?php echo $row['ID_Medico'] ?>"
                                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-4 inline-block">Ver
                                detalhes</a>
                        </div>
                    </div>
                </div>
                <?php
            }
        }
        ?>
    </div>

    <div class="text-left text-3xl font-bold mb-4 mt-4 ml-4">Enfermeiros mais recentes</div>
    <div class="flex flex-wrap -mx-4">
        <?php
        if ($result2->num_rows > 0) {
            while ($row = $result2->fetch_assoc()) {
                ?>
                <div class="w-full md:w-1/2 lg:w-1/3 px-4 py-4 ml-4">
                    <div class="bg-white rounded-lg shadow-lg">
                        <div class="px-6 py-4">
                            <div class="font-bold text-xl mb-2">
                                <?php echo $row["Nome_Enfermeiro"] ?>
                            </div>
                            <p class="text-gray-700 text-base">
                                CRM:
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
                            <a href="nurse/enfermeiro_show.php?ID_Enfermeiro=<?php echo $row['ID_Enfermeiro'] ?>"
                                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-4 inline-block">Ver
                                detalhes</a>
                        </div>
                    </div>
                </div>
                <?php
            }
        }
        ?>
    </div>

    <div class="text-left text-3xl font-bold mb-4 mt-4 ml-4">Pacientes mais recentes</div>
    <div class="flex flex-wrap -mx-4">
        <?php
        if ($result3->num_rows > 0) {
            while ($row = $result3->fetch_assoc()) {
                ?>
                <div class="w-full md:w-1/2 lg:w-1/3 px-4 py-4 ml-4">
                    <div class="bg-white rounded-lg shadow-lg">
                        <div class="px-6 py-4">
                            <div class="font-bold text-xl mb-2">
                                <?php echo $row["Nome_Paciente"] ?>
                            </div>
                            <p class="text-gray-700 text-base">
                                CPF:
                                <?php echo $row["CPF_Paciente"] ?><br>
                                Data Nascimento:
                                <?php echo $row["Data_Nascimento_Paciente"] ?><br>
                                Gênero:
                                <?php echo $row["Genero_Paciente"] ?><br>
                                RG:
                                <?php echo $row["RG_Paciente"] ?><br>
                                Telefone:
                                <?php echo $row["Telefone_Emergencia_Paciente"] ?><br>
                                E-mail:
                                <?php echo $row["E_mail_Paciente"] ?><br>
                                Endereço:
                                <?php echo $row['Logradouro_Paciente'] . " " . $row['Nome_Endereco_Paciente'] . " " . $row['Numero_Endereco_Paciente'] . " " . $row['Complemento_Endereco_Paciente'] ?>
                            </p>
                            <a href="patient/paciente_show.php?ID_Paciente=<?php echo $row['ID_Paciente'] ?>"
                                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-4 inline-block">Ver
                                detalhes</a>
                        </div>
                    </div>
                </div>
                <?php
            }
        }
        ?>
    </div>


</body>
<?php
include("./components/footer.php");
?>

</html>