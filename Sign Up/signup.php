<?php
include "../koneksi.php";
$err = array();
if (isset($_POST['submit'])) {
  array_push($err);
  $password = md5($_POST["password_user"]);
  $no_user = $_POST['no_user'];
  mysqli_query($conn, "insert into user set nama_user= '$_POST[nama_user]',
  email_user= '$_POST[email_user]', password_user = '$password'");
  echo "<script type='text/javascript'>alert('Register_Berhasil');
  window.location='../Login/login.php'; </script>";
}


?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">

  <title>Sign Up</title>
</head>

<body>
  <div class="container">
    <div class="card login-form">
      <div class="card-body">
        <h1 class="card-title text-center fw-bold" style="color: #43960f;">Sign Up</h1>


        <form method="post">
          <div class="mb-4 mt-4">
            <label for="exampleInputEmail1" class="form-label">Nama</label>
            <input name="nama_user" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Your Name">
          </div>
          <div class="mb-4 mt-4">
            <label for="exampleInputEmail1" class="form-label">Email</label>
            <input name="email_user" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Your Email">
          </div>
          <div class="mb-4">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input name="password_user" type="password" class="form-control" id="exampleInputPassword1" placeholder="Your Password">
          </div>

          <div class="d-grid mt-4">
            <input class="btn btn-primary" type="submit" name="submit">
          </div>

          <div class="mt-3 text-center" style="font-size: 14px;">
            <label>Already have an account ? <a href="../Login/login.php" class="link" style="color: #43960f;">Login Now</a></label>
          </div>
        </form>
      </div>
    </div>
  </div>


  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>

</html>