<DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="utf-8" >
            <link rel="stylesheet" href="css/bootstrap.min.css"/>
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.5.0/mdb.min.css" rel="stylesheet"/>
            <link rel="stylesheet" href="style.css">
            <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet"/>
            <title>Hakkımda</title>
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
                    </center> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
                    <form class="d-flex">
                  <button onclick="window.location='./login.php'" type="button" class="btn btn-danger">Giriş Yap</button>
                </form>
            </header>
            <main>
            <div class="container-fluid min-vh-100" style="padding-top: 10rem; background-image: url('api.jpg');">

                <h3 class="text-center pb-5">Hayvanlar</h3>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="results">
                             <div id="cat_result" class="result" >
                                <p>Random Kedi Resmi</p>
                              </div>
                         <div id="dog_result" class="result">
                          <p>Random Köpek Resmi</p>
                         </div>
                </div>
    
                 <div class="buttons">
                   <button id="cat_btn" type="button" class="btn btn-danger">Kedi</button>
                     <button id="dog_btn" type="button" class="btn btn-danger">Köpek</button>
                         </div>
                     </div>
                 </div>
            </div>
            </main>

    <footer>
        <div class="text-center p-3 bg-danger">
        © 2022:
        <a class="text-white" href="index.php">Musa Sinan Alemdar</a>
      </div>
    </footer>

              <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.5.0/mdb.min.js"></script>
                <script src="./js/app.js"></script>
                  <script src="./js/bootstrap.js"></script>
        </body>
    </html>