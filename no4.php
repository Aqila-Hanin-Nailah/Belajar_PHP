<?php
$barang = [
    [
        'nama_barang' => 'Pasta Gigi',
        'harga_barang' => 18000,
        'jumlah_beli' => 1,
    ],
    [
        'nama_barang' => 'Sabun Mandi',
        'harga_barang' => 5000,
        'jumlah_beli' => 3,
    ],
    [
        'nama_barang' => 'Aloe Vera Sheet Mask',
        'harga_barang' => 15000,
        'jumlah_beli' => 4,
    ],
];

$jumlah_pembelian = 0;

foreach ($barang as $item) {
    $harga_total_item = $item['harga_barang'] * $item['jumlah_beli'];
    $jumlah_pembelian += $harga_total_item;
}

echo "Total yang harus dibayar adalah <b> Rp " . number_format($jumlah_pembelian, 0, ',', '.') . '</b>';
?>
