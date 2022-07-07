<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>MyTutor</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <!-- Styles -->
    <style>
        body {
            font-family: "Karma", serif
        }

        .w3-bar-block .w3-bar-item {
            padding: 20px
        }

        .row {
            display: flex;
            flex-wrap: wrap;
            padding: 0 4px;
        }

        /* Create four equal columns that sits next to each other */
        .column {
            flex: 25%;
            max-width: 25%;
            padding: 0 4px;
        }

        .column img {
            margin-top: 8px;
            vertical-align: middle;
            width: 100%;
        }

        /* Responsive layout - makes a two column-layout instead of four columns */
        @media  screen and (max-width: 800px) {
            .column {
                flex: 50%;
                max-width: 50%;
            }
        }

        /* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
        @media  screen and (max-width: 600px) {
            .column {
                flex: 100%;
                max-width: 100%;
            }
        }

        img {
            width: 200px;
            height: 300px;
            object-fit: cover;
        }
    </style>
</head>

<body class="antialiased">
    <div class="w3-top">
        <div class="w3-bar w3-white w3-wide w3-padding w3-card">
            <div class="w3-bar w3-white">
                <a class="w3-bar-item w3-button w3-hide-small w3-right" href="<?php echo e(url('login')); ?>">Logi</a>
                <a class="w3-bar-item w3-button w3-hide-small w3-right" href="<?php echo e(url('registration')); ?>">Register</a>
                <a href="javascript:void(0)" onClick="sideMenu()"
                    class="w3-bar-item w3-button w3-hide-large w3-hide-medium">&#9776</a>
                <a href="<?php echo e(url('/')); ?>" class="w3-bar-item w3-button"><b>MYTutor</b></a>
            </div>

            <div id="idsidebar" class="w3-bar-block w3-white w3-hide-medium w3-hide-large w3-hide">
                <a class="w3-bar-item w3-button" href="<?php echo e(url('registration')); ?>">Register</a>
                <a class="w3-bar-item w3-button" href="<?php echo e(url('login')); ?>">Login</a>
            </div>
        </div>
    </div>
    <!-- Header -->
    <header class="w3-display-container w3-content" style="max-width:1400px;" id="home">
        <img class="w3-image"
            src="https://images.unsplash.com/photo-1535905557558-afc4877a26fc?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80"
            alt="Homepage" style="width:1400px; height:400px;">
        <style>
            img {
                filter: brightness(60%);
            }
        </style>
        <div class="w3-display-middle w3-margin-top w3-margin-left w3-center" style="max-width:1400px;">
            <h1 class="w3-xxlarge w3-text-white"><span class=" w3-text-light-grey"><b>Dear Lecturers, Welcome to
                        MyTutor.</b></span></h1>
            <h1 class="w3-xlarge w3-text-white"><span class=" w3-text-light-grey">Partner up with us to build more
                    better generations,</span>
            </h1>
        </div>
    </header>

    <!-- !PAGE CONTENT! -->
    <div class="w3-main w3-content w3-padding w3-center" style="max-width:1500px;margin-top:30px">
        <h2><b>WHY CHOOSE US?</b></h2>

        <!-- First Photo Grid-->
        <div class="w3-row-padding w3-padding-16 w3-center" id="edu">
            <div class="w3-quarter">
                <img src="https://images.unsplash.com/photo-1656766481215-b1a60fd5433e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80"
                    alt="levels" style="width:310px;height:400px;">
                <h3><b>All Levels of Tutors</b></h3>
                <p>We welcome all tutors from different education levels.</p>
            </div>
            <div class="w3-quarter">
                <img src="https://images.unsplash.com/photo-1656790303004-b5a3bcb045b0?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80"
                    alt="greendeco2" style="width:310px;height:400px;">
                <h3><b>Worldwide Based</b></h3>
                <p>We highly welcome tutors to join us from all over the world.</p>
            </div>
            <div class="w3-quarter">
                <img src="https://images.unsplash.com/photo-1656776613739-9080764ac2fe?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1887&q=80"
                    alt="greendeco1" style="width:310px;height:400px;">
                <h3><b>Flexibility</b></h3>
                <p>All courses provided by the tutors can be flexible as long as it is within the period given.</p>
            </div>
            <div class="w3-quarter">
                <img src="https://images.unsplash.com/photo-1608099269227-82de5da1e4a8?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1885&q=80"
                    alt="Reg" style="width:310px;height:400px;">
                <h3><b>Free Register and Earn More</b></h3>
                <p>Registration is free for all tutors while you can earn with us.</p>
            </div>
        </div>

        <footer id="footer" ; class="w3-container w3-light-gray w3-center w3-margin-top">
            <p>Find me on social media.</p>
            <a href="https://web.facebook.com/shyvonnejinshii/"><i
                    class="fa fa-facebook-official w3-hover-opacity"></i></a>
            <a href="https://www.instagram.com/shylx__/?hl=en"><i class="fa fa-instagram w3-hover-opacity"></i></a>
            <a href="https://pin.it/7v3QqJ6"><i class="fa fa-pinterest-p w3-hover-opacity"></i></a>
            <a href="https://twitter.com/ShyvonneH"><i class="fa fa-twitter w3-hover-opacity"></i></a>
            <a href="https://www.linkedin.com/in/shyvonne-jinshi-016090189/"><i
                    class="fa fa-linkedin w3-hover-opacity"></i></a>
            <a href="https://www.youtube.com/channel/UC7hYxt1VSU6ptQ94-wH-y_g/about"><i
                    class="fa fa-youtube w3-hover-opacity"></i></a>
            <p>Design and Edited by</p>
            <p><b>Shyvonne Ho Yue Lynn 279733.</b></p>
        </footer>
  </body>
</html><?php /**PATH C:\Users\ASUS\Documents\WE\laravel\MyTutor\resources\views/main.blade.php ENDPATH**/ ?>