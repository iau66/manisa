<?php
include("username-password.php");
session_start();
if(!isset($_SESSION["login"])){
echo "Bu sayfayı görüntüleme yetkiniz yoktur.";
}
else {


echo <<<EOF
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>İAU | Hoşgeldiniz </title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <style>
    .jumbotron {
    padding-top: 20px;
    background-image: url(img/white.png)
    }
        
        .bodi {
            padding: 70px;
            margin: auto;
            text-align: center;
        }
        
        .bobo {
            margin-top: 460px;
        }
    </style>
</head>
<body>
   
   
    <nav class="navbar bg-dark navbar-expand-sm navbar-dark fixed-top">
        <div class="container">
            
            <a href="index.html" class="navbar-brand">
                İAU
            </a>
            

            
            <ul class="navbar-nav ml-auto">

                <li class="nav-item">
                    <a href="logout.php" class="nav-link">
                        Çıkış
                    </a>
                </li>
            </ul>
            

        </div>
    </nav>
    
    <header>
        <div class="jumbotron bg-dark text-info">
           <div class="container">
           </div>
        </div>        
    </header>
    

  
    <div class="bodi shadow bg-light mt-5 p-4 border-info border rounded w-75 mb-5"><p class="h2"><small class="text-muted">Hoşgeldiniz </small>"
    
EOF;
    echo strtok($user,  '@');
    
echo<<<ANA
    
    "
    </p></div>

    

        <footer class="bobo py-5 bg-dark text-white text-center">
        2020
    </footer>
    
    
    
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script> 
</body>
</html>
ANA;
    }
?>