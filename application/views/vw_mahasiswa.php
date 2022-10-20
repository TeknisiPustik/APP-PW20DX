<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampil Data Mahasiswa</title>

    <!-- import file "style.css" -->
    <link rel="stylesheet" href="<?= base_url("ext/style.css"); ?>">
</head>

<body>
    <!-- membuat bagian navigasi -->
    <nav>

    </nav>

    <!-- memebuat bagian table -->
    <table>
        <!-- membuat judul  table -->
        <thead>
            <tr>
                <th style="width: 5%;">NO.</th>
                <th style="width: 10; ">NPM</th>
                <th style="width: 30%; ">Nama</th>
                <th style="width: 15%; ">Telepon</th>
                <th style="width: 15%; ">Jurusan</th>
                <th style="width: 15%; ">Foto</th>
                <th style="width: 10%; ">Status</th>
            </tr>
        </thead>
        <!-- membuat isi table -->
        <tbody>
            <!-- awal dari Looping jika baris yang akan di looping-->
            <?php
            // nilai awal "no"
            $no = 1;
            foreach ($hasil as $record) {
                //jika status = 1 maka aktif
                if ($record->status == 1) {
                    $status = "Aktif";
                }
                //jika stasut bukan 1 maka pasif
                else {
                    $status = "Pasif";
                }
            ?>
                <tr <?php if ($record->status == 1) { ?> class="bg_putih" <?php } else { ?> class="bg_ungu" <?php } ?>>
                    <!-- awal dari Looping jika colom yang akan di looping-->
                    <td style="text-align: center; "><?= $no; ?></td>
                    <td style="text-align: center; "><?= $record->npm; ?></td>
                    <td style="text-align: left; "><?= $record->nama; ?></td>
                    <td style="text-align: center; "><?= $record->telepon; ?></td>
                    <td style="text-align: center; "><?= $record->jurusan; ?></td>
                    <td style="text-align: center; "><?= $record->foto; ?></td>
                    <td style="text-align: center; "><?= $status; ?></td>
                    <!-- akhir dari Looping jika colom yang akan di looping-->
                </tr>

            <?php
                $no++;
            }
            ?>
            <!-- akhir dari Looping jika baris yang akan di looping-->
        </tbody>
    </table>

</body>

</html>