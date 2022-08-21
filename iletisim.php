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
      <section class="home py-5" id="home">

        <div class="container-lg py-5">
            
            <div class="row min-vh-100 align-items-center align-content-center">
                
                <div class="col-md-6 mt-md-0 ">

                    <form class="row g-3 " method="Post" action="mesaj.php" onsubmit="return validateForm()">
                      
                        <div class="col-md-6">
                          <label for="form-ad" class="form-label">İsim</label>
                          <input type="text" class="form-control" name="form-ad" id="form-ad"  required>
                        </div>

                        <div class="col-md-6">
                          <label for="form-soyad" class="form-label">Soyadı</label>
                          <input type="text" class="form-control" name="form-soyad" id="form-soyad"  required>
                        </div>

                        <div class="mb-3 col-md-8">
                          <label for="email" class="form-label">Email</label>
                          <input type="email" class="form-control" name="email" id="form-email" aria-describedby="emailHelp">
                        </div>

                        <div class="mb-3 col-md-4">
                          <label for="selected" class="form-label">Cinsiyet</label>
                          <select class="form-select form-select" name="selected" aria-label=".form-select-sm example" id="form-cinsiyet">
                            <option selected>Bir Seçim Yapınız</option>
                            <option value="Erkek">Erkek</option>
                            <option value="Kadın">Kadın</option>
                          </select>
                        </div>

                        <div class="mb-3">
                          <label for="form-mesaj" class="form-label">Mesaj</label>
                          <textarea class="form-control" name="form-mesaj" id="form-mesaj" rows="3"></textarea>
                        </div>

                        <label  class="form-label">Bir Yabancı Dil Seçiniz</label>
                        
                        <div class="form-check form-check-inline" style="padding-left: 3rem;">
                          <input class="form-check-input" name="inlineCheckbox1" type="checkbox" id="inlineCheckbox1" value="İngilizce">
                          <label class="form-check-label" for="inlineCheckbox1">İngilizce</label>
                        </div>

                        <div class="form-check form-check-inline" style="padding-left: 3rem;">
                          <input class="form-check-input" type="checkbox"name="inlineCheckbox2" id="inlineCheckbox2" value="Rusça">
                          <label class="form-check-label" for="inlineCheckbox2">Ruşça</label>
                        </div>

                        <div class="form-check form-check-inline" style="padding-left: 3rem;">
                          <input class="form-check-input" type="checkbox" name="inlineCheckbox3" id="inlineCheckbox3" value="Almanca">
                          <label class="form-check-label" for="inlineCheckbox3">Almanca</label>
                        </div>

                        <div class="col-md-6 " style="width: 50%;">
                          <button type="submit" onclick="validateForm()" class="btn btn-success" style="width: 100%;">Gönder</button>
                        </div>

                        <div class="col-md-6" style="width: 50%;">
                          <button type="submit" onclick="deleteForm()" class="btn btn-danger" style="width: 100%;">Temizle</button>
                        </div>
                       
                        <p id="result" class="alert alert-danger mt-3" style="display: none;"> </p>
                      </form>
                </div>

                <div class="col-md-6  mt-5 mt-md-0 order-md-first">
                  <div class="row">
                    <div class="col-md-6">
                      <h4 class="text-success">Adres</h4>
                      <p class="p-0">Erenler</p>
                      <p class="p-0">Sakarya</p>
                    </div>
                    <div class="col-md-6">
                      <h5 class="text-danger">Telefon No:</h5>
                      <p class="p-0">05531397769</p>
                    </div>
                    <div class="pt-5">
                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d96803.8986787847!2d30.386381074317907!3d40.69331433672766!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14ccb418d0faacc7%3A0x5381c11d14520f96!2sErenler%2FSakarya!5e0!3m2!1str!2str!4v1661108772489!5m2!1str!2str" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                  </div>
                </div>
                
            </div>
        </div>
    </section>
    </main>
    <footer>
    <div class="text-center p-3 bg-danger">
        © 2022:
        <a class="text-white" href="index.php">Musa Sinan Alemdar</a>
      </div>
    </footer>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.5.0/mdb.min.js"></script>
    <script src="./js/bootstrap.js"></script>
    <script src="./js/app.js"></script>
        </body>
        </html>