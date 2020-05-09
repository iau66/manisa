<?php
session_start();
ob_start();
session_destroy();
header("Refresh: 2; url=index.html");
ob_end_flush();


echo <<<EOF
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>İAU | Çıkış </title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <style>        
        .bodi {
            text-align: center;
            padding-top: 120px;
            padding-bottom: 120px;
        }

        
    </style>
</head>
<body>
   
    <nav class="navbar bg-dark navbar-expand-sm navbar-dark fixed-top">
        <div class="container">
            <a href="index.html" class="navbar-brand">
                İAU
            </a>
        </div>
    </nav>
    

    <div class="bodi alert alert-danger ">
    <p>Çıkış Yaptınız. 
    <br><br>
    Ana Sayfaya Yönlendiriliyorsunuz.</p>

    </div>
    
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script> 
</body>
</html>

EOF;
?>