<?php
    $rows = [
        [
            "ID",
            "INT",
            "NOT NULL, UNIQUE, AUTO_INCREMENT",
            "PRIMARY KEY"
        ],
        [
            "Brand",
            "SMALLINT",
            "NOT NULL",
            "INDEX"
        ],
        [
            "Name",
            "VAR_CHAR(200)",
            "NOT NULL",
            "INDEX"
        ],
        [
            "Model",
            "VAR_CHAR(200)",
            "NULL",
            ""
        ],
        [
            "Registration",
            "INT",
            "NULL",
            ""
        ],
        [
            "Description",
            "TEXT",
            "NULL",
            ""
        ],
        [
            "Warranty",
            "SMALLINT",
            "NULL",
            ""
        ],
        [
            "Kilometers",
            "FLOAT(9, 2)",
            "NULL, DEFAULT(0)",
            "INDEX"
        ],
        [
            "Color",
            "VAR_CHAR(50)",
            "NULL",
            "INDEX"
        ],
        [
            "Interior",
            "VAR_CHAR(100)",
            "NULL",
            ""
        ],
        [
            "Seats",
            "TINYINT",
            "NULL",
            "INDEX"
        ],
        [
            "Engine",
            "VAR_CHAR(100)",
            "NOT NULL",
            "INDEX"
        ],
        [
            "Traction",
            "VAR_CHAR(50)",
            "NULL",
            ""
        ],
        [
            "Transmission",
            "VAR_CHAR(100)",
            "NOT NULL",
            "INDEX"
        ],
        [
            "Urban consumption",
            "VAR_CHAR(20)",
            "NULL",
            ""
        ],
        [
            "Extra-urban consumption",
            "VAR_CHAR(20)",
            "NULL",
            ""
        ],
        [
            "Combined consumption",
            "VAR_CHAR(20)",
            "NULL",
            ""
        ],
        [
            "CO2 emissions",
            "VAR_CHAR(20)",
            "NULL",
            ""
        ],
        [
            "Standard equipment",
            "INT",
            "NULL",
            ""
        ],
        [
            "Optional equipment",
            "INT",
            "NULL",
            ""
        ],
        [
            "Dealer",
            "INT",
            "NOT NULL",
            "INDEX"
        ],
        [
            "Second-Hand",
            "TINYINT",
            "NULL, DEFAULT(0)",
            "INDEX"
        ],
        [
            "Price",
            "SMALLINT",
            "NOT NULL",
            "INDEX"
        ],
        [
            "Images",
            "INT",
            "NOT NULL",
            ""
        ],
        [
            "Eco-incentive",
            "INT",
            "NULL",
            "INDEX"
        ],
        [
            "Delivery price",
            "TINYINT",
            "NULL, DEFAULT(0)",
            ""
        ],
        [
            "Views",
            "SMALLINT",
            "NULL, DEFAULT(0)",
            ""
        ],
        [
            "Financing",
            "INT",
            "NULL",
            ""
        ],
        [
            "Created_at",
            "TIMESTAMP",
            "NOT NULL",
            ""
        ],
    ]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Concessionario DB</title>
</head>
<body>
    <table>
        <thead>
            <th>TABLE_NAME</th>
            <th>COLUMN_NAME</th>
            <th>TYPE</th>
            <th>ATTRIBUTES</th>
            <th>INDEX</th>
        </thead>
        <tbody>
            <?php 
                foreach($rows as $key=>$row){
                    echo "<tr" . " class='" . strtolower(explode(" ", $row[3])[0]) . "'>";
                    if($key === 0){
                        echo "<td class='bold'>Car</td>";
                    }else {
                        echo "<td></td>";
                    }
                    foreach($row as $key=>$cell){
                        echo "<td";
                        if($key === 0){
                            echo " class='bold'";
                        }
                        echo ">";
                        echo $cell;
                        echo "</td>";
                    }
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>
</body>
</html>