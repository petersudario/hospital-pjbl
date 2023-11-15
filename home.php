<html>

<head>
    <title>Banco de Dados</title>
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@latest/dist/tailwind.min.css">
</head>

<body class="mx-auto">
    <?php
    include("connection.php");
    include("./components/nav.php");

    $sql = "SELECT * FROM Medico";

    $result = $conn->query($sql);
    ?>
    <div class="text-left text-3xl font-bold mb-4 mt-4 ml-4">Médicos</div>
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

    <div class="text-left text-3xl font-bold mb-4 mt-4 ml-4">Pacientes</div>
    <div class="flex flex-wrap -mx-4">
        <div class="w-full md:w-1/2 lg:w-1/3 px-4 py-4 ml-4">
            <div class="bg-white rounded-lg shadow-lg">
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2">Nome do paciente</div>
                    <p class="text-gray-700 text-base">
                        Condição: condição do paciente<br>
                        CPF: CPF do paciente<br>
                        Data Nascimento: data de nascimento do paciente<br>
                        Gênero: gênero do paciente<br>
                        RG: RG do paciente<br>
                        Telefone: telefone do paciente<br>
                        E-mail: e-mail do paciente<br>
                        Endereço: endereço do paciente
                    </p>
                    <a href="#"
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-4 inline-block">Ver
                        detalhes</a>
                </div>
            </div>
        </div>
    </div>

    <div class="text-left text-3xl font-bold mb-4 mt-4 ml-4">Enfermeiros</div>
    <div class="flex flex-wrap -mx-4">
        <div class="w-full md:w-1/2 lg:w-1/3 px-4 py-4 ml-4">
            <div class="bg-white rounded-lg shadow-lg">
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2">Nome do enfermeiro</div>
                    <p class="text-gray-700 text-base">
                        CIP: CIP do enfermeiro<br>
                        CPF: CPF do enfermeiro<br>
                        Data Nascimento: data de nascimento do enfermeiro<br>
                        Gênero: gênero do enfermeiro<br>
                        RG: RG do enfermeiro<br>
                        Telefone: telefone do enfermeiro<br>
                        E-mail: e-mail do enfermeiro<br>
                        Endereço: endereço do enfermeiro
                    </p>
                    <a href="#"
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-4 inline-block">Ver
                        detalhes</a>
                </div>
            </div>
        </div>
    </div>

    <div class="text-left text-3xl font-bold mb-4 mt-4 ml-4">Sala de Cirurgia</div>
    <div class="flex flex-wrap -mx-4 mb-[100px]">
        <div class="w-full md:w-1/2 lg:w-1/3 px-4 py-4 ml-4">
            <div class="bg-white rounded-lg shadow-lg">
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2">Bloco - Número</div>
                    <p class="text-gray-700 text-base">
                        Tipo: tipo da sala de cirurgia
                    </p>
                    <a href="#"
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-4 inline-block">Ver
                        detalhes</a>
                </div>
            </div>
        </div>
    </div>

</body>
<?php
include("./components/footer.php");
?>

</html>