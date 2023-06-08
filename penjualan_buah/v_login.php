

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Wantoel Fruit Market | Login</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons"></script>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <link rel="stylesheet" href="css/loginStyle.css" />
  </head>
  <body>
    <section>
      <div class="all">
        <form class="loginBox" action="./login/login.php" method="post">
          <h2>Login</h2>
          <div class="isi">
            <div class="username">
              <label for="username">Username</label>
              <br />
              <input type="text" id="username" name="username" autofocus required/>
              <br />
            </div>
            <div class="password">
              <label for="password">Password</label>
              <br />
              <input type="password" id="password" name="password" required />
              <br />
            </div>
          </div>

          <button type="submit" name="login" value="Log In">Login</button>
          <div class="kembali">
            <a href="index.php">Kembali</a>
          </div>
          
          <?php 
          
          // if(isset($_GET['pesan'])){
          //   if($_GET['pesan'] == "gagal"){
          //     echo 'Login gagal! Username atau Password salah!';
          //   } else if ($_GET['pesan'] == "logout"){
          //     echo 'Anda telah berhasil Logout';
          //   } else if ($_GET['pesan'] == "belum_login"){
          //     echo 'Anda harus login terlebih dahulu';
          //   }
          // }
          
          ?>

        </form>

        
      </div>
    </section>

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

    <!-- JavaScript -->
    <script src="js/script.js"></script>
  </body>
</html>
