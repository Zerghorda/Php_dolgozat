<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tar Gergő</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <?php
    $cim = array("Név", "Város neve", "Busz sorszáma");
    $nevek = array("Nagy Tibor", "Szabó Ákos", "Kovács Géza", "Hofi Géza");
    $varosok = array("Nagykaniza", "Kőszeg", "Tata", "Gádony");
    $buszok = array();
    for ($i = 0; $i < 4; $i++) {
        $buszok[] = random_int(1, 200);
    }
    echo "<div id='tabla'>";
    echo "<table>";
    echo "<tr id='cim'>";
    foreach ($cim as $cimek) {
        echo "<th>$cimek</th>";
    }
    echo "</tr>";
    for ($i = 0; $i < 4; $i++) {
        echo "<tr>";
        echo "<td>$nevek[$i]</td>";
        echo "<td>$varosok[$i]</td>";
        echo "<td>$buszok[$i]</td>";
        echo "</tr>";
    }
    echo "</table>";
    ?>
    </div>
</body>

</html>