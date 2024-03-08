<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="styles.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang 3</title>
</head>

<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (!empty($_POST["product_name"]) && !empty($_POST["product_brand"])) {
            $product_name = $_POST["product_name"];
            $product_brand = $_POST["product_brand"];
        }
    }
    ?>
    <p>Item:
        <span style="color: white;">
            <?php echo $product_name; ?>
    </p>
    <p>Brand:
        <span style="color: white;">
            <?php echo $product_brand; ?>
    </p>

</body>

</html>