<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.css">
    <link rel="stylesheet" href="./css/style.css">
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
                    <a class="nav-link active fw-bold" href="takimim.php">Takımımız</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active fw-bold" href="iletisim.php">İletişim</a>
                  </li>
                </ul>
                    </center>
            </header>

    <main>
      <script>
      </script>
        <div class="container-lg py-5 align-items-center justify-content-center">
          <div class="row min-vh-100 justify-content-center">
            <div class="col-md-6  m-auto" style="height: 35rem; width: 70rem;">

            <div class="alert alert-primary" role="alert">
            <?php 
              if($_POST){
                $item=$_POST["form-ad"];
                echo("AD: ");
                echo($item);
              }    
              ?>
            </div>

            <div class="alert alert-secondary" role="alert">
            <?php 
              if($_POST){
                $item2=$_POST["form-soyad"];
                echo("SOYAD: ");
                echo($item2);
              }    
              ?>
            </div>

            <div class="alert alert-success" role="alert">
            <?php 
              if($_POST){
                $item3=$_POST["email"];
                echo("E-Mail: ");
                echo($item3);
              }    
              ?>
            </div>

            <div class="alert alert-danger" role="alert">
            <?php 
              if($_POST){
                $item4=$_POST["selected"];
                echo("Cinsiyet: ");
                echo($item4);
              }    
              ?>
            </div>

            <div class="alert alert-warning" role="alert">
            <?php 
              if($_POST){
                $item5=$_POST["form-mesaj"];
                echo("Mesaj: ");
                echo($item5);
              }    
              ?>
            </div>

            <div class="alert alert-warning" role="alert">
            <?php 
              if($_POST){
                $item6="";
                $item7="";
                $item8="";
                if(isset($_POST["inlineCheckbox1"])){
                  $item6=$_POST["inlineCheckbox1"];
                }
                if(isset($_POST["inlineCheckbox2"])){
                  $item7=$_POST["inlineCheckbox2"];
                }
                if(isset($_POST["inlineCheckbox3"])){
                  $item8=$_POST["inlineCheckbox3"];
                }
                echo($item7);
                echo("Diller: ");
                if($item6=="İngilizce"){
                  echo "$item6    ," ;
                }
                if($item7=="Rusça"){
                  echo "$item7    ," ;
                }
                if($item8=="Almanca"){
                  echo "$item8    ." ;
                }
              }    
              ?>
            </div>

          </div>
          </div>
        </div>
    </main>
    <script src="./js/bootstrap.js"></script>
</body>
</html>