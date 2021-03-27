<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tabel Mahasiswa</title>
</head>

<body>
  <table border="1">
    <th>Nama</th>
    <th>Prodi</th>
    <?php foreach ($mahasiswa as $row) : ?>
      <tr>
        <td><?= $row['nama'] ?></td>
        <td><?= $row['prodi'] ?></td>
      </tr>
    <?php endforeach ?>
  </table>
</body>