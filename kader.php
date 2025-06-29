<?php
require "koneksi.php";

//  ini_set('display_errors', 0);

$sql = "SELECT * FROM bayi ORDER BY id DESC ";

$rows = $koneksi->execute_query($sql, []);

$listing[] = [];
foreach ($rows as $data) {
    $found=false;
    foreach($listing as $check_data){
        if (in_array($data['nama'], $check_data)) {
            $found=true;
            break;
        }
    }

    if ($found) {
        continue;
    } else {
        array_push($listing, $data);
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Data Bayi</title>
</head>
<style>
    table,
    th,
    td {
        border: 1px solid black;
    }
</style>

<body>
    <a href="tambah_data_bayi.php">Tambah Data Bayi</a>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Bayi</th>
                <th>Tanggal Lahir Bayi</th>
                <th>Berat Bayi</th>
                <th>Tinggi Bayi</th>
                <th>No BPJS Bayi</th>
                <th>terakhir pengecekan </th>
                <th>Aksi</th>
            </tr>
        </thead>
        <?php
        $no = 1;
        foreach ($listing as $data):
            if ($data == null) {
                continue;
            }
        ?>

            <tr>
                <td><?= $no; ?></td>
                <td><?= $data["nama"]; ?></td>
                <td><?= $data["tanggal_lahir"]; ?></td>
                <td><?= $data["berat_bayi"]; ?></td>
                <td><?= $data["tinggi_bayi"]; ?></td>
                <td><?= $data["no_bpjs"]; ?></td>
                <td><?= $data["terakhir_pengecekan"]; ?></td>
                <td>
                    <a href="edit_data_bayi.php?id=<?= $data['id'] ?>">Edit</a>
                    <a href="hapus_data_bayi.php?id=<?= $data['id'] ?>">Hapus</a>
                    <a href="kader.php?nama=<?= $data['nama'] ?>">log</a>
                </td>
            </tr>

        <?php
            $no += 1;
        endforeach;
        ?>
        <?php foreach ($rows as $data) : ?>
        <?php endforeach; ?>
        </tbody>
    </table>

    <button><a href="laman_awal.php">Back</a></button>

    <table style="margin-top: 20px; margin-left: 50px;">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Bayi</th>
                <th>Tanggal Lahir Bayi</th>
                <th>Berat Bayi</th>
                <th>Tinggi Bayi</th>
                <th>No BPJS Bayi</th>
                <th>terakhir pengecekan </th>

            </tr>
        </thead>
        <tbody>
            <?php

            $index = 1;
            $pencegat = 0;
            $log_data = $koneksi->execute_query("SELECT * FROM bayi WHERE `nama`='$_GET[nama]' ORDER BY id DESC ");
            foreach ($log_data as $data_total):
                if ($data["terakhir_pengecekan"] == $pencegat) {
                    continue;
                }
                $pencegat = $data_total["terakhir_pengecekan"];
            ?>

                <tr>
                    <td><?= $index; ?></td>
                    <td><?= $data_total["nama"]; ?></td>
                    <td><?= $data_total["tanggal_lahir"]; ?></td>
                    <td><?= $data_total["berat_bayi"]; ?></td>
                    <td><?= $data_total["tinggi_bayi"]; ?></td>
                    <td><?= $data_total["no_bpjs"]; ?></td>
                    <td><?= $data_total["terakhir_pengecekan"]; ?></td>

                </tr>

            <?php
                $index++;
            endforeach;
            ?>
        </tbody>
    </table>
</body>

</html>