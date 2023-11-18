<html>
    <head>
        <title>Banco de Dados</title>
        <link rel="stylesheet" href="https://unpkg.com/tailwindcss@latest/dist/tailwind.min.css">
    </head>
    <body class="mx-auto">
<?php
    include("../connection.php");
    include("../components/nav.php");

    $sql = "SELECT * FROM Paciente";
    
    $result = $conn->query($sql);
?>
        <div class="text-left text-3xl font-bold mb-4 mt-4 ml-4">Pacientes</div>
        <a href="./paciente_create.php" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-4 inline-block">Cadastrar</a>
        <div class="flex flex-wrap -mx-4 mx-auto">
            <?php 
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
            ?>
            <div class="w-full md:w-1/2 lg:w-1/3 px-4 py-4">
                <div class="bg-white rounded-lg shadow-lg">
                    <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2"><?php echo $row["Nome_Paciente"] ?></div>
                        <p class="text-gray-700 text-base">
                            Condicao: <?php echo $row["Condicao_Paciente"] ?><br>
                            CPF: <?php echo $row["CPF_Paciente"] ?><br>
                            Data Nascimento: <?php echo $row["Data_Nascimento_Paciente"] ?><br>
                            Gênero: <?php echo $row["Genero_Paciente"] ?><br>
                            RG: <?php echo $row["RG_Paciente"] ?><br>
                            Telefone: <?php echo $row["Telefone_Paciente"] ?><br>
                            E-mail: <?php echo $row["E_mail_Paciente"] ?><br>
                            Endereço: <?php echo $row['Logradouro_Paciente']. " " .$row['Nome_Endereco_Paciente']. " ".$row['Numero_Endereco_Paciente']. " ".$row['Complemento_Endereco_Paciente'] ?>
                        </p>
                        <a href="paciente_show.php?ID_Paciente=<?php echo $row['ID_Paciente'] ?>" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-4 inline-block">Ver detalhes</a>
                        <a href="./paciente_edit.php?ID_Paciente=<?php echo $row['ID_Paciente'] ?>" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-4 inline-block">Editar</a>
                        <input onclick="deletar(<?php echo $row['ID_Paciente'] ?>)" type="button" value="Excluir" href="#">
                    </div>
                </div>
            </div>
            <?php
                }
            }
            ?>  
        </div>
        <script>
            function deletar(id) {
                if (confirm("Tem certeza que deseja excluir este registro?")) {
                    location.href = "./paciente_delete.php?id=" + id;
                }
            }
        </script>
    </body>

    <?php
        include("../components/footer.php");
    ?>
</html>