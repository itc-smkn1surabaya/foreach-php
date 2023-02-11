<?php

$siswa = array(
    [
        "nama" => "Ridwan",
        "kelas" => "8i",
        "umur" => "15",
        "alamat" => "jln ..."
    ],
    [
        "nama" => "Zack",
        "kelas" => "9i",
        "umur" => "17",
        "alamat" => "jln ..."
    ],
    [
        "nama" => "Budi",
        "kelas" => "7A",
        "umur" => "16",
        "alamat" => "jln ..."
    ],
    [
        "nama" => "Damian",
        "kelas" => "8b",
        "umur" => "18",
        "alamat" => "jln ..."
    ],

);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Looping</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <table>
        <thead>
            <th>No</th>
            <th>Nama</th>
            <th>Umur</th>
            <th>Kelas</th>
            <th>Alamat</th>
        </thead>
        <tbody>
            <?php foreach ($siswa as $index => $ssw) { ?>
                <?php if ($index % 2 != 0) { ?>
                    <tr class="red">
                        <td><?= $index + 1 ?></td>
                        <td><?= $ssw['nama'] ?></td>
                        <td><?= $ssw['umur'] ?></td>
                        <td><?= $ssw['kelas'] ?></td>
                        <td><?= $ssw['alamat'] ?></td>
                    </tr>
                <?php } else { ?>
                    <tr class="blue">
                        <td><?= $index + 1 ?></td>
                        <td><?= $ssw['nama'] ?></td>
                        <td><?= $ssw['umur'] ?></td>
                        <td><?= $ssw['kelas'] ?></td>
                        <td><?= $ssw['alamat'] ?></td>
                    </tr>
                <?php } ?>
            <?php } ?>
        </tbody>
    </table>

    <pre>
        <?= htmlspecialchars('<?php foreach ($siswas as $index => $siswa) { ?>') ?>
        <br>
        <?= htmlspecialchars('  //your code') ?>
        <br>
        <?= htmlspecialchars('<? } ?>') ?>
    </pre>
</body>

</html>