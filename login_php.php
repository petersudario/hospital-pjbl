<?php
    include("connection.php");

    $login = $_POST["txtLogin"];
    $password = $_POST["txtPassword"];

    $sql = "SELECT * FROM login WHERE username='$login'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            if ($row["password"] == $password) {
                header("Location: users_lst.php");
                session_start();
                $_SESSION["id"] = intval($row["id"]);
                $_SESSION["role"] = intval($row["role"]);
            }
            else {
?>
<script>
    alert("Senha não confere");
    history.go(-1);
</script>
<?php
            }
        }
    }
    else {
?>
<script>
    alert("Login não confere");
    history.go(-1);
</script>
<?php
    }
?>