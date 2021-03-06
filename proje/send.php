

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>İAU | Gönderildi </title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <style>  
        
    .jumbotron {
    padding-top: 20px;
    background-image: url(img/white.png)
    }
    .bodi {
        margin: auto;
        text-align: center;
    }
       

        
    </style>
</head>
<body>
   
    <nav class="navbar bg-dark navbar-expand-sm navbar-dark fixed-top">
        <div class="container">
            
            <a href="index.html" class="navbar-brand">
                İAU
            </a>
            
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div id="navbarNavDropdown" class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="index.html" class="nav-link">
                        Ana Sayfa
                    </a>
                </li>
                <li class="nav-item">
                    <a href="hakkinda.html" class="nav-link">
                        Hakkında
                    </a>
                </li>
                <li class="nav-item">
                    <a href="ozgecmis.html" class="nav-link ">
                        Özgeçmiş
                    </a>
                </li>
                <li class="nav-item">
                    <a href="sehrim.html" class="nav-link ">
                        Şehrim
                    </a>
                </li>
                <li class="nav-item">
                    <a href="mirasimiz.html" class="nav-link ">
                        Mirasımız
                    </a>
                </li>
                <li class="nav-item">
                    <a href="iletisim.html" class="nav-link active">
                        İletişim
                    </a>
                </li>
                <li class="nav-item">
                    <a href="giris.html" class="nav-link">
                        Giriş
                    </a>
                </li>
            </ul>
            </div>
            

        </div>
    </nav>
    
    
    <header>
        <div class="jumbotron bg-dark text-info">
           <div class="container">
           </div>
        </div>
    </header>
    
    <div class="bodi shadow bg-light mt-5 p-4 border-success border rounded w-75 mt-5">
<p class="h4 text-success">Gönderildi <img src="img/tick.png" alt=""></p>
<?php


    $isim = $_POST["isim"];
    $soyisim = $_POST["soyisim"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $cinsiyet = $_POST["cinsiyet"];
    $sehir = $_POST["city"];
    $hobiler = $_POST["hobies"];
    $message = $_POST["message"];

    echo "isim: ".$isim;
    echo "<br>";
    echo "soyisim: ".$soyisim;
    echo "<br>";
    echo "e-posta: ".$email;
    echo "<br>";
    echo "telefon numarası: ".$phone;
    echo "<br>";
    echo "cinsiyet: ".$cinsiyet;
    echo "<br>";
    echo "sehir: ".$sehir;
    echo "<br>";
    echo "hobiler: ";


    foreach($hobiler as $key => $value){
    echo $value; 
    echo " ";
    }

    echo "<br>";
    echo "mesaj: ".$message;
?> 
    </div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script> 
</body>
</html>




