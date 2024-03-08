<!DOCTYPE html>
<html lang="en">
<style>
    body{
        background-color: black;
    }
    h2{
        color: whitesmoke;
    }

    label{
        color: white;
    }
    input[type="submit"]{
        background-color: black;
        color: white;
    }

    input[type="form"]{
        background-color: black;
        color: white;
    }
    .Distance1{
        margin-top: 10px;
    }
</style>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bai 4 SLOT 1</title>
</head>

<body>
    <h1>Form</h1>
    <form method="POST">
        <div>
            <label>Name:</label>
            <input type="form" name="name" autocomplete="off" />
        </div>
        <div class="Distance1">
            <label>Age:</label>
            <input type="form" name="age" autocomplete="off" />
        </div>

        <div class="Distance1">
            <input type="submit" value="Submit" />
        </div>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if ($_POST["name"] != '' && $_POST["age"] != '' && $_POST["age"] > 0) {
            $username = $_POST["name"];
            $age = $_POST["age"];

            echo ("<h2>My name is {$username}, and I'm {$age} years old.</h2>");
        }else{
            echo ("<h2>Error information!!</h2>");
        }
    }
    ?>
</body>

</html>