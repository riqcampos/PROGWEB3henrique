<html><body>

    <?php

        $user = "adminprogweb";
        $pass = "ProgWeb3";
        $db = "progweb3";
        $server = "127.0.0.1";
        $conn = mysqli_connect($server, $user, $pass, $db);

        if($conn->connect_errno)
        {
            die("Erro de conexão" . $conn->connect_error);
        } else {
            echo("Conexão ok");
        }
    ?>

</body>
</html>