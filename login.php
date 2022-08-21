<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.css">
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.5.0/mdb.min.css" rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet"/>
    <title>Giriş Yap</title>
</head>

<body>
  
    <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-primary fixed-top shadow-sm">
                    <div class="container">
                    <a class="navbar-brand text-danger fs-3 fw-bold bg-light rounded" href="#home">&nbsp Musa Sinan Alemdar &nbsp</a>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <center> 
                    <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
                  <li class="nav-item">
                    <a class="nav-link active fw-bold" href="index.php">Hakkımda</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active fw-bold" href="ozgecmis.php">Özgeçmiş</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active fw-bold" href="ilgialanlarim.php">İlgi Alanlarım</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active fw-bold" href="sehirim.php">Şehirim</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active fw-bold" href="takimim.php">Takımım</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active fw-bold" href="iletisim.php">İletişim</a>
                  </li>
                </ul>
                    </center>
    </header>
    <main>
      <section class="home py-5" id="home">
        <div class="container-lg py-2">
            <div class="row min-vh-100 align-items-center align-content-center">
                <div class="col-md-6 mt-md-0">
                    <div class="home-img text-center">
                        <img class=" mw-100" src="tokyo.jpg" alt="profile img" >
                    </div>
                </div>
                <div class="col-md-6 mt-5 mt-md-0 order-md-first">
                    <form  action="user.php" method="POST" >

                      <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" id="email" name="email" class="form-control" required="required">
                      </div>

                      <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" id="pass" name="password" class="form-control"  required="required">
                      </div>
                      <div class="mb-3">

                    </div>
                    
                    <button type="submit" name="login" onclick="validateLogin()"class="btn btn-primary">Giriş</button>
                    <p id="result" class="alert alert-danger mt-3" style="display: none;"> </p>
                      </form>
                </div>
            </div>
        </div>
    </section>
    </main>
    <script src="./js/app.js"></script>
    <script src="./js/bootstrap.js"></script>
</body>
</html>
