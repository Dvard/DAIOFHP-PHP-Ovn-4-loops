<?php
# Upg 1
$i = 0;
$resultat_1 = [];
while ($i < 7) {
    array_push($resultat_1, 'hej på dej <br>');
    echo $resultat_1[0];
    $i++;
}

# Upg 2
$resultat = '';
$i = 0;
while ($i <= 10) {
    $resultat .= $i;
    $i++;
}
echo $resultat . '<br>';

# Upg 3
for ($i = 0; $i < count($resultat_1); $i++) {
    echo $resultat_1[$i];
}

# Upg 4
$capitals = array(
    array("Finland", "Helsingfors"),
    array("Sverige", "Stockholm"),
    array("Japan", "Tokyo"),
    array("Tyskland", "Berlin"),
);

foreach ($capitals as $capital) {
    echo $capital[1] . ' är huvudstaden i ' . $capital[0] . '<br>';
}

# Upg 5
$bilar = 'audi,jeep,volkswagen,ford,opel';
foreach (explode(',', $bilar) as $bil) {
    echo $bil . '<br>';
}

# Upg 6
$rad = 8;
if ($rad == 0) {
    echo 'Värdet är noll' . '<br>';
} elseif ($rad == 1) {
    echo 'Endast en rad' . '<br>';
} elseif ($rad >= 2 and $rad <= 10) {
    $i = 1;
    while($i <= $rad) {
        echo 'Detta är rad ' . $i . '<br>';
        $i++;
    }
} else {
    echo 'För mycket rader eller ogiltigt värde' . '<br>';
}

# Upg 7
$months = array(
    'Januari',
    'Februari',
    'Mars',
    'April',
    'Maj',
    'Juni',
    'Juli',
    'Augusti',
    'September',
    'Oktober',
    'November',
    'December'
);
$birthdays = array(
    'Paul' => '14.03.1977',
    'Edvard' => '18.07.2003',
    'Marie' => '02.04.2000',
);
foreach($birthdays as $name => $birthday) {
    echo $name . ' är född i ' . $months[str_replace('0', '',explode('.', $birthday)[1])-1] . '<br>';
}

# Upg 8
$cities = array(
    'Helsingfors' => 601035,
    'Vanda' => 204545,
    'Tammerfors' => 216586,
    'Åbo' => 179529,
    'Esbo' => 255121,
);

asort($cities);

foreach (array_reverse($cities) as $city => $population) {
    echo $city . '<br>';
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>PHP Övning - 4</title>
    </head>
    <body>

    </body>
</html>
