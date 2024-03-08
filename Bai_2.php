<!DOCTYPE html>
<html lang="en">
<style>

    input[type="number"]{
        margin-top: 10px;
        background-color: black;
        color: white;
    }

    input[type="submit"]{
        margin-top: 10px;
        background-color: black;
        color: white;
    }

    h1, h2{
        color: white;
    }

    h2{
        margin-bottom: -15px;
    }

    body{
        background-color: black;
    }
</style>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bai 2 SLOT 1</title>
</head>
<body>
<h1>Enter a number</h1>
    <form method="POST">
        <div>
            <label style="color:white;">Number:</label>
            <input type="number" name="num" />
        </div>


        <div>
            <input type="submit" value="Generate List" />
        </div>
    </form>
    <h2>List of Numbers:</h2>";
    <ul>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // from 1 to number -> increased
        if ($_POST["num"] != '' && $_POST["num"] > 0) {
            $number = $_POST["num"];
            
            for( $i = 1; $i <= $number; $i++ ) {
                
                echo ("<li style='color:white;'>{$i}</li>");
            }
        }

        // from number to 1-> decreased
        if ($_POST["num"] != '' && $_POST["num"] < 0) {
            $number = $_POST["num"];
            
            for( $i = $number; $i <= 1; $i++ ) {
                echo ("<li style='color:white;'>{$i}</li>");
            }
        }
    }
    ?>
</ul>
</body>
</html>