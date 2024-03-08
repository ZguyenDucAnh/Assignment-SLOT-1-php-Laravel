<!DOCTYPE html>
<html lang="en">
<!-- Style -->
<!-- Format code: Shift + Alt + F -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bai 3 SLOT 1</title>
    <style>
        body {
            background-color: black;
            font-family: Arial, sans-serif;
            white-space: nowrap;

        }

        table {
            border: 3px solid black;      
            border-style: outset;
            
        }

        th,td {
            color: white;/*Color for number*/
            border: 3px solid black;/*Color for thanh ngang*/
            border-style: inset;
            padding: 5px;
            text-align: center;
        }
    </style>
</head>

<body>
    <table>
        <?php
        for ($i = 1; $i <= 9; $i++) {
            echo "<tr>";
            echo "<td style='color:black;'>____</td>";
            for ($j = 1; $j <= 9; $j++) {
                echo "<td>" . ($i * $j) . "</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
</body>

</html>
