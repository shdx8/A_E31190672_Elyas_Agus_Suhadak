<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tabel Angkatan</title>
</head>

<body>
  <table border="1">
    <th>No</th>
    <th>Tahun</th>
    <?php foreach ($angkatan as $row) : ?>
      <tr>
        <td><?= $row['no'] ?></td>
        <td><?= $row['tahun'] ?></td>
      </tr>
    <?php endforeach ?>
  </table>
</body>

</html>