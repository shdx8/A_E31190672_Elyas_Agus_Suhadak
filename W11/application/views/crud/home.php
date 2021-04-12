<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="<?=base_url()?>/public/css/style.css">
    <script src="https://kit.fontawesome.com/4a65017575.js" crossorigin="aidnymous"></script>
</head>

<body>
    <div class="container">
        <center>
            <h2>Data User</h2>
        </center>
        <br />
        <a href="<?=base_url('mahasiswa/create'); ?>" class="btn btn-success" role="button"><i class="fas fa-plus"></i> Tambah</a>
        <br />
        <br />
        <table class="table table-hover">
            <tr class="table-dark">
                <th>No</th>
                <th>Username</th>
                <th>Password</th>
                <th>Grup</th>
                <th>&nbsp;</th>
            </tr>
            <?php 
            $no = 1;
            foreach ($user as $d) {
             ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d->username; ?></td>
                <td><?php echo $d->password; ?></td>
                <td><?php echo $d->grup; ?></td>
                <td>
                    <center>
                        <a href="update.php?id=<?php //echo $d['id']; ?>" class="btn btn-warning" role="button"><i
                                class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                        <a href="delete.php?id=<?php //echo $d['id']; ?>" class="btn btn-danger" role="button"><i
                                class="fa fa-trash" aria-hidden="true"></i></a>
                    </center>
                </td>
            </tr>
            <?php 
		}
		?>
    </div>
</body>
</html>