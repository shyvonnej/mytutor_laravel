<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
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
    @if (session('save'))
    <script> alert("Success"); </script>
    @endif
    @if (session('error')) <script> alert("Failed"); </script>
    @endif

    <body>
        <div class="w3-top">
            <div class="w3-bar w3-white w3-wide w3-padding w3-card">
                <!-- Float links to the right. Hide them on small screens -->
                <div class="w3-bar w3-white">
                    <a class="w3-bar-item w3-button w3-hide-small w3-right" href="{{ url('login') }}">Login</a>
                    <a class="w3-bar-item w3-button w3-hide-small w3-right" href="{{ url('registration') }}">Register</a>
                    <a href="javascript:void(0)" onClick="sideMenu()"
                        class="w3-bar-item w3-button w3-hide-large w3-hide-medium">&#9776</a>
                    <a href="{{ url('/') }}" class="w3-bar-item w3-button"><b>MYTutor</b></a>
                </div>

                <div id="idsidebar" class="w3-bar-block w3-white w3-hide-medium w3-hide-large w3-hide">
                    <a class="w3-bar-item w3-button" href="{{ url('registration') }}">Register</a>
                    <a class="w3-bar-item w3-button" href="{{ url('login') }}">Login</a>
                </div>
            </div>
        </div>
        
        <!-- Header -->
        <header class="w3-display-container w3-content" style="max-width:1400px;" id="home">
            <img class="w3-image"
                src="https://images.unsplash.com/photo-1656872626959-d40665207e18?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1332&q=80"
                alt="Homepage" style="width:1400px; height:200px;">
            <style>
                img {
                    filter: brightness(60%);
                }
            </style>
            <div class="w3-display-middle w3-margin-top w3-margin-left w3-center" style="max-width:1400px;">
                <h1 class="w3-xxxlarge w3-text-white"><span class=" w3-text-light-grey"><b>L O G I N</b></span></h1>
            </div>
        </header>
        <div style="display:flex; justify-content: center">
            <div class="w3-container w3-card w3-padding w3-margin" style="width:600px;margin:auto;text-align:left;">
            <form action="{{ route('login.post') }}" method="post" accept-charset="UTF-8">
                {{csrf_field()}}
                    <p><label><b>Email</b></label>
                        <input class="w3-input w3-round w3-border" type="email" name="email" id="idemail"
                            placeholder="Your email" required></p>
                    @if ($errors->has('email'))
                        <span class="w3-red">{{ $errors->first('email') }}</span>
                    @endif
                    <p><label><b>Password</b></label>
                        <input class="w3-input w3-round w3-border" type="password" name="password" id="idpass" 
                            placeholder="Your password" required></p>
                    @if ($errors->has('password'))
                        <span class="w3-red">{{ $errors->first('password') }}</span>
                    @endif
                    <p><input type="checkbox" name="remember"> Remember Me</p>
                    <p style="font-size:16px;"> Don't have an account? <a href="{{ url('registration') }}">Register</a></p>
                    <p><button class="w3-button w3-round w3-border w3-blue-gray" type="submit" name="submit">Login</button></p>
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