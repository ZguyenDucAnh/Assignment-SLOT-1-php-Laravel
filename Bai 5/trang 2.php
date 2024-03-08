<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="styles.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang 2</title>
</head>

<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $product_name = $_POST['product_name'];

    }

    ?>
    <form action="trang 3.php" method="POST">
        <label for="product_name">Item:</label>
        <span style="color: white;">
            <?php echo $product_name; ?><br></br>
            <input type="hidden" name="product_name" value="<?php echo $product_name; ?>">

            <label for="product_brand">Enter to buy brand:</label>
            <input type="text" id="product_brand" name="product_brand" autocomplete="off"><br></br>

            <input type="submit" value="Submit">
    </form>


</body>

</html>