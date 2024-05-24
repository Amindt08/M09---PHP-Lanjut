<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
    <meta name="description" content="Belajar PHP">
    <meta name="keywords" content="233307010">
    <meta name="author" content="Hesti Awalia Putri">
</head>

<body>
    <?php
    $data = array(
        array("nama" => "", "umur" => 19),
        array("nama" => "", "umur" => 19),
        array("nama" => "", "umur" => 20),
        array("nama" => "", "umur" => 19),
        array("nama" => "", "umur" => 18),
        array("nama" => "", "umur" => 19),
        array("nama" => "", "umur" => 18),
        array("nama" => "", "umur" => 20),
        array("nama" => "", "umur" => 19),
        array("nama" => "", "umur" => 21),
        array("nama" => "", "umur" => 18),
        array("nama" => "", "umur" => 17),
        array("nama" => "", "umur" => 21),
        array("nama" => "", "umur" => 20),
        array("nama" => "", "umur" => 19)
    );

    $json_data = json_encode($data, JSON_PRETTY_PRINT);

    echo nl2br($json_data);
    ?>
</body>

</html>