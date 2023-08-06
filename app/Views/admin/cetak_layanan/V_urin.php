<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width-device, intial-scale=1.0">
    <style>
        #table {
            font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #table td,
        #table th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #table tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #table tr:hover {
            background-color: #ddd;
        }

        #table th {
            padding-top: 10px;
            padding-bottom: 10px;
            text-align: left;
            background-color: #0277ba;
            color: white;
        }
    </style>
</head>

<body>
    <div style="text-align:center">
        <h3> Laporan Layanan Test Urine</h3>
    </div>
    <table id="table">
        <thead>
            <tr>
                <th cope="row">NO</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Nomor Telpon</th>
                <th>Alamat</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; ?>
            <?php foreach ($datacetak->getResultArray() as $info) : ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $info['nama']; ?></td>
                    <td><?= $info['email']; ?></td>
                    <td><?= $info['no_telp']; ?></td>
                    <td><?= $info['alamat']; ?></td>
                    <td>
                        <?php if ($info['status'] == 'selesai') { ?>
                            <p>Selesai</p>
                        <?php }  ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>