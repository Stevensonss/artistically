<?php
    //Inclure le fichier de configuration
    include '../back/config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artistically</title>

    <link rel="stylesheet" href="/front/css/style.css">
    <script type="text/JavaScript" async defer src="/front/js/script.js"></script>
</head>
<body>

    <nav class="">
        <div class="nav-mobile">
            <div class="nav-mobile-layout">
                <ul>
                    <li><a href="#about">About</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <li><a href="#credit">Cr&eacute;dits</a></li>
                    <li class="go"><a href="#start">Start</a></li>
                </ul>
            </div>
            <div class="nav-toggle">
                <div class=""></div>
                <div class=""></div>
                <div class=""></div>
            </div>
            <div class="logo-mobile"><img style="height:33px; transform: translateX(-15px);" src="/media/svg/logo.svg" alt="logo-Artistically"></a></div>
        </div>

        <div>
            <div class="nav">
                <ul>
                    <li><a href="#about">About</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <li><a href="#credit">Cr&eacute;dits</a></li>
                    <li class="go"><a href="#start">Start</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="header">

        <!--Content before waves-->
        <div class="inner-header slow-scroll flex">
            <h1><img style="width:100%; transform: translateY(100%);" src="/media/svg/logoblanc.svg" alt="logo-Artistically"></h1>
        </div>

        <!--Waves Container-->
        <div>
            <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
            viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
            <defs>
            <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
            </defs>
            <g class="parallax">
            <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.7" />
            <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.5)" />
            <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.3)" />
            <use xlink:href="#gentle-wave" x="48" y="7" fill="#fff" />
            </g>
            </svg>
        </div>
        <!--Waves end-->

    </div>
    <!--Header ends-->

    <!--Content starts-->
    <div class="content flex">
    <h1>Welcome</h2>
    </div>
    <div class="page">Hello World !</div>
    <!--Content ends-->
    
    
   
</body>
</html>