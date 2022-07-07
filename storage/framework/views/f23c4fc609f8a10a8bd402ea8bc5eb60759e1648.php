<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>
        
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
      <!-- Float links to the right. Hide them on small screens -->
      <div class="w3-bar w3-white">
        <a class="w3-bar-item w3-button w3-hide-small w3-right" href="<?php echo e(url('login')); ?>">Login</a>
        <a class="w3-bar-item w3-button w3-hide-small w3-right" href="<?php echo e(url('register')); ?>">Register</a>
        <a href="javascript:void(0)" onClick="sideMenu()"
          class="w3-bar-item w3-button w3-hide-large w3-hide-medium">&#9776</a>
          <a href="" class="w3-bar-item w3-button"><b>MYTutor</b></a>
      </div>

      <div id="idsidebar" class="w3-bar-block w3-white w3-hide-medium w3-hide-large w3-hide">
        <a class="w3-bar-item w3-button" href="<?php echo e(url('register')); ?>">Register</a>
        <a class="w3-bar-item w3-button" href="<?php echo e(url('login')); ?>">Login</a>
      </div>
    </div>
  </div>
  <!-- Header -->
  <header class="w3-display-container w3-content" style="max-width:1400px;" id="home">
    <img class="w3-image" src="https://images.unsplash.com/photo-1535905557558-afc4877a26fc?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80" alt="Homepage" style="width:1400px; height:400px;">
    <style>
      img {
        filter: brightness(60%);
      }
    </style>
    <div class="w3-display-middle w3-margin-top w3-margin-left w3-center" style="max-width:1400px;">
      <h1 class="w3-xxlarge w3-text-white"><span class=" w3-text-light-grey"><b>Dear Lecturers, Welcome to MyTutor.</b></span></h1>
      <h1 class="w3-xlarge w3-text-white"><span class=" w3-text-light-grey">Partner up with us to build more better generations,</span>
      </h1>
    </div>
  </header>

  <!-- !PAGE CONTENT! -->
  <div class="w3-main w3-content w3-padding w3-center" style="max-width:1500px;margin-top:30px">
    <h2><b>WHY CHOOSE US?</b></h2>

    <!-- First Photo Grid-->
    <div class="w3-row-padding w3-padding-16 w3-center" id="edu">
      <div class="w3-quarter">
        <img
          src="https://images.unsplash.com/photo-1656766481215-b1a60fd5433e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80"
          alt="levels" style="width:310px;height:400px;">
        <h3><b>All Levels of Tutors</b></h3>
        <p>We welcome all tutors from different education levels.</p>
      </div>
      <div class="w3-quarter">
        <img
          src="https://images.unsplash.com/photo-1656790303004-b5a3bcb045b0?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80"
          alt="greendeco2" style="width:310px;height:400px;">
        <h3><b>Worldwide Based</b></h3>
        <p>We highly welcome tutors to join us from all over the world.</p>
      </div>
      <div class="w3-quarter">
        <img
          src="https://images.unsplash.com/photo-1656776613739-9080764ac2fe?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1887&q=80"
          alt="greendeco1" style="width:310px;height:400px;">
        <h3><b>Flexibility</b></h3>
        <p>All courses provided by the tutors can be flexible as long as it is within the period given.</p>
      </div>
      <div class="w3-quarter">
        <img
          src="https://images.unsplash.com/photo-1608099269227-82de5da1e4a8?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1885&q=80"
          alt="Reg" style="width:310px;height:400px;">
        <h3><b>Free Register and Earn More</b></h3>
        <p>Registration is free for all tutors while you can earn with us.</p>
      </div>
    </div>

    <footer id="footer" ; class="w3-container w3-light-gray w3-center w3-margin-top">
      <p>Find me on social media.</p>
      <a href="https://web.facebook.com/shyvonnejinshii/"><i class="fa fa-facebook-official w3-hover-opacity"></i></a>
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
</html>
<?php /**PATH C:\Users\ASUS\Documents\WE\laravel\MyTutor\resources\views/welcome.blade.php ENDPATH**/ ?>