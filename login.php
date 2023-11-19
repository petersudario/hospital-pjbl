<?php
include("./connection.php");
$sql = "SELECT ID_Enfermeiro, Nome_Enfermeiro, CIP FROM enfermeiro";
$result = $conn->query($sql);

?>

<body>
    <div class="grid items-center justify-center h-[88vh]">
        <div>
            <form name="form1" method="post" action="fetch_login.php" class="max-w-md mx-auto">
                <div class="mb-4">
                    <label for="username" class="block text-gray-700 font-bold mb-2">Usuário:</label>
                    <input id="username" type="text" name="username"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>
                <div class="mb-6">
                    <label for="password" class="block text-gray-700 font-bold mb-2">Senha:</label>
                    <input id="password" type="password" name="password"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>
                <div class="flex items-center justify-between">
                    <input type="submit" value="Enviar"
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                </div>
            </form>
        </div>
    </div>
</body>

</html>
<?php
include("./components/footer.php");
?>