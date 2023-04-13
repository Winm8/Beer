<?php

$Beer = "https://random-data-api.com/api/beer/random_beer?size=10";
$data = file_get_contents($Beer);
$beers = json_decode($data, true);

usort($beers, function($a, $b) {
    return $a['alcohol'] <=> $b['alcohol'];
});

echo '<table>';
echo '<thead><tr><th>Značka</th><th>Název</th><th>Obsah alkoholu</th></tr></thead>';
echo '<tbody>';
foreach ($beers as $beer) {
    echo '<tr>';
    echo '<td>' . $beer['brand'] . '</td>';
    echo '<td>' . $beer['name'] . '</td>';
    echo '<td>' . $beer['alcohol'] . '</td>';
    echo '</tr>';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Beers.css">
    <script src="index.php"></script>
</head>
<script>  
$Beer = "https://random-data-api.com/api/beer/random_beer?size=10";
$data = file_get_contents($Beer);
$beers = json_decode($data, true);

usort($beers, function($a, $b) {
    return $a['alcohol'] <=> $b['alcohol'];
});

</script>
<body>

    <div style="overflow-x:auto;">
        <table>
            <tr>
                <th>Brand</th>
                <th>Name</th>
                <th>Alcohol</th>
            </tr>
        </table>
      </div>
</body>
</html>
