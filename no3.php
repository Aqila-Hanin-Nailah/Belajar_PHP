<?php
$data = [
    [
        'nama' => 'Andi',
        'tahun' => 2008,
    ],
    [
        'nama' => 'Beni',
        'tahun' => 2001,
    ],
    [
        'nama' => 'Dani',
        'tahun' => 2004,
    ],
    [
        'nama' => 'Eko',
        'tahun' => 2006,
    ]
];

// function isKabisat($tahun) {
//     return ($tahun % 4 == 0 && $tahun % 100 != 0) || $tahun % 400 == 0;
// }

foreach ($data as $person) {
    if ($person ['tahun'] % 4 == 0) {
        echo $person['nama'] . ": lahir di tahun kabisat.\n" . "<br>";
    }
    else {
        echo $person['nama'] . ": lahir bukan pada tahun kabisat.\n" . "<br>";
    }
}
?>
