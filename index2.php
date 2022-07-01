<?php
session_start();

?>
<!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
<title>AppKit Mobile</title>
<link rel="stylesheet" type="text/css" href="styles/bootstrap.css">
<link rel="stylesheet" type="text/css" href="styles/style.css">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="fonts/css/fontawesome-all.min.css">    
<link rel="manifest" href="_manifest.json" data-pwa-version="set_in_manifest_and_pwa_js">
<link rel="apple-touch-icon" sizes="180x180" href="app/icons/icon-192x192.png">
</head>
    
<body class="theme-light">
    
<div id="preloader"><div class="spinner-border color-highlight" role="status"></div></div>
    
<div id="page">
    
    <div class="header header-fixed header-logo-left">
        <a href="index.php" class="header-title"><?php echo $_SESSION['username'];   ?></a>
        <a href="#" data-menu="menu-main" class="header-icon header-icon-1"><i class="fas fa-bars"></i></a>
        <a href="#" data-toggle-theme class="header-icon header-icon-3 show-on-theme-dark"><i class="fas fa-sun"></i></a>
        <a href="#" data-toggle-theme class="header-icon header-icon-3 show-on-theme-light"><i class="fas fa-moon"></i></a>
        <a href="#" data-menu="menu-share" class="header-icon header-icon-2"><i class="fas fa-share-alt"></i></a>
    </div>
    
    <div id="footer-bar" class="footer-bar-6">
        <a href="index-components.html"><i class="fa fa-layer-group"></i><span>Complains</span></a>
        <a href="index-pages.html"><i class="fa fa-file"></i><span>Pages</span></a>
        <a href="index.php" class="circle-nav active-nav"><i class="fa fa-home"></i><span>Welcome</span></a>
        <a href="index-projects.html"><i class="fa fa-camera"></i><span>Projects</span></a>
        <a href="#" data-menu="menu-main"><i class="fa fa-bars"></i><span>Menu</span></a>
    </div>
    
        
    <div class="page-content header-clear-medium">
        
        <div data-card-height="350" class="card card-style bg-6">
            <div class="card-top text-start">
                <h6 class="color-white mt-3 ms-3 font-12 font-400">Powered by</h6>
                <h6 class="color-white mt-3 ms-3 font-16 mt-n1">Enabled</h6>
            </div>
            <div class="card-center text-end pe-3 pt-4">
                <h1 class="color-white font-22 mb-0 opacity-50">Say Hello to</h1>
                <h1 class="color-white font-36 mb-5">AppKit</h1>
            </div>
            <div class="card-bottom text-start ps-3">
                <p class="color-white mb-3 opacity-70 line-height-s">
                    Bootstrap 4 Based<br>
                    Mobile Kit & PWA
                </p>
            </div>
            <div class="card-overlay bg-gradient opacity-60"></div>
        </div>
    
        <div class="card card-style p-4">
            <h6 class="text-center mb-0 color-highlight opacity-60">MEET APPKIT</h6>
            <h1 class="font-800 font-30 text-center line-height-xl">Elite Quality <br>Mobile Website</h1>
            <p class="font-16 opacity-80 text-center line-height-l">
                We create stunning Mobile Website and PWA's  so 
                your website feels like an app and runs as smooth as butter
            </p>
            <a href="#" class="btn btn-center-m btn-m gradient-blue rounded-s font-700 text-uppercase">Purchase Today</a>
        </div>
    
        <div data-card-height="200" class="card card-style bg-16">
            <div class="card-center text-end pe-3">
                <h1 class="color-white font-800 mb-0 font-20">Progressive</h1>
                <h1 class="color-white font-800 mt-n1 font-25">Web App</h1>
                <p class="opacity-70 font-12 mb-0">Bootstrap 4 + SCSS</p>
            </div>
            <div class="card-overlay bg-gradient"></div>
        </div>

        <div class="card card-style">
            <h6 class="text-center mb-0 color-highlight opacity-60 pt-4 font-14">AWESOME AND</h6>
            <h1 class="px-4 font-30 text-center line-height-xl font-700">Stunning<br>Mobile Interfaces</h1>
            <p class="px-4 font-16 opacity-80 text-center line-height-l">
                Our goal is to take your Desktop Website and turn it into an app with as little hassle as possible!
            </p>

            <div class="row mb-0 text-center">
                <div class="pe-0 col-6">
                    <i class="fa fa-home color-green-light mt-3 font-40"></i>
                    <h4 class="mt-3">PWA Ready</h4>
                    <p class="boxed-text-xl">
                        Enjoy AppKit from your Home Screen.
                    </p>
                </div>
                <div class="ps-0 col-6">
                    <i class="fa fa-lightbulb color-yellow-light mt-3 font-40"></i>
                    <h5 class="mt-3">Dark Mode</h5>
                    <p class="boxed-text-xl">
                        Turn off the Lights and Enjoy Dark Mode.
                    </p>
                </div>
                <a href="#" class="btn btn-center-l btn-m gradient-blue rounded-s font-700 text-uppercase mt-2 mb-4">Learn More</a>
            </div>
        </div>
        
        <div data-card-height="400" class="card card-style bg-1">
            <div class="card-top text-center pt-4">
                <h5 class="color-highlight">Built by Enabled</h5>
                <h1 class="color-white font-26">The Best Quality</h1>
                <h2 class="color-white mt-n1">Mobile Website Kits</h2>
            </div>
            <div class="card-bottom text-center">
                <p class="boxed-text-xl color-white">
                    Effortlessly Create Your Perfect Mobile Website.
                </p>
            </div>
            <div class="card-overlay bg-black opacity-40"></div>
        </div>
        
        <div class="card card-style p-4">
            <h6 class="text-center mb-0 color-highlight opacity-60">Get AppKit Today</h6>
            <h1 class="font-800 font-30 text-center line-height-xl">Available on <br>Envato Market</h1>
            <p class="font-16 opacity-80 text-center line-height-l">
                Create your next Mobile Project in a familiar programming language built by the best author in the nieche.
            </p>
            <a href="#" class="btn btn-center-m btn-m gradient-blue rounded-s font-700 text-uppercase">Get Appkit</a>
        </div>
        
        <div data-menu-load="menu-footer.html"></div>
    </div>
    <!-- Page content ends here-->
    
    <!-- Main Menu--> 
    <div id="menu-main" class="menu menu-box-left rounded-0" data-menu-load="menu-main.html" data-menu-width="280" data-menu-active="nav-homepages"></div>
    
    <!-- Share Menu-->
    <div id="menu-share" class="menu menu-box-bottom rounded-m" data-menu-load="menu-share.html" data-menu-height="370"></div>  
    
    <!-- Colors Menu-->
    <div id="menu-colors" class="menu menu-box-bottom rounded-m" data-menu-load="menu-colors.html" data-menu-height="480"></div> 
     
    
</div>

<script type="text/javascript" src="scripts/bootstrap.min.js"></script>
<script type="text/javascript" src="scripts/custom.js"></script>
</body>
