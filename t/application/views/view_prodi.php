<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tabel Prodi</title>
</head>

<body>
  <table border="1">
    <th>No</th>
    <th>Prodi</th>
    <th>Keterangan</th>
    <?php foreach ($prodi as $row) : ?>
      <tr>
        <td><?= $row['no'] ?></td>
        <td><?= $row['prodi'] ?></td>
        <td><?= $row['keterangan'] ?></td>
      </tr>
    <?php endforeach ?>
  </table>
</body>