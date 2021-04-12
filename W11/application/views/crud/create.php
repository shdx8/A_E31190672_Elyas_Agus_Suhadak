<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah User</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="stylesheet" href="<?=base_url()?>/public/css/style.css">
  <script src="https://kit.fontawesome.com/4a65017575.js" crossorigin="anonymous"></script>
</head>

<body>
  <div class="container">
    <a href="index" class="btn btn-secondary" role="button">Kembali</a>
    <center>
      <h2>Tambah User</h2>
    </center>
    <br>
    <br>
    <form method="post" action="input">
      <div class="form-group">
        <label>Username:</label>
        <input type="text" name="username" class="form-control" placeholder="Username Maximal 15 Character..." required>
      </div>
      <div class="form-group">
        <label>Password:</label>
        <input type="password" name="password" class="form-control" placeholder="Password Maximal 6 Character..." required>
      </div>
      <div class="form-group">
        <label>Grup:</label>
					<select id="grup" class="form-control" name="grup" require>
						<option value="0">Pilih Grup User</option>
						<option value="1">Admin</option>
						<option value="2">User</option>
					</select>
				</div>
      <!-- <button type="reset" value="" class="btn btn-warning btn-lg"><i class="fas fa-redo"></i></button> -->
      <button type="submit" name="submit" class="btn btn-success btn-lg btn-lg"><i class="fas fa-save"></i> Tambah</button>
    </form>
  </div>

</body>

</html>