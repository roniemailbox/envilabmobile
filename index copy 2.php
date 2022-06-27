<?php  
 $sumber = 'http://app.envilab.co.id/envilabapi/';
 $konten = file_get_contents($sumber);
 $data = json_decode($konten, true);
 

?>

<!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
<title>PT. Envilab Indonesia</title>
<link rel="stylesheet" type="text/css" href="styles/bootstrap.css">
<link rel="stylesheet" type="text/css" href="styles/style.css">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="fonts/css/fontawesome-all.min.css">
<link rel="manifest" href="_manifest.json">
<link rel="apple-touch-icon" href="assets/img/icon.png">
</head>
<body class="theme-light" data-highlight="highlight-red">

    <div id="preloader"><div class="spinner-border color-highlight" role="status"></div></div>
    <div id="page">
  

    <div class="header header-fixed header-logo-left">
     
    </div>

    <div id="footer-bar" class="footer-bar-1-center">
    <a href="index.php" class="header-title">Copyright@2022 </a>
    </div>
    <div class="page-title-clear"></div>
 
    <div class="page-content">
 
 

    <div class="card card-style shadow-xl">
    
    
    <img class="img-fluid center-block" src="assets/img/icon.png" data-src="assets/img/icon.png" alt="image" style="margin: 0 auto; width:138px;">
    <!-- <h5 class="font-24 text-center color-theme font-800 pt-3 mt-3">Hallo Envilab</h5> -->
        <div class="content">
            
            <p class="mb-1">
            <div class="input-style has-borders has-icon validate-field mb-4">
                <i class="fa fa-user"></i>
                <input type="name" class="form-control validate-name" id="form1" placeholder="Username">
                <label for="form1" class="color-highlight">Username</label>
                <i class="fa fa-times disabled invalid color-red-dark"></i>
                <i class="fa fa-check disabled valid color-green-dark"></i>
                <em>(required)</em>
            </div>
            <div class="input-style has-borders has-icon validate-field mb-4">
                <i class="fa fa-key"></i>
                <input type="password" class="form-control validate-name" id="form1" placeholder="Password">
                <label for="form1" class="color-highlight">Password</label>
                <i class="fa fa-times disabled invalid color-red-dark"></i>
                <i class="fa fa-check disabled valid color-green-dark"></i>
                <em>(required)</em>
            </div>
            <a href="#" class="btn btn-m rounded-sm shadow-xl bg-highlight color-white font-900 text-uppercase">Log In</a>
            </p>
      
    </div>
    <div class="divider mb-3"></div>
    <div class="row text-center mb-3 pl-3 pr-3">
        <a class="font-11 col-4" href="#">Privacy Policy</a>
        <a class="font-11 col-4" href="#">Terms of Service</a>
        <a class="font-11 col-4" href="#">Contact Support</a>
    </div>

     
    
    
</div>


    </div>
    <!-- end page -->
    </div>
 
    
   
    <script type="text/javascript" src="scripts/bootstrap.min.js"></script>
    <script type="text/javascript" src="scripts/custom.js"></script>
    <script src="assets/js/register.js"></script>
</body>
</html>