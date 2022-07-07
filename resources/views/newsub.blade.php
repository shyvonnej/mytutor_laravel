<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Subject</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

    <title>MainPage</title>
    <style> 
        body, h1, h2, h3, h4, h5, h6 {
        font-family: "Karma", serif
            }

        img {
            width: 200px;
            height: 300px;
            object-fit: cover;
        }
    </style>
    <body>
    <div class="w3-top">
        <div class="w3-bar w3-white w3-wide w3-padding w3-card">
            <!-- Float links to the right. Hide them on small screens -->
            <div class="w3-bar w3-white">
                <a class="w3-bar-item w3-button w3-hide-small w3-right" href="{{ url('logout') }}">Logout</a>
                <a class="w3-bar-item w3-button w3-hide-small w3-right" href="">Profile</a>
                <a class="w3-bar-item w3-button w3-hide-small w3-right" href="{{ url('newsub') }}">Register Subject</a>
                <a href="javascript:void(0)" onClick="sideMenu()"
                    class="w3-bar-item w3-button w3-hide-large w3-hide-medium">&#9776</a>
                    <a href="{{ url('mainpage') }}" class="w3-bar-item w3-button"><b>MYTutor</b></a>
            </div>

            <div id="idsidebar" class="w3-bar-block w3-white w3-hide-medium w3-hide-large w3-hide">
                <a class="w3-bar-item w3-button" href="{{ url('logout') }}">Logout</a>
                <a class="w3-bar-item w3-button" href="{{ url('newsub') }}">Register Subject</a>
                <a class="w3-bar-item w3-button" href="">Profile</a>
            </div>
        </div>
    </div>

    <!-- Header -->
    <header class="w3-display-container w3-content" style="max-width:1400px;" id="home">
        <img class="w3-image"
            src="https://images.unsplash.com/photo-1656998019079-a7f9182c12be?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1332&q=80"
            alt="Homepage" style="width:1400px; height:300px;">
        <style>
            img {
                filter: brightness(60%);
            }
        </style>
        <div class="w3-display-middle w3-margin-top w3-margin-left w3-center" style="max-width:1400px;">
            <h2 class="w3-xxxlarge w3-text-white"><span class=" w3-text-light-grey"><b>REGISTER</b></span></h2>
            <h2 class="w3-xxxlarge w3-text-white"><span class=" w3-text-light-grey"><b>SUBJECT</b></span></h2>
        </div>
    </header>

    <!-- !PAGE CONTENT! -->
    <div class="w3-main w3-content w3-padding w3-center" style="max-width:1500px;margin-top:30px">
        <div style="display:flex; justify-content: center">
            <div class="w3-container w3-card w3-padding w3-margin" style="width:600px;margin:auto;text-align:left;">
                <form name="regForm" action="{{ route('savesubject') }}" method="post">
                {{csrf_field()}}
                    <p><input class="w3-input w3-round w3-border" type="text" name="subtitle" placeholder="Title"></p>
                    <p><input class="w3-input w3-round w3-border" type="text" name="subdesc" placeholder="Description"></p>
                    <p><input class="w3-input w3-round w3-border" type="text" name="subprice" placeholder="Price" step="any"></p>
                    <p><input class="w3-input w3-round w3-border" type="number" name="subhours" placeholder="Learning Hours"></p>
                    </textarea></p>
                    <button class="w3-button w3-blue-gray w3-round w3-right" type="submit">Register</button>
                </form>
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
</html>