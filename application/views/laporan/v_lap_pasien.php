<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>

    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap.min.css">

    <style>
        .table-bordered th,
        .table-bordered thead th,
        .table-bordered th{
            border: 1px solid #000;
        }
    </style>
</head>
<body>
    <div class="container">
        <h3 class="mb-0 mt-4">KLINIK PACAR JENO</h3>
        <small class="mb-0 text-center">Jl. Bucin jeno No.01 Kec.NCT Dream Kab.NCT
        </small>
        <hr>
        <h4 class="text-center">LAPORAN DATA PASIEN</h4>

        <table class="table table-bordered table-sm">
            <tr>
                <th width="80px">No.</th>
                <th>Nama Pasien</th>
                <th>L/P</th>
                <th>Umur</th>
            </tr>
            <?php $no=1; foreach($pasien as $r) { ?>
            <tr>
                <th class="text-center"><?= $no; ?></th>
                <th><?= $r['nama_pasien']; ?></th>
                <th><?= $r['jenis_kelamin']; ?></th>
                <th><?= $r['umur']; ?></th>
            </tr>
            <?php $no++; } ?>
        </table>
        <br>
        <table width="100%">
            <tr>
                <td></td>
                <th width= "300px">
                    <p>
                    SM Entertainment, <?= date('d-m-Y'); ?>
                    <br>
                    Administrator,
                    <br><br><br><br>
                    <b>_______________________________</b>
                    </p>
                </th>
            </tr>
        </table>
    </div>
</body>
</html>