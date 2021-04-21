<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>

<body>
    <h2>
        Learn mysqli</h2>


    <?php

    echo "Connected successfully!";

    // insert

    function insert()
    {
        $servername = "localhost";
        $username = "root";
        $password = "root";
        $database = "mini_social_network";

        // connection
        $mysqli = new mysqli($servername, $username, $password, $database);

        if ($mysqli->connect_error) {
            die("Connection failed" . $mysqli->connect_error);
        }

        $sql = "INSERT INTO `users`(email,user_name,user_pass,user_type,user_rank) VALUES('duccao03@gmail.com','duccao3','duc123','admin','100')";

        if ($mysqli->query($sql) === TRUE) {
            echo "New record created successfully!";
        } else {
            echo "Error: " . $sql . "<br/>" . $mysqli->error;
        }
    }





    ?>

    <?php
    include "../utils/db.php";
    $db = new Db();

    $sql = 'SELECT * FROM `users`';
    $db->load($sql);

    $data = $db->Rows();

    ?>

    <div class="container">
        <table class="table table-hover">
            <thead>
                <th>user_id</th>
                <th>email</th>
                <th>user_name</th>
                <th>user_pass</th>
                <th>user_type</th>
                <th>user_rank</th>
            </thead>

            <tbody>
                <?php
                foreach ($data as $dt) {
                    echo "<tr>";
                    echo "<td>" . $dt['user_id'] . "</td>";
                    echo "<td>" . $dt['email'] . "</td>";
                    echo "<td>" . $dt['user_name'] . "</td>";
                    echo "<td>" . $dt['user_pass'] . "</td>";
                    echo "<td>" . $dt['user_type'] . "</td>";
                    echo "<td>" . $dt['user_rank'] . "</td>";
                    echo "</tr>";
                }

                ?>


            </tbody>
        </table>



        <form action="" method="GET">
            <div class="form-group">
                <label for="email">Email: </label>
                <input type="text" name="txtEmail" id="txtEmail" class="form-control" aria-describedby="helpId">
            </div>
            <div class="form-group">
                <label for="email">Username: </label>
                <input type="text" name="txtUsername" id="txtUsername" class="form-control" aria-describedby="helpId">
            </div>

            <div class="form-group">
                <label for="email">Password: </label>
                <input type="text" name="txtPassword" id="txtPassword" class="form-control" aria-describedby="helpId">
            </div>

            <button class="btn btn-success" type="submit">Submit</button>
        </form>


        <?php
        $email = $_REQUEST['txtEmail'];
        $user_name = $_REQUEST['txtUsername'];
        $user_pass = $_REQUEST['txtPassword'];

        $sql = "INSERT INTO `users`(email,user_name,user_pass,user_type,user_rank)
        VALUES ('$email','$user_name','$user_pass','user','200');";

        $ret = $db->patchDb($sql);

        if ($ret == 1) {
            echo "User was added successfully!";
        } else {
            echo "Add user failed!";
            echo "Error: " . $ret;
        }



        ?>

    </div>



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
</body>

</html>